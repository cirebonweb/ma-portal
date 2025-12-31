<?= $this->extend('layout\template') ?>

<?= $this->section('konten') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <!-- foto billboard -->
            <div class="col-md-4 col-lg-3">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <form class="form-upload-gambar" action="<?= base_url('billboard/foto'); ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            

                            <div class="unggah" data-max-width="215" data-ukuran="2048">
                                <div class="loadingSpinner">⏳ <span class="ml-2">Memproses gambar...</span></div>

                                <div class="text-center">
                                    <img id="preview_foto_billboard" class="img-fluid border border-primary rounded" src="<?= base_url('upload/billboard/') . ($foto ?? 'sample-billboard.jpg') ?>">
                                </div>

                                <input type="file" class="form-control-file mt-2" id="foto_billboard" name="foto_billboard" accept=".jpg,.jpeg,.png">
                                <div id="info_foto_billboard" class="info-kecil mt-2"><small>maksimal ukuran foto 2 MB.</small></div>

                                <div class="mt-2"><button type="submit" class="btn btn-sm btn-secondary btn-block">Upload foto billboard</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- input billboard -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <form id="formData" class="pl-3 pr-3" data-cek="true">
                            <div class="col-12">
                                <label for="">Judul</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>