<?php ?>
<!DOCTYPE div PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<style type="text/css">
  .red { background-color:red; }
  .blue { background-color:blue; }
</style>

</head>
<body>



<div id="test" style="width:100px;height:100px;">

</div>


<script type="text/javascript" src="javascript/HelpBalloon/lib/prototype/prototype.js"></script>
<script type="text/javascript" src="javascript/HelpBalloon/lib/scriptaculous/scriptaculous.js"></script>
<script src="javascript/HelpBalloon/src/HelpBalloon.js"></script>






<div style="text-align:center; width:930px; margin-left:auto; margin-right:auto; position: relative;">
<img id="featured" src="images/featured.jpg" usemap="#map" border="0" width="930" height="447" alt="" />
<div id="area1div" style="position: absolute; left: 400px; top: 300px; width:100px; height:40px;" >
</div>
</div>

<script type="text/javascript">


var bal = new HelpBalloon({
	title: 'Big Popup',
	content: 'Blah Blah Popup content. <br/> blahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhdsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh',
	icon: $('area1div'),
	useEvent: ['mouseover'],
	anchorPosition: '10 10',
	iconStyle: {
		'cursor': 'pointer',
		'verticalAlign': 'middle'
	}
});





	
</script>


</body>
</html>