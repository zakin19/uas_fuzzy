<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Tambah Data Keluarga</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Data Keluarga</a></li>
            <li class="breadcrumb-item active">Tambah Data Keluarga</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="data"
            class="btn pull-right hidden-sm-down btn-danger">Kembali</a>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <div class="card-block">
                <form class="form-horizontal form-material" action="data/store" method="post">
                    <div class="form-group">
                        <label class="col-md-12">Nama Kepala Keluarga</label>
                        <div class="col-md-12">
                            <input type="text" name="nama" placeholder="Nama Lengkap"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="masa_kerja" class="col-md-12">Masa Kerja</label>
                        <div class="col-md-12">
                            <input type="number" placeholder="Dalam Tahun"
                                class="form-control form-control-line" name="masa_kerja" id="masa_kerja" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Usia</label>
                        <div class="col-md-12">
                            <input type="number" name="usia" placeholder="Usia saat ini"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Penghasilan</label>
                        <div class="col-md-12">
                            <input type="number" name="gaji" placeholder="Penghasilan per bulan"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Tanggungan</label>
                        <div class="col-md-12">
                            <input type="number" name="jumlah_tanggungan" placeholder="Jumlah tanggungan dikeluarga"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Simpan</button>
                            <a href="data" class="btn btn-danger btn-fill btn-wd">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->