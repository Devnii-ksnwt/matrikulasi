<div class="modal fade bd-example-modal-md assignStudentsModalSection" id="assignStudentsModal-0">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tugaskan Siswa<br>
                    <small>1/3 Pilih Paket</small>
                </h5>
                <button class="close modal-close" data-dismiss="modal">
                    <i class="kejar kejar-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <h5>Pilih Paket</h5>
                        <p>
                            Jika paket yang dipilih lebih dari satu, paket yang dikerjakan siswa akan diacak berdasarkan paket yang dipilih.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                        @foreach($assessments as $keyP => $p)
                            <div class="row">
                                <div class="col-12">
                                    <div class="check-group row">
                                        <input name="package_choice[]" type="checkbox" id="package-choice-{{ $keyP+1 }}" value="{{ $p['id'] }}" class="col-1 mt-2">
                                        <label for="package-choice-{{ $keyP+1 }}" class="col pl-0">
                                            <p style="cursor:pointer" class="mb-0 pt-1">
                                                Paket {{ $keyP+1 }}
                                            </p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        @endforeach()

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-right col-md-12">
                    <button class="btn btn-link pull-right" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary pull-right" onclick="modalScheduleShow()">Lanjut</button>
                </div>
            </div>
        </div>
    </div>
</div>
