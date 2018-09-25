
<div class="content-wrapper">
		<section class="content" style="padding-top:100px;">
		<div class="container"> 
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	showInLegend: true,
	title:{
		text: "Monthly wise orders"
	},
	axisY: {
		title: "Order's count range",
		
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ "y":10, "label" :"January"},
			{ "y":20, "label" :"Feb"},
			{ "y":5, "label" :"March"},
			{ "y":45, "label" :"April"},
			{ "y":20, "label" :"May"},
			{ "y":100, "label" :"June"},
			{ "y":20, "label" :"July"},
			{ "y":200, "label" :"August"},
			{ "y":450, "label" :"September"},
			{ "y":20, "label" :"October"},
			{ "y":789, "label" :"November"},
			{ "y":20, "label" :"December"}
		]
	},{        
		type: "line",       
		dataPoints: [
			{ "y":10, "label" :"January"},
			{ "y":20, "label" :"Feb"},
			{ "y":5, "label" :"March"},
			{ "y":45, "label" :"April"},
			{ "y":20, "label" :"May"},
			{ "y":100, "label" :"June"},
			{ "y":20, "label" :"July"},
			{ "y":200, "label" :"August"},
			{ "y":450, "label" :"September"},
			{ "y":20, "label" :"October"},
			{ "y":789, "label" :"November"},
			{ "y":20, "label" :"December"}
		]
	}]
});
chart.render();

}
</script>


<div id="chartContainer" style="height: 300px; width: 80%;">dasdsa</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


</div>
    
		</section>
 </div>