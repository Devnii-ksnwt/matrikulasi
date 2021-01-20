<div class="mt-4">
    <div>
        <a href="{{ URL('teacher/subject-teacher/'.$assessmentGroupId.'/subject/'.$subject['id'].'/'.$grade.'/assessment/status-task/Undone') }}" class="text-black-1 text-decoration-none">
            <div class="w-100 bg-grey-15 mb-4 px-4 py-3">
                <i class="kejar-rombel"></i> Siswa Belum Mengerjakan (Semua Rombel)
            </div>
        </a>
    </div>
    @foreach($studentGroup as $data)
        <div>
            <a href="{{ URL('teacher/subject-teacher/'.$assessmentGroupId.'/subject/'.$subject['id'].'/'.$grade.'/assessment/student-group/'.$data['id'].'/score') }}" class="text-black-1 text-decoration-none">
                <div class="w-100 bg-grey-15 mb-4 px-4 py-3">
                    <i class="kejar-rombel"></i> Rombel {{$data['name']}}
                </div>
            </a>
        </div>
    @endforeach
</div>
