<?php 
$where=array('post_type'=>'ourclients');
$orderby='menu_order';
$posts=$this->posts_model->get_post_orderby($where,$orderby); 
?>
<!--=====================
          Content
======================-->
<section id="content" class="line-bottom">
  <div class="container landing-container" id="Our-Client" style="padding-top:80px">
    <div class="row" >
      <?php foreach($posts as $val){ ?>
      <div class="col-xs-12 col-sm-3 col-md-3" style="height: 200px">
        <h3><?php echo $val->post_content ?><?php //print $posts->post_title ?><?php //print $val->post_title ?></h3>
      </div>
      <?php } ?>
    </div>
	<br/>
	<?php print $posts->post_content ?>
  </div>
  <br/>
</section>
<?php
//Backup content don't remove
/*

<section id="content" class="line-bottom">
  <div class="container landing-container" id="Our-Client" style="padding-top:80px">
    <div class="row" >
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h3>Our Client</h3>
      </div>
    </div>
	<br/>
	<div class="row" >
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-bottom: 20px;">
			<center>
			<img src="<?php echo base_url() ?>assets/images/ourclient_03.png" alt="ourclient" class="img-responsive">
			</center>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-bottom: 20px;">
			<center>
			<img src="<?php echo base_url() ?>assets/images/ourclient_04.png" alt="ourclient" class="img-responsive">
			</center>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-bottom: 20px;">
			<center>
			<img src="<?php echo base_url() ?>assets/images/ourclient_05.png" alt="ourclient" class="img-responsive">
			</center>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-bottom: 20px;">
			<center>
			<img src="<?php echo base_url() ?>assets/images/ourclient_06.png" alt="ourclient" class="img-responsive">
			</center>
		</div>
	</div>
	
	<div class="row" >
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-bottom: 20px;">
			<center>
			<img src="<?php echo base_url() ?>assets/images/ourclient_09.png" alt="ourclient" class="img-responsive">
			</center>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-bottom: 20px;">
			<center>
			<img src="<?php echo base_url() ?>assets/images/ourclient_12.png" alt="ourclient" class="img-responsive">
			</center>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-bottom: 20px;">
			<center>
			<img src="<?php echo base_url() ?>assets/images/ourclient_15.png" alt="ourclient" class="img-responsive">
			</center>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-bottom: 20px;">
			<center>
			<img src="<?php echo base_url() ?>assets/images/ourclient_16.png" alt="ourclient" class="img-responsive">
			</center>
		</div>
	</div>
	<div class="row" >
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-bottom: 20px;">
			<center>
			<img src="<?php echo base_url() ?>assets/images/ourclient_20.png" alt="ourclient" class="img-responsive">
			</center>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-bottom: 20px;">
			<center>
			<img src="<?php echo base_url() ?>assets/images/ourclient_23.png" alt="ourclient" class="img-responsive">
			</center>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-bottom: 20px;">
			<center>
			<img src="<?php echo base_url() ?>assets/images/ourclient_24.png" alt="ourclient" class="img-responsive">
			</center>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding-bottom: 20px;">
			<center>
			<img src="<?php echo base_url() ?>assets/images/ourclient_26.png" alt="ourclient" class="img-responsive ">
			</center>
		</div>
	</div>
  </div>
  <br/>
</section>

*/
?>