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
									
								<?php echo $error;?>

								<?php echo form_open_multipart('gallery/do_upload');?>
								<form class="form-inline " action="" method="post" enctype="multipart/form-data">
										
										<center><input type="file" class="jumbotron col-lg-12" name="userfile" id="fileToUpload"></center>
										<input type="submit" class="btn btn-default" value="Upload Image" name="submit">
									</form>
									
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




