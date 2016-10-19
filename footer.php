<footer id="footer">
    <div class="center">
         <div class="sns">
            <a class="logo-footer" href="/"><img src="<?php bloginfo('template_url');?>/images/logo-footer.png" alt="<?php bloginfo('name'); ?>" /></a>
            <ul>
                <li><a class="github" href="https://github.com/qiniu" target="_blank"></a></li>
                <li><a class="weibo" href="http://weibo.com/qiniutek" target="_blank"></a></li>
                <li class="li-qrcode">
                    <a class="weixin"></a>
                    <div class="qrcode">
                        <span><img src="<?php bloginfo('template_url');?>/images/qrcode.png" width="120" height="120" /></span>
                    </div>
                </li>
            </ul>
         </div>
        <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container' => 'nav', 'container_id' => 'footer-menu')); ?>
        <div class="clear"></div>
        <div class="footer-legal">
            <div class="copyright">Copyright &copy; 2016 <a href="/"><?php bloginfo( 'name' ); ?></a> Inc.</div>
            <ul class="footer-legal-links">
                <li><a href="/user-agreement">用户协议</a></li>
                <li><a href="/service-agreement">SLA 协议</a></li>
                <li class="last"><a href="https://status.qiniu.com/">健康状态</a></li>
            </ul>
        </div>
        <div class="web-record"><a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31011502000961" target="_blank">沪公网安备 31011502000961 号</a><a href="http://www.miitbeian.gov.cn/" target="_blank">沪 ICP 备 11037377 号-5</a></div>
    </div>
</footer>
<a class="back-to-top" href="#"></a>
<?php wp_footer();?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<?php if ( is_home() ){ ?>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/immersive-slider.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                $(".slide-content").immersive_slider();
        });
    </script>
<?php } ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/theme.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cbpFWTabs.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/all.js"></script>
<script type="text/javascript">
    $(document).ready(function(){ //scroll to top
        $('.back-to-top').click(function(){
            $('html, body').animate({scrollTop : 0}, 700);
            return false;
        });
    });
</script>
<script type="text/javascript">
    (function() {
        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
            new CBPFWTabs( el );
        });
    })();
</script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create','UA-40857860-16','auto');ga('send','pageview');</script>
<script type='text/javascript'>var _vds=_vds||[];window._vds=_vds;(function(){_vds.push(['setAccountId','e10434e9266f49aabde60a116a0fd4af']);(function(){var vds=document.createElement('script');vds.type='text/javascript';vds.async=true;vds.src=('https:'==document.location.protocol?'https://':'http://')+'dn-growing.qbox.me/vds.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(vds,s)})()})();</script>
<script>var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="//hm.baidu.com/hm.js?204fcf6777f8efa834fe7c45a2336bf1";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s)})();</script>
<script>
        (function(a, b) {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) window.location = b
        })(navigator.userAgent || navigator.vendor || window.opera, 'http://m.qiniu.com');
    </script>
</body>
</html>