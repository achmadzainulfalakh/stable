        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <?php $attributes = array('role' => 'form'); ?>
				<?php echo form_open(base_url()."page/ourclient",$attributes) ?><div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pages <input type="submit" class="btn btn-primary" name="update" value="Simpan"/></h1>
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>About</h3>
								</div>
								<!-- /.panel-heading -->
								<?php //foreach($post as $val){ ?>
								<div class="panel-body">
									<div class="form-group col-lg-3">
										<label for="title">Title</label>
										<input id="txttitle" name="title" class="form-control" value="<?php print $posts->post_title ?>" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-12">
										<label>Content</label>
										<textarea name="content" class="form-control ckeditor" id="ckedtor" rows="3" >
										<?php print $posts->post_content ?>
										</textarea>
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
								</div>
								<!-- /.panel-body -->
								<?php //} ?>
								
							</div>
							<!-- /.panel -->
						</div>
						<!-- /.col-lg-12 -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				</form>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->