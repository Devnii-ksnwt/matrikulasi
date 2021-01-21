<?php

namespace App\Services;

use Carbon\Carbon;

class AcademicCalendar
{
    public function currentAcademicYear($useDash = false)
    {
        $current = Carbon::now()->format('Y');
        $next = Carbon::now()->addYears(1)->format('Y');

        if ($this->shouldNotChangeYear()) {
            $current = Carbon::now()->subYears(1)->format('Y');
            $next = Carbon::now()->format('Y');
        }

        $value = "$current/$next";

        if ($useDash) {
            $value = str_replace('/', '-', $value);
        }

        return $value;
    }

    public function nextAcademicYear($useDash = false)
    {
        $current = Carbon::now()->addYears(1)->format('Y');
        $next = Carbon::now()->addYears(2)->format('Y');

        if ($this->shouldNotChangeYear()) {
            $current = Carbon::now()->format('Y');
            $next = Carbon::now()->addYears(1)->format('Y');
        }

        $value = "$current/$next";

        if ($useDash) {
            $value = str_replace('/', '-', $value);
        }

        return $value;
    }

    private function shouldNotChangeYear()
    {
        $currDate = Carbon::now();

        $nextDate = Carbon::now();
        $nextDate->setDay(19);
        $nextDate->setMonth(6);

        return $currDate <= $nextDate;
    }

    public function academicYearByGrade($grade)
    {
        $currDate = Carbon::now();

        $nextDate = Carbon::now();
        $nextDate->setDay(19);
        $nextDate->setMonth(6);

        $yearNow = Carbon::now()->year;

        if ($currDate <= $nextDate) {
            $yearNow -= 1;
        }

        $year = [
            '10' => $yearNow . '/' . ($yearNow + 1),
            '11' => ($yearNow - 1) . '/' . $yearNow,
            '12' => ($yearNow - 2) . '/' . ($yearNow - 1),
        ];

        return $year[$grade];
    }
}
