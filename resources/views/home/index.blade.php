@extends('layout.master')
@section('content')
<style>
.content {
}
.content .ss {
	position: absolute;
	top:120px;
	left:50px;
	right:50px;
	bottom:120px;

	/*
	background-color:#EEE;
	opacity: .6;
	*/
}
.content .ss .contact {
	position:relative;
	height:100%;
	text-align: center;
}
.content .ss .contact .yy{
    height: 40px;
    line-height: 40px;
    padding: 0px 30px;
    border-radius: 20px;
    font-size: 16px;
    color: #f9a384;
    background-color: white;
    display: inline-block;
    margin-top: 50vh;
}
</style>
<!-- CONTENT START -->
<div class="container-fluid content" style="min-height:300px;">
	<div class="ss">
		<div class="contact">
			<span class="yy">联系我们</span>
		</div>
	</div>
</div>
<!-- CONTENT END -->
<!-- LAYER START -->
<section class="layer_container container-fluid">
	<div class="layer">
		<picture data-id="case-morning-star">
			<img draggable="false" src="/img/index-bg.png" id="layer">
		</picture>
	</div>
</section>
<!-- LAYER END -->
<script>
/*
https://www.videinfra.com/images/cases/loftec/background.jpg?deimt
window.onload = function(){
    var layer = document.getElementById('layer');
    layer.onmousemove = function(event){
        window.console.log(event);
    }
}
*/
</script>
@endsection
