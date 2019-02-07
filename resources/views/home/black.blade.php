@extends('layout.master')
@section('content')
<style>
body {
	cursor:pointer;
}
.black_container {
	position: fixed;
	top:0px;
	right:0px;
	left:0px;
	bottom:0px;
	z-index:10;
}
.black {
	position: relative;
	width: 100%;
    height: 100%;
}
.black .man {
	position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
    height: 100%;
    /* text-align: center; */
    /* background-image: url(/img/man.png); */
    /* background-repeat: no-repeat; */
    background-size: cover;
    /* overflow: hidden; */
    display:none;
    text-align: center;
}
.black .local {
	position: absolute;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	text-align: center;
}
.black .local .caption {
	font-size: 28px;
    color: white;
    margin-top: 50vh;
}
.black .local .button{
    height: 40px;
    line-height: 40px;
    padding: 0px 30px;
    border-radius: 20px;
    font-size: 16px;
    color: white;
    background-color: rgb(231, 100, 63);
    display: inline-block;
}
.black .fog {
	position: absolute;
	top:0px;
	left:0px;
	width: 100%;
    height: 100%;
	z-index:11;
	background-color:black;
}
.black .remote {
	z-index:1300;
	color: white;
    font-weight: bold;
    font-weight: 50p;
    font-size: 70px;
    position: absolute;
    top:30%;
    right:0px;
    left:0px;
    margin:0px auto;
    text-align:center;
}
</style>
<!-- CONTENT START -->
<section class="black_container">
	<div class="black">
		<!-- man -->
		<div class="man" id="man"><img style="height:100%;" src="/img/man.png"></div>
		<!-- local -->
		<div class="local">
			<div class="caption">
				<p>以音乐出发，带动身心灵感受的全身运动</p>
				<p>创造出超越体能训练的正向力量</p>
			</div>
			<div class="button">购买课程</div>
		</div>
		<!-- fog -->
		<div class="fog" id="fog"></div>
		<!--- remote -->
		<div class="remote">SPACECYCLE</div>
	</div>
</section>
<!-- CONTENT END -->
<!-- LAYER START -->
<section class="layer_container container-fluid">
	<div class="layer">
		<picture data-id="case-morning-star">
			<img id="black-img" style="transform: rotateX(0deg) rotateY(0deg) translateZ(0vw) scale(1);" draggable="false" src="/img/black.png">
		</picture>
	</div>
</section>
<!-- LAYER END -->
<script>
$(function(){
	//
	var img = document.getElementById('black-img');
	img.onload = function(){
		//
		setTimeout(function(){
			//
			$('#fog').fadeOut(5000,function(){
   				// alert("Animation Done.");
   				$('#fog').remove();
   				setTimeout(function(){
   					$("#man").fadeIn(2000);
   				}, 1000);
 			});
 			//
		}, 1500);
		//
	}
});
</script>
@endsection
