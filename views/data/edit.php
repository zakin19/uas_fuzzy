<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Perbarui Data Keluarga</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Data Keluarga</a></li>
            <li class="breadcrumb-item active">Perbarui Data Keluarga</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="data" class="btn pull-right hidden-sm-down btn-danger">Kembali</a>
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
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-block">
                <form class="form-horizontal form-material" action="data/update/<?php echo $viewModel->getIdData(); ?>"
                    method="post">
                    <div class="form-group">
                        <label class="col-md-12">Nama Kepala Keluarga</label>
                        <div class="col-md-12">
                            <input type="text" name="nama" value="<?php echo $viewModel->getNama(); ?>"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="masa_kerja" class="col-md-12">Masa Kerja</label>
                        <div class="col-md-12">
                            <input type="number" value="<?php echo $viewModel->getMasaKerja(); ?>"
                                class="form-control form-control-line" name="masa_kerja" id="masa_kerja" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Usia</label>
                        <div class="col-md-12">
                            <input type="number" name="usia" value="<?php echo $viewModel->getUsia(); ?>"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Penghasilan</label>
                        <div class="col-md-12">
                            <input type="number" name="gaji" value="<?php echo $viewModel->getGaji(); ?>"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Tanggungan</label>
                        <div class="col-md-12">
                            <input type="number" name="jumlah_tanggungan"
                                value="<?php echo $viewModel->getJumlahTanggungan(); ?>"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Perbarui</button>
                            <a href="data" class="btn btn-danger btn-fill btn-wd">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                <center class="m-t-30"> 
                    <h4 class="card-title m-t-10"><?php echo $viewModel->getNama(); ?></h4>
                    <h6 class="card-subtitle"><?php echo $viewModel->getUsia(); ?> Tahun</h6>
                    <h6 class="card-subtitle"><i class="icon-dollar"></i><font class="font-medium"> Rp. <?php echo $viewModel->getGaji(); ?></font></h6>
                    <div class="row text-center justify-content-md-center">
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                <font class="font-medium"><?php echo $viewModel->getJumlahTanggungan(); ?> Orang</font>
                            </a></div>
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                <font class="font-medium"><?php echo $viewModel->getMasaKerja(); ?> Meter</font>
                            </a></div>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->