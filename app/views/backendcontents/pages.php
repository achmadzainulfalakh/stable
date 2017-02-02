        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pages <span><a href="<?php echo base_url() ?>pages/page_add.html" class="btn btn-primary"><i class="fa fa-plus "></i></a></span></h1>

						<?php foreach($pages as $val){ ?>
						
						<div class="col-lg-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<a href="<?php echo base_url().'pages/page_edit/'.encode_url($val->ID) ?>" class="btn btn-success btn-default"><i class="fa fa-wrench"></i></a>
									<b><?php echo $val->post_title ?></b>
									<a href="<?php echo base_url().'pages/page_delete/'.encode_url($val->ID) ?>" class="btn btn-danger pull-right"><i class="fa fa-trash-o"></i></a>
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body">
									<!--<p>Publisher: <?php //echo $val->post_author ?></p>									
									-->
								</div>
								<!-- /.panel-body -->
							</div>
							<!-- /.panel -->
						</div>
						<!-- /.col-lg-4 -->
						
						<?php } ?>
						
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->




