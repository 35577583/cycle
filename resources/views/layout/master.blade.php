<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.js"></script>
</head>
<body style="position:relative;">
@component('layout.head')<span>xxx</span>@endcomponent
<!-- CONTENT START -->
<style>
.content {
    position:fixed;
    top:0px;
    bottom:0px;
    right:0px;
    left:0px;
    z-index:1;

    min-height:500px;

    background-position: center;

    cursor: url(/img/cursor.png),auto;
}
/* layer */
.layer_container {
    position: relative;
    height: 100%;
    padding:0px;
    margin:0px;
}
.layer {
    position:absolute;
    left: 0;
    top: 0;
    width: 100%;
    /* height: 100%; */
    overflow: hidden;
    perspective: 100vw;
}
.layer img {
    object-fit: cover;
    object-position: center;
    width:100%;
    height:100vh;

    transform: rotateX(0deg) rotateY(0deg) translateZ(-15vw) scale(1.4);
}
</style>
@yield('content') 
<!-- sp -->
<!-- CONTENT END -->    
@component('layout.foot')<span>xxx</span>@endcomponent
<script>
$('#button').click(function(){
    //
    $('#submenu').toggleClass('submenu-selected');

    //
    $('.container-fluid').toggleClass('moved');
    var me = $(this);
    me.toggleClass('button-selected');
});
</script>
</body>
</html>
