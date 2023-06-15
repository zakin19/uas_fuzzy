<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Hasil Klasifikasi</h3>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <canvas id="chartBatang" class="chart-canvas"></canvas>
        </div>
    </div>
</div>
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Klasifikasi Tingkat Kesejahteraan Keluarga</h4>
                <h6 class="card-subtitle">Tahun <code>[2023]</code></h6>
                <div class="table-responsive">
                    <table id="hasil" class="table table-bordered">
                        <thead style="font-size: 55%;">
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Nama KK</th>
                            <th colspan="2" class="text-center">Derajat Keanggotaan Masa Kerja</th>
                            <th colspan="3" class="text-center">Derajat Keanggotaan Usia</th>
                            <th colspan="3" class="text-center">Derajat Keanggotaan Penghasilan</th>
                            <th colspan="2" class="text-center">Derajat Keanggotaan Jumlah Tanggungan</th>
                            <th rowspan="2">Tingkat Keluarga</th>
                        </tr>
                        <tr>
                            <th class="text-center">Baru</th>
                            <th class="text-center">Lama</th>
                            <th class="text-center">Muda</th>
                            <th class="text-center">Parobaya</th>
                            <th class="text-center">Tua</th>
                            <th class="text-center">Rendah</th>
                            <th class="text-center">Sedang</th>
                            <th class="text-center">Tinggi</th>
                            <th class="text-center">Sedikit</th>
                            <th class="text-center">Banyak</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                            $i=0;
                            $y=0;
                            $r=0;
                            foreach ($viewModel['data'] as $res) {
                                if($res[15]=='Sejahtera'){
                                    $i = $i + 1;
                                    echo $i;
                                } else if($res[15]=='Tidak Mampu'){
                                    $y = $y + 1;
                                    echo $y;
                                } else if($res[15]=='Pra-Sejahtera'){
                                    $r = $r + 1;
                                    echo $r;
                                }
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $res[0]; ?></td>
                            <td><?php echo $res[5]; ?></td>
                            <td><?php echo $res[6]; ?></td>
                            <td><?php echo $res[7]; ?></td>
                            <td><?php echo $res[8]; ?></td>
                            <td><?php echo $res[9]; ?></td>
                            <td><?php echo $res[10]; ?></td>
                            <td><?php echo $res[11]; ?></td>
                            <td><?php echo $res[12]; ?></td>
                            <td><?php echo $res[13]; ?></td>
                            <td><?php echo $res[14]; ?></td>
                            <td><?php echo $res[15]; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                        <script>
                        $(document).ready(function(){
                            $('#hasil').DataTable( {
                            'language': {
                                'sEmptyTable':   'Tidak ada data yang tersedia pada tabel ini',
                                'sSearch':       'Cari:',
                                'sInfo':         'Menampilkan _START_ sampai _END_ dari _TOTAL_ entri',
                                'sLengthMenu':   'Tampilkan _MENU_ entri',
                                'sProcessing':   'Sedang memproses...',
                                'sZeroRecords':  'Tidak ditemukan data yang sesuai',
                                'sInfoEmpty':    'Menampilkan 0 sampai 0 dari 0 entri',
                                'sInfoFiltered': '(disaring dari _MAX_ entri keseluruhan)',
                                'paginate': {
                                'previous': '&lt;',
                                'next': '&gt;'
                                }
                            }
                            } );
                        });
                        </script>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<script>
		var ctx = document.getElementById("chartBatang").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ['Sejahtera', 'Tidak Mampu', 'Prasejahtera'],
				datasets: [{
					label: 'Keluarga',
					data: [<?= $i; ?>,<?= $y; ?>,<?= $r; ?>],
					backgroundColor: [
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderColor: [
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
    });
    
    
	</script>