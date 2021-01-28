@extends('layout.index')

@section('title', 'tutorial')

@section('css')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<div class="bg-blue-tp">  
    <div class="container-fluid">
        <div class="row dashboar">
         <!-- List of Stages (Admin)-->
         <div class="list-group" data-url="#" data-token="tZ4lInQwqmjLuFzx1v4AR71TyBcmld8jJPWskcR0">
                            <div class="list-group-item" data-toggle="collapse" data-target="#collapse-ccfe496f-e098-402f-a0d2-7e46399eb419" aria-expanded="false" aria-controls="collapse-ccfe496f-e098-402f-a0d2-7e46399eb419">
                    <a href="javascript:void(0)" class="col-12">
                        <i class="kejar-mapel" data-toggle="collapse" data-target="#collapse-ccfe496f-e098-402f-a0d2-7e46399eb419" aria-expanded="false" aria-controls="collapse-ccfe496f-e098-402f-a0d2-7e46399eb419"></i>
                        Agama Wikrama
                    </a>
                </div>
                <div class="collapse" id="collapse-ccfe496f-e098-402f-a0d2-7e46399eb419" style="margin-top: -16px;">
                                                                    <div class="list-group" data-url="#" data-token="tZ4lInQwqmjLuFzx1v4AR71TyBcmld8jJPWskcR0">
                            <div class="list-group-item-dropdown">
                                <form
                                    id="download-ccfe496f-e098-402f-a0d2-7e46399eb419-0"
                                    action="http://localhost:10056/admin/mini-assessment/export"
                                    method="post"
                                >
                                    <input type="hidden" name="_token" value="tZ4lInQwqmjLuFzx1v4AR71TyBcmld8jJPWskcR0">                                    <input type="hidden" name="subject_id" value="ccfe496f-e098-402f-a0d2-7e46399eb419" />
                                    <input type="hidden" name="grade" value="10" />
                                    <input type="hidden" name="name" value="Agama Wikrama.xlsx" />
                                    <i class="kejar-download" onclick="doExport('download-ccfe496f-e098-402f-a0d2-7e46399eb419-0')" role="button"></i>
                                </form>
                                <a href="http://localhost:10056/admin/mini-assessment/PTS-semester-ganjil-2020-2021/subject/ccfe496f-e098-402f-a0d2-7e46399eb419/10" class="col-12">
                                    <span class="ml-5">Kelas 10</span>
                                    <i class="kejar-right float-right"></i>
                                </a>
                            </div>
                        </div>
                                                                    <div class="list-group" data-url="#" data-token="tZ4lInQwqmjLuFzx1v4AR71TyBcmld8jJPWskcR0">
                            <div class="list-group-item-dropdown">
                                <form
                                    id="download-ccfe496f-e098-402f-a0d2-7e46399eb419-1"
                                    action="http://localhost:10056/admin/mini-assessment/export"
                                    method="post"
                                >
                                    <input type="hidden" name="_token" value="tZ4lInQwqmjLuFzx1v4AR71TyBcmld8jJPWskcR0">                                    <input type="hidden" name="subject_id" value="ccfe496f-e098-402f-a0d2-7e46399eb419" />
                                    <input type="hidden" name="grade" value="11" />
                                    <input type="hidden" name="name" value="Agama Wikrama.xlsx" />
                                    <i class="kejar-download" onclick="doExport('download-ccfe496f-e098-402f-a0d2-7e46399eb419-1')" role="button"></i>
                                </form>
                                <a href="http://localhost:10056/admin/mini-assessment/PTS-semester-ganjil-2020-2021/subject/ccfe496f-e098-402f-a0d2-7e46399eb419/11" class="col-12">
                                    <span class="ml-5">Kelas 11</span>
                                    <i class="kejar-right float-right"></i>
                                </a>
                            </div>
                        </div>
                                                                    <div class="list-group" data-url="#" data-token="tZ4lInQwqmjLuFzx1v4AR71TyBcmld8jJPWskcR0">
                            <div class="list-group-item-dropdown">
                                <form
                                    id="download-ccfe496f-e098-402f-a0d2-7e46399eb419-2"
                                    action="http://localhost:10056/admin/mini-assessment/export"
                                    method="post"
                                >
                                    <input type="hidden" name="_token" value="tZ4lInQwqmjLuFzx1v4AR71TyBcmld8jJPWskcR0">                                    <input type="hidden" name="subject_id" value="ccfe496f-e098-402f-a0d2-7e46399eb419" />
                                    <input type="hidden" name="grade" value="12" />
                                    <input type="hidden" name="name" value="Agama Wikrama.xlsx" />
                                    <i class="kejar-download" onclick="doExport('download-ccfe496f-e098-402f-a0d2-7e46399eb419-2')" role="button"></i>
                                </form>
                                <a href="http://localhost:10056/admin/mini-assessment/PTS-semester-ganjil-2020-2021/subject/ccfe496f-e098-402f-a0d2-7e46399eb419/12" class="col-12">
                                    <span class="ml-5">Kelas 12</span>
                                    <i class="kejar-right float-right"></i>
                                </a>
                            </div>
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

