@extends('layout.index')

@section('title', 'Daftar Babak - ' . $game['title'])

@section('content')

<div class="container">
    <!-- Link Back -->
    <a class="btn-back" href="{{ url('/teacher/games') }}">
        <i class="kejar-back"></i>Kembali
    </a>
    <!-- Breadcrumb -->
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{ url('/teacher/games') }}">Beranda</a>
        <span class="breadcrumb-item active">{{ $game['short'] }}</span>
    </nav>
    <!-- Title -->
    <div class="page-title">
        <h2>{{ $game['title'] }}</h2>
    </div>

    <div class="page-pagination">
        <div class="pagination-text">
            {{ count($stages['data']) }} dari {{ $stages['meta']['total'] }} babak
        </div>

        <div class="pagination-buttons">
            <ul class="pagination">
                <li class="page-item {{ request()->page - 1 < 1 ? 'disabled' : '' }}">
                    <a href="?page={{ request()->page - 1 }}" class="page-link" tabindex="-1">
                        <i class="kejar-left"></i>
                    </a>
                </li>
                @for ($i = 1; $i <= $stages['meta']['last_page']; $i++)
                <li class="page-item {{ (request()->page ?? 1) == $i ? 'active disabled' : '' }}">
                    <a href="?page={{ $i }}" class="page-link">{{ $i }}</a>
                </li>
                @endfor
                <li class="page-item {{ request()->page + 1 > $stages['meta']['last_page'] ? 'disabled' : '' }}">
                    <a href="?page={{ request()->page + 1 }}" class="page-link" tabindex="-1">
                        <i class="kejar-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="list-group">
        @forelse ($stages['data'] as $key => $stage)
        <div class="list-group-item">
            <a href="{{ url('teacher/games/' . $game['uri'] . '/stages/' . $stage['id']) }}">
                <i class="kejar-stage"></i>
                Babak {{ ++$key }}&colon; {{ $stage['title'] }}
            </a>
        </div>
        @endforeach
    </div>

    <div class="page-pagination">
        <div class="pagination-text">
            {{ count($stages['data']) }} dari {{ $stages['meta']['total'] }} babak
        </div>

        <div class="pagination-buttons">
            <ul class="pagination">
                <li class="page-item {{ request()->page - 1 < 1 ? 'disabled' : '' }}">
                    <a href="?page={{ request()->page - 1 }}" class="page-link" tabindex="-1">
                        <i class="kejar-left"></i>
                    </a>
                </li>
                @for ($i = 1; $i <= $stages['meta']['last_page']; $i++)
                <li class="page-item {{ (request()->page ?? 1) == $i ? 'active disabled' : '' }}">
                    <a href="?page={{ $i }}" class="page-link">{{ $i }}</a>
                </li>
                @endfor
                <li class="page-item {{ request()->page + 1 > $stages['meta']['last_page'] ? 'disabled' : '' }}">
                    <a href="?page={{ request()->page + 1 }}" class="page-link" tabindex="-1">
                        <i class="kejar-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection