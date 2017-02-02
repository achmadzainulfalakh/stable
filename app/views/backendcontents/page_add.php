        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pages</h1>
						

						<div class="col-lg-12">
							<div class="panel panel-default">
								<?php echo $title ?>
								<div class="panel-heading">
									<h3>Add Page</h3>
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body">
									<?php $attributes = array('role' => 'form'); ?>
									<?php echo form_open(base_url()."pages/page_add.html",$attributes) ?>
										<div class="form-group">
											<label>Author</label>
											<input name="posting_by" class="form-control" value="<?php echo $this->login_model->username() //mendapatkan username login ?>" >
											<p class="help-block">Valid: text validasi</p>
										</div>
										<div class="form-group">
											<label>Title</label>
											<input name="post_title" class="form-control" value="" placeholder="Judul Halaman">
											<p class="help-block">Valid: text validasi</p>
										</div>
										<div class="form-group hidden">
											<label>Type</label>
											<input name="post_type" class="form-control" value="page"  placeholder="Type Halaman">
											<p class="help-block">Valid: text validasi</p>
										</div>
										<div class="form-group">
                                            <label>Content</label>
                                            <textarea name="content" class="form-control ckeditor" id="ckedtor" rows="3"></textarea>
                                        </div>
																	
									<button type="submit" class="btn btn-default btn-lg col-lg-12"> Simpan </button>
									<!--<button type="reset" class="btn btn-default">Reset</button>-->
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




