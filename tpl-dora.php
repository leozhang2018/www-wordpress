<?php /* Template Name: 数据处理 */ get_header(); ?>
    <nav id="products-sub-menu">
        <div class="wrap">
            <nav class="select-products">
                <a class="all-products">更多产品</a>
                <ul class="all-products-sub">
                    <li><a href="/products/pili" class="pili">直播云</a></li>
                    <li><a href="/products/kodo" class="kodo">对象存储</a></li>
                    <li><a href="/products/fusion" class="fusion">融合 CDN</a></li>
                    <li><a href="/products/dora" class="dora">数据处理</a></li>
                </ul>
            </nav>
            <ul class="menu">
                <li><a href="#section-1" class="smoothScroll">数据处理介绍</a></li>
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
		<section class="content hero hero-dora" id="section-1">
			<div class="center">
                <h1 class="h1-page-heading">零运维、高可用、高性能的<br/>数据处理</h1>
                <p class="hero-text">七牛数据处理平台针对海量数据，提供零运维、高可用、高性能的数据处理服务，日处理数近百亿次。除了提供基础数据处理，还基于容器技术打造了易扩展、易部署、高自由度的自定义数据处理接入平台，与七牛数据处理服务无缝兼容使用。</p>
                <a class="btn btn-normal" href="https://portal.qiniu.com/signin">立即使用</a>
			</div>
		</section>
        <!--hero end-->

        <!--product-features star-->
		<section class="content product-features product-features-dora" id="section-2">
			 <ul class="column-three column-dora-features-list">
                <li>
                    <img src="<?php bloginfo('template_url');?>/images/products/dora/graphics-dora-official.png" alt="官方数据处理" />
                    <h4>官方数据处理</h4>
                    <p class="column-three-text">提供图片裁剪、缩放、格式转化、水印、原图保护和防盗链，以及音视频转码、切片和拼接等基础的数据处理服务，服务内容还在不断丰富中。</p>
                    <a class="link-more dora-doc" href="http://developer.qiniu.com/article/index.html#fop-official" target="_blank">查看文档</a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url');?>/images/products/dora/graphics-dora-custom.png" alt="自定义数据处理" />
                    <h4>自定义数据处理平台</h4>
                    <p class="column-three-text">允许用户构建、上传自定义的私有数据处理服务，支持管道处理、持久化、预处理操作等所有特性。</p>
                     <a class="link-more dora-doc" href="http://developer.qiniu.com/article/index.html#dora-ufop" target="_blank">查看文档</a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url');?>/images/products/dora/graphics-dora-thirdparty.png" alt="第三方数据处理" />
                    <h4>第三方数据处理市场</h4>
                    <p class="column-three-text">作为一个开放的应用平台，欢迎各种图片、音视频、以及其他数据处理的第三方应用提供方接入，为七牛存储中的海量数据，提供增值的数据处理服务。</p>
                    <a class="link-more dora-doc" href="http://developer.qiniu.com/article/index.html#market-application" target="_blank">查看文档</a>
                </li>
            </ul>
		</section>
        <!--product-features end-->

        <!--product-scene star-->
        <section class="content content-product-scene" id="section-3">
            <div class="center">
                <h4 class="h4-subheading">使用场景</h4>
                <h2 class="h2-section-heading h2-clear-bottom">七牛云数据处理使用场景</h2>
                <div class="tabs tabs-scene-wrap">
                    <ul class="ul-tabs">
                        <li><a href="#tab-content-section-1">图片处理</a></li>
                        <li><a href="#tab-content-section-2">音视频处理</a></li>
                        <li><a href="#tab-content-section-3">鉴黄、广告等特殊处理</a></li>
                    </ul>
                    <div class="tab-content tab-content-scene">
                        <section id="tab-content-section-1">
                             <div class="scene-intro">
                                <h4>图片处理</h4>
                                <p>各种 PGC、UGC 图片共享应用或平台。例如，社交平台图片分享后，用户需要在 PC 端、平板和手机端查看图片，则可以使用图片缩放功能来适应不同的设备；为了防止别人盗用原图，用户可以使用原图保护、防盗链、图片水印或文字水印等功能；各图像 APP 里的滤镜功能则可以打包使用调整图片曲线、色调和饱和度等功能；摄影爱好者应用则可以使用图片接口信息功能查看各种数码相机的摄影信息等。</p>
                            </div>
                            <div class="scene-img">
                                <img src="<?php bloginfo('template_url');?>/images/products/dora/pic.png" alt="图片处理应用场景" />
                            </div>
                        </section>
                        <section id="tab-content-section-2">
                             <div class="scene-intro">
                                <h4>音视频处理</h4>
                                <p>PGC 和 UGC 音频、视频网站或应用。例如，在线教育、媒体资讯、游戏娱乐等平台的视频分发，就需要转码成相应的格式，以适应不同的终端、网络带宽或用户需求；同样需要转码成更小的格式以节省分发的流量；视频水印功能更能宣传品牌价值和保护视频版权。音频、短视频分享 APP 同样需要各种音视频处理功能。</p>
                            </div>
                            <div class="scene-img">
                                <img src="<?php bloginfo('template_url');?>/images/products/dora/vid.png" alt="音视频处理应用场景" />
                            </div>
                        </section>
                        <section id="tab-content-section-3">
                             <div class="scene-intro">
                                <h4>鉴黄、广告等特殊处理</h4>
                                <p>移动社交类、UGC 类平台和 APP。在这类应用中，用户经常会上传大量的图片，为了打造健康的社交环境，减少运营风险，平台需要高效准确地鉴别出各种涉黄、广告和涉暴恐图片。使用七牛功能丰富的第三方数据处理服务就可以满足需求了。</p>
                            </div>
                            <div class="scene-img">
                                <img src="<?php bloginfo('template_url');?>/images/products/dora/data.png" alt="数据处理应用场景" />
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
                        <li><h4>数据处理 API</h4></li>
                        <li><a href="http://developer.qiniu.com/code/v6/api/dora-api/av/index.html" target="_blank">音视频处理</a></li>
                        <li><a href="http://developer.qiniu.com/code/v6/api/kodo-api/image/index.html" target="_blank">图片处理</a></li>
                        <li><a href="http://developer.qiniu.com/code/v6/api/dora-api/pfop/pfop.html" target="_blank">持久化数据处理</a></li>
                        <li><a href="http://developer.qiniu.com/code/v6/api/dora-api/concat.html" target="_blank">文本文件合并</a></li>
                        <li><a href="http://developer.qiniu.com/code/v6/api/dora-api/md2html.html" target="_blank">MD 转 HTML</a></li>
                        <li><a href="http://developer.qiniu.com/code/v6/api/dora-api/qrcode.html" target="_blank">资源下载二维码</a></li>
                    </ul>
                    <ul>
                        <li><h4>开发者工具</h4></li>
                        <li><a href="http://developer.qiniu.com/code/v6/tool/qrsctl.html" target="_blank">命令行辅助工具</a></li>
                        <li><a href="http://developer.qiniu.com/article/dora/ufop/ufop-cli.html" target="_blank">命令行工具 qufopctl</a></li>
                        <li><a class="link-more link-developer-help" href="http://developer.qiniu.com/resource/official.html#tool" target="_blank">更多工具</a></li>
                    </ul>
                </nav>
             </div>
        </section>
        <!--developer-help end-->

        <!--common-questions star-->
        <section class="content content-common-questions" id="section-5">
             <div class="center">
                <h2>数据处理常见问题</h2>
                <ul class="ul-common-questions">
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/68883/" target="_blank">什么是原图保护</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/68983/" target="_blank">访问缩略图报 bad token 错误</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/147363/" target="_blank">音视频转码界面化操作队列</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/182125/" target="_blank">avthumb 参数 formats 格式及解释</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/112957/" target="_blank">hls 加密 - 私有存储服务加密</a></li>
                </ul>
                <ul class="ul-common-questions common-questions-right">
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/112877/" target="_blank">原图保护与私有空间的区别</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/68873/" target="_blank">音视频支持和音视频播放</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/71513/" target="_blank">七牛异步 PFOP 操作指南</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/179962/" target="_blank">怎样将视频转码成普清高清来适应手机端或者 Web 端</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/68906/" target="_blank">图片鉴黄服务接口协议</a></li>
                </ul>
                <div class="clear"></div>
                <a class="btn btn-normal" href="https://support.qiniu.com/hc/kb/section/69515/" target="_blank">查看更多问题</a>
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