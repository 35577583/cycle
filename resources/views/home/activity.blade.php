@extends('layout.master')
@section('content')
<style>
.slogan {
	position: fixed;
	top:40%;
	bottom:30%;
	left:0px;
	right:0px;
	z-index:1000;
}
.slogan .marks {
	width:100%;
	height:100%;
	display:flex;
	justify-content: space-around;

	flex-direction: column;
}
.slogan .marks .sign {
	color:#fd774c;
	font-size:40px;
	text-align: center;
}
.slogan .marks .sign span {
	font-weight:bold;
}
.slogan .marks .banner{
	color:white;
	font-size:32px;
	text-align: center;
}
.slogan .marks .know{
    height: 40px;
    line-height: 40px;
    padding: 0px 30px;
    border-radius: 20px;
    font-size: 16px;
    color: white;
    background-color: rgb(231, 100, 63);
    text-align: center;
    margin:0px auto;
}
</style>
<!-- CONTENT START -->
<div class="slogan">
	<div class="marks">
			<div class="sign"><span>Space</span>Events</div>
			<div class="banner">热情如火的户外活动，让好友陪你感受健身乐趣</div>
			<div class="know">了解我们</div>
	</div>
</div>
<!-- CONTENT END -->
<!-- activity -->
<style>
.activity_container {
    position: relative;
    height:100vh;
    z-index:1;
    padding:0px;
    margin:0px;
    overflow:hidden;
}
.activity_container .yarn {
	position: absolute;
    height: 100%;
    width:100%;
    background-color:black;
    z-index:2;
    opacity: 0.6;
}
.activity {
    height: 100%;
    width:100%;

    background-color:silver;
}
.activity .keyframes {
    position: relative;
    width: 100%;
    height: 100%;
}
.activity img {
    height: 100%;
}
.retrograde {
	height:50%;
    background-color:black;
    animation-name: retrograde;
    animation-duration:10s;
    animation-iteration-count:infinite;
    animation-timing-function:linear;
    width:100%;
}
.retrograde .item {
	width:200%;
	height:100%;
	float:left;
}
.retrograde .item img {
	width:50%;
	height:100%;
}
@keyframes retrograde
{
	from {margin-left: 0px;}
	to {margin-left: -100%;}
}
.direct {
	height:50%;
    background-color:black;
    animation-name: direct;
    animation-duration:10s;
    animation-iteration-count:infinite;
    animation-timing-function:linear;
    width:100%;
}
.direct .item {
	width:200%;
	height:100%;
	float:left;
}
.direct .item img {
	width:50%;
	height:100%;
}
@keyframes direct
{
	from {margin-left: -100%;}
	to {margin-left: 0%;}
}
</style>
<section class="container-fluid activity_container">
	<div class="yarn"></div>
	<div class="activity">
		<div class="keyframes">
			<div class="retrograde">
				<div class="item"><img src="/img/activity/retrograde.jpg"><img src="/img/activity/retrograde.jpg"></div>
				<!-- <div class="item"><img src="/img/activity/retrograde.jpg"></div> -->
			</div>
			<div class="direct">
				<div class="item"><img src="/img/activity/direct.jpg"><img src="/img/activity/direct.jpg"></div>
				<!-- <div class="item"><img src="/img/activity/retrograde.jpg"></div> -->
			</div>
		</div>
	</div>
</section>
<!-- LAYER END -->
@endsection
