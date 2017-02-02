        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Gallery <span><a href="<?php echo base_url() ?>gallery/upload.html" class="btn btn-default"><i class="fa fa-upload "></i></a></span></h1>
						
						<?php foreach($images as $val){ ?>
						<?php if(get_mime_by_extension($val)=='text/html'){
						} else { 
						?>
						<div class="col-lg-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a href="<?php echo base_url().'gallery/confimage/'.$val ?>" class="btn btn-default"><i class="fa fa-wrench"></i></a>
									<?php echo $val ?>
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body">
									<div id="morris-line-chart"></div>
									<center><img src="assets/images/<?php echo $val ?>" class="img-responsive thumbnail" style="min-height:100px;max-height:100px" alt="<?php echo $val ?>" /></center><br />
									
									
								</div>
								<!-- /.panel-body -->
							</div>
							<!-- /.panel -->
						</div>
						<!-- /.col-lg-4 -->
						<?php } ?>
						<?php } ?>
						
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->




