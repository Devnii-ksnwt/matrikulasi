<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Services\Batch as BatchApi;
use App\Services\Game;
use App\Services\Question;
use App\Services\Report as ReportApi;
use App\Services\Round as RondeApi;
use App\Services\RoundQuestion;
use App\Services\Stage as StageApi;
use App\Services\Student;
use App\Services\StudentGroup as StudentApi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RoundController extends Controller
{

    public function showRound($game, $stageId)
    {
        $gameApi = new Game;
        $stageApi = new StageApi;
        $roundApi = new RondeApi;

        $game = $gameApi->parse($game);
        $stage = $stageApi->getDetail(strtolower($game['uri']), $stageId)['data'] ?? [];

        $filter = [
            'filter[stage_id]' => $stageId,
        ];
        $rounds = $roundApi->index($filter)['data'] ?? [];
        usort($rounds, fn ($a, $b) => $a['order'] <=> $b['order']);

        if (!request()->round) {
            request()->round = $rounds[0]['id'];
        }

        $round = $roundApi->getDetail(request()->round)['data'] ?? [];

        $questions = [];
        if (request()->round) {
            $roundQuestionApi = new RoundQuestion;
            $roundQuestions = $roundQuestionApi->getAll(request()->round, request()->page ?? 1);

            $questionApi = new Question;
            foreach ($roundQuestions['data'] as $RQ) {
                $questions[] = $questionApi->getDetail($RQ['question_id'])['data'];
            }

            $round = $roundApi->getDetail(request()->round)['data'] ?? [];
        }

        return view(
            'teacher.rounds.rounds',
            compact('game', 'stage', 'rounds', 'round', 'roundQuestions', 'questions'),
        );
    }

    public function showStudent($game, $stageId, $studentId)
    {
        $gameApi = new Game;
        $stageApi = new StageApi;
        $studentApi = new Student;

        $game = $gameApi->parse($game);
        $stage = $stageApi->getDetail(strtoupper($game['uri']), $stageId)['data'] ?? [];

        $student = $studentApi->detail($studentId)['data'] ?? [];
        
        return view('teacher.students.show', compact('game', 'stage', 'student'));
    }

    public function index(Request $request, $game, $batchId, $studentGroupId, $stageId)
    {
        $batchId;
        $reportApi = new ReportApi;
        $students = $reportApi->roundReport($studentGroupId, $stageId, $request->page ?? 1);
        $gameFilter = [
            'filter[game]' => strtoupper($game),
        ];
        $stageData = $reportApi->stageReport($studentGroupId, $gameFilter)['data'][0]['progress'];

        $stageApi = new StageApi;
        $stageDetailResponse = $stageApi->getDetail(strtoupper($game), $stageId);
        $stage = $stageDetailResponse['data'] ?? [];

        $gameService = new Game;
        $game = $gameService->parse($game);

        $schoolId = session('user')['userable']['school_id'];
        $entryYear = Carbon::now()->year . '/' . Carbon::now()->add(1, 'year')->year;
        $batchApi = new BatchApi;
        $batchFilter = [
            'filter[entry_year]' => $entryYear,
        ];
        $batchResponse = $batchApi->index($schoolId, $batchFilter);
        $batchId = $batchResponse['data'][0]['id'];

        $studentGroupApi = new StudentApi;
        $classResponse = $studentGroupApi->index($schoolId, $batchId);
        $classData = $classResponse['data'] ?? [];
        $classGrade = ['10', '11', '12'];
        $classGroup = [];
        $classList = [];
        $classThis = [];
        $thisGrade = '';
        $number = 0;
        $index = 0;

        if (count($classData) !== 0) {
            $thisYear = date('Y');
            foreach ($classData as $data) {
                $thisClassGrade = '1'.($thisYear - substr($data['school_year'], 0, 4));
                if ($thisClassGrade === $classGrade[0]) {
                    $classList[$number] = [
                        'class_id' => $data['id'],
                        'class_batch_id' => $data['batch_id'],
                        'class_grade' => $classGrade[0],
                        'class_name' => $data['name'],
                        'class_school_year' => $data['school_year'],
                    ];
                    $number += 1;
                } elseif ($thisClassGrade === $classGrade[1]) {
                    $classList[$number] = [
                        'class_id' => $data['id'],
                        'class_batch_id' => $data['batch_id'],
                        'class_grade' => $classGrade[1],
                        'class_name' => $data['name'],
                        'class_school_year' => $data['school_year'],
                    ];
                    $number += 1;
                } else {
                    $classList[$number] = [
                        'class_id' => $data['id'],
                        'class_batch_id' => $data['batch_id'],
                        'class_grade' => $classGrade[2],
                        'class_name' => $data['name'],
                        'class_school_year' => $data['school_year'],
                    ];
                    $number += 1;
                }
            }

            $order = [];
            foreach ($classList as $key => $row) {
                $order[$key] = $row['class_name'];
            }

            array_multisort($order, SORT_ASC, $classList);

            foreach ($classData as $class) {
                if ($class['id'] === $studentGroupId) {
                    $classThis = $class;
                }
            }

            $thisGrade ='1'.($thisYear - substr($classThis['school_year'], 0, 4));
            if ($thisYear < substr($classThis['school_year'], 0, 4)) {
                $thisGrade = '12';
            }

            foreach ($classList as $class) {
                if ($class['class_grade'] === $thisGrade) {
                    $classGroup[] = $class;
                }
            }

            foreach ($stageData as $key => $value) {
                if ($value['stage_id'] === $stage['id']) {
                    $index = $key;

                    break;
                }
            }
        }

        $thisClass = [];
        $thisClass[0] = $thisGrade;
        $thisClass[1] = $classThis;

        $before = $stageData[$index - 1] ?? null;
        $current = $stageData[$index] ?? null;
        $after = $stageData[$index + 1] ?? null;
        $pages = [$before, $current, $after];

        return view('teacher/rounds/index', compact(
            'game',
            'batchId',
            'pages',
            'stage',
            'students',
            'thisClass',
            'classGroup',
        ));
    }

    public function modal($game, $batchId, $studentGroupId, $studentId)
    {
        $batchId;

        $reportStageApi = new ReportApi;
        $game = strtoupper($game);
        $gameFilter = [
            'filter[game]' => $game,
        ];
        $studentStageData = $reportStageApi->stageReport($studentGroupId, $gameFilter)['data'];
        $student = [];

        foreach ($studentStageData as $data) {
            if ($data['id'] === $studentId) {
                $student = $data;
            }
        }

        return response()->json(['student' => $student]);
    }

    public function description($game, $batchId, $studentGroupId, $stageId, $roundId)
    {
        $batchId;
        $studentGroupId;
        $gameService = new Game;
        $game = $gameService->parse($game);
        $stageApi = new StageApi;
        $stage = $stageApi->getDetail(strtoupper($game['uri']), $stageId)['data'] ?? [];
        $roundApi = new RondeApi;
        $round = $roundApi->getDetail($roundId)['data'] ?? [];

        return view('teacher/rounds/_detail_round', compact('stage', 'round', 'game'));
    }
}
