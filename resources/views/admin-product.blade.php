@extends('layout.index')

@section('title', 'tutorial')

@section('css')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<div class="container">
<div class="bg-blue-tp">  
    <div class="container-fluid">
        <div class="row dashboar">
            <div class="list-group">
                    <div class="list-group-item" href="http://localhost:10056/admin/games/admin-product/products">
                        Penilaian
                    </div>
                    <div class="list-group-item">
                        Matrikulasi
                    </div>
                    <div class="list-group-item">
                        Latihan AKM
                    </div>
                    <div class="list-group-item">
                        Persiapan TOEIC
                    </div>
            </div>
        </div>
    </div>
</div>
</div>

