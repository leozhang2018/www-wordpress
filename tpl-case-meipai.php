<?php /* Template Name: 案例-美拍 */ get_header(); ?>
<div id="container">
    <div class="center case-breadcrumbs">
        <a class="back-case" href="/case">客户案例</a>
        <img src="<?php bloginfo('template_url');?>/images/case/breadcrumbs-sep.png" width="7" height="13" class="readcrumbs-sep" />
        <span>美拍</span>
    </div>

	<div class="center case-details-content">
        <aside class="case-overview">
            <img src="<?php bloginfo('template_url');?>/images/case/meipai.jpg" width="400" height="271"/>
            <h4>使用产品</h4>
            <ul>
                <li>对象存储<a href="http://www.qiniu.com/products/kodo">http://www.qiniu.com/products/kodo</a></li>
                <li>直播云服务<a href="http://www.qiniu.com/products/pili">http://www.qiniu.com/products/pili</a></li>
                <li>融合 CDN<a href="http://www.qiniu.com/products/fusion">http://www.qiniu.com/products/fusion</a></li>
                <li>数据处理<a href="http://www.qiniu.com/products/dora">http://www.qiniu.com/products/dora</a></li>
            </ul>
        </aside>
        <div class="case-details">
            <div class="case-title-group">
                <img src="<?php bloginfo('template_url');?>/images/case/meipai.png" width="60" height="60"/>
                <a href="http://www.meipai.com/" target="_blank">http://www.meipai.com/</a>
            </div>
            <div class="case-details-main">
                <h3>客户简介</h3>
                <p>美拍，高颜值手机直播 + 超火爆原创视频。2014 年 5 月上线后，连续 24 天蝉联 App Store 免费总榜冠军，并成为当月 App Store 全球非游戏类下载量第一。美拍内容十分丰富，有搞笑、美妆时尚、美食、音乐、舞蹈、吃秀等近 20 个频道。2016 年 1 月，美拍推出“直播”功能，同年 6 月推出“礼物系统”功能，不管是拍摄短视频还是直播都可以接受粉丝的在线送礼，迅速成为最有代表性的娱乐直播平台。</p>
                <p>截至 2016 年 6 月，美拍用户创作视频总数达 5.3 亿，日人均观看时长 40 分钟；美拍直播上线半年，累计直播数已达 952 万场，累计观众数 5.7 亿。</p>
                <h3>项目背景</h3>
                <p>美拍于 2014 年 5 月发布，上线仅 1 天便登入 App Store 免费总榜第一，当月下载量排名第一。在发布 9 个月的时候，用户突破 1 亿。截至 2015 年 10 月 31 日，美拍视频日播放量在 2.7 亿以上，日视频播放时长达到 183 万小时。</p>
                <p>在面临用户量爆发式增长的情况下，借力于第三方云服务所提供的稳定可靠的数据存储及处理业务是目前创业公司非常普遍的选择。之前的图片工具类应用，其主要技术难度表现在客户端，包括各种处理、美化等，与服务端的交互比较少，支撑难度不大。而美拍由于其社交属性，属于重服务端类的产品。</p>
                <h3>解决方案</h3>
                <p>统观短视频产品，其服务端所产生的压力多会表现在：数据上传面临如何设计分片、保证网络覆盖、降低流量成本、防止 DNS 劫持，存储数据处理层面使用何种存储技术，如何运维大规模集群，以及所有人都关心的成本问题。</p>
                <p>针对以上痛点，七牛云提供了一整套的应用场景解决方案，最大限度地为用户提供便利。在各类应用中，七牛云将玩家所录制的 MP4&MOV 格式视频通过分片排队上传至七牛对象存储平台后，在七牛数据处理平台中完成视频的审核、鉴黄、转码、打水印等处理，以适应多屏幕多终端的观看需求。而在用户访问时，通过对于 CDN 路线的选择进行点播加速，提升体验。</p>
                <p>值得一提的是，美拍很重视视频审核工作，有一个数百人的团队专门检查美拍上的每一条视频，确保其中没有违禁内容。对于数据处理中遇到审查的问题，七牛会帮助客户设计一些审查用的转码，审查员可以在一个网页上播放多个视频，整个审查效率大幅提高，同时也降低了做审查的成本。数据分发方面，云存储会帮助做一些挑选 CDN 的工作，会去做一些智能调度优化 CDN，避免 CDN 故障时服务不可用。同时提供多域名和 IP 下载来避免域名劫持的问题。</p>
            </div>
        </div>
	</div>

    <section class="more-case">
        <div class="center">
            <h2>更多案例</h2>
            <ul>
                <li><a href="/case/camera360"><img src="<?php bloginfo('template_url');?>/images/case/camera360.jpg" width="250" height="169"/></a></li>
                <li><a href="/case/zte"><img src="<?php bloginfo('template_url');?>/images/case/zte.jpg" width="250" height="169"/></a></li>
                <li><a href="/case/pandatv"><img src="<?php bloginfo('template_url');?>/images/case/panda.jpg" width="250" height="169"/></a></li>
                <li class="remove-space"><a href="/case/xiaoying"><img src="<?php bloginfo('template_url');?>/images/case/xiaoying.jpg" width="250" height="169"/></a></li>
            </ul>
        </div>
    </section>

    <div class="center also-become">
        <h2>也成为七牛的用户</h2>
        <a class="also-become-btn" href="https://portal.qiniu.com/signup">立即使用七牛</a>
    </div>
</div>
<?php get_footer();?>
