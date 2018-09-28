<!-- daily wise list-->

<style>
.canvasjs-chart-credit{
	display:none;
}.canvasjs-chart-toolbar{
	display:none;
}
</style>
<?php
//echo '<pre>';print_r($dailywise);exit;
$h01=$h02=$h03=$h04=$h05=$h06=$h07=$h08=$h09=$h10=$h11=$h12=$h13=$h14=$h15=$h16=$h17=$h18=$h19=$h20=$h21=$h22=$h23=$h24=0;
if(isset($dailywise) && count($dailywise)>0){
	foreach ($dailywise as $cri){
		$dat1 = explode(" ", $cri['create_at']);
		$dat = explode(":", $dat1[1]);
		//echo '<pre>';print_r($dat);
		if($dat[0] == 01)
		{
			$h01++;
		}if($dat[0] == 02)
		{
			$h02++;
		}if($dat[0] == 03)
		{
			$h03++;
		}if($dat[0] == 04)
		{
			$h04++;
		}if($dat[0] == 05)
		{
			$h05++;
		}if($dat[0] == 06)
		{
			$h06++;
		}if($dat[0] == 07)
		{
			$h07++;
		}if($dat[0] == 08)
		{
			$h08++;
		}if($dat[0] == 09)
		{
			$h09++;
		}
		if($dat[0] ==10)
		{
			$h10++;
		}if($dat[0] ==11)
		{
			$h11++;
		}if($dat[0] ==12)
		{
			$twel++;
		}if($dat[0] ==13)
		{
			$h13++;
		}if($dat[0] ==14)
		{
			$h14++;
		}if($dat[0] ==15)
		{
			$h15++;
		}if($dat[0] ==16)
		{
			$h16++;
		}if($dat[0] ==17)
		{
			$h17++;
		}if($dat[0] ==18)
		{
			$h18++;
		}if($dat[0] ==19)
		{
			$h19++;
		}if($dat[0] ==20)
		{
			$h20++;
		}if($dat[0] ==21)
		{
			$h21++;
		}if($dat[0] ==22)
		{
			$h22++;
		}if($dat[0] ==23)
		{
			$h23++;
		}if($dat[0] ==24)
		{
			$h24++;
		}
		//echo '<pre>';print_r($dat[3]);
	}
	//exit;
}

$year11=date("Y",strtotime("-4 year")); 
$year22=date("Y",strtotime("-3 year")); 
$year33=date("Y",strtotime("-2 year")); 
$year44=date("Y",strtotime("-1 year")); 
$year55=date("Y"); 
$year66=date("Y",strtotime("+1 year")); 
$year1=$year2=$year3=$year4=$year5=$year6=0;
if(isset($yearwise) && count($yearwise)>0){
foreach ($yearwise as $cri){
$dat = explode("-", $cri['create_at']);
	if($dat[0] == $year11)
	{
	$year1++;
	}
	if($dat[0] == $year22)
	{
		$year2++;
	}
	if($dat[0] == $year33)
	{
		$year3++;
	}
	if($dat[0] == $year44)
	{
		$year4++;
	}if($dat[0] == $year55)
	{
		$year5++;
	}if($dat[0] == $year66)
	{
		$year6++;
	}
}	
}

$dec1=$jan1=$feb1=$mar1=$apr1=$may1=$jun1=$jul1=$aug1=$sep1=$oct1=$nov1=0;
if(isset($monthwise) && count($monthwise)>0){
foreach ($monthwise as $cri){
$dat = explode("-", $cri['create_at']);
	if($dat[1] == 12)
	{
	$dec1++;
	}
	if($dat[1] == 11)
	{
		$nov1++;
	}
	if($dat[1] == 10)
	{
		$oct1++;
	}
	if($dat[1] == '09')
	{
		$sep1++;
	}if($dat[1] == '08')
	{
		$aug1++;
	}if($dat[1] == '07')
	{
		$jul1++;
	}if($dat[1] == '06')
	{
		$jun1++;
	}if($dat[1] == '05')
	{
		$may1++;
	}if($dat[1] == 04)
	{
		$apr1++;
	}if($dat[1] == 03)
	{
		$mar1++;
	}if($dat[1] == 02)
	{
		$feb1++;
	}if($dat[1] == 01)
	{
		$jan1++;
	}
}	
} 
$year_wise_list = array(
    	array("y" => isset($year1)?$year1:'', "label" => $year11),
    	array("y" => isset($year2)?$year2:'', "label" => $year22),
    	array("y" => isset($year3)?$year3:'', "label" => $year33),
    	array("y" => isset($year4)?$year4:'', "label" => $year44),
    	array("y" => isset($year5)?$year5:'', "label" => $year55),
    	array("y" => isset($year6)?$year6:'', "label" => $year66),
     );
$month_wise_list = array(
    	array("y" => isset($jan1)?$jan1:'', "label" => "January"),
    	array("y" => isset($feb1)?$feb1:'', "label" => "February"),
    	array("y" => isset($mar1)?$mar1:'', "label" => "March"),
    	array("y" => isset($apr1)?$apr1:'', "label" => "April"),
    	array("y" => isset($may1)?$may1:'', "label" => "May"),
    	array("y" => isset($jun1)?$jun1:'', "label" => "June"),
    	array("y" => isset($jul1)?$jul1:'', "label" => "July"),
    	array("y" => isset($aug1)?$aug1:'', "label" => "August"),
    	array("y" => isset($sep1)?$sep1:'', "label" => "September"),
    	array("y" => isset($oct1)?$oct1:'', "label" => "October"),
    	array("y" => isset($nov1)?$nov1:'', "label" => "November"),
    	array("y" => isset($dec1)?$dec1:'', "label" => "December"),
    );
$daily_wise_list = array(
    	array("y" => isset($h01)?$h01:'', "label" => "01 AM"),
    	array("y" => isset($h02)?$h02:'', "label" => "02 AM"),
    	array("y" => isset($h03)?$h03:'', "label" => "03 AM"),
    	array("y" => isset($h04)?$h04:'', "label" => "04 AM"),
    	array("y" => isset($h05)?$h05:'', "label" => "05 AM"),
    	array("y" => isset($h06)?$h06:'', "label" => "06 AM"),
    	array("y" => isset($h07)?$h07:'', "label" => "07 AM"),
    	array("y" => isset($h08)?$h08:'', "label" => "08 AM"),
    	array("y" => isset($h09)?$h09:'', "label" => "09 AM"),
    	array("y" => isset($h10)?$h10:'', "label" => "10 AM"),
    	array("y" => isset($h11)?$h11:'', "label" => "11 AM"),
    	array("y" => isset($h12)?$h12:'', "label" => "12 AM"),
		array("y" => isset($h13)?$h13:'', "label" => "01 PM"),
    	array("y" => isset($h14)?$h14:'', "label" => "02 PM"),
    	array("y" => isset($h15)?$h15:'', "label" => "03 PM"),
    	array("y" => isset($h16)?$h16:'', "label" => "04 PM"),
    	array("y" => isset($h17)?$h17:'', "label" => "05 PM"),
    	array("y" => isset($h18)?$h18:'', "label" => "06 PM"),
    	array("y" => isset($h19)?$h19:'', "label" => "07 PM"),
    	array("y" => isset($h20)?$h20:'', "label" => "08 PM"),
    	array("y" => isset($h21)?$h21:'', "label" => "09 PM"),
    	array("y" => isset($h22)?$h22:'', "label" => "10 PM"),
    	array("y" => isset($h23)?$h23:'', "label" => "11 PM"),
    	array("y" => isset($h24)?$h24:'', "label" => "12 PM"),
    );
 ?>
 <!-- month wise list-->
<div class="content-wrapper">
		<section class="content" style="padding-top:100px;">
		<div class="container"> 
 

<script>
window.onload = function () {

//Better to construct options first and then pass it as a parameter
var yearwise = {
	title: {
		text: "Yearly Orders list"
	},
	axisY: {
		title: "Orders Count Range",
	},
	//animationEnabled: true,
	//exportEnabled: true,
	data: [
	{
		type: "spline", //change it to line, area, column, pie, etc
		dataPoints: <?php echo json_encode($year_wise_list, JSON_NUMERIC_CHECK); ?>

	}
	]
};
$("#chartContainer").CanvasJSChart(yearwise);
var monthwise = {
	title: {
		text: "Monthly Orders list"
	},
	
	axisY: {
		title: "Orders Count Range",
	},
	animationEnabled: true,
	exportEnabled: true,
	data: [
		{
		type: "spline", //change it to line, area, column, pie, etc
		dataPoints: <?php echo json_encode($month_wise_list, JSON_NUMERIC_CHECK); ?>
		}
	]
};
$("#chartContainer1").CanvasJSChart(monthwise);
var daywise = {
	title: {
		text: "Daily Orders list"
	},
	 axisX:{      
        interval:1, 
        intervalType: "hour",        
        //valueFormatString: "hh TT K", 
        },
	axisY: {
		title: "Orders Count Range",
	},
	
	animationEnabled: true,
	exportEnabled: true,
	data: [
			{
				type: "spline", //change it to line, area, column, pie, etc
				dataPoints: <?php echo json_encode($daily_wise_list, JSON_NUMERIC_CHECK); ?>

			}
		]
};
$("#chartContainer2").CanvasJSChart(daywise);

}
</script>
<div class="row">
<div id="chartContainer" style="height: 300px; width: 90%;"></div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="row">
<div id="chartContainer1" style="height: 300px; width: 90%;"></div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="row">
<div id="chartContainer2" style="height: 300px; width: 90%;"></div>
</div>
<script src="<?php echo base_url(''); ?>assets/vendor/canvas.js"></script>

</div>
    
		</section>
 </div>

 