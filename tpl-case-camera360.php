<?php /* Template Name: 案例-Camera360 */ get_header(); ?>
<div id="container">
    <div class="center case-breadcrumbs">
        <a class="back-case" href="/case">客户案例</a>
        <img src="<?php bloginfo('template_url');?>/images/case/breadcrumbs-sep.png" width="7" height="13" class="readcrumbs-sep" />
        <span>Camera360</span>
    </div>

	<div class="center case-details-content">
        <aside class="case-overview">
            <img src="<?php bloginfo('template_url');?>/images/case/camera360.jpg" width="400" height="271"/>
            <h4>使用产品</h4>
            <ul>
                <li>对象存储<a href="http://www.qiniu.com/products/kodo">http://www.qiniu.com/products/kodo</a></li>
                <li>融合 CDN<a href="http://www.qiniu.com/products/fusion">http://www.qiniu.com/products/fusion</a></li>
                <li>数据处理<a href="http://www.qiniu.com/products/dora">http://www.qiniu.com/products/dora</a></li>
            </ul>
        </aside>
        <div class="case-details">
            <div class="case-title-group">
                <img src="<?php bloginfo('template_url');?>/images/case/camera360.png" width="60" height="60"/>
                <a href="http://www.camera360.com/" target="_blank">http://www.camera360.com/</a>
            </div>
            <div class="case-details-main">
                <h3>客户简介</h3>
                <p>Camera360 是七牛的早期用户，是一家科技与艺术相结合的公司，以帮助用户用最便捷的方式捕捉和分享生命里美好珍贵的瞬间为使命，由于在产品各个细节都尽力为用户提供良好体验，而深受喜爱。从 2010 年发展至今，在全球已经拥有超过 4.5 亿用户，并先后发布 MIX 滤镜大师、照片圈、宝贝相册、Camera360 Sight、HelloCamera、Movie360、Pink360、Camera360 Cloud 和 Web Camera360 等多款产品，打造“手机摄影生态圈”。</p>
                <h3>项目背景</h3>
                <p>与七牛的结缘是在 2012 年，当时两家公司都处于创业初期。作为创业公司，Camera360 必须将研发精力集中在产品业务上，所以对所选云服务的可用性、易用性、扩展性等有非常苛刻的要求。尤其是 Camera360 服务的用户是过亿级别，哪怕是一秒钟的闪断都是不能容忍的。</p>
                <h3>解决方案</h3>
                <p>目前，Camera360 基本使用了七牛提供的所有产品和服务，例如 Camera360 云相册使用了存储、CDN、缩略图和音频转码等业务。七牛有非常强大的转码集群，在产品需要扩展一种新的图片规格时，转码集群能很快完成，并且将转码生成的新规格图片放在七牛提供的缓存层供 APP 调用，不用占用存储空间。</p>
                <p>Camera360 每天产生的照片数量已达 2 亿张，累计照片数达到千亿张，这种服务器端只需存储一份原图，其他规格实时生成且不占用存储空间的机制，自然给 Camera360 带来诸多益处，成本是一方面，良好的用户体验也是不言而喻的。</p>
                <p>在 2014 年上半年，有段时间 Camera360 频频收到用户反馈，图片加载速度慢，经认真分析对比后，Camera360 团队发现，应对大图片加载慢这个问题，他们选用在图片没有加载成功时用 Camera360 的 logo 来做填充的处理方法，形成了不够好的用户体验。由此，他们想尝试采用业界经常提到的“平均色”，来解决这一问题。平均色的用途是在照片还未加载完成的情况下，先用色块填充照片区域，暗示用户照片正在加载，减少用户焦虑，从感性的角度减少加载时长。</p>
                <p>在做完充分的分析和调研之后，Camera360 研究院很快拿出了平均色算法程序。但考虑到 Camera360 云相册每日上传规模较大，照片上传完成后再做运算成本高、延迟长，而且自己部署和运维程序的话，也要消耗团队大量的时间和精力，于是 Camera360 与七牛技术团队进行了深入的交流和探讨。最终一致决定，由 Camera360 发挥自身专业优势提供效率高、通用性强、感官自然的平均色计算算法，由七牛团队在存储集群中提供高性能、高可用性部署，向所有使用七牛业务的开发者们分享该成果，大家可以通过“魔法变量”中的“imageAve”参数获取平均色。</p>
                <p>由于七牛采用的分布式存储架构本身具有很强的可扩展性，平均色算法程序交给七牛之后，七牛技术人员用一周时间就将 Demo 做出来了，后面用了不到一周时间来做调试和优化。总共花费两周不到的时间，这项服务就正式上线了，为 Camera360 和其他需要此项服务的七牛小伙伴均带来了很大方便，在图片上传后调用之前，就完成了平均色的计算和填充，极大地改善了用户体验。</p>
            </div>
        </div>
	</div>

    <section class="more-case">
        <div class="center">
            <h2>更多案例</h2>
            <ul>
                <li><a href="/case/meipai"><img src="<?php bloginfo('template_url');?>/images/case/meipai.jpg" width="250" height="169"/></a></li>
                <li><a href="/case/zte"><img src="<?php bloginfo('template_url');?>/images/case/zte.jpg" width="250" height="169"/></a></li>
                <li><a href="/case/pandatv"><img src="<?php bloginfo('template_url');?>/images/case/panda.jpg" width="250" height="169"/></a></li>
                <li class="remove-space"><a href="/case/xiaoying"><img src="<?php bloginfo('template_url');?>/images/case/xiaoying.jpg" width="250" height="169"/></a></li>
            </ul>
        </div>
    </section>

    <div class="center also-become">
        <h2>也成为七牛的用户</h2>
        <a class="also-become-btn" href="https://portal.qiniu.com/signin">立即使用七牛</a>
    </div>
</div>
<?php get_footer();?>