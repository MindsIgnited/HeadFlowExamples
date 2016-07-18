<?php ?>
<!DOCTYPE div PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<style type="text/css">
  .red { background-color:red; }
  .blue { background-color:blue; }
  
  /* tooltip styling. by default the element to be styled is .tooltip  */
.tooltip {
	background:transparent url(images/black_arrow.png) no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
	font-size:12px;
	height:70px;
	width:160px;
	padding:25px;
	color:#fff;	
}

.ui-resizable-helper { border: 2px dotted grey; }
  
</style>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.8/themes/base/jquery-ui.css" type="text/css" media="all" />
</head>
<body>



<div id="test" style="width:100px;height:100px;">

</div>






<div style="text-align:center; width:930px; margin-left:auto; margin-right:auto;">
<img id="featured" src="images/featured.jpg" usemap="#map" border="0" width="930" height="447" alt="" title="test"/>
<map id="map" name="map">
<area id="area1" shape="rect" coords="397,311,487,350" href="#" alt="Tanks" style="border: 1px solid red"/>
<area id="area2" shape="rect" coords="404,232,461,293" href="#" alt="factory" title="factory"    />
<area id="area3" shape="rect" coords="423,163,477,208" href="#" alt="Line Graph" title="Line Graph"    />
<area shape="rect" coords="467,98,512,143" href="#" alt="Pie Chart" title="Pie Chart"    />
<area shape="rect" coords="534,57,575,101" href="#" alt="Computer" title="Computer"    />
<area shape="rect" coords="603,39,662,76" href="#" alt="Lightining" title="Lightining"    />
<area shape="rect" coords="698,75,738,112" href="#" alt="Six" title="Six"    />
<area shape="rect" coords="751,106,788,149" href="#" alt="Barrel" title="Barrel"    />
<area shape="rect" coords="769,163,819,225" href="#" alt="Chain" title="Chain"    />
<area shape="rect" coords="775,248,846,289" href="#" alt="people" title="people"    />
<area shape="rect" coords="761,313,852,358" href="#" alt="Boat" title="Boat"    />
<area shape="rect" coords="928,445,930,447" href="#" alt="Image Map" title="Image Map" />
</map>


<div id="area1div" class="tooltip" style="position: absolute; left: 709px; top: 316px; ">
	Test
</div>
</div>

<script src="javascript/jquery-ui-1.8.9.custom/js/jquery-1.4.4.min.js"></script>
<script src="javascript/jquery-ui-1.8.9.custom/js/jquery-ui-1.8.9.custom.min.js"></script>


<script type="text/javascript">
$(function() {
	$( "#area1div" ).draggable().resizable({
		animate: true,
		aspectRatio: true,
		helper: "ui-resizable-helper"
	});
});


</script>




</body>
</html>