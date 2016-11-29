
<!--=====================
          Modal email confirm
======================-->
<!-- Modal -->
<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thank for your email.</h4>
        </div>
        <div class="modal-body">
          <p><?php $name="nama";echo "Name: ".$name?></p>
		  <p><?php $email="email";echo "Email: ".$email?></p>
		  <p><?php $phone="phone";echo "Phone: ".$phone?></p>
		  <p><?php $message="message";echo "Message: ".$message?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>