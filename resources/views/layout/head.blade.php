<style>
.moved {
    width: calc(100% - 300px);
    margin-right: 300px;
    transition: width .5s;
}
.side {
    position:fixed;
    top:30px;
    z-index:1000;
    /* width: calc(100% - 80px); */
}
.side .logo {
    float:left;
    height:25px;
}
.side .logo img {
    height:150%;
}
.side .menu {
    float:right;
    height:25px;
}
.side .menu .language {
    display:inline-block;
    height:25px;
    color:white;
    margin-right:15px;
    font-size:12px;
    vertical-align: top;
}
.side .menu .language span {
    display:inline-block;
    padding-left: 5px;
    padding-right: 8px;
}
.side .menu .user {
    display:inline-block;
    color:white;
    border-bottom:2px solid white;
    vertical-align: top;
    font-size:12px;
}
.side .menu .avatar {
    display:inline-block;
    color:white;
    vertical-align: top;
    margin-right:15px;
}
.side .menu .cart {
    display:inline-block;
    height:25px;
    width:25px;
    background-image:url(/img/cart.png);
    background-repeat:no-repeat;
    background-size: 100% 100%;
    background-origin: 100% 100%;
    margin-right:15px;
}
.side .menu .button {
    display:inline-block;
    height:25px;
    width:25px;
    background-image:url(/img/menu.png);
    background-repeat:no-repeat;
    background-size: 100% 100%;
    background-origin: 100% 100%;
}
.side .menu .button-selected {
    background-image:url(/img/close.png);
}
</style>
<!-- HEADER HEAD -->
<section class="container-fluid side">
        <div class="logo"><a href="/"><img src="/img/logo.png"></a></div>
        <div class="menu">
            <div class="language">
                <span>简</span>|
                <span style="color:#EEE">繁</span>|
                <span style="color:#EEE">EN</span>
            </div>
            <div class="user">MY SPACE</div>
            <div class="avatar"><img src="/img/avatar.png"></div>
            <div class="cart"></div>
            <div class="button" id="button"></div>
        </div>
</section>
<!-- HEADER END -->
<!-- SUBMENU START -->
<style>
.submenu {
    position: fixed;
    width:300px;
    right:-300px;
    height:100%;
    background-color:rgb(255, 84, 23);
    /* transition: right .2s; */
    padding:50px;

    color: white;

    background-image:url(/img/phone.png);
    background-repeat:no-repeat;
    background-position: right bottom;
    background-size: 200px;
    /* display:none; */
    z-index:2000;
}
.submenu-selected {
    right:0px;
}
.submenu ul {
    list-style-type: decimal-leading-zero;
    color:rgb(255, 188, 173);
    font-size:20px;
    border-bottom:1px solid rgb(255, 188, 173);
}
.submenu ul li {
    margin-bottom:15px;
}
.submenu .current {
    color:white;
}
.submenu ul p {
    font-size:14px;
}
/* app store */
.app_store {
    height:180px;
}
.app_store .app_shop {
    margin-top:15px;
}
.app_store img {
    width:120px;
}
</style>
<section class="submenu" id="submenu">
    <h2>HOME</h2>
    <ul>
        <li class="current">关于Space</li>
        <p class="current"><a href="/activity">品牌介绍</a></p>
        <p class="current"><a href="/black">课程简介</a></p>
        <p class="current"><a href="/find">场馆介绍</a></p>
        <li>课程与师资</li>
        <li>Space大师系列</li>
        <li>Space全现场</li>
        <li>Space全主题</li>
        <li>Space全动调</li>
    </ul>
    <!-- APP STORE START -->
    <div class="app_store">
        <div class="app_shop"><img src="/img/googleplay.png"></div>
        <div class="app_shop"><img src="/img/appstore.png"></div>
    </div>
    <!-- App STORE END -->
</section>
<!-- SUBMENU END -->