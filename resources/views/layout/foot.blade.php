<!-- FOOT START -->
<style>
.foot {
    position:fixed;
    bottom:30px;
    z-index:1000;
    min-width: 800px;
}
.foot .info {
    float:left;
    color:white;
}
.foot .info .rights {
    margin-right:40px;
}
.foot .info .email {
    padding-left:33px;
    background-image:url(/img/mail.png);
    background-repeat: no-repeat;
    background-position: left center;
}
.foot .links {
    float:right;
}
.foot .links .share-text {
    background-image:url(/img/share-text.png);
    background-repeat: no-repeat;
    background-position: left center;
    display:inline-block;
    width:50px;
    text-indent: -9999px;
}
.foot .links .share {
    background-image:url(/img/share.png);
    background-repeat: no-repeat;
    background-position: left center;
    display:inline-block;
    width:15px;
    padding-left:25px;
    padding-right:15px;
    color:white;
}
.foot .links .share-some {
    background-image:url(/img/share-some.png);
    background-repeat: no-repeat;
    background-position: left center;
    display:inline-block;
    width:220px;
    text-indent: -9999px;
}
.foot .links .sound {
    background-image:url(/img/sound.png);
    background-repeat: no-repeat;
    background-position: left center;
    display:inline-block;
    width:60px;
    text-indent: -9999px;
    position: relative;
}
.foot .links .wave img {
    vertical-align: baseline;
}
</style>
<section class="container-fluid foot">
        <div class="info">
            <span class="rights">SPACE Concepts All Rights Reserved</span>
            <span class="email">| CONTACT US</span>
        </div>
        <div class="links">
            <span class="share-text">-</span>
            <span class="share">|</span>
            <span class="share-some">-</span>
            <span class="sound">-</span>
            <span class="wave"><img src="/img/music.png"></span>
        </div>
</section>
<!-- FOOT END -->
<script>
    //
    var mult = 6;
    $(window).mousemove(function(event) {
        var str = '';
        // y
        var y = event.clientY;
        var height = window.innerHeight / 2;
        var ySection = ((y - height) / height) * mult;
        str += ' rotateX(' + ySection + 'deg)';

        // x 
        var x = event.clientX;
        var width = window.innerWidth / 2;
        var xSection = ((width - x) / width) * mult;
        str += ' rotateY(' + xSection + 'deg)';

        //
        str += ' translateZ(-15vw)';
        str += ' scale(1.4)';
        

        var layer = $('#layer');
        layer.css('transform', str);

        var t = layer.css('transform');
        // window.console.log(t);
    });



//this.$container.css("transform", "translateY(" + e / this.height * 101 + "%)")
</script>
