        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Gallery</h1>
						

						<div class="col-lg-12">
							<div class="panel panel-default">
								
								<div class="panel-heading">
									<?php echo $imgname ?>
									<button id="do_trashimg" class="pull-right"><i class="fa fa-trash-o"></i></button>
									<script>
									$(document).ready(function(){
										$("#do_trashimg").click(function(){
											 //var txt = $("#imgname").val();
											 $.get("<?php echo base_url()."gallery/delimage/".$imgname ?>",  function(data, status){
												//alert("Data: " + data + "\nStatus: " + status);
												alert("Gambar terhapus.")
												window.location.assign("<?php echo base_url()."gallery" ?>")
											});
										});
									});
									</script>
									
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body">
									
								<center><img src="<?php echo $imglink ?>" class="img-responsive thumbnail" style="min-height:200px;max-height:200px" alt="<?php echo $imgname ?>" /></center><br />
								<div class="form-group">
								<label>Nama: </label><input class="form-control" type="text" value="<?php echo $imgname ?>" name="imgname" id="imgname" >
								<button id="do_renameimg" class="pull-right"><i class="fa fa-edit"></i></button>
									<script>
									$(document).ready(function(){
										$("#do_renameimg").click(function(){
											 var txtnewname = $("#imgname").val();
											 
											 $.get("<?php echo base_url()."gallery/renameimage/".$imgname."/" ?>"+txtnewname,  function(data, status){
												//alert("Data: " + data + "\nStatus: " + status);
												alert("Nama gambar berubah.")
												window.location.assign("<?php echo base_url()."gallery" ?>")
											});
										});
									});
									</script>
								<label>Alt: </label><input class="form-control" type="text" value="<?php echo $imgalt ?>" name="imgalt" id="imgalt" >
								<label>Link: </label><input class="form-control" type="text" value="<?php echo $imglink ?>" name="imglink" id="imglink" >
								</div>
								

								
								
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




