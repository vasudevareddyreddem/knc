<div class="content-wrapper" style="padding-top:80px;">
	 <div class="col-md-8 col-md-offset-2" >
              <!-- DIRECT CHAT -->
              <div class="box box-primary direct-chat direct-chat-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Message Chat</h3>
					<a class="btn btn-primary btn-flat" style="float:right" href="<?php echo base_url('inventory/sellernitificationlist'); ?>">Back</a>
                </div>
				
                <!-- /.box-header -->
                <div class="box-body">
				
				
                  <!-- Conversations are loaded here -->
				  <span id="recent_chat_list">
                  <div class="direct-chat-messages" id="chat_div1">
				  <?php //echo '<pre>';print_r($seller_notification_details);exit; ?>
				  <?php foreach ($seller_notification_details as $notification){ ?>
					<?php if($notification['message_type']=='REPLY'){ ?>
				  <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left"><?php echo isset($notification['seller_name'])?$notification['seller_name']:''; ?> </span>
                        <span class="direct-chat-timestamp pull-right"><?php echo date('M j h:i A',strtotime(htmlentities($notification['created_at'])));?></span>
                      </div>
                      <!-- /.direct-chat-info -->
					  <?php if($notification['profile_pic']!=''){ ?>
					       <img class="direct-chat-img" src="<?php echo base_url('uploads/profile/'.$notification['profile_pic']); ?>" alt="<?php echo $notification['profile_pic']; ?>"><!-- /.direct-chat-img -->
					  <?php }else{ ?>
					   <img class="direct-chat-img" src="<?php echo base_url('uploads/profile/'); ?>/default.jpg" alt="Logo"><!-- /.direct-chat-img -->

					  <?php } ?>
                      <div class="direct-chat-text">
                        <?php echo $notification['seller_message']; ?>
                      </div>
                    </div>
					<?php } ?>
					<?php if($notification['message_type']=='REPLIED'){ ?>

					<div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right"><?php echo isset($notification['cust_firstname'])?$notification['cust_firstname']:''; ?>&nbsp;<?php echo isset($notification['cust_lastname'])?$notification['cust_lastname']:''; ?></span>
                        <span class="direct-chat-timestamp pull-left"><?php echo date('M j h:i A',strtotime(htmlentities($notification['created_at'])));?></span>
                      </div>
                      <!-- /.direct-chat-info -->
						<?php if($notification['cust_propic']!=''){ ?>
					   <img class="direct-chat-img" src="<?php echo base_url('uploads/profile/'.$notification['cust_propic']); ?>" alt="<?php echo $notification['cust_propic']; ?>"><!-- /.direct-chat-img -->
						<?php }else{ ?>
					   <img class="direct-chat-img" src="<?php echo base_url('uploads/profile/'); ?>/default.jpg" alt="Logo"><!-- /.direct-chat-img -->
						<?php } ?>  
						<div class="direct-chat-text">
                        <?php echo $notification['seller_message']; ?>
                      </div>
                    </div>
					<?php } ?>
                  <?php } ?>

				  
				  
                  </div>
				  </span>
            

                 
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="form-group" style="padding:0">
					<div class="col-md-10" style="padding:0">
                      <input type="text" name="message" id="message" placeholder="Type Message ..." class="form-control">
                          <input type="hidden" name="seller_id" id="seller_id"  value="<?php echo $notification['seller_id']; ?>">
					</div>
					<div class="col-md-2" style="padding:0">
						  <span class="input-group-btn">
                            <button type="button" onclick="send_sms();" class="btn btn-primary btn-flat">Send</button>
                          </span>
                    </div>
                    </div>
                  
                </div>
                <!-- /.box-footer-->
              </div>
              <!--/.direct-chat -->
			  <br>

            </div>
			<div class="clearfix"><br>
<br>
<br></div>

</div>
<script type="text/javascript">
var div = document.getElementById('chat_div1');
   div.scrollTop = div.scrollHeight - div.clientHeight;
   setInterval(send_sms_refresh, 10000);
   function send_sms_refresh(){
	   var s_id=$('#seller_id').val();
	   jQuery.ajax({
                    url: "<?php echo base_url('inventory/adminnotificationreply_refresh');?>",
                    data: {
                        seller_id:s_id,
                    },
                    type: "POST",
                    format: "html",
                    success: function(data) {
						$('#subject').val('');
						$('#message').val('');
						//alert(data);
                        $("#recent_chat_list").empty();
                        $("#recent_chat_list").append(data);
                        scrollToBottom('chat_div1');
                    }
                });
   }
   function send_sms(){
	
	var msg=$('#message').val();
	var s_id=$('#seller_id').val();
	if(s_id!='' && msg!=''){
	jQuery.ajax({
                    url: "<?php echo base_url('inventory/adminnotificationreply');?>",
                    data: {
                        message:msg,
                        seller_id:s_id,
                    },
                    type: "POST",
                    format: "html",
                    success: function(data) {
						$('#subject').val('');
						$('#message').val('');
						//alert(data);
                        $("#recent_chat_list").empty();
                        $("#recent_chat_list").append(data);
                        scrollToBottom('chat_div1');
                    }
                });
	}else{
		
		
	}
}

$(document).ready(function() {
    $('#sendmsg').bootstrapValidator({
       
        fields: {
            message: {
              validators: {
					notEmpty: {
						message: 'Message is required'
					}
                   
                }
            }
        }
    });
});
</script>
