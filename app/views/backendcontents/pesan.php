        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Message</h1>
		
							<!-- table -->
							<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								  <tr>
									<th>Read</th>
									<th>Name</th>
									<!-- <th>Email</th> -->
									<th>Phone</th>
									<!-- <th>Message</th> -->
									<th>Status</th>
									<th>Time</th>
									<th>Delete</th>
								  </tr>
								</thead>
								<tbody>
								<?php foreach($data as $val){ ?>
								  <tr>
									<td><a title="Baca Pesan" href="<?php echo base_url()."pesan/read/".encode_url($val->ID) ?>" class=""><i class="fa fa-envelope fa-lg"></i></a></td>
									<td><?php print $val->name ?></td>
									<!-- <td><?php //print $val->email ?></td> -->
									<td><?php print $val->phone ?></td>
									<!-- <td><?php //print $val->message ?></td> -->
									<td><?php print $val->status ?></td>
									<td><?php print $val->date ?></td>
									<td><center><a title="Hapus Pesan" href="<?php echo base_url()."pesan/read/".encode_url($val->ID)."/delete" ?>" class=""><i class="fa fa-trash-o fa-lg"></i></a></center></td>
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




