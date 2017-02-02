        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Gallery</h1>
						

						<div class="col-lg-12">
							<div class="panel panel-default">
								
								<div class="panel-heading">
									Select image to upload:
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body">
									
								
								<h3>Your file was successfully uploaded!</h3>

								<ul>
								<?php foreach ($upload_data as $item => $value):?>
								<li><?php echo $item;?>: <?php echo $value;?></li>
								<?php endforeach; ?>
								</ul>

								<p><?php echo anchor(base_url().'gallery.html', 'Lihat Gallery'); ?></p>
									
								</div>
								<!-- /.panel-body -->
							</div>
							<!-- /.panel -->
						</div>
						<!-- /.col-lg-12 -->

						
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->




