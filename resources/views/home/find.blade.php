@extends('layout.master-withoutButton')
@section('content')
<style>
.stage {
	top:0px;
	bottom:50%;
	background-color: blue;
	height:50vh;
	background-image: url(/img/find.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	padding:0px;
}
.role {
	display: flex;
    justify-content: space-around;
	top:50%;
	bottom:0px;
	background-color:#EEE;
	padding:0px;
}
.role .man_container {
	width:50%;
	background-color:red;
	height:50vh;
	overflow:hidden;
}
.role .man {
	width:100%;
	height:100%;
	background-image: url(/img/find-download.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
}
.role .man:hover {
	transform: scale(1.1);
	transition: all .2s ease-in-out;
	/* background-size: cover; */
}
.role .woman_container {
	width:50%;
	background-color:black;
	height:50vh;
	overflow: hidden;
}
.role .woman {
	width:100%;
	height:100%;
	background-image: url(/img/find-green-hands.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
}
.role .woman:hover {
	transform: scale(1.1);
	transition: all .2s ease-in-out;
	/* background-size: cover; */
}
.content .ss .contact .yy{
    height: 40px;
    line-height: 40px;
    padding: 0px 30px;
    border-radius: 20px;
    font-size: 16px;
    color: white;
    background-color: rgb(231, 100, 63);
    display: inline-block;
    margin-top: 50vh;
}
</style>
<!-- CONTENT START -->
<div class="container-fluid stage">
</div>
<div class="container-fluid role">
	<div class="man_container">
		<div class="man"></div>
	</div>
	<div class="woman_container">
		<div class="woman"></div>
	</div>
</div>
<!-- CONTENT END -->
<script>
/*
window.onload = function(){
    var layer = document.getElementById('layer');
    layer.onmousemove = function(event){
        window.console.log(event);
    }
}
*/
</script>
@endsection
