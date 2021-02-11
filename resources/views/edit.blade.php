@extends('layout.index')

@section('title', 'View Soal')

@section('css')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<div class="container">
            <!-- Link Back -->
            <a class ="btn-back" href="http://localhost:10056/admin/games">
                <i class="kejar-back"></i>Kembali
            </a>
              <!-- Button Revisi -->
              <button class="btn-revise float-end">Revisi</button>
            <!-- Button Delete --> 
            <button class="btn package float-end">Hapus</button>
            <!-- Breadcrumb -->
            <nav class="breadcrumb">
                <span class="breadcrumb-item active">Terakhir di update Senin, 20 Desember 2021</span>
            </nav>
                <!-- Title -->
                <div class="page-title">
                <h2 class="mb-08rem">Unggah Soal vs. Input Soal</h2>
            </div>
            <!-- textarea -->
                <textarea id="message" rows="10" cols="85">
                </textarea>
</div>

