@extends('layout.index')

@section('title', 'Daftar Rombel - ' . $game['title'])

@section('content')

<div class="content-with-sidebar sidebar-round">
    <div class="sidebar">
        <div class="sidebar-header">
            <h4>Daftar Ronde Babak {{ $stage['order'] }}</h4>
            <div class="sidebar-header-action">
                <a href="#" class="text-decoration-none btn-sidebar-close"><i class="kejar-close"></i></a>
            </div>
        </div>
        <div class="sidebar-content custom-scroll">
            <div class="sidebar-menu">
                @foreach ($rounds as $RS)
                    <a href="?round={{ $RS['id'] }}" class="sidebar-menu-item {{ $RS['id'] === request()->round ? 'active' : '' }}">
                        Ronde {{ $RS['order'] }}&colon; {{ $RS['title'] }}</a>
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="container-with-sidebar">
        <div class="button-flex-group">
            <div>
                <!-- Link Back -->
                <a class="btn-back" href="{{ url('/teacher/games/' . $game['uri'] . '/stages/' . $stage['id']) }}?class={{ request()->class }}">
                    <i class="kejar-back"></i>Kembali
                </a>
            </div>
        </div>
        <!-- Breadcrumb -->
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="{{ url('/teacher/games') }}">Beranda</a>
            <a class="breadcrumb-item" href="{{ url('/teacher/games/' . $game['uri'] . '/stages') }}">{{ $game['short'] }}</a>
            <a class="breadcrumb-item" href="{{ url('/teacher/games/' . $game['uri'] . '/stages/' . $stage['id']) }}?class={{ request()->class }}">Babak {{ $stage['order'] }}</a>
            <span class="breadcrumb-item active">Ronde {{ $round['order'] }}</span>
        </nav>
        <!-- Title -->
        <div class="page-title">
            <h2>{{ $round['title'] }}</h2>
        </div>

        <div>
            <div class="kejar-desc-group">
                <div class="kejar-desc">
                    <h5>Banyaknya Soal</h5>
                    <p>{{ $round['total_question'] }} Butir Soal <img src="{{ asset('assets/images/icons/dot.svg') }}" alt="" class="dot-svg"> {{ $round['question_timespan'] }} detik/soal</p>
                </div>
                <div class="kejar-desc">
                    <h5>Materi</h5>
                    <div class="editor-display">
                        {!! $round['description'] !!}
                    </div>
                </div>
                <div class="kejar-desc-box">
                    <div class="editor-display">
                        {!! $round['material'] !!}
                    </div>
                </div>
            </div>

            @switch ($game['uri'])

            @case('obr')
                <div class="kejar-question-list-group kejar-obr-question">
                    <h5 class="kejar-question-list-title">Beberapa soal yang ditampilkan</h5>
                    <div class="table-responsive">
                        <table class="table table-kejar">
                            <thead>
                                <tr>
                                    <th class="w-50">Soal</th>
                                    <th class="w-50">Jawaban</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($questions as $question)
                                <tr>
                                    <td>{{ $question['question'] }}</td>
                                    <td>{{ $question['answer'] }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="text-center">Belum ada soal</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @break

            @case('katabaku')
                <div class="kejar-question-list-group kejar-katabaku-question">
                    <h5 class="kejar-question-list-title">Daftar Soal</h5>

                    <div class="table-responsive">
                        <table class="table table-kejar">
                            <thead>
                                <tr>
                                    <th class="w-50">Soal</th>
                                    <th class="w-50">Jawaban</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($questions as $question)
                                <tr>
                                    <td>{{ $question['question'] }}</td>
                                    <td>{{ $question['answer'] }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="text-center">Belum ada soal</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @break

            @case('vocabulary')
                <div class="kejar-question-list-group kejar-vocabulary-question">
                    <h5 class="kejar-question-list-title">Daftar Soal</h5>

                    <div class="table-responsive">
                        <table class="table table-kejar">
                            <thead>
                                <tr>
                                    <th class="w-50">Soal</th>
                                    <th class="w-50">Jawaban</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($questions as $question)
                                <tr>
                                    <td>{{ $question['question'] }}</td>
                                    <td>{{ $question['answer'] }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="text-center">Belum ada soal</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @break

            @case('toeicwords')
                <div class="kejar-question-list-group kejar-toeicwords-question">
                    <h5 class="kejar-question-list-title">Daftar Soal</h5>

                    <div class="table-responsive">
                        <table class="table table-kejar">
                            <thead>
                                <tr>
                                    <th class="w-50">Meaning</th>
                                    <th class="w-50">Word</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($questions as $question)
                                <tr>
                                    <td>{{ $question['question'] }}</td>
                                    <td>{{ $question['answer'] }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="text-center">Belum ada soal</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @break

            @case('menulisefektif')
                <div class="kejar-question-list-group kejar-toeicwords-question">
                    <h5 class="kejar-question-list-title">Daftar Soal</h5>
                    @foreach ($questions as $key => $question)
                        @php
                            $no = (((request()->page ?? 1) * 20) - 20) + $key + 1;
                        @endphp

                        @if ($question['type'] === 'QSAT')
                            @include('shared.questionlist._isian_bahasa')
                        @elseif ($question['type'] === 'MCQSA')
                            @include('shared.questionlist._pilihan_ganda')
                        @elseif ($question['type'] === 'YNQMA')
                            @include('shared.questionlist._ya_tidak')
                        @elseif ($question['type'] === 'TFQMA')
                            @include('shared.questionlist._benar_salah')
                        @elseif ($question['type'] === 'CQ')
                            @include('shared.questionlist._menceklis_daftar')
                        @endif
                    @endforeach
                </div>

                @break

            @default

            @endswitch

            <div class="page-pagination">
                <div class="pagination-text">
                    @php
                    $from = $roundQuestions['meta']['from'];
                    @endphp
                    {{ $from }} dari {{ $roundQuestions['meta']['total'] }} soal
                </div>

                <div class="pagination-buttons">
                    <ul class="pagination">
                        <li class="page-item {{ request()->page - 1 < 1 ? 'disabled' : '' }}">
                            <a href="?page={{ request()->page - 1 }}&round={{ request()->round }}" class="page-link" tabindex="-1">
                                <i class="kejar-left"></i>
                            </a>
                        </li>
                        @php
                            $current_page = $roundQuestions['meta']['current_page'] - 2 < 2 ? 1 : ($roundQuestions['meta']['current_page'] - 2);
                            $end = ($roundQuestions['meta']['current_page'] + 2) > $roundQuestions['meta']['last_page'] ? $roundQuestions['meta']['last_page'] : ($roundQuestions['meta']['current_page'] + 2);
                        @endphp
                        @for ($i = $current_page; $i <= $end ; $i++)
                        <li class="page-item {{ (request()->page ?? 1) == $i ? 'active disabled' : '' }}">
                            <a href="?page={{ $i }}&round={{ request()->round }}" class="page-link">{{ $i }}</a>
                        </li>
                        @endfor
                        <li class="page-item {{ request()->page + 1 > 5 ? 'disabled' : '' }}">
                            <a href="?page={{ request()->page + 1 }}&round={{ request()->round }}" class="page-link" tabindex="-1">
                                <i class="kejar-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('script')
<script>
    $('.page-title').on('click', function(e) {
        $('.sidebar').css('display', 'block');
    });

    $('.btn-sidebar-close').on('click', function(e) {
        $('.sidebar').css('display', 'none');
    });
</script>
@endpush