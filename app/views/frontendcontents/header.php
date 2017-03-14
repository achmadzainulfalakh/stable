<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!--==============================
              header
=================================-->
<header style="background: url(<?php echo $this->settings_model->get_options('backgroundimgheader') //mendapatkan url situs gambar background ?>) center 0 no-repeat;">
  <div class="container">
    <div class="row">
      <div class="grid_12 rel">
        <h1>
          <a href="<?php echo base_url() ?>">
            <img src="<?php echo $this->settings_model->get_options('site_icon_url') //mendapatkan url situs icon ?>" alt="Logo">
          </a>
        </h1>
      </div>
    </div>
  </div>
  <section id="stuck_container" >
