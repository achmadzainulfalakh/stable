        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
			<?php $attributes = array('role' => 'form'); ?>
			<?php echo form_open(base_url()."settings/update_settings.html",$attributes) ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Settings<button type="submit" class="btn btn-default btn-lg pull-right"> Simpan </button></h1>
						

						<div class="col-lg-6">
							<div class="panel panel-default">
								
								<div class="panel-heading" data-toggle="collapse" data-target="#profile">
									<h3>Profile site<a title="Edit" href="#" ><i class="fa fa-wrench fa-fw pull-right"></i></a></h3>
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body collapse" id="profile">
									<div class="form-group">
										<label>Author</label>
										<input name="admin_name" class="form-control" value="<?php echo $this->settings_model->get_options('admin_name') //mendapatkan nama admin ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Email author</label>
										<input name="admin_email" class="form-control" value="<?php echo $this->settings_model->get_options('admin_email') //mendapatkan email admin ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Telpon author</label>
										<input name="admin_telp" class="form-control" value="<?php echo $this->settings_model->get_options('admin_telp') //mendapatkan email admin ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Deskripsi Situs(SEO):</label>
										<input name="admin_descrip" class="form-control" value="<?php echo $this->settings_model->get_options('admin_descrip') //mendapatkan deskripsi admin ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Keyword Situs(SEO):</label>
										<input name="admin_keyword" class="form-control" value="<?php echo $this->settings_model->get_options('admin_keyword') //mendapatkan keyword admin ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="panel panel-default">
								
								<div class="panel-heading" data-toggle="collapse" data-target="#attribut">
									<h3>Attribut<a title="Edit" href="#" ><i class="fa fa-wrench fa-fw pull-right"></i></a></h3>
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body collapse" id="attribut">
									<div class="form-group">
										<label>Site icon</label>
										<input name="urlicon" class="form-control" value="<?php echo $this->settings_model->get_options('site_icon_url') //mendapatkan url situs icon ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Background header</label>
										<input name="backgroundimgheader" class="form-control" value="<?php echo $this->settings_model->get_options('backgroundimgheader') //mendapatkan url situs gambar background ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Nama situs</label>
										<input name="sitename" class="form-control" value="<?php echo $this->settings_model->get_options('blogname') //mendapatkan nama situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Deskripsi situs</label>
										<input name="deskripsi" class="form-control" value="<?php echo $this->settings_model->get_options('blogdescription') //mendapatkan deskripsi situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Selogan</label>
										<input name="selogan" class="form-control" value="<?php echo $this->settings_model->get_options('selogan') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Semboyan</label>
										<input name="semboyan" class="form-control" value="<?php echo $this->settings_model->get_options('semboyan') //mendapatkan semboyan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="panel panel-default">
								
								<div class="panel-heading" data-toggle="collapse" data-target="#gridmenu">
									<h3>Grid Menu<a title="Edit" href="#" ><i class="fa fa-wrench fa-fw pull-right"></i></a></h3>
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body collapse" id="gridmenu">
									<div class="form-group">
										<label>Grid menu icon 1</label>
										<input name="gridmenuicon1" class="form-control" value="<?php echo $this->settings_model->get_options('gridmenuicon1') //mendapatkan icon grid 1 ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Grid menu 1</label>
										<input name="gridmenu1" class="form-control" value="<?php echo $this->settings_model->get_options('gridmenu1') //mendapatkan grid menu ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Grid menu link 1</label>
										<input name="gridmenulink1" class="form-control" value="<?php echo $this->settings_model->get_options('gridmenulink1') //mendapatkan link grid 1 ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Grid menu icon 2</label>
										<input name="gridmenuicon2" class="form-control" value="<?php echo $this->settings_model->get_options('gridmenuicon2') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Grid menu 2</label>
										<input name="gridmenu2" class="form-control" value="<?php echo $this->settings_model->get_options('gridmenu2') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Grid menu link 2</label>
										<input name="gridmenulink2" class="form-control" value="<?php echo $this->settings_model->get_options('gridmenulink2') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Grid menu icon 3</label>
										<input name="gridmenuicon3" class="form-control" value="<?php echo $this->settings_model->get_options('gridmenuicon3') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Grid menu 3</label>
										<input name="gridmenu3" class="form-control" value="<?php echo $this->settings_model->get_options('gridmenu3') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Grid menu link 3</label>
										<input name="gridmenulink3" class="form-control" value="<?php echo $this->settings_model->get_options('gridmenulink3') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Grid menu icon 4</label>
										<input name="gridmenuicon4" class="form-control" value="<?php echo $this->settings_model->get_options('gridmenuicon4') //mendapatkan icon grid menu 4 ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Grid menu 4</label>
										<input name="gridmenu4" class="form-control" value="<?php echo $this->settings_model->get_options('gridmenu4') //mendapatkan grid menu 4 ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Grid menu link 4</label>
										<input name="gridmenulink4" class="form-control" value="<?php echo $this->settings_model->get_options('gridmenulink4') //mendapatkan link grid menu 4 ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="panel panel-default">
								<div class="panel-heading" data-toggle="collapse" data-target="#headerfooter">
									<h3>Header - Footer<a title="Edit" href="#" ><i class="fa fa-wrench fa-fw pull-right"></i></a></h3>
								</div>
								<!-- /.panel-heading -->
								<div class="panel-body collapse" id="headerfooter">
									<div class="form-group">
										<label>Number header 1</label>
										<input name="numberheader1" class="form-control" value="<?php echo $this->settings_model->get_options('numheader1') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Text header 1</label>
										<input name="textheader1" class="form-control" value="<?php echo $this->settings_model->get_options('textheader1') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Number header 2</label>
										<input name="numberheader2" class="form-control" value="<?php echo $this->settings_model->get_options('numheader2') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Text header 2</label>
										<input name="textheader2" class="form-control" value="<?php echo $this->settings_model->get_options('textheader2') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Number header 3</label>
										<input name="numberheader3" class="form-control" value="<?php echo $this->settings_model->get_options('numheader3') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Text header 3</label>
										<input name="textheader3" class="form-control" value="<?php echo $this->settings_model->get_options('textheader3') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Number header 4</label>
										<input name="numberheader4" class="form-control" value="<?php echo $this->settings_model->get_options('numheader4') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Text header 4</label>
										<input name="textheader4" class="form-control" value="<?php echo $this->settings_model->get_options('textheader4') //mendapatkan selogan situs ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>
									<div class="form-group">
										<label>Text footer</label>
										<input name="textfooter" class="form-control" value="<?php echo $this->settings_model->get_options('textfooter') //mendapatkan text footer ?>" >
										<p class="help-block">Valid: text validasi</p>
									</div>							
								<!--<button type="submit" class="btn btn-default btn-lg col-lg-12"> Simpan </button>-->
								<!--<button type="reset" class="btn btn-default">Reset</button>-->
									
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
			</form>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->




