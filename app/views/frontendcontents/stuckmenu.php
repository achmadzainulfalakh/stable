<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!--==============================
              Stuck menu
  =================================-->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="navigation ">
            <nav id="myNavbar">
				<!--<div class="collapse navbar-collapse" >-->
					<ul class="nav navbar-nav sf-menu" >
						<li class="current"><a href="<?php echo base_url() ?>site.html">Home</a></li>
						<li><a href="#About">About</a></li>
						<li><a href="#Product">Product</a></li>
						<li><a href="#What-We-Offer">What We Offer</a></li>
						<li><a href="#Contact-Us">Contacts</a></li>
						<li><a href="#Our-Client">Our Client</a></li>
					</ul>
				<!--</div>-->
            </nav>
            <div class="clear"></div>
          </div>  
		  
         <div class="clear"></div>  
        </div>
     </div> 
    </div> 
	


<!--	
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>

    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Section 1</a></li>
          <li><a href="#section2">Section 2</a></li>
          <li><a href="#section3">Section 3</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Section 4-1</a></li>
              <li><a href="#section42">Section 4-2</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>-->
  </section>
  <section class="page1_header">
    <div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<div class="row">
				<a href="<?php echo $this->settings_model->get_options('gridmenulink1') //mendapatkan link grid 1 ?>" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 grow bga mygrid scroll" style="text-decoration:none"><div class="maxheight1">
				<div class="<?php echo $this->settings_model->get_options('gridmenuicon1') //mendapatkan icon grid 1 ?>"></div><?php echo $this->settings_model->get_options('gridmenu1') //mendapatkan grid menu ?></div>
				</a>
				<a href="<?php echo $this->settings_model->get_options('gridmenulink2') //mendapatkan link grid 2 ?>" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 grow bgb mygrid scroll" style="text-decoration:none"><div class="maxheight1">
				<div class="<?php echo $this->settings_model->get_options('gridmenuicon2') //mendapatkan icon grid 2 ?>"></div><?php echo $this->settings_model->get_options('gridmenu2') //mendapatkan grid menu ?></div>
				</a>
				</div>
				<div class="row">
				<a href="<?php echo $this->settings_model->get_options('gridmenulink3') //mendapatkan link grid 3 ?>" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 grow bgb mygrid scroll" style="text-decoration:none"><div class="maxheight1">
				<div class="<?php echo $this->settings_model->get_options('gridmenuicon3') //mendapatkan icon grid 3 ?>"></div><?php echo $this->settings_model->get_options('gridmenu3') //mendapatkan grid menu ?></div>
				</a>
				<a href="<?php echo $this->settings_model->get_options('gridmenulink4') //mendapatkan link grid 4 ?>" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 grow bga mygrid scroll" style="text-decoration:none"><div class="maxheight1">
				<div class="<?php echo $this->settings_model->get_options('gridmenuicon4') //mendapatkan icon grid 4 ?>"></div><?php echo $this->settings_model->get_options('gridmenu4') //mendapatkan grid menu ?></div>
				</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8">
				<div class="row">
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
				  <h2 class="hidden-xs"><?php echo $this->settings_model->get_options('selogan') //mendapatkan selogan situs ?></h2>
				</div>
				</div>
				<div class="row">
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-8">
				  <?php echo $this->settings_model->get_options('semboyan') //mendapatkan semboyan situs ?>
				</div>
				</div>
			</div>
		</div>
    </div>
  </section>
</header>
