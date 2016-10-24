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
              <h4>提交申请</h4>
              <p>点击下面「立即申请」按钮，填写合作申请表。</p>
            </li>
            <li>
              <div class="step-no">2</div>
              <h4>合作洽谈</h4>
              <p>收到您的申请后，我们将在 5 个工作日内与您联系，洽谈商务合作事宜。</p>
            </li>
            <li class="clear-right">
              <div class="step-no">3</div>
              <h4>签订协议</h4>
              <p>如果洽谈成功，我们将与您签订合作协议。</p>
            </li>
            <div class="cooperation-step-line"></div>
          </ul>
        </div>
      </section>
      <!--cooperation step end-->

      <!--cooperation form start-->
      <section class="content content-cooperation-form">
        <div class="center">
          <a href="http://qiniuyun.mikecrm.com/gZv2NB" id="section-1" class="apply-btn">
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