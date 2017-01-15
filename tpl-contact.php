<?php /* Template Name: 联系我们 */ get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="container">
    <section class="content content-contact-form">
        <div class="center">
            <h2 class="h2-contact">联系我们</h2>
            <div class="page-content">
                <?php the_content();?>
                <div class="contact-info">
                    <div class="contact-info-tel">
                        <h4>电话联系</h4>
                        <span>400-808-9176 (7x24)</span>
                    </div>
                    <div class="contact-info-email">
                        <h4>邮件联系</h4>
                        <ul>
                            <li>
                                <h6>销售联系</h6>
                                <a href="mailto:sales@qiniu.com">sales@qiniu.com</a>
                            </li>
                            <li>
                                <h6>市场合作</h6>
                                <a href="mailto:marketing@qiniu.com">marketing@qiniu.com</a>
                            </li>
                            <li>
                                <h6>技术支持</h6>
                                <a href="https://support.qiniu.com/question" target="_blank">https://support.qiniu.com/question</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--content-contact star-->
    <section class="content content-contact">
         <div class="center">
            <h2>我们在这些地方办公</h2>
         </div>
    </section>
    <!--content-contact end-->

    <!--contact-office star-->
    <section class="content content-contact-office">
         <ul class="office-list">
            <li>
                <img src="<?php bloginfo('template_url');?>/images/contact/shanghai.png" alt="七牛上海总部" />
                <div class="offce-head">上海总部</div>
                <!--<div class="offce-tel">021-61763221-815</div>-->
                <div class="offce-address">上海市浦东新区亮秀路 112 号 Y1 座 3 楼</div>
            </li>
            <li>
                <img src="<?php bloginfo('template_url');?>/images/contact/beijing.png" alt="七牛北京分部" />
                <div class="offce-head">北京分部</div>
                <!--<div class="offce-tel">010-84299061</div>-->
                <div class="offce-address">北京市朝阳区太阳宫中路 12 号太阳宫大厦 1210 室</div>
            </li>
            <li class="clear-right">
                <img src="<?php bloginfo('template_url');?>/images/contact/shenzhen.png" alt="七牛深圳分部" />
                <div class="offce-head">深圳分部</div>
                <!--<div class="offce-tel">021-61763221-8</div>-->
                <div class="offce-address">广东省深圳市南山区深南大道 9680 号大冲商务中心 1 号楼 2405 室</div>
            </li>
            <li class="clear-bottom">
                <img src="<?php bloginfo('template_url');?>/images/contact/hangzhou-1.png" alt="七牛杭州研发中心" />
                <div class="offce-head">杭州研发中心</div>
                <!--<div class="offce-tel">0571-8720788</div>-->
                <div class="offce-address">浙江省杭州市下城区上塘路 15 号武林时代商务中心 906 室</div>
            </li>
            <li class="clear-bottom">
                <img src="<?php bloginfo('template_url');?>/images/contact/hangzhou-2.png" alt="七牛上杭州分部" />
                <div class="offce-head">杭州分部</div>
                <!--<div class="offce-tel">021-61763221-8</div>-->
                <div class="offce-address">浙江省杭州市西湖区文三路 478 号华星时代广场 A 座 607 室</div>
            </li>
            <li class="clear-bottom clear-right">
                <img src="<?php bloginfo('template_url');?>/images/contact/chengdu.png" alt="七牛成都分部" />
                <div class="offce-head">成都分部</div>
                <!--<div class="offce-tel">021-61763221-8</div>-->
                <div class="offce-address">四川省成都市高新区天府大道 666 号希顿国际广场 C 座 2504 室</div>
            </li>
        </ul>
    </section>
    <!--contact-office end-->

</div>
<?php endwhile; ?>
<?php get_footer();?>