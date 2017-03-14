
<div class="container" style="padding-top:20px">
	<div class="row">
		
			<h2>Form Login</h2>

	</div>
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4">
		<?php echo form_open(base_url().'Loginwithcaptcha/cek_login','class="form-horizontal"');?>
			<div class="form-group">
				<label class="control-label col-sm-3">Username</label>
				<div class="col-sm-9">
					<input name="txt_username" class="form-control" type="text" placeholder="insert username" size="25" required />
				</div>
			</div>

    <div class="form-group">
        <label class="control-label col-sm-3">Email</label>
        <div class="col-sm-9"><input name="txt_email" class="form-control" type="email" placeholder="insert email" required /></div>
      </div>
   
    <div class="form-group">
        <label class="control-label col-sm-3">Captcha</label>
		<div class="col-sm-9">
		<input name="txt_chaptca" class="form-control" type="text" placeholder="type chaptca" required />
		</div>
		<br/><br/><br/>
		<div class="col-sm-3"></div>
		<div class="col-sm-9 bg-info">
		
        <center><span style="font-size:30px; color:blue;"><?php echo $chaptca ?></span></center>
		
		</div>
        <div class="col-sm-9">
          
		  <input type="hidden" name="txt_chaptca_real" value="<?php echo $chaptca ?>">
        </div>
        
      </div>
     
    <div class="form-group">
        <div class="col-sm-8"></div>
		<div class="col-sm-4">
		<input style="width:100%" class="btn" value="Submit" name="login" type="submit" />
		</div>
      </div>


<?php echo form_close();?>
</div>
</div>
</div>