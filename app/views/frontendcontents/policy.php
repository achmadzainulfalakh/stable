<?php 
$arr=array('post_name'=>'policy');
$posts=$this->posts_model->get_post_by($arr); 
?>
<!--=====================
          Modal Policy
======================-->
  <!-- Modal -->
<div class="container">
  <div class="modal fade" id="ModalPolicy" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="padding-top:0px"><?php print $posts->post_title ?></h4>
        </div>
        <div class="modal-body">
          <?php print $posts->post_content ?>
        </div><!--
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
      
    </div>
  </div>
</div>
<?php
//Backup content don't remove
/*

  <!-- Modal -->
<div class="container">
  <div class="modal fade" id="ModalPolicy" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title" style="padding-top:0px">Policy</h4></center>
        </div>
        <div class="modal-body">
          <p>Lorem ipsum ini adalah perjanjian policy dari saranalintas data stable.</p>
		  <p>Lorem ipsum ini adalah perjanjian policy dari saranalintas data stable.</p>
		  <p>Lorem ipsum ini adalah perjanjian policy dari saranalintas data stable.</p>
		  <p>Lorem ipsum ini adalah perjanjian policy dari saranalintas data stable.</p>
        </div><!--
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
      
    </div>
  </div>
</div>

*/
?>
