<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>无标题文档</title>
<style>
body{cursor:pointer;}
#to_top{
	width:7px; height:7px; 
	background-color:red;
	position:absolute;
	transform: rotate(45deg);
}
</style>
<script>
window.onload = function(){
  var oTop = document.getElementById("to_top");
  document.onmousemove = function(evt){
    var oEvent = evt || window.event;
    var scrollleft = document.documentElement.scrollLeft || document.body.scrollLeft;
    var scrolltop = document.documentElement.scrollTop || document.body.scrollTop;

    setTimeout(function(){
    	//
    	oTop.style.left = oEvent.clientX + scrollleft +"px";
    	oTop.style.top = oEvent.clientY + scrolltop + "px";
    	//
    }, 500);
  }
}
</script>
<style>
#to_top{
	width:7px; height:7px; 
	background-color:red;
	position:absolute;
	transform: rotate(45deg);
}
</style>
<div id="to_top"></div>
</body>
</html>