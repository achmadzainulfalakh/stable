        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product <button title="Tambah Produk" data-toggle="collapse" data-target="#paneladd" class="btn btn-primary btn-sm fa fa-plus"/></button></h1>
		
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3></h3>
								</div>
								<!-- /.panel-heading -->
								<?php $attributes = array('role' => 'form'); ?>
								<?php echo form_open(base_url()."product/edit/".$id,$attributes) ?>
								<?php if($post){ ?>
								<?php //foreach($posts as $val){ ?>
								<div class="panel-body">
									<div class="form-group col-lg-3">
										<label for="idalias">Id/Alias/Inisial</label>
										<input id="txtidalias" name="idalias" class="form-control" value="<?php print $post->post_name ?>" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-3">
										<label for="icon">Icon</label>
										<input id="icon" name="icon" class="form-control" value="<?php print $post->guid ?>" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-3">
										<label for="name">Name</label>
										<input id="name" name="name" class="form-control" value="<?php print $post->post_title ?>" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-3">
										<label for="order">Order</label>
										<input id="order" name="order" class="form-control" value="<?php print $post->menu_order ?>" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-3">
										<label for="banner">Banner</label>
										<input id="banner" name="banner" class="form-control" value="<?php print $post->post_mime_type ?>" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-3">
										<label for="bgcolor">Background Color</label>
										<input id="bgcolor" name="bgcolor" class="form-control" value="<?php print $post->post_password ?>" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-12">
										<label>Content</label>
										<textarea name="content" class="form-control ckeditor" id="ckedtor" rows="3" style="visibility:visible" >
										<?php print $post->post_content ?>
										</textarea>
										
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<input type="submit" class="btn btn-primary btn-lg col-lg-12" name="update" value="Update"/>
								</div>
								<!-- /.panel-body -->
								<?php //} ?>
								<?php } ?>
								</form>
								<?php $attributes = array('role' => 'form'); ?>
								<?php echo form_open(base_url()."product/add",$attributes) ?>
								<div class="panel-body collapse"  id="paneladd">
									<div class="form-group col-lg-3">
										<label for="idalias">Id/Alias/Inisial</label>
										<input id="txtidalias" name="idalias" class="form-control" value="" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-3">
										<label for="icon">Icon</label>
										<input id="icon" name="icon" class="form-control" value="" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-3">
										<label for="name">Name</label>
										<input id="name" name="name" class="form-control" value="" required>
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-3">
										<label for="order">Order</label>
										<input id="order" name="order" class="form-control" value="" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-3">
										<label for="banner">Banner</label>
										<input id="banner" name="banner" class="form-control" value="" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-3">
										<label for="bgcolor">Background Color</label>
										#<input id="bgcolor" name="bgcolor" class="form-control" value="" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-12">
										<label>Content</label>
										<textarea name="content" class="form-control ckeditor" id="ckedtor" rows="3" style="visibility:visible" >								
										</textarea>
										

										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									
									<input type="submit" class="btn btn-primary btn-lg col-lg-12" name="add" value="Add New"/>
								</div>
								</form>
							</div>
							<!-- /.panel -->
							
							<!-- table -->
							<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								  <tr>
									<th></th>
									<th>ID/Alias/Inisial</th>
									<th>Banner</th>
									<th>Icon</th>
									<th>Name</th> 
									
									<th>Order</th>
									
								  </tr>
								</thead>
								<tbody>
								<?php if($posts == true){ ?>
									<?php foreach($posts as $val){ ?>
									  <tr>
										<td><a title="Edit" href="<?php echo base_url()."product/edit/".encode_url($val->ID) ?>" class=""><i class="fa fa-wrench fa-lg"></i></a></td>
										<td><?php print $val->post_name ?></td>
										<td><?php print $val->post_mime_type ?></td>
										<td><?php print $val->guid ?></td>
										<td><?php print $val->post_title ?></td>
										<td><?php print $val->menu_order ?></td>
										<!--<td><?php //$val->post_content ?></td>-->										
										<td><center><a title="Hapus" href="<?php echo base_url()."product/delete/".encode_url($val->ID) ?>" class=""><i class="fa fa-trash-o fa-lg"></i></a></center></td>
									  </tr>
									<?php } ?>
								<?php } else { ?>
										<tr>
											<td colspan="50">
											<center>No Data</center>
											</td>
										</tr>
								<?php } ?>
								</tbody>
							</table>
							<!-- /.table -->
						
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->