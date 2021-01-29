@extends('layout.index')

@section('title', 'tutorial')

@section('css')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<div class="bg-blue-tp">  
    <div class="container-fluid">
        <div class="row dashboar">
        <div class="list-group" data-url="#" data-token="73KouQmgjhsvLk506NCiqOJL2C9xMVxPbe8obtHJ">
                            <div class="list-group-item" data-toggle="collapse" data-target="#collapse-ccfe496f-e098-402f-a0d2-7e46399eb419" aria-expanded="false" aria-controls="collapse-ccfe496f-e098-402f-a0d2-7e46399eb419">
                             <a href="{{ url('admin/games/tutorial/penilaian') }}" class="col-12">
                                 <i class="kejar-mapel" data-toggle="collapse" data-target="#collapse-ccfe496f-e098-402f-a0d2-7e46399eb419" aria-expanded="false" aria-controls="collapse-ccfe496f-e098-402f-a0d2-7e46399eb419"></i>
                       Penilaian
                    </a>
                </div>
                <div class="list-group" data-url="#" data-token="73KouQmgjhsvLk506NCiqOJL2C9xMVxPbe8obtHJ">
                            <div class="list-group-item" data-toggle="collapse" data-target="#collapse-ccfe496f-e098-402f-a0d2-7e46399eb419" aria-expanded="false" aria-controls="collapse-ccfe496f-e098-402f-a0d2-7e46399eb419">
                    <a href="javascript:void(0)" class="col-12">
                        <i class="kejar-mapel" data-toggle="collapse" data-target="#collapse-ccfe496f-e098-402f-a0d2-7e46399eb419" aria-expanded="false" aria-controls="collapse-ccfe496f-e098-402f-a0d2-7e46399eb419"></i>
                       Matrikulasi
                    </a>
                </div>
                <div class="list-group-item" data-toggle="collapse" data-target="#collapse-0837e19d-8e52-4f2e-8c02-4ec0b3aa1b96" aria-expanded="false" aria-controls="collapse-0837e19d-8e52-4f2e-8c02-4ec0b3aa1b96">
                    <a href="javascript:void(0)" class="col-12">
                        <i class="kejar-mapel" data-toggle="collapse" data-target="#collapse-0837e19d-8e52-4f2e-8c02-4ec0b3aa1b96" aria-expanded="false" aria-controls="collapse-0837e19d-8e52-4f2e-8c02-4ec0b3aa1b96"></i>
                        Latihan AKM
                    </a>
                </div>
                <div class="list-group-item" data-toggle="collapse" data-target="#collapse-6956d5c9-8b1b-4d8e-bb75-d7c75ec1f49c" aria-expanded="false" aria-controls="collapse-6956d5c9-8b1b-4d8e-bb75-d7c75ec1f49c">
                    <a href="javascript:void(0)" class="col-12">
                        <i class="kejar-mapel" data-toggle="collapse" data-target="#collapse-6956d5c9-8b1b-4d8e-bb75-d7c75ec1f49c" aria-expanded="false" aria-controls="collapse-6956d5c9-8b1b-4d8e-bb75-d7c75ec1f49c"></i>
                        Persiapan TOEIC
                    </a>
                </div>
                </div>
            </div>
    </div>
</div>

