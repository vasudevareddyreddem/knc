<style>
	.pad_btn{
		padding:9px 12px;
	}
</style>
<script>
$('#product_price').val("<?php echo isset($item_details['item_cost'])?$item_details['item_cost']:''; ?>");
$('#special_price').val("<?php echo isset($item_details['special_price'])?$item_details['special_price']:''; ?>");
$('#pqty').val("<?php echo isset($item_details['item_quantity'])?$item_details['item_quantity']:''; ?>");
$('#warranty_summary').val("<?php echo isset($item_details['warranty_summary'])?$item_details['warranty_summary']:''; ?>");
$('#warranty_type').val("<?php echo isset($item_details['warranty_type'])?$item_details['warranty_type']:''; ?>");
$('#service_type').val("<?php echo isset($item_details['service_type'])?$item_details['service_type']:''; ?>");
</script><?php //echo '<pre>';print_r($item_details);exit; ?>
<div class="row">
		<div class="col-md-12 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Return Policy</label>
				<textarea  placeholder="Return Policy" style="width: 1034px; height: 59px;" class="form-control" rows="3" id="return_policy" name="return_policy"><?php echo isset($item_details['return_policy'])?$item_details['return_policy']:''; ?></textarea>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Highlights</label>
				<textarea  placeholder="Highlights" style="height: 59px;" class="form-control" rows="3" id="highlights" name="highlights"><?php echo isset($item_details['highlights'])?$item_details['highlights']:''; ?></textarea>
			</div>
		</div>
	</div>
	
	<hr>
	<div class="clearfix"></div>
	<br>
	<div class="" style="position:relative;">
	<hr style="border-bottom:2px solid #006a99">
	<label style="position:absolute;top:-20px;background:#fff;border:2px solid  #006a99;border-radius:6px;padding:10px;left:0" >Specifications</label>
	
	</div><br>
  
  
<div class="clear"></div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Brand</label>
				<input type="text" class="form-control" id="pbrand" name="pbrand" value="<?php echo isset($item_details['brand'])?$item_details['brand']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Product Code</label>
				<input type="text" class="form-control" id="product_code" name="product_code" value="<?php echo isset($item_details['product_code'])?$item_details['product_code']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Processor</label>
				<input type="text" class="form-control" id="Processor" name="Processor" value="<?php echo isset($item_details['Processor'])?$item_details['Processor']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Screen Size</label>
				<input type="text" class="form-control"  id="screen_size" name="screen_size" value="<?php echo isset($item_details['screen_size'])?$item_details['screen_size']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Internal Memory</label>
				<input type="text" class="form-control" onchange="changememory(this.value);" id="internal_memeory" name="internal_memeory" value="<?php echo isset($item_details['internal_memeory'])?$item_details['internal_memeory']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Camera</label>
				<input type="text" class="form-control"  id="camera" name="camera" value="<?php echo isset($item_details['camera'])?$item_details['camera']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Sim Type</label>
				<input type="text" class="form-control" onchange="changesimtype(this.value);" id="sim_type" name="sim_type" value="<?php echo isset($item_details['sim_type'])?$item_details['sim_type']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">OS</label>
				<input type="text" class="form-control" id="os" name="os" value="<?php echo isset($item_details['os'])?$item_details['os']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Colour</label>
				<input type="text" class="form-control" id="colour" name="colour" value="<?php echo isset($item_details['colour'])?$item_details['colour']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">RAM</label>
				<input type="text" class="form-control" id="ram" name="ram" value="<?php echo isset($item_details['ram'])?$item_details['ram']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Model Name</label>
				<input type="text" class="form-control" id="model_name" name="model_name" value="<?php echo isset($item_details['model_name'])?$item_details['model_name']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Model ID</label>
				<input type="text" class="form-control" id="model_id" name="model_id" value="<?php echo isset($item_details['model_id'])?$item_details['model_id']:''; ?>" >
			</div>
		</div>
	</div>
	<label for="exampleInputEmail1">Memory :</label>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Internal Memory</label>
				<input type="text" class="form-control" id="internal_memory" name="internal_memory" value="<?php echo isset($item_details['internal_memory'])?$item_details['internal_memory']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Expandable Memory</label>
				<input type="text" class="form-control" id="expand_memory" name="expand_memory" value="<?php echo isset($item_details['expand_memory'])?$item_details['expand_memory']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<br>
	<div class="" style="position:relative;">
	<hr style="border-bottom:2px solid #006a99">
	<label style="position:absolute;top:-20px;background:#fff;border:2px solid  #006a99;border-radius:6px;padding:10px;left:0" >Camera & Video Features</label>
	
	</div><br>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Primary Camera</label>
				<input type="text" class="form-control" id="primary_camera" name="primary_camera" value="<?php echo isset($item_details['primary_camera'])?$item_details['primary_camera']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Primary Camera Features</label>
				<input type="text" class="form-control" id="primary_camera_feature" name="primary_camera_feature" value="<?php echo isset($item_details['primary_camera_feature'])?$item_details['primary_camera_feature']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Secondary Camera</label>
				<input type="text" class="form-control" id="secondary_camera" name="secondary_camera" value="<?php echo isset($item_details['secondary_camera'])?$item_details['secondary_camera']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Secondary Camera Features </label>
				<input type="text" class="form-control" id="secondary_camera_feature" name="secondary_camera_feature" value="<?php echo isset($item_details['secondary_camera_feature'])?$item_details['secondary_camera_feature']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Video Recording</label>
				<input type="text" class="form-control" id="video_recording" name="video_recording" value="<?php echo isset($item_details['video_recording'])?$item_details['video_recording']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">HD Recording</label>
				<input type="text" class="form-control" id="hd_recording" name="hd_recording" value="<?php echo isset($item_details['hd_recording'])?$item_details['hd_recording']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Flash</label>
				<input type="text" class="form-control" id="flash" name="flash" value="<?php echo isset($item_details['flash'])?$item_details['flash']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Other Camera Features</label>
				<input type="text" class="form-control" id="other_camera_features" name="other_camera_features" value="<?php echo isset($item_details['other_camera_features'])?$item_details['other_camera_features']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<br>
	<div class="" style="position:relative;">
	<hr style="border-bottom:2px solid #006a99">
	<label style="position:absolute;top:-20px;background:#fff;border:2px solid  #006a99;border-radius:6px;padding:10px;left:0" >Battery & Power Features</label>
	
	</div><br>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Battery Capacity</label>
				<input type="text" class="form-control" id="battery_capacity" name="battery_capacity" value="<?php echo isset($item_details['battery_capacity'])?$item_details['battery_capacity']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Talk Time</label>
				<input type="text" class="form-control" id="talk_time" name="talk_time" value="<?php echo isset($item_details['talk_time'])?$item_details['talk_time']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Standby Time</label>
				<input type="text" class="form-control" id="standby_time" name="standby_time" value="<?php echo isset($item_details['standby_time'])?$item_details['standby_time']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<br>
	<div class="" style="position:relative;">
	<hr style="border-bottom:2px solid #006a99">
	<label style="position:absolute;top:-20px;background:#fff;border:2px solid  #006a99;border-radius:6px;padding:10px;left:0" >Internet & Connectivity</label>
	
	</div><br>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Operating Frequency</label>
				<input type="text" class="form-control" id="operating_frequency" name="operating_frequency" value="<?php echo isset($item_details['operating_frequency'])?$item_details['operating_frequency']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Preinstalled Browser</label>
				<input type="text" class="form-control" id="preinstalled_browser" name="preinstalled_browser" value="<?php echo isset($item_details['preinstalled_browser'])?$item_details['preinstalled_browser']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">2G</label>
				<input type="text" class="form-control" id="2g" name="2g" value="<?php echo isset($item_details['2g'])?$item_details['2g']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">3G</label>
				<input type="text" class="form-control" id="3g" name="3g" value="<?php echo isset($item_details['3g'])?$item_details['3g']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">4G</label>
				<input type="text" class="form-control" id="4g" name="4g" value="<?php echo isset($item_details['4g'])?$item_details['4g']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Wifi</label>
				<input type="text" class="form-control" id="wifi" name="wifi" value="<?php echo isset($item_details['wifi'])?$item_details['wifi']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">GPS</label>
				<input type="text" class="form-control" id="gps" name="gps" value="<?php echo isset($item_details['gps'])?$item_details['gps']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">USB Connectivity</label>
				<input type="text" class="form-control" id="usb_connectivity" name="usb_connectivity" value="<?php echo isset($item_details['usb_connectivity'])?$item_details['usb_connectivity']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Bluetooth</label>
				<input type="text" class="form-control" id="bluetooth" name="bluetooth" value="<?php echo isset($item_details['bluetooth'])?$item_details['bluetooth']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">NFC</label>
				<input type="text" class="form-control" id="nfc" name="nfc" value="<?php echo isset($item_details['nfc'])?$item_details['nfc']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Edge</label>
				<input type="text" class="form-control" id="edge" name="edge" value="<?php echo isset($item_details['edge'])?$item_details['edge']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Edge Features</label>
				<input type="text" class="form-control" id="edge_features" name="edge_features" value="<?php echo isset($item_details['edge_features'])?$item_details['edge_features']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<br>
	<div class="" style="position:relative;">
	<hr style="border-bottom:2px solid #006a99">
	<label style="position:absolute;top:-20px;background:#fff;border:2px solid  #006a99;border-radius:6px;padding:10px;left:0" >Multimedia Features</label>
	
	</div><br>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Music Player</label>
				<input type="text" class="form-control" id="music_player" name="music_player" value="<?php echo isset($item_details['music_player'])?$item_details['music_player']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Video Player</label>
				<input type="text" class="form-control" id="video_player" name="video_player" value="<?php echo isset($item_details['video_player'])?$item_details['video_player']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Audio Jack</label>
				<input type="text" class="form-control" id="audio_jack" name="audio_jack" value="<?php echo isset($item_details['audio_jack'])?$item_details['audio_jack']:''; ?>" >
			</div>
		</div>
	</div>
	<label for="exampleInputEmail1">Additional Features</label>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">GPU</label>
				<input type="text" class="form-control" id="gpu" name="gpu" value="<?php echo isset($item_details['gpu'])?$item_details['gpu']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Sim Size</label>
				<input type="text" class="form-control" id="sim_size" name="sim_size"  value="<?php echo isset($item_details['sim_size'])?$item_details['sim_size']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Sim Type</label>
				<input type="text" class="form-control" id="sim_supported" name="sim_supported"  value="<?php echo isset($item_details['sim_supported'])?$item_details['sim_supported']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Call Memory</label>
				<input type="text" class="form-control" id="call_memory" name="call_memory" value="<?php echo isset($item_details['call_memory'])?$item_details['call_memory']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">SMS Memory</label>
				<input type="text" class="form-control" id="sms_memory" name="sms_memory" value="<?php echo isset($item_details['sms_memory'])?$item_details['sms_memory']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Phone Book Memory</label>
				<input type="text" class="form-control" id="phone_book_memory" name="phone_book_memory" value="<?php echo isset($item_details['phone_book_memory'])?$item_details['phone_book_memory']:''; ?>" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Sensors</label>
				<input type="text" class="form-control" id="sensors" name="sensors" value="<?php echo isset($item_details['sensors'])?$item_details['sensors']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Java</label>
				<input type="text" class="form-control" id="java" name="java" value="<?php echo isset($item_details['java'])?$item_details['java']:''; ?>" >
			</div>
		</div>
	</div>
	 <div class="clearfix"></div>
	<br>
	<div class="" style="position:relative;">
	<hr style="border-bottom:2px solid #006a99">
	<label style="position:absolute;top:-20px;background:#fff;border:2px solid  #006a99;border-radius:6px;padding:10px;left:0" >In the Box</label>
	
	</div><br>
	 <div class="row">
		<div class="col-md-12 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">In Sales Package</label>
				<input type="text" class="form-control" id="insales_package" name="insales_package" value="<?php echo isset($item_details['insales_package'])?$item_details['insales_package']:''; ?>" >
			</div>
		</div>
		
	</div>
	<div class="clearfix"></div>
	<br>
	<div class="" style="position:relative;">
	<hr style="border-bottom:2px solid #006a99">
	<label style="position:absolute;top:-20px;background:#fff;border:2px solid  #006a99;border-radius:6px;padding:10px;left:0" >Display & Resolution</label>
	
	</div><br>
	
	<div class="row">
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				 <label for="exampleInputEmail1">Display & resolution</label>
				<input type="text" class="form-control" id="dislay_resolution" name="dislay_resolution" value="<?php echo isset($item_details['dislay_resolution'])?$item_details['dislay_resolution']:''; ?>" >
			</div>
		</div>
		<div class="col-md-6 form-group">
			<div class="form-group nopaddingRight san-lg">
				<label for="exampleInputEmail1">Display Type</label>
				<input type="text" class="form-control" id="display_type" name="display_type" value="<?php echo isset($item_details['display_type'])?$item_details['display_type']:''; ?>" >
			</div>
		</div>
	</div>



<script>
var room = 1;
function education_fields() {
 
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="row"><div class="col-sm-6 nopadding"><div class="form-group"> <textarea type="text" class="form-control" id="description" name="description[]" value="" placeholder="description"></textarea></div></div><div class="col-sm-6 nopadding"><div class="form-group"><div class="input-group">  <input type="file" class="form-control" id="descimg" name="descimg[]"><div class="input-group-btn"> <button class="btn btn-danger pad_btn" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div></div><div class="clear"></div>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();
   }
$(document).ready(function() {

    $('#addproduct').bootstrapValidator({
       
        fields: {
            category_id: {
					validators: {
					notEmpty: {
					message: 'Please select a category'
					}
				}
			},
			subcategorylist: {
					validators: {
					notEmpty: {
					message: 'Please select a subcategory'
					}
				}
			},
		subitemid: {
					validators: {
					notEmpty: {
					message: 'Please select a Subitem'
					}
				}
			},
		
			
			product_name: {
					validators: {
					notEmpty: {
						message: 'Product name is required'
					}
                  
				}
			},
			'description[]': {
					validators: {
					notEmpty: {
						message: 'Description is required'
					}
				}
			},
			picture1: {
					validators: {
					notEmpty: {
						message: 'Images1 is required'
					},
                   regexp: {
					regexp: /\.(jpe?g|png|gif)$/i,
					message: 'Uploaded file is not a valid image. Only JPG, PNG and GIF files are allowed'
					}
				}
			},
			product_price: {
					validators: {
					notEmpty: {
						message: 'Price is required'
					},
                   regexp: {
					regexp: /^[0-9.,]+$/,
					message: 'Price  can only consist of digits'
					}
				}
			},
			special_price: {
					validators: {
						notEmpty: {
						message: 'Special Price is required'
					},
                    between: {
                            min: 1,
                            max: 'product_price',
                            message: 'Special price must be less than or equal to price'
                        }
                }
			}
			
		
        }
    });
});
</script>

	



		