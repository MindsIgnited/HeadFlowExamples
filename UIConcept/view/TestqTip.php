<?php ?>
<!DOCTYPE div PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

<style type="text/css">
  .red { background-color:red; }
  .blue { background-color:blue; }
  
  .qtip-wrapper {
  	background-image:url(images/balloon-0.png) !important;
  	
  }
  
  .qtip-contentWrapper {
  	 height:189px;
	 width:345px;
   }
   
   
   #tooltip-separator {
     margin-left:10px;
   	 margin-right:10px;
   	 border-top: 1px solid #c7c8cc;
   	 border-bottom: 1px solid #f2f4f3;
   }
   
   .tooltip-inner-content{
   	  margin-top:5px;
   	  width:290px;
   	  height:65px;
   	  overflow:auto;
      padding-left:10px;
      font-size: 12px;
      color:#434343;
   }
	.jspVerticalBar{
		width:4px;
	}
	
	.jspHorizontalBar{
		height:4px;
	}
		
	.jspTrack{
		background:#848484;
	}
	.jspDrag{
		background:#e8eae9;
	}

</style> 

</head>
<body>



<div id="test" style="width:100px;height:100px;">

</div>



<div style="text-align:center; width:930px; height:447px; margin-left:auto; margin-right:auto; position: relative;">
<img id="featured" src="images/featured.jpg" usemap="#map" border="0" width="930" height="447" />
<map id="map" name="map">
<area id="tanks" shape="rect" coords="397,311,487,350" href="#"/>
<area id="factory" shape="rect" coords="404,232,461,293" href="#"/>
<area id="market" shape="rect" coords="423,163,477,208" href="#" />
<area id="pie" shape="rect" coords="467,98,512,143" href="#" />
<area id="computer" shape="rect" coords="534,57,575,101" href="#"/>
<area id=lightning shape="rect" coords="603,39,662,76" href="#" />
<area id="six" shape="rect" coords="698,75,738,112" href="#"/>
<area id="barrel" shape="rect" coords="751,106,788,149" href="#"/>
<area id="chain" shape="rect" coords="769,163,819,225" href="#"/>
<area id="people" shape="rect" coords="775,248,846,289" href="#"/>
<area id="boat" shape="rect" coords="761,313,852,358" href="#"/>
<area id="image" shape="rect" coords="928,445,930,447" href="#"/>
</map>


</div>






<script src="javascript/jquery-ui-1.8.9.custom/js/jquery-1.4.4.min.js"></script>
<script src="javascript/qtip/jquery.qtip-1.0.0-rc3.min.js"></script>
<script type="text/javascript" src="javascript/jquery.jscrollpane.js"></script>
<script type="text/javascript" src="javascript/jquery.mousewheel.js"></script>

<script>
jQuery.noConflict();
</script>



<script type="text/javascript">

var TEMPLATE = '<div id="con">'+
'<div id="tooltip-header">'+
'<img src="images/tanks.png"/></div>'+
'<div id="tooltip-separator"></div>'+
'<div class="tooltip-inner-content">'+
'<div id="tooltip-scroll-content"  >'+
'			'+
'					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ligula id sem tristique ultrices'+
'					eget id neque. Duis enim turpis, tempus at accumsan vitae, lobortis id sapien. Pellentesque nec orci'+
'					mi, in pharetra ligula. Nulla facilisi. Nulla facilisi. Mauris convallis venenatis massa, quis'+
'					consectetur felis ornare quis. Sed aliquet nunc ac ante molestie ultricies. Nam pulvinar ultricies'+
'					bibendum. Vivamus diam leo, faucibus et vehicula eu, molestie sit amet dui. Proin nec orci et elit'+
'					semper ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus'+
'					mus. Sed quis urna mi, ac dignissim mauris. Quisque mollis ornare mauris, sed laoreet diam malesuada'+
'					quis. Proin vel elementum ante. Donec hendrerit arcu ac odio tincidunt posuere. Vestibulum nec risus'+
'					eu lacus semper viverra.'+
'            '+
'</div>'+
'</div>'+
'</div>';


jQuery.fn.qtip.styles.golar = { // Last part is the name of the style
	border: {
	   width: 0,
	   radius: 0
	},
	width: '345px',
    margin: '10px 24px 0px 20px',
    padding: '0px 0px 0px 0px',
	background: 'tranparent',
	color: 'black'
};

jQuery(document).ready(function(jQ){
	
	jQ('#tanks').qtip({
	   content: {prerender:false, text: jQ(TEMPLATE)},
	   show: { when: 'mouseover', 
	           effect: { type: 'fade' } 
	         },
	   hide: { when: 'mouseout',
		       delay: 1000, 
		       fixed: true,
		       effect: { type: 'fade' } 
		     },
	   position: {
	      corner: {
	         target: 'leftBottom',
	         tooltip: 'bottomRight'
	      }
		},
		style: 'golar',
		api: {onShow : function(){
			var children = this.elements.content.find('.tooltip-inner-content');
			children.jScrollPane();
		}}
	});

});
</script>


</body>
</html>