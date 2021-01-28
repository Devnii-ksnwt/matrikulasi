@extends('layout.index')

@section('title', 'Input Soal')

@section('css')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<div class="container">
            <!-- Link Back -->
            <a class ="btn-back" href="http://localhost:10056/admin/games">
                <i class="kejar-back"></i>Kembali
            </a>

            <!-- Breadcrumb -->
            <nav class="breadcrumb">
                 <a class="breadcrumb-item" href="http://localhost:10056/admin/games">Beranda</a>
                        <span class="breadcrumb-item active">Soal Cerita</span>
            </nav>

            <!-- Title -->
            <div class="page-title">
                <h2 class="mb-08rem">Unggah Soal vs. Input Soal  
                    <a href="javascript:void(0)" id="nav-0" style="cursor: pointer;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="kejar-edit"></i>
                    </a>
            <!-- Dropdown Menu -->
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="nav-0">
                <a class="dropdown-item font-15" id="edit-q-0" data-toggle="modal" style="cursor: pointer;" data-target="#update-pilihan-ganda"  data-url="http://localhost:10056/teacher/subject-teacher/assessment/question/e7f3bbd1-d13a-4aa7-a57a-3701a9354095/edit">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.3932 0.786762C13.9654 0.233677 14.8753 0.241388 15.438 0.80409L17.5926 2.95874C18.169 3.5351 18.161 4.47196 17.575 5.03846L15.1675 7.36573L5.44405 16.7787C5.24298 16.9733 4.99014 17.106 4.71572 17.1609L1.40211 17.8236C0.673238 17.9694 0.0306106 17.3268 0.176386 16.5979L0.836213 13.2988C0.894259 13.0085 1.03924 12.7428 1.25189 12.537L10.9647 3.13429L13.3932 0.786762ZM14.5541 1.68797C14.4737 1.60759 14.3437 1.60649 14.262 1.6855L12.2909 3.5909L14.7402 6.04022L16.7062 4.13973C16.7899 4.0588 16.7911 3.92496 16.7087 3.84263L14.5541 1.68797ZM13.8417 6.90945L11.3923 4.46012L2.12132 13.4351C2.09094 13.4645 2.07023 13.5025 2.06194 13.5439L1.4634 16.5366L4.47057 15.9352C4.50978 15.9273 4.5459 15.9084 4.57462 15.8806L13.8417 6.90945Z" fill="#4C516D"/>
                    </svg> Revisi Tutorial
                </a>
                <a class="dropdown-item font-15" href="javascript:void(0)" style="cursor: pointer;" data-toggle="modal" data-target="#delete_question" onclick="setDelete('e7f3bbd1-d13a-4aa7-a57a-3701a9354095')">
                    <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.14137 6.98361C0.897294 6.73953 0.897294 6.3438 1.14137 6.09973L6.3497 0.891392C6.59378 0.647314 6.98951 0.647314 7.23359 0.891392L12.4419 6.09973C12.686 6.3438 12.686 6.73953 12.4419 6.98361C12.1978 7.22769 11.8021 7.22769 11.558 6.98361L7.41665 2.84222L7.41665 14.875C7.41665 15.2202 7.13682 15.5 6.79165 15.5C6.44647 15.5 6.16665 15.2202 6.16665 14.875L6.16665 2.84222L2.02525 6.98361C1.78118 7.22769 1.38545 7.22769 1.14137 6.98361Z" fill="#4C516D"/>
                    </svg> Geser ke Atas
                </a>
                <a class="dropdown-item font-15" href="javascript:void(0)" style="cursor: pointer;" data-toggle="modal" data-target="#delete_question" onclick="setDelete('e7f3bbd1-d13a-4aa7-a57a-3701a9354095')">
                    <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.14137 9.01639C0.897294 9.26047 0.897294 9.6562 1.14137 9.90027L6.3497 15.1086C6.59378 15.3527 6.98951 15.3527 7.23359 15.1086L12.4419 9.90027C12.686 9.6562 12.686 9.26047 12.4419 9.01639C12.1978 8.77231 11.8021 8.77231 11.558 9.01639L7.41665 13.1578L7.41665 1.125C7.41665 0.779822 7.13682 0.5 6.79165 0.5C6.44647 0.5 6.16665 0.779822 6.16665 1.125L6.16665 13.1578L2.02525 9.01639C1.78118 8.77231 1.38545 8.77231 1.14137 9.01639Z" fill="#4C516D"/>
                    </svg> Geser ke Bawah
                </a>
                <a class="dropdown-item font-15" href="javascript:void(0)" style="cursor: pointer;" data-toggle="modal" data-target="#delete_question" onclick="setDelete('e7f3bbd1-d13a-4aa7-a57a-3701a9354095')">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3334 1.45833V2.5H16.7084C17.0535 2.5 17.3334 2.77982 17.3334 3.125C17.3334 3.47018 17.0535 3.75 16.7084 3.75H1.29169C0.946509 3.75 0.666687 3.47018 0.666687 3.125C0.666687 2.77982 0.946509 2.5 1.29169 2.5H5.66669V1.45833C5.66669 0.652918 6.31961 0 7.12502 0H10.875C11.6804 0 12.3334 0.652918 12.3334 1.45833ZM6.91669 1.45833C6.91669 1.34327 7.00996 1.25 7.12502 1.25H10.875C10.9901 1.25 11.0834 1.34327 11.0834 1.45833V2.5H6.91669V1.45833Z" fill="#4C516D"/>
                    <path d="M3.16383 5.14812C3.13058 4.80455 2.8251 4.55298 2.48153 4.58623C2.13796 4.61948 1.88639 4.92496 1.91964 5.26853L3.09676 17.4321C3.1691 18.1796 3.79731 18.75 4.54831 18.75H13.4518C14.2028 18.75 14.831 18.1796 14.9034 17.4321L16.0805 5.26853C16.1137 4.92496 15.8622 4.61948 15.5186 4.58623C15.175 4.55298 14.8696 4.80455 14.8363 5.14812L13.6592 17.3117C13.6488 17.4185 13.5591 17.5 13.4518 17.5H4.54831C4.44103 17.5 4.35128 17.4185 4.34095 17.3117L3.16383 5.14812Z" fill="#4C516D"/>
                    <path d="M6.67167 6.25107C7.01625 6.2308 7.31203 6.49371 7.33229 6.83829L7.74896 13.9216C7.76923 14.2662 7.50632 14.562 7.16174 14.5822C6.81716 14.6025 6.52139 14.3396 6.50112 13.995L6.08445 6.9117C6.06418 6.56711 6.32709 6.27134 6.67167 6.25107Z" fill="#4C516D"/>
                    <path d="M11.9156 6.9117C11.9359 6.56711 11.673 6.27134 11.3284 6.25107C10.9838 6.2308 10.6881 6.49371 10.6678 6.83829L10.2511 13.9216C10.2308 14.2662 10.4938 14.562 10.8383 14.5822C11.1829 14.6025 11.4787 14.3396 11.499 13.995L11.9156 6.9117Z" fill="#4C516D"/>
                    </svg> Hapus Tutorial
                </a>
                </h2>
            </div> 

            <!-- textarea -->
                <textarea id="message" rows="10" cols="85">
                </textarea>

            <div class="modal-footer">
                <div class="ckeditor-btn-group button">
                    <button type="button" class="bold-btn" title="Bold (Ctrl + B)">
                        <i class="kejar-bold"></i>
                    </button>
                    <button type="button" class="italic-btn" title="Italic (Ctrl + I)">
                        <i class="kejar-italic"></i>
                    </button>
                    <button type="button" class="underline-btn" title="Underline (Ctrl + U)">
                        <i class="kejar-underlined"></i>
                    </button>
                    <button type="button" class="bullet-list-btn" title="Bulleted list">
                        <i class="kejar-bullet"></i>
                    </button>
                    <button type="button" class="number-list-btn" title="Number list">
                        <i class="kejar-number"></i>
                    </button>
                    <button type="button" class="photo-btn" title="Masukkan foto">
                        <i class="kejar-photo"></i>
                    </button>
                </div>
                    <button type="button" class="btn package" data-dismiss="modal">Simpan</button>
                    <button type="submit" class="btn btn-primary" >Terbitkan</button>
            </div>
</div>

