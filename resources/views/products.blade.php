@extends('layout.index')

@section('title', 'Penilaian')

@section('css')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<div class="container">
    <div class="row mb-8">
        <div class="col-12">
            <ul class="nav nav-justified nav-tab-kejar mt-1">
                <li class="nav-item w-50 text-center">
                    <a class='nav-link '
                        href="#">
                        Catatan Rilis
                    </a>
                </li>
                <li class="nav-item w-50 text-center">
                    <a class='nav-link  active '
                        href="http://localhost:10056/teacher/subject-teacher/08ae2d02-13a1-4bc8-a7ca-645b87da3ee3/subject/421dacb4-a3c1-46db-962e-653189a153f9/10/assessment">
                        Tutorial
                    </a>
                </li>
            </ul>
        </div>
    </div>
                    <!-- Link Back -->
                    <a class ="btn-back" href="http://localhost:10056/admin/games">
                        <i class="kejar-back"></i>Kembali
                    </a>

                    <!-- Breadcrumb -->
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="http://localhost:10056/admin/games">Beranda</a>
                        <span class="breadcrumb-item active">Penilaian</span>
                    </nav>

                    <!-- Title -->
                    <div class="page-title">
                        <h2 class="mb-08rem">Penilaian</h2>
                    </div>
                    
                    <!-- titik tiga -->
                    <svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.99998 13.9998C2.92045 13.9998 3.66665 14.746 3.66665 15.6665C3.66665 16.587 2.92045 17.3332 1.99998 17.3332C1.07951 17.3332 0.333313 16.587 0.333313 15.6665C0.333313 14.746 1.07951 13.9998 1.99998 13.9998ZM1.99998 7.33317C2.92045 7.33317 3.66665 8.07936 3.66665 8.99984C3.66665 9.92031 2.92045 10.6665 1.99998 10.6665C1.07951 10.6665 0.333313 9.92031 0.333313 8.99984C0.333313 8.07936 1.07951 7.33317 1.99998 7.33317ZM3.66665 2.33317C3.66665 1.4127 2.92045 0.666504 1.99998 0.666504C1.07951 0.666504 0.333313 1.4127 0.333313 2.33317C0.333313 3.25365 1.07951 3.99984 1.99998 3.99984C2.92045 3.99984 3.66665 3.25365 3.66665 2.33317Z" fill="#4C516D"/>
                    </svg>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="col-1">
                        <path d="M14.4003 7.73377C14.6443 7.48969 14.6443 7.09397 14.4003 6.84989C14.1562 6.60581 13.7604 6.60581 13.5164 6.84989L8.54165 11.8246L6.48359 9.76655C6.23951 9.52248 5.84378 9.52248 5.5997 9.76655C5.35563 10.0106 5.35563 10.4064 5.5997 10.6504L8.0997 13.1504C8.34378 13.3945 8.73951 13.3945 8.98359 13.1504L14.4003 7.73377Z" fill="#4DC978"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99998 0.833496C4.93737 0.833496 0.833313 4.93755 0.833313 10.0002C0.833313 15.0628 4.93737 19.1668 9.99998 19.1668C15.0626 19.1668 19.1666 15.0628 19.1666 10.0002C19.1666 4.93755 15.0626 0.833496 9.99998 0.833496ZM2.08331 10.0002C2.08331 5.62791 5.62773 2.0835 9.99998 2.0835C14.3722 2.0835 17.9166 5.62791 17.9166 10.0002C17.9166 14.3724 14.3722 17.9168 9.99998 17.9168C5.62773 17.9168 2.08331 14.3724 2.08331 10.0002Z" fill="#4DC978"/>
                    </svg>
                    <a href="http://localhost:10056/admin/games/admin-product/products/add">
                        <span id="pts-1">Unggah Naskah vs. Input Soal</span>
                    </a>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="col-1">
                        <path d="M1.10745 6.08133C0.762275 6.08133 0.482453 6.36115 0.482453 6.70633L0.482452 12.8935C0.482453 13.2387 0.762275 13.5185 1.10745 13.5185H7.29464C7.63982 13.5185 7.91964 13.2387 7.91964 12.8935C7.91964 12.5483 7.63982 12.2685 7.29464 12.2685H2.61634L12.2676 2.61728L12.2676 7.29558C12.2676 7.64076 12.5474 7.92058 12.8926 7.92058C13.2377 7.92058 13.5176 7.64076 13.5176 7.29558V1.1084C13.5176 0.763221 13.2377 0.483399 12.8926 0.483398L6.70538 0.483398C6.3602 0.483399 6.08038 0.763221 6.08038 1.1084C6.08038 1.45358 6.3602 1.7334 6.70538 1.7334L11.3837 1.7334L1.73245 11.3846L1.73245 6.70633C1.73245 6.36115 1.45263 6.08133 1.10745 6.08133Z" fill="#4C516D"/>
                    </svg>
                    <br><br>        
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.99998 5.8335C10.3452 5.8335 10.625 6.11332 10.625 6.4585V10.2085C10.625 10.5537 10.3452 10.8335 9.99998 10.8335C9.6548 10.8335 9.37498 10.5537 9.37498 10.2085V6.4585C9.37498 6.11332 9.6548 5.8335 9.99998 5.8335Z" fill="#FF4343"/>
                        <path d="M10.8333 13.3335C10.8333 13.7937 10.4602 14.1668 9.99998 14.1668C9.53974 14.1668 9.16665 13.7937 9.16665 13.3335C9.16665 12.8733 9.53974 12.5002 9.99998 12.5002C10.4602 12.5002 10.8333 12.8733 10.8333 13.3335Z" fill="#FF4343"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99998 0.833496C4.93737 0.833496 0.833313 4.93755 0.833313 10.0002C0.833313 15.0628 4.93737 19.1668 9.99998 19.1668C15.0626 19.1668 19.1666 15.0628 19.1666 10.0002C19.1666 4.93755 15.0626 0.833496 9.99998 0.833496ZM2.08331 10.0002C2.08331 5.62791 5.62773 2.0835 9.99998 2.0835C14.3722 2.0835 17.9166 5.62791 17.9166 10.0002C17.9166 14.3724 14.3722 17.9168 9.99998 17.9168C5.62773 17.9168 2.08331 14.3724 2.08331 10.0002Z" fill="#FF4343"/>
                    </svg>
                        <span id="pts-1" class="col-1">Melihat Hasil Penilaian</span>
                    <br><br>        
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.99998 5.8335C10.3452 5.8335 10.625 6.11332 10.625 6.4585V10.2085C10.625 10.5537 10.3452 10.8335 9.99998 10.8335C9.6548 10.8335 9.37498 10.5537 9.37498 10.2085V6.4585C9.37498 6.11332 9.6548 5.8335 9.99998 5.8335Z" fill="#FF4343"/>
                        <path d="M10.8333 13.3335C10.8333 13.7937 10.4602 14.1668 9.99998 14.1668C9.53974 14.1668 9.16665 13.7937 9.16665 13.3335C9.16665 12.8733 9.53974 12.5002 9.99998 12.5002C10.4602 12.5002 10.8333 12.8733 10.8333 13.3335Z" fill="#FF4343"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99998 0.833496C4.93737 0.833496 0.833313 4.93755 0.833313 10.0002C0.833313 15.0628 4.93737 19.1668 9.99998 19.1668C15.0626 19.1668 19.1666 15.0628 19.1666 10.0002C19.1666 4.93755 15.0626 0.833496 9.99998 0.833496ZM2.08331 10.0002C2.08331 5.62791 5.62773 2.0835 9.99998 2.0835C14.3722 2.0835 17.9166 5.62791 17.9166 10.0002C17.9166 14.3724 14.3722 17.9168 9.99998 17.9168C5.62773 17.9168 2.08331 14.3724 2.08331 10.0002Z" fill="#FF4343"/>
                    </svg>
                        <span id="pts-1" class="col-1">Membuat Berita Acara</span>
                    <br><br>        
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.99998 5.8335C10.3452 5.8335 10.625 6.11332 10.625 6.4585V10.2085C10.625 10.5537 10.3452 10.8335 9.99998 10.8335C9.6548 10.8335 9.37498 10.5537 9.37498 10.2085V6.4585C9.37498 6.11332 9.6548 5.8335 9.99998 5.8335Z" fill="#FF4343"/>
                        <path d="M10.8333 13.3335C10.8333 13.7937 10.4602 14.1668 9.99998 14.1668C9.53974 14.1668 9.16665 13.7937 9.16665 13.3335C9.16665 12.8733 9.53974 12.5002 9.99998 12.5002C10.4602 12.5002 10.8333 12.8733 10.8333 13.3335Z" fill="#FF4343"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99998 0.833496C4.93737 0.833496 0.833313 4.93755 0.833313 10.0002C0.833313 15.0628 4.93737 19.1668 9.99998 19.1668C15.0626 19.1668 19.1666 15.0628 19.1666 10.0002C19.1666 4.93755 15.0626 0.833496 9.99998 0.833496ZM2.08331 10.0002C2.08331 5.62791 5.62773 2.0835 9.99998 2.0835C14.3722 2.0835 17.9166 5.62791 17.9166 10.0002C17.9166 14.3724 14.3722 17.9168 9.99998 17.9168C5.62773 17.9168 2.08331 14.3724 2.08331 10.0002Z" fill="#FF4343"/>
                    </svg>
                    <span id="pts-1" class="col-1">Melihat nilai (Wali Kelas)</span>
                    <br><br>        
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.99998 5.8335C10.3452 5.8335 10.625 6.11332 10.625 6.4585V10.2085C10.625 10.5537 10.3452 10.8335 9.99998 10.8335C9.6548 10.8335 9.37498 10.5537 9.37498 10.2085V6.4585C9.37498 6.11332 9.6548 5.8335 9.99998 5.8335Z" fill="#FF4343"/>
                        <path d="M10.8333 13.3335C10.8333 13.7937 10.4602 14.1668 9.99998 14.1668C9.53974 14.1668 9.16665 13.7937 9.16665 13.3335C9.16665 12.8733 9.53974 12.5002 9.99998 12.5002C10.4602 12.5002 10.8333 12.8733 10.8333 13.3335Z" fill="#FF4343"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99998 0.833496C4.93737 0.833496 0.833313 4.93755 0.833313 10.0002C0.833313 15.0628 4.93737 19.1668 9.99998 19.1668C15.0626 19.1668 19.1666 15.0628 19.1666 10.0002C19.1666 4.93755 15.0626 0.833496 9.99998 0.833496ZM2.08331 10.0002C2.08331 5.62791 5.62773 2.0835 9.99998 2.0835C14.3722 2.0835 17.9166 5.62791 17.9166 10.0002C17.9166 14.3724 14.3722 17.9168 9.99998 17.9168C5.62773 17.9168 2.08331 14.3724 2.08331 10.0002Z" fill="#FF4343"/>
                    </svg>
                    <span id="pts-1" class="col-1">Melihat Nilai (Pembimbing Siswa)</span>
                    <br><br> 
                    
        <!-- Upload Buttons -->
            <button class="btn-upload" data-toggle="modal" data-target="#create-package">
                <i class="kejar-add"></i>Buat Tutorial
            </button>

        <!-- List of Packages (Admin)-->
            <div class="list-group" data-url="http://localhost:10056/admin/akmliterasi/packages" data-token="73KouQmgjhsvLk506NCiqOJL2C9xMVxPbe8obtHJ">
                <h5 class="text-center">Tidak ada data</h5>
            </div>

        <!-- Modal -->
        <div class="modal fade" id="create-package" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="http://localhost:10056/admin/akmliterasi/packages" method="post">
                    <input type="hidden" name="_token" value="73KouQmgjhsvLk506NCiqOJL2C9xMVxPbe8obtHJ">            
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Buat Tutorial</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="kejar kejar-close"></i>
                                    </button>
                            </div>

                        <div class="modal-body">
                            <label for="title">Penilaian</label>
                                <div class="form-group">
                                <input type="text" class="form-control" name="title" id="title" placeholder="Judul Tutorial" autocomplete="off" required>
                                </div>
                        </div>

                        <div class="modal-footer">
                            <div class="text-right col-md-12">
                        <button class="btn btn-cancel" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" id="saveBtn" onclick="showLoadingCreate()">simpan</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="updatePassword" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="http://localhost:10056/admin/change-password" method="post">
                        <input type="hidden" name="_token" value="73KouQmgjhsvLk506NCiqOJL2C9xMVxPbe8obtHJ">                <input type="hidden" name="_method" value="PATCH">                <div class="modal-header">
                            <h5 class="modal-title">Ganti Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="kejar kejar-close"></i>
                            </button>
                        </div>

                <div class="modal-body">
                    <p>Password harus terdiri dari minimal 6 karakter, kombinasi huruf dan angka.</p>
                        <div class="form-group">
                            <label for="passwordBaru">Password Baru</label>
                                <div class="input-group input-group-password ">
                                    <input type="password" name="password_baru" id="passwordBaru" class="form-control" placeholder="Buat password" value="">
                                        <div class="input-group-append">
                                            <button tabindex="-1" class="btn btn-outline-light" type="button"><i class="kejar-hide-password"></i></button>
                                        </div>
                                </div>
                        </div>

                    <div class="form-group">
                        <label for="konfirmasiPassword">Konfirmasi Password</label>
                            <div class="input-group input-group-password ">
                                <input type="password" name="konfirmasi_password" id="konfirmasiPassword" class="form-control" placeholder="Konfirmasi password baru" value="">
                                    <div class="input-group-append">
                                        <button tabindex="-1" class="btn btn-outline-light" type="button"><i class="kejar-hide-password"></i></button>
                                    </div>
                            </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-end">
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- Modal -->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="logout" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Log Out</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="kejar kejar-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah yakin akan keluar?
                </div>
                <div class="modal-footer justify-content-end">
                    <div>
                        <a href="#" class="btn btn-transparent text-dark" data-dismiss="modal">Batal</a>
                        <a href="http://localhost:10056/logout" class="btn btn-danger btn-logout">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alert Notification -->
    <div class="toast p-3 border-0 shadow rounded bg-white hide" data-delay="5000">
        <div class="toast-header border-0">
            <img src="http://localhost:10056/assets/logo/favicon.png" class="rounded mr-2" alt="...">
            <strong class="mr-auto">Kejar.id</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div class="toast-body py-3">
        </div>
    </div>
</body>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

    <script src="/js/admin/package/script.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.7/cropper.js" integrity="sha512-giNJUOlLO0dY67uM6egCyoEHV/pBZ048SNOoPH4d6zJNnPcrRkZcxpo3gsNnsy+MI8hjKk/NRAOTFVE/u0HtCQ==" crossorigin="anonymous"></script> -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LWJBTHGZ7D"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-LWJBTHGZ7D');
    </script>




<!-- Import JS Script -->

<script>
    var image = document.getElementsByClassName("profile-pict-crop")[0];
    var cropper;
    var photo;

    $(document).ready(function() {
        $(".input-group-password").on('click', 'button', function(event) {
            event.preventDefault();
            var input = $(this).parents('.input-group-password').find('input');
            if ($(input).attr('type') == 'password') {
                $(input).attr('type', 'text');
                $(this).html('<i class="kejar-show-password"></i>');
            } else {
                $(this).html('<i class="kejar-hide-password"></i>');
                $(input).attr('type', 'password');
            }
        });
    });

    $(document).on('click', '#updateProfile .btn-cancel', function() {
        modalProfileManagement('cancelUpdate');
    });

    $(document).on('click', '.edit-pict-btn', function() {
        $('input[name=select_photo]').click();
    });

    $('input[name=select_photo]').change(function() {
        readURL(this);
    });

    $(document).on('click', '#save-btn', function() {
        photo = cropper.getCroppedCanvas().toDataURL();
        modalProfileManagement('saveProfile');
    });

    $('#updateProfile').on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
        });
    }).on('hidden.bs.modal', function() {
        modalProfileManagement('cancelUpdate');
        cropper.destroy();
        cropper = null;
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.profile-pict-crop').attr('src', e.target.result);
                modalProfileManagement('selectPicture');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    function modalProfileManagement(status) {
        if (status == 'saveProfile') {
            $('input[name=photo]').val(photo);
            $('form[name=change_profile]').submit();
        } else if (status == 'cancelUpdate') {
            $('#editProfile').modal('show');
            $('#updateProfile').modal('hide');
        } else if (status == 'selectPicture') {
            $('#editProfile').modal('hide');
            $('#updateProfile').modal('show');
        }
    }
</script>

                </div>
            </div>
    </div>
</div>

