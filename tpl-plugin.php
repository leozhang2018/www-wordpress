<?php /* Template Name: 开发合作 */ get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="container">

    <section class="content-cooperation">
        <div class="wrap">
            <h1 class="h1-page-heading">工具、插件、SDK 合作</h1>
            <p class="hero-text clear-bottom">七牛云欢迎广大开发者提交工具、插件、SDK，我们会及时跟进您的提交申请。通过审核的工具、插件、SDK 将会在七牛云开发者中心社区资源上线。并且，您可以免费享受一定额度的云服务一整年。</p>
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
                    <h4>测试</h4>
                    <p>七牛云会对您提交的工具、插件、SDK 进行测试。</p>
                </li>
                 <li class="clear-right">
                    <div class="step-no">4</div>
                    <h4>上线</h4>
                    <p>通过审核的工具、插件、SDK 将会在七牛云开发者中心上线。</p>
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
            <p class="section-text section-text-cooperation">目前表单填写功能暂未上线，合作请直接联系 <a href="mailto:marketing@qiniu.com">marketing@qiniu.com</a>。</p>
            <div class="page-content cooperation-form-wrap">
                <?php the_content();?>
            </div>
        </div>
    </section>
    <!--cooperation form end-->

</div>
<?php endwhile; ?>
<?php get_footer();?>