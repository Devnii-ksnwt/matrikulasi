@extends('layout.index')

@section('title', 'Daftar Rombel - ' . $game['title'])

@section('content')

<div class="container">
    <!-- Link Back -->
    <a class="btn-back" href="{{ url('/teacher/games') }}">
        <i class="kejar-back"></i>Kembali
    </a>
    <!-- Breadcrumb -->
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/teacher/games') }}">Beranda</a>
        <a class="breadcrumb-item" href="{{ url('/teacher/games/' . $game['uri'] . '/stages') }}">{{ $game['short'] }}</a>
        <a class="breadcrumb-item" href="{{ url('/teacher/games/' . $game['uri'] . '/stages/' . $stage['id']) }}?class={{ request()->class }}">Babak {{ $stage['order'] }}</a>
        <span class="breadcrumb-item active">{{ $student['name'] }}</span>
    </nav>
    <!-- Title -->
    <div class="page-title">
        <h2>{{ $student['name'] }}</h2>
    </div>

    <div class="alert-kejar alert-kejar-no-close">
        <div class="alert-card-icon">
            <i class="kejar-info"></i>
        </div>
        <div class="alert-card-message">
            <p>Aktivitas yang ditampilkan adalah 3 (tiga) aktivitas terakhir.</p>
        </div>
    </div>

    <div class="src-card">
        <div class="src-header">
            <h5>Ronde 1: Ini adalah judul Ronde Pertama</h5>
        </div>
        <div class="src-group">
            <div class="src-item">
                <div class="src-date">
                    <p>9 Januari 2021, 08:03</p>
                </div>
                <div class="src-score">
                    <h5>80</h5>
                    <div class="stars-group">
                        <img src="{{ asset('assets/images/icons/star-bold.svg') }}" alt="">
                        <img src="{{ asset('assets/images/icons/star.svg') }}" alt="">
                        <img src="{{ asset('assets/images/icons/star.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="src-item">
                <div class="src-date">
                    <p>9 Januari 2021, 08:03</p>
                </div>
                <div class="src-score">
                    <h5>80</h5>
                    <div class="stars-group">
                        <img src="{{ asset('assets/images/icons/star-bold.svg') }}" alt="">
                        <img src="{{ asset('assets/images/icons/star.svg') }}" alt="">
                        <img src="{{ asset('assets/images/icons/star.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="src-card">
        <div class="src-header">
            <h5>Ronde 2: Ini adalah judul Ronde Kedua</h5>
        </div>
        <div class="src-group">
            <div class="src-item">
                <div class="src-date">
                    <p>9 Januari 2021, 08:03</p>
                </div>
                <div class="src-score">
                    <h5>100</h5>
                    <div class="stars-group">
                        <img src="{{ asset('assets/images/icons/star-bold.svg') }}" alt="">
                        <img src="{{ asset('assets/images/icons/star-bold.svg') }}" alt="">
                        <img src="{{ asset('assets/images/icons/star-bold.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="src-item">
                <div class="src-date">
                    <p>9 Januari 2021, 08:03</p>
                </div>
                <div class="src-score">
                    <h5>90</h5>
                    <div class="stars-group">
                        <img src="{{ asset('assets/images/icons/star-bold.svg') }}" alt="">
                        <img src="{{ asset('assets/images/icons/star-bold.svg') }}" alt="">
                        <img src="{{ asset('assets/images/icons/star.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="src-card">
        <div class="src-header">
            <h5>Ronde 3: Ini adalah judul Ronde Kedua</h5>
        </div>
        <div class="src-group">
            <div class="src-item">
                <div class="src-nodata">
                    <h5>Belum mengerjakan</h5>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection