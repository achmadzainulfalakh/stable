        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pages <button title="Masukkan What We Offer baru" data-toggle="collapse" data-target="#paneladd" class="btn btn-primary btn-lg"/><i class="fa fa-plus "></i></button></h1>
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>What We Offer</h3>
								</div>
								<!-- /.panel-heading -->
								<?php $attributes = array('role' => 'form'); ?>
								<?php echo form_open(base_url()."page/whatweoffer/".$id,$attributes) ?>
								<?php if($post){ ?>
								<?php //foreach($posts as $val){ ?>
								<div class="panel-body">
									<div class="form-group col-lg-3">
										<label for="order">Order</label>
										<input id="txtorder" name="order" class="form-control" value="<?php print $post->menu_order ?>" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-3">
										<label for="title">Title</label>
										<input id="txttitle" name="title" class="form-control" value="<?php print $post->post_title ?>" >
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
								<?php echo form_open(base_url()."page/whatweoffer/",$attributes) ?>
								<div class="panel-body collapse"  id="paneladd">
									<div class="form-group col-lg-3">
										<label for="order">Order</label>
										<input id="txtorder" name="order" class="form-control" value="" >
										<?php //echo '<p class="help-block">Valid: text validasi</p>' ?>
									</div>
									<div class="form-group col-lg-3">
										<label for="title">Title</label>
										<input id="txttitle" name="title" class="form-control" value="" >
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
									<th class="col-xs-1 col-sm-2">Order</th>
									<th>Title</th>
									<th>Content</th>
									<th>Delete</th>
								  </tr>
								</thead>
								<tbody>
								<?php foreach($posts as $val){ ?>
								  <tr>
									<td><?php print $val->menu_order ?>  |  
									<a title="Edit" href="<?php echo base_url()."page/whatweoffer/".encode_url($val->ID) ?>" class=""><i class="fa fa-wrench fa-lg"></i></a>
									
									</td>
									<td><?php print $val->post_title ?></td>
									<td><?php print $val->post_content ?></td>
									<td><center><a title="Hapus" href="<?php echo base_url()."page/whatweoffer/".encode_url($val->ID)."/delete" ?>" class=""><i class="fa fa-trash-o fa-lg"></i></a></center></td>
								  </tr>
								<?php } ?>
								</tbody>
							</table>
							<!-- /.table -->
						</div>
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