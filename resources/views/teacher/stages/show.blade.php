@extends('layout.index')

@section('title', 'Babak ' . $stage['order'] . ' - ' . $stage['title'])

@section('content')

<div class="content-with-sidebar">
    <div class="sidebar">
        <div class="sidebar-header">
            <h4>Daftar Rombel</h4>
            <div class="sidebar-header-action">
                <a href="#" class="text-decoration-none btn-sidebar-close"><i class="kejar-close"></i></a>
            </div>
        </div>
        <div class="sidebar-content custom-scroll">
            <div class="sidebar-menu">
            </div>
        </div>
    </div>
    
    <div class="container-with-sidebar">
        <div class="button-flex-group">
            <div>
                <!-- Link Back -->
                <a class="btn-back" href="{{ url('/teacher/games/' . $game['uri'] . '/stages') }}">
                    <i class="kejar-back"></i>Kembali
                </a>
            </div>
            <div class="button-flex-group-right">
                @if ($prevStage)
                <a href="{{ url('teacher/games/' . $game['uri'] . '/stages/' . $prevStage['id']) }}?class={{ request()->class }}" class="btn-kejar-shift">
                    <i class="kejar-arrow-left"></i> Babak {{ $prevStage['order'] }}
                </a>
                @endif

                @if ($nextStage)
                <a href="{{ url('teacher/games/' . $game['uri'] . '/stages/' . $nextStage['id']) }}?class={{ request()->class }}" class="btn-kejar-shift">
                    Babak {{ $nextStage['order'] }} <i class="kejar-arrow-right"></i>
                </a>
                @endif
            </div>
        </div>
        <!-- Breadcrumb -->
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="{{ url('/teacher/games') }}">Beranda</a>
            <a class="breadcrumb-item" href="{{ url('/teacher/games/' . $game['uri'] . '/stages') }}">{{ $game['short'] }}</a>
            <span class="breadcrumb-item active">Babak {{ $stage['order'] }}</span>
        </nav>
        <!-- Title -->
        <div class="page-title">
            <h2>{{ $stage['title'] }}</h2>
        </div>
    
        @if (!request()->class)
        <div class="empty-class">
            <div class="blank-message">
                <img src="{{ asset('/assets/images/blank/laptop.png') }}" alt="blank">
                <p>Pilih rombel untuk menampilkan nilai atau klik tombol di bawah untuk melihat ronde dan materinya.</p>
            </div>

            <div class="text-center">
                <a href="{{ url('/teacher/games/' . $game['uri'] . '/stages/' . $stage['id'] . '/rounds') }}" class="btn-kejar-light">Lihat Ronde</a>
            </div>
        </div>

        @else
        <div class="unempty-class">
            <div class="alert-kejar">
                <div class="alert-card-icon">
                    <i class="kejar-info"></i>
                </div>
                <div class="alert-card-message">
                    <p>Nomor 1 sampai {{ count($students[0]['progress']) }} yang tertera merupakan judul ronde. Klik nomor ronde untuk melihat materi dan soal setiap ronde. Nilai yang ditampilkan adalah nilai tertinggi yang pernah diraih siswa untuk setiap ronde. Klik nama siswa untuk melihat daftar aktivitas siswa. </p>
                </div>
                <div class="alert-card-close">
                    <a href="#" class="btn-alert-card-close"><i class="kejar-close"></i></a>
                </div>
            </div>

            <div class="score-list">
                <div class="table-responsive custom-scroll">
                    <table class="table table-kejar">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIS</th>
                                @foreach ($students[0]['progress'] as $round)
                                <th>
                                    <a href="{{ url('teacher/games/' . $game['uri'] . '/stages/' . $stage['id'] . '/rounds') }}?round={{$round['round_id']}}&class={{ request()->class }}" class="link-open">
                                        {{ $round['round_order'] }}
                                        <img src="{{ asset('assets/images/icons/open.svg') }}" alt="" class="w-25">
                                    </a>
                                </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $key => $student)
                            <tr>
                                <td>
                                    <span class="nobreak">
                                        {{ $student['name'] }}
                                    </span>
                                </td>
                                <td>{{ $student['nis'] }}</td>
                                @foreach ($student['progress'] as $progress)
                                <td class="text-right">
                                    {{ $progress['score'] ?? '0.00' }}
                                </td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif

    </div>
</div>


@endsection

@push('script')
<script>
    
    function getClasses() {
        $.ajax({
            type: "GET",
            url: "{{ url('teacher/api/classes') }}?class={{ request()->class }}",
            dataType: "JSON",
            beforeSend: function() {
                var loading = `<div class="mt-2 alert alert-primary">
                    <div class="d-flex align-items-center">
                        <div class="spinner spinner-border spinner-border-sm text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <h6 class="ml-2">Mengambil data rombel.</h6>
                    </div>
                </div>`;
                $('.sidebar-menu').html(loading);
            },
            success: function (response) {
                var html = '';
                var beforeGrade = '';
                response.data.forEach((val, ind) => {
                    if (val.grade !== beforeGrade) {
                        beforeGrade = val.grade;
                        html += `<div class="sidebar-menu-title">
                                    KELAS ${val.grade}
                                </div>`;
                    }
                    html += `<a href="?class=${val.id}" class="sidebar-menu-item ${ val.class }">${ val.name }</a>`;
                });

                $('.sidebar-menu').html(html);
            },
            error: function() {
                var error = `<div class="alert alert-danger">
                    <p>Data gagal di dapatkan.</p>
                    <button id="retry-button" class="btn btn-primary mt-2">Coba Lagi</button>
                </div>`;

                $('.sidebar-menu').html(error);

                $("#retry-button").on('click', function() {
                    getClasses();
                });
            }
        });
    }
    getClasses();

    $('.page-title').on('click', function(e) {
        $('.sidebar').css('display', 'block');
    });

    $('.btn-sidebar-close').on('click', function(e) {
        $('.sidebar').css('display', 'none');
    });

    $('.btn-alert-card-close').on('click', function() {
        $(this).parents('.alert-kejar').css('display', 'none');
    });
</script>
@endpush