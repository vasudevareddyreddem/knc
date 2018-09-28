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
				  	  <script>
				  function scrollToBottom() {
						var div = document.getElementById('chat_div1');
						div.scrollTop = div.scrollHeight - div.clientHeight;
					}
				  </script>
                 <?php exit; ?>