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
              <h4>提交申请</h4>
              <p>点击下面「立即申请」按钮，填写合作申请表。</p>
            </li>
            <li>
              <div class="step-no">2</div>
              <h4>审核</h4>
              <p>收到您提交的工具、插件、SDK 后，我们将在 10 个工作日内审核完毕。</p>
            </li>
            <li class="clear-right">
              <div class="step-no">3</div>
              <h4>上线</h4>
              <p>如果您提交的资源通过审核后，我们会将其上线到<a href="http://developer.qiniu.com/resource/community.html">社区资源</a>。</p>
            </li>
            <div class="cooperation-step-line"></div>
          </ul>
        </div>
      </section>
      <!--cooperation step end-->

      <!--cooperation form start-->
      <section class="content content-cooperation-form">
        <div class="center">
          <a href="http://qiniuyun.mikecrm.com/ylEXtP" id="section-1" class="apply-btn">
          <span>立即申请</span>
          </a>
          <p class="section-text section-text-cooperation">申请过程中有任何问题欢迎联系 <a href="mailto:marketing@qiniu.com">marketing@qiniu.com</a>。</p>
          <div class="page-content cooperation-form-wrap">
            <?php the_content();?>
          </div>
        </div>
      </section>
      <!--cooperation form end-->

    </div>
    <?php endwhile; ?>
      <?php get_footer();?>