<?php /* Template Name: 渠道合作 */ get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="container">

    <section class="content-cooperation">
        <div class="wrap">
            <h1 class="h1-page-heading">渠道合作</h1>
            <p class="hero-text clear-bottom">七牛云面向广大的代理商企业与个人，提供便捷的服务售卖代理模式。申请加入后，我们的商务经理会及时跟进并与您联系。</p>
            <a class="fill-form smoothScroll" href="#section-1">立即申请</a>
        </div>
    </section>

    <!--cooperation step start-->
    <section class="content content-cooperation-step">
        <div class="center">
            <h2>简单的合作流程</h2>
            <ul class="cooperation-step">
                <li>
                    <div class="step-no">1</div>
                    <h4>登录七牛云</h4>
                    <p>登录您的七牛云帐号；若您还没有账号，可以先 <a href="https://portal.qiniu.com/signup/choice" target="_blank">免费注册</a> 一个。</p>
                </li>
                <li>
                    <div class="step-no">2</div>
                    <h4>提交申请</h4>
                    <p>填写下面的合作申请表格。</p>
                </li>
                <li>
                    <div class="step-no">3</div>
                    <h4>合作洽谈</h4>
                    <p>七牛云会与您取得联系，并与您洽谈商务合作相关事宜。</p>
                </li>
                 <li class="clear-right">
                    <div class="step-no">4</div>
                    <h4>签订协议</h4>
                    <p>如果我们的洽谈取得成功，我们将与您签订合作协议。</p>
                </li>
                <div class="cooperation-step-line"></div>
            </ul>
        </div>
    </section>
    <!--cooperation step end-->

    <!--cooperation form start-->
    <section class="content content-cooperation-form">
        <div class="center">
            <h2 id="section-1">填写合作申请表格</h2>
            <p class="section-text section-text-cooperation">合作请联系 <a href="mailto:marketing@qiniu.com">marketing@qiniu.com</a>。</p>
            <div class="page-content cooperation-form-wrap">
                <?php the_content();?>
            </div>
        </div>
    </section>
    <!--cooperation form end-->

</div>
<?php endwhile; ?>
<?php get_footer();?>