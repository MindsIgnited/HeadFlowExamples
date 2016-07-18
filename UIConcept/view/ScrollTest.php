<?php ?>
<!DOCTYPE div PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

<style type="text/css">

.scrollpane{
	width:300px;
	height:200px;
	overflow:auto;
	background-color:white;
}

</style>

</head>
<body>
<div align="center" style="background-color:#d4d4d4;width:100%;height:600px">
<div style="height:200px;"></div> 
<div class="scrollpane" >
			<p> 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ligula id sem tristique ultrices
					eget id neque. Duis enim turpis, tempus at accumsan vitae, lobortis id sapien. Pellentesque nec orci
					mi, in pharetra ligula. Nulla facilisi. Nulla facilisi. Mauris convallis venenatis massa, quis
					consectetur felis ornare quis. Sed aliquet nunc ac ante molestie ultricies. Nam pulvinar ultricies
					bibendum. Vivamus diam leo, faucibus et vehicula eu, molestie sit amet dui. Proin nec orci et elit
					semper ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
					mus. Sed quis urna mi, ac dignissim mauris. Quisque mollis ornare mauris, sed laoreet diam malesuada
					quis. Proin vel elementum ante. Donec hendrerit arcu ac odio tincidunt posuere. Vestibulum nec risus
					eu lacus semper viverra.
				</p> 
				<p> 
					Vestibulum dictum consectetur magna eu egestas. Praesent molestie dapibus erat, sit amet sodales
					lectus congue ut. Nam adipiscing, tortor ac blandit egestas, lorem ligula posuere ipsum, nec
					faucibus nisl enim eu purus. Quisque bibendum diam quis nunc eleifend at molestie libero tincidunt.
					Quisque tincidunt sapien a sapien pellentesque consequat. Mauris adipiscing venenatis augue ut
					tempor. Donec auctor mattis quam quis aliquam. Nullam ultrices erat in dolor pharetra bibendum.
					Suspendisse eget odio ut libero imperdiet rhoncus. Curabitur aliquet, ipsum sit amet aliquet varius,
					est urna ullamcorper magna, sed eleifend libero nunc non erat. Vivamus semper turpis ac turpis
					volutpat non cursus velit aliquam. Fusce id tortor id sapien porta egestas. Nulla venenatis luctus
					libero et suscipit. Sed sed purus risus. Donec auctor, leo nec eleifend vehicula, lacus felis
					sollicitudin est, vitae lacinia lectus urna nec libero. Aliquam pellentesque, arcu condimentum
					pharetra vestibulum, lectus felis malesuada felis, vel fringilla dolor dui tempus nisi. In hac
					habitasse platea dictumst. Ut imperdiet mauris vitae eros varius eget accumsan lectus adipiscing.
				</p> 
				<p> 
					Quisque et massa leo, sit amet adipiscing nisi. Mauris vel condimentum dolor. Duis quis ullamcorper
					eros. Proin metus dui, facilisis id bibendum sed, aliquet non ipsum. Aenean pulvinar risus eu nisi
					dictum eleifend. Maecenas mattis dolor eget lectus pretium eget molestie libero auctor. Praesent sit
					amet tellus sed nibh convallis semper. Curabitur nisl odio, feugiat non dapibus sed, tincidunt ut
					est. Nullam erat velit, suscipit aliquet commodo sit amet, mollis in mauris. Curabitur pharetra
					dictum interdum. In posuere pretium ultricies. Curabitur volutpat eros vehicula quam ultrices
					varius. Proin volutpat enim a massa tempor ornare. Sed ullamcorper fermentum nisl, ac hendrerit sem
					feugiat ac. Donec porttitor ullamcorper quam. Morbi pretium adipiscing quam, quis bibendum diam
					congue eget. Sed at lectus at est malesuada iaculis. Sed fermentum quam dui. Donec eget ipsum dolor,
					id mollis nisi. Donec fermentum vehicula porta.
				</p> 

</div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 

<!-- the mousewheel plugin - optional to provide mousewheel support -->
<script type="text/javascript" src="javascript/jquery.mousewheel.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="javascript/jquery.jscrollpane.min.js"></script>
<script type="text/javascript">


$(document).ready(function(){


	$('.scrollpane').jScrollPane();


});
</script>

</body>
</html>