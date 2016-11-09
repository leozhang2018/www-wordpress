<?php /* Template Name: 案例-小影 */ get_header(); ?>
<div id="container">
    <div class="center case-breadcrumbs">
        <a class="back-case" href="/case">客户案例</a>
        <img src="<?php bloginfo('template_url');?>/images/case/breadcrumbs-sep.png" width="7" height="13" class="readcrumbs-sep" />
        <span>小影</span>
    </div>

	<div class="center case-details-content">
        <aside class="case-overview">
            <img src="<?php bloginfo('template_url');?>/images/case/xiaoying.jpg" width="400" height="271"/>
            <h4>使用产品</h4>
            <ul>
                <li>对象存储<a href="http://www.qiniu.com/products/kodo">http://www.qiniu.com/products/kodo</a></li>
                <li>融合 CDN<a href="http://www.qiniu.com/products/fusion">http://www.qiniu.com/products/fusion</a></li>
                <li>数据处理<a href="http://www.qiniu.com/products/dora">http://www.qiniu.com/products/dora</a></li>
            </ul>
        </aside>
        <div class="case-details">
            <div class="case-title-group">
                <img src="<?php bloginfo('template_url');?>/images/case/xiaoying.png" width="60" height="60"/>
                <a href="http://www.xiaoying.tv/" target="_blank">http://www.xiaoying.tv/</a>
            </div>
            <div class="case-details-main">
                <h3>客户简介</h3>
                <p>小影是全球首款在移动端打造的微电影、微视频拍摄美化应用。它模拟电影创作全流程，整合了前期拍摄、后期制作、分享传播为一体的一站式应用，在移动应用摄影美化类别中前所未有。小影独特的滤镜、转场、字幕、配乐以及一键应用的主题特效包，可以让你轻松打造个性十足的生活微电影。</p>
                <h3>项目背景</h3>
                <p>对于用户而言，视频的体验，一方面是因为他们的生活方式更加适合用视频记录，另一方面是因为他们有记录生活以及让更多人看到的需求。从用户分布情况来看，与美拍、秒拍及快手相比，小影的用户大部分在海外，且海外用户规模占到了 75% 的比例。</p>
                <p>小影在整个移动视频产品的质量和创新性上面有不少的实践经验。从内容的生成和消费看，它帮助年轻人应用手机拍摄或者制作个性化的视频，展示他们的风采。所以小影花了很多精力专注在如何把视频做的更个性化上面。小影的产品主要专注在移动端，考虑到内容必须要上传，也需要分享出去，所以在第三方技术服务上团队主要考虑了云存储及 CDN 服务。</p>
                <h3>解决方案</h3>
                <p>小影团队发现，七牛的云服务做的比较早，测试后发现七牛在移动视频的分发上面表现也非常不错，所以小影便使用了七牛的视频解决方案。</p>
                <p>七牛的 SDK 直接支持分片上传，小影无需再建设网络节点，投入成本会降低，同时保证了更高的覆盖面。此外，用户上传的视频数据存在七牛云存储空间将不再占用自己的服务器，小影只需要维护一个比较小的量级，即常规的数据库业务逻辑和前端缓存层，不用维护拥有 100 到 200 台服务器的大集群。</p>
                <p>在安全层面上，七牛有独立的安全团队做安全保障，小影无须担心安全漏洞攻击的问题。而音视频转码方面，考虑到实际的使用率，其成本比自建的低。数据分发方面，七牛融合 CDN 加速平台，会对 CDN 做一些智能调度优化，避免 CDN 故障时服务不可用，同时提供多域名和 IP 下载来避免域名劫持的问题。</p>
                <p>擅用云服务，并做好大数据处理工作。如果要做全球市场，就需要建立全球用户大数据库，对全球用户在创作和消费上进行分析，这样才能真正做到精细化的运营。对于不同的国家和地区，因为文化、环境等原因，视频的生产和消费均不一样。要将数据分析做到极致，就需要在云服务、大数据、视频的处理等方面有很多的研发和积累。而视频的存储是第一步，也是非常重要的一步。</p>
            </div>
        </div>
	</div>

    <section class="more-case">
        <div class="center">
            <h2>更多案例</h2>
            <ul>
                <li><a href="/case/camera360"><img src="<?php bloginfo('template_url');?>/images/case/camera360.jpg" width="250" height="169"/></a></li>
                <li><a href="/case/meipai"><img src="<?php bloginfo('template_url');?>/images/case/meipai.jpg" width="250" height="169"/></a></li>
                <li><a href="/case/zte"><img src="<?php bloginfo('template_url');?>/images/case/zte.jpg" width="250" height="169"/></a></li>
                <li class="remove-space"><a href="/case/pandatv"><img src="<?php bloginfo('template_url');?>/images/case/panda.jpg" width="250" height="169"/></a></li>
            </ul>
        </div>
    </section>

    <div class="center also-become">
        <h2>也成为七牛的用户</h2>
        <a class="also-become-btn" href="https://portal.qiniu.com/signup">立即使用七牛</a>
    </div>
</div>
<?php get_footer();?>
