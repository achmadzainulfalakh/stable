<?php echo form_open('site/pesan','id="contact-form"')?>
                  <div class="contact-form-loader"></div>
                  <fieldset>
                  
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<label class="name">
						  <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />
						  <span class="empty-message">*This field is required.</span>
						  <span class="error-message">*This is not a valid name.</span>
						</label>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<label class="email">
						  <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
						  <span class="empty-message">*This field is required.</span>
						  <span class="error-message">*This is not a valid email.</span>
						</label>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<label class="phone">
						  <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
						  <span class="empty-message">*This field is required.</span>
						  <span class="error-message">*This is not a valid phone.</span>
						</label>
						</div> 
					<div class="clearfix"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<label class="message">
                      <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                      <span class="empty-message">*This field is required.</span>
                      <span class="error-message">*The message is too short.</span>
                    </label>
					</div>
					
					<div class="clearfix"></div>
					<div class="col-sm-6">
						<div class="form-group">
							
							<input type="hidden" name="txt_chaptca_real" value="<?php echo $chaptca ?>" readonly />
							
							
							<h1><del><?php echo $chaptca ?></del></h1>

						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input name="txt_chaptca" class="form-control" type="text" placeholder="type chaptca" required />
							<button type="submit" class="btn col-sm-6 pull-right">Send</button>	
						</div>
					</div>
						
						<?php //echo $chaptca ?>
						
								
					
                  </fieldset> 
                  <div class="modal fade response-message">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                          You message has been sent! We will be in touch soon.
                        </div>      
                      </div>
                    </div>
                  </div>
<?php echo form_close(); ?>
				