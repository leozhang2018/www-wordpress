<?php /* Template Name: 融合 CDN */ get_header(); ?>
    <nav id="products-sub-menu">
        <div class="wrap">
            <nav class="select-products">
                <a class="all-products">更多产品</a>
                <ul class="all-products-sub">
                    <li><a href="/products/kodo" class="kodo">对象存储</a></li>
                    <li><a href="/products/fusion" class="fusion">融合 CDN</a></li>
                    <li><a href="/products/pili" class="pili">直播云</a></li>
                    <li><a href="/products/dora" class="dora">数据处理</a></li>
                </ul>
            </nav>
            <ul class="menu">
                <li><a href="#section-1" class="smoothScroll">融合 CDN 介绍</a></li>
                <li><a href="#section-2" class="smoothScroll">功能特性</a></li>
                <li><a href="#section-3" class="smoothScroll">使用场景</a></li>
                <li><a href="#section-4" class="smoothScroll">开发者支持</a></li>
                <li><a href="#section-5" class="smoothScroll">常见问题</a></li>
            </ul>
            <a class="btn btn-small products-sub-menu-signup" href="https://portal.qiniu.com/signup/choice">立即使用</a>
        </div>
    </nav>
	<div id="container">
        <!--hero star-->
		<section class="content hero hero-fusion" id="section-1">
			 <div class="center">
			 	<h1 class="h1-page-heading" style="width:550px">可视化、智能调度、向单一 CDN 说再见的融合 CDN</h1>
			 	<p class="hero-text">融合 CDN 是在传统 CDN 基础上实现的对数据网络加速进一步优化的融合管理服务。除了服务于音视频点播、文件、应用与 Web 加速，以及各类增值场景外，七牛融合 CDN 还通过全方位的 CDN 质量监控，以及智能易用的加速节点调度等功能，保障用户服务的连续性，提供稳定快速的网络访问质量。</p>
			 	<a class="btn btn-normal" href="https://portal.qiniu.com/signin">立即使用</a>
			 </div>
		</section>
        <!--hero end-->

        <!--product-features star-->
		<section class="content product-features product-features-fusion" id="section-2">
			 <ul class="column-two">
                <li>
                    <img src="<?php bloginfo('template_url');?>/images/products/fusion/no-blindspot.png" alt="无盲区" />
                    <div class="column-two-content">
                        <h4>无盲区</h4>
                        <p>成熟的多 CDN 融合管控方案，精选主流 CDN 厂商优质节点，与七牛云自有高质量节点相结合，全面覆盖各地区各运营商网络，真正做到无盲区。</p>
                    </div>
                </li>
                <li class="clear-right">
                    <img src="<?php bloginfo('template_url');?>/images/products/fusion/intelligent-scheduling.png" alt="智能调度" />
                    <div class="column-two-content">
                        <h4>智能调度</h4>
                        <p>基于七牛云自有 IP 库，结合全网宕机与性能监控研发的智能融合调度系统，支持 DNS、HTTPDNS、IP302 调度方式，能有效防止访问劫持，实现 100% 实时调度精准可控。</p>
                    </div>
                </li>
                <li class="clear-bottom">
                    <img src="<?php bloginfo('template_url');?>/images/products/fusion/quality-control.png" alt="立体品控" />
                    <div class="column-two-content">
                        <h4>立体品控</h4>
                        <p>基于权威 APM 厂商覆盖性能监控，七牛自研全网实时可用性监控，SDK 日志上报实时访问性能监控，打造七牛融合 CDN 立体品控体系。</p>
                    </div>
                </li>
                <li class="clear-right clear-bottom">
                    <img src="<?php bloginfo('template_url');?>/images/products/fusion/reduce-back.png" alt="降低回源" />
                    <div class="column-two-content">
                        <h4>降低回源</h4>
                        <p>自建 BGP 网络中间源，消除跨运营商网络回源慢甚至不可达等问题，保护源站带宽不受边缘节点请求波动影响，节省回源成本。</p>
                    </div>
                </li>
            </ul>
		</section>
        <!--product-features end-->

        <!--product-scene star-->
        <section class="content content-product-scene" id="section-3">
            <div class="center">
                <h4 class="h4-subheading">使用场景</h4>
                <h2 class="h2-section-heading h2-clear-bottom">七牛云融合 CDN 使用场景</h2>
                <div class="tabs tabs-scene-wrap">
                    <ul class="ul-tabs">
                        <li><a href="#tab-content-section-1">网页加速</a></li>
                        <li><a href="#tab-content-section-2">文件下载</a></li>
                        <li><a href="#tab-content-section-3">音视频点播</a></li>
                    </ul>
                    <div class="tab-content tab-content-scene">
                        <section id="tab-content-section-1">
                             <div class="scene-intro">
                                <h4>网页加速</h4>
                                <p>网页静态资源优化加速分发，如：html、css、img、短视频等；全站 HTTPS 保证网站访问安全；TCP 压缩优化使网页大图、样式等完成秒级加载。缩短网页响应时间提高用户体验。</p>
                                <p>配合七牛云-图片处理服务一起使用，还可以针对图片进行缩略、打水印，转格式等数据处理服务。</p>
                            </div>
                            <div class="scene-img">
                                <img src="<?php bloginfo('template_url');?>/images/products/fusion/web.png" alt="融合 CDN 网页加速" />
                            </div>
                        </section>
                        <section id="tab-content-section-2">
                             <div class="scene-intro">
                                <h4>文件下载</h4>
                                <p>大文件下载优化加速分发，例如：apk、mp3、exe、zip 等；七牛融合 CDN 在全球数千个节点，让用户在下载过程中获得更快的下载速度，并利用分段缓存技术提高了大文件下载传输的稳定性。</p>
                                <p>配合七牛云-存储服务一起使用，可有效降低回源和存储成本。</p>
                            </div>
                            <div class="scene-img">
                                <img src="<?php bloginfo('template_url');?>/images/products/fusion/download.png" alt="融合 CDN 文件下载" />
                            </div>
                        </section>
                        <section id="tab-content-section-3">
                             <div class="scene-intro">
                                <h4>音视频点播</h4>
                                <p>音视频点播优化加速服务，例如：mp4、flv、rmvb、wmv、hls 等；七牛融合 CDN 利用 BGP 网络中间源技术降低回源带宽压力节省了用户回源成本、分段预取技术使用户在浏览音视频时更加的流畅，高级防盗链技术有效防止用户文件被盗用。</p>
                                <p>配合七牛云-数据处理服务，还可以进行音视频转码、转格式、压缩等数据处理服务。</p>
                            </div>
                            <div class="scene-img">
                                <img src="<?php bloginfo('template_url');?>/images/products/fusion/media.png" alt="融合 CDN 音视频点播" />
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!--product-scene end-->

        <!--developer-help star-->
        <section class="content content-developer-help" id="section-4">
             <div class="center">
                <h2 class="h2-developer-help">开发者支持</h2>
                <nav class="developer-help-content">
                    <ul>
                        <li><h4>融合 CDN 文档</h4></li>
                        <li><a href="http://developer.qiniu.com/article/fusion/api/refresh.html" target="_blank">缓存刷新</a></li>
                        <li><a href="http://developer.qiniu.com/article/fusion/api/prefetch.html" target="_blank">文件预取</a></li>
                        <li><a href="http://developer.qiniu.com/article/fusion/api/traffic-bandwidth.html" target="_blank">流量带宽</a></li>
                        <li><a href="http://developer.qiniu.com/article/fusion/api/log.html" target="_blank">日志下载</a></li>
                        <li><a class="link-more link-developer-help" href="http://developer.qiniu.com/article/index.html#fusion" target="_blank">更多文档</a></li>
                    </ul>
                    <ul>
                        <li><h4>官方 SDKs</h4></li>
                        <li><a href="http://developer.qiniu.com/code/v7/sdk/objc.html" target="_blank">Objective-C (iOS/Mac)</a></li>
                        <li><a href="http://developer.qiniu.com/code/v7/sdk/android.html" target="_blank">Java (Android 客户端)</a></li>
                        <li><a href="http://developer.qiniu.com/code/v7/sdk/java.html" target="_blank">Java (服务端)</a></li>
                        <li><a href="http://developer.qiniu.com/code/v7/sdk/php.html" target="_blank">PHP</a></li>
                        <li><a href="http://developer.qiniu.com/code/v7/sdk/python.html" target="_blank">Python</a></li>
                        <li><a href="http://developer.qiniu.com/code/v6/sdk/ruby.html" target="_blank">Ruby</a></li>
                        <li><a class="link-more link-developer-help" href="http://developer.qiniu.com/resource/official.html" target="_blank">更多 SDKs</a></li>
                    </ul>
                    <ul>
                        <li><h4>开发者工具</h4></li>
                        <li><a href="http://developer.qiniu.com/code/v6/tool/qshell.html" target="_blank">qshell 命令行工具</a></li>
                        <li><a href="http://developer.qiniu.com/code/v6/tool/qrsbox.html" target="_blank">同步上传工具</a></li>
                        <li><a href="http://developer.qiniu.com/code/v6/tool/qwebtest.html" target="_blank">检测工具</a></li>
                        <li><a href="http://developer.qiniu.com/code/v6/tool/qfetch.html" target="_blank">数据迁移工具</a></li>
                        <li><a href="http://developer.qiniu.com/code/v6/tool/qrsctl.html" target="_blank">命令行辅助工具</a></li>
                        <li><a href="http://developer.qiniu.com/article/dora/ufop/ufop-cli.html" target="_blank">命令行工具 qufopctl</a></li>
                    </ul>
                </nav>
             </div>
        </section>
        <!--developer-help end-->

        <!--common-questions star-->
        <section class="content content-common-questions" id="section-5">
             <div class="center">
                <h2>融合 CDN 常见问题</h2>
                <ul class="ul-common-questions">
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/68977/" target="_blank">自定义域名的绑定流程</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/148868/" target="_blank">在 CDN 上，自定义域名 HTTPS 自助配置指南</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/74265/" target="_blank">如何配置域名的 CNAME</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/174287/" target="_blank">测试域名访问限制规则</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/134426/" target="_blank">刷新缓存和生效时间</a></li>
                </ul>
                <ul class="ul-common-questions common-questions-right">
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/195128" target="_blank">时间戳防盗链</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/73535/" target="_blank">如何通过 SSL 的形式来访问七牛云上的资源</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/68941/" target="_blank">什么是防盗链设置中的空 Referer</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/70763/" target="_blank">自定义域名，防盗链，和身份认证审核的生效时间</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/68893/" target="_blank">CDN 配置、备案、CNAME、流量带宽收费说明</a></li>
                </ul>
                <div class="clear"></div>
                <a class="btn btn-normal" href="https://support.qiniu.com/hc/kb/category/23856/" target="_blank">查看更多问题</a>
             </div>
        </section>
        <!--common-questions end-->

        <!--page-links star-->
        <section class="content content-page-links">
             <div class="center">
                 <ul class="ul-page-links">
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/pagelinks/icon-developer-community.png" alt="开发者中心" />
                        <a href="http://developer.qiniu.com/" target="_blank">开发者中心</a>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/pagelinks/icon-customer-case.png" alt="客户案例" />
                        <a href="/case">客户案例</a>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/pagelinks/icon-product-price.png" alt="产品价格" />
                        <a href="/pricing">产品价格</a>
                    </li>
                </ul>
             </div>
        </section>
        <!--page-links end-->

	</div>
<?php get_footer();?>