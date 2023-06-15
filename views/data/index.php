<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Data Keluarga</h3>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="data/create" class="btn pull-right hidden-sm-down btn-success">Tambah Keluarga</a>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Master Data Keluarga</h4>
                <h6 class="card-subtitle">Tahun <code>[2023]</code></h6>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>Nama KK</th>
                            <th>Masa Kerja</th>
                            <th>Usia</th>
                            <th>Penghasilan</th>
                            <th>Jumlah Tanggungan</th>
                            <th>Opsi</th>
                        </tr>
                        <?php
                            $no = 1;
                            setlocale(LC_MONETARY, 'id_ID.utf8');
                            foreach ($viewModel as $data) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data->getNama(); ?></td>
                            <td><?php echo $data->getMasaKerja(); ?> Tahun</td>
                            <td><?php echo $data->getUsia(); ?> Tahun</td>
                            <td class="text-right">Rp. <?php echo number_format($data->getGaji(),2,",","."); ?></td>
                            <td><?php echo $data->getJumlahTanggungan(); ?> Orang</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="data/edit/<?php echo $data->getIdData(); ?>">Ubah</a>
                                <a class="btn btn-sm btn-danger" href="data/delete/<?php echo $data->getIdData(); ?>">Hapus</a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->