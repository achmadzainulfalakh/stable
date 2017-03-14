        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Statistik</h1>
						Jumlah Kunjungan: <?php print $jumlahkunjungan?> Kali
						<br />
						<br />
						Kunjungan berdasarkan group:
						<?php foreach($arrjumlahkunjungan as $val){ ?>
						<br />
							<?php print $val->tanggal_kunjungan?>
							Kunjungan: <?php print $val->n?>
						
						<?php } ?>
						<br />
						<br />
						Semua Data Pengunjung:
						<?php foreach($allKunjungan as $val){ ?>
						<br />
							Jam Kunjungan: <?php print $val->jam_kunjungan?>
							Tanggal Kunjungan: <?php print $val->tanggal_kunjungan?>
						
						<?php } ?>
						
						
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
									<div class="pull-right">
										<div class="btn-group">
											<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
												Actions
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu pull-right" role="menu">
												<li><a href="#">Action</a>
												</li>
												<li><a href="#">Another action</a>
												</li>
												<li><a href="#">Something else here</a>
												</li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body">
									<div id="morris-area-chart"></div>
								</div>
								<!-- /.panel-body -->
							</div>
							
							
						</div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->




