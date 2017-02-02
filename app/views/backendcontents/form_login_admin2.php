<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
    <div class="container" style="padding:80px 0px;min-height:600px">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php //$hidden = array('form' => 'login'); ?>
						<?php $attributes = array('class' => 'login-form', 'id' => 'form2','role'=>'form'); ?>
						<?=form_open(base_url()."login/validasi.html",$attributes) ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="username" name="username" required autofocus />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox hidden">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
                            </fieldset>
                        </form>
						<?php 
						  if (!$pesan==""){ ?>
						  <p class="message" style="background-color: #63d8f1;padding: 10px;color: #ffffff;border-radius: 5px;">
						  <b><?php echo $pesan?></b>
						  </p><br/>
						  <?php
						  }
						  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="clearfix"></div>