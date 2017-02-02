        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pages <a href="<?php echo base_url().'site/page_preview/'.$id ?>" class="btn btn-success" target="_blank"><i class="fa fa-wrench"></i> Edit dengan tampilan asli</a></h1>
						

						<div class="col-lg-12">
							<div class="panel panel-default">
								
								<div class="panel-heading">
									<h3>Edit Page</h3>
									
								</div>
								
								<!-- /.panel-heading -->
								<div class="panel-body">
									<?php $attributes = array('role' => 'form'); ?>
									<?php echo form_open(base_url()."pages/page_edit/".$id,$attributes) ?>
										<div class="form-group">
											<label>Author</label>
											<input name="posting_by" class="form-control" value="<?php echo $page->post_author ?>" >
											<p class="help-block">Valid: text validasi</p>
										</div>
										<div class="form-group">
											<label>Title</label>
											<input name="post_title" class="form-control" value="<?php echo $page->post_title ?>" placeholder="Judul Halaman">
											<p class="help-block">Valid: text validasi</p>
										</div>
										<div class="form-group hidden">
											<label>Type</label>
											<input name="post_type" class="form-control" value="<?php echo $page->post_type ?>"  placeholder="Type Halaman">
											<p class="help-block">Valid: text validasi</p>
										</div>
										<div class="form-group">
                                            <label>Content</label>
                                            <textarea name="content" class="form-control ckeditor" id="ckedtor" rows="3" ><?php echo $page->post_content ?></textarea>
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

		<h2>Preview</h2>
		<iframe src="<?php echo base_url() ?>site/page_preview/<?php echo encode_url($page->ID) ?>" style="width:100%;height:500px" ></iframe>
<?php 
 // $a=$this->login_model->ambil_data(array('username'=>'admin','password'=>md5('admin')))?>
<?php
// foreach($a as $val){
	// echo $val->username;
	// echo $val->password;
	// echo $val->ID;
	// echo $val[3];
// }
?>

