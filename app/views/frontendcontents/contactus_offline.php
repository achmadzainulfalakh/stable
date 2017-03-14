<?php 
$contactus=array('post_name'=>'contactus');
$contactus=$this->posts_model->get_post_by($contactus);
?>
<!--=====================
          Content
======================-->
<section id="content" class="line-bottom">
	<div class="container landing-container" id="Contact-Us" style="padding-top:80px;">
	
	<div class="row" >
		<div  class="col-xs-12 col-sm-12">
			<div class="map">
			  <figure class="">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
			  </figure>
			</div>
		</div>
	</div>
	<div class="row" >
		<div  class="col-xs-12 col-sm-4">
			<h3><?php print $contactus->post_title ?></h3>
		</div>
		<div class="col-xs-12 col-sm-8">
			<h3>Send Us E-Mail:</h3>
		</div>
	</div><br/>
	<div class="row" >
			<div class="col-xs-12 col-sm-4">	
					<?php print $contactus->post_content ?>
					
				
			</div>
			<div class="col-xs-12 col-sm-8">
				 <?php $this->load->view('frontendcontents/formmail_offline');?>
			</div>
		</div>

		<div class="row" >
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<h3>Call number:</h3>
				<div class="text3">
				  <?php echo $this->settings_model->get_options('admin_telp') //mendapatkan email admin ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<h3>E-mail:</h3>
				<div class="text3">
				  <a href="mail.google.com"><?php echo $this->settings_model->get_options('admin_email') //mendapatkan nama admin ?></a>
				</div>
			</div>
		</div>

	</div>
  <br/>
</section>
