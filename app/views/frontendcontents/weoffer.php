<?php 
$where=array('post_type'=>'whatweoffer');
$orderby='menu_order';
$posts=$this->posts_model->get_post_orderby($where,$orderby); 
?>
<!--=====================
          Content
======================-->
  <article class="content_gray offset__1 line-bottom line-top">
    <div class="container landing-container" id="What-We-Offer" style="padding-top:80px">
		<div class="row">
			<div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			  <h3>What We Offer</h3>
			</div>
		</div>
	<br/>
		
		<div class="row" style="padding-bottom:40px">
			<?php foreach($posts as $val){ ?>
				<div class="col-lg-4 col-sm-6" style="padding-bottom:40px">
					<div class="row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
							<div class="block-3">
								<div class="count"><?php echo $val->menu_order ?></div>
							</div>
						</div>
						<div class="col-xs-8 col-sm-9 col-md-8 col-lg-9">
							<div class="extra_wrapper">
								<div class="text1" style="padding-top:20px;min-height:66px"><a href="#What-We-Offer" data-toggle="popover" title="<?php print $val->post_title ?>" data-content="<?php echo $val->post_content ?>"><?php print $val->post_title ?></a></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
						</div>
						<div class="col-xs-8 col-sm-9 col-md-8 col-lg-9"><?php $find = array(")","("," ","+","-");?>
							<div class="extra_wrapper" >
								<?php print substr($val->post_content,0,300) ?> 
							</div>
							  
							<script>
							$(document).ready(function(){
								$('[data-toggle="popover"]').popover({placement: "bottom"});   
							});
							</script>

						</div>
					</div>
				</div>
			<?php } ?>	
				
		</div>
	
    </div>
    <br/>
  </article>

 <?php
//Backup content don't remove
/*

  <article class="content_gray offset__1 line-bottom line-top">
    <div class="container landing-container" id="What-We-Offer" style="padding-top:80px">
		<div class="row">
			<div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			  <h3>What We Offer</h3>
			</div>
		</div>
	<br/>
		
		<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" >
			<div class="col-xs-4 col-sm-2 col-md-4 col-lg-3">
			<div class="block-3">
				<div class="count">1</div>
			</div>
			</div>
			<div class="col-xs-8 col-sm-10 col-md-8 col-lg-9">
            <div class="extra_wrapper">
              
              <div class="text1" style="padding-top:20px"><a href="#">INTERNET CONNECTION</a></div>
			  <?php
				$p1="Layanan Internet dengan paket data beda bandwidth antara Global IX (international content) dan Domestik IIX / Open IXP (local content) dengan kapasitas yang simetris antara download dan upload 1:1 sesuai dengan kebutuhan pelanggal, dengan strategi implementasi untuk segment perkantoran, Pabrik, Cafe, Hotel dan Exhibition Center.

					SARANA LINTAS DATA menyediakan fasilitas manajemen koneksi akses ke Internet secara dedicated routing dengan kecepatan yang bervariasi.

					Dengan layanan ini pelanggan dapat menikmati layanan akses Internet secara dedicated routing dengan kenyamanan akses selama 24 jam sehari dengan performansi yang handal.
					";
				echo substr($p1,0,300);
				?>
			</div>
			</div>
          
        </div>
		
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding-bottom:20px">
			<div class="col-xs-4 col-sm-2 col-md-4 col-lg-3">
			<div class="block-3">
				<div class="count">2</div>
			</div>
			</div>
			<div class="col-xs-8 col-sm-10 col-md-8 col-lg-9">
            <div class="extra_wrapper">
              <div class="text1" style="padding-top:20px"><a href="#">DEDICATED AND CO-LOCATION SERVER</a></div>
				<?php
				$p2="SARANA LINTAS DATA Layanan hosting server atau penitipan server di data center segingga server anda dapat diakses dari internet by remote. Anda hanya cukup membawa server dana kami yang menyediakan tempat, listrik dan koneksi internet.
	
				Layanan colocation server kami berada di Gedung Cyber, Jakarta-Indonesia dan di Gedung Intiland, Surabaya-Indonesia.";
				echo substr($p2,0,300);
				?>  
            </div>
			</div>
          
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding-bottom:20px">
			<div class="col-xs-4 col-sm-2 col-md-4 col-lg-3">
			<div class="block-3">
				<div class="count">3</div>
			</div>
			</div>
			<div class="col-xs-8 col-sm-10 col-md-8 col-lg-9">
            <div class="extra_wrapper">
              <div class="text1" style="padding-top:20px"><a href="#">MATV (MASTER ANTENA TV)</a></div>
              <?php
				$p3="Kami juga menyediakan kebuutuhan klien yaitu MATV (Master Antena TV), dimana perangkat HeadEnd kami konsepkan secara matang untuk memenuhi kebutuhan Chanel TV premium di Hotel dan Apartemen anda.

				Kami juga melayani kebutuhan pelanggan dalam jasa instalasi CATV (Client Antenna TV).
				";
				echo substr($p3,0,300);
				?>   
            </div>
			</div>
          
        </div>
		</div>
	
    </div>
    <br/>
  </article>

*/
?>
