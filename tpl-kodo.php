<?php /* Template Name: 对象存储 */ get_header(); ?>
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
                <li><a href="#section-1" class="smoothScroll">对象存储介绍</a></li>
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
		<section class="content hero hero-kodo" id="section-1">
            <div class="center">
			 	<h1 class="h1-page-heading">高可用、高可靠、弹性伸缩<br/>的对象存储</h1>
			 	<p class="hero-text">七牛云自主研发的分布式对象存储服务，提供高可靠、强安全、低成本、可扩展的存储服务，满足各类存储需求。您只需按实际使用的存储量付费。</p>
			 	<a class="btn btn-normal" href="https://portal.qiniu.com/signin">立即使用</a>
            </div>
		</section>
        <!--hero end-->

        <!--product-features star-->
		<section class="content product-features product-features-kodo" id="section-2">
            <ul class="column-two">
                <li>
                    <img src="<?php bloginfo('template_url');?>/images/products/kodo/security.png" alt="安全性" />
                    <div class="column-two-content">
                        <h4>可靠</h4>
                        <p>业界领先的纠删码存储方案，能够提供高达 16 个 9 的数据可靠性。跨数据中心的副本冗余，能够保障服务的超高可用性。</p>
                    </div>
                </li>
                <li class="clear-right">
                    <img src="<?php bloginfo('template_url');?>/images/products/kodo/flexible-space.png" alt="弹性空间" />
                    <div class="column-two-content">
                        <h4>可扩展</h4>
                        <p>存储空间无上限，无需担心扩容问题。能够实现存储需求的弹性伸缩，从而提升用户业务灵活性。</p>
                    </div>
                </li>
                <li class="clear-bottom">
                    <img src="<?php bloginfo('template_url');?>/images/products/kodo/paid.png" alt="按需付费" />
                    <div class="column-two-content">
                        <h4>低成本</h4>
                        <p>无需前期投入。按需使用、按需付费，能够有效避免存储及带宽资源的闲置浪费。</p>
                    </div>
                </li>
                <li class="clear-bottom clear-right">
                    <img src="<?php bloginfo('template_url');?>/images/products/kodo/online.png" alt="持续在线" />
                    <div class="column-two-content">
                        <h4>一站式</h4>
                        <p>与七牛云的融合 CDN、数据处理以及直播云服务实现原生对接，为用户提供一站式数据管理服务。</p>
                    </div>
                </li>
            </ul>
		</section>
        <!--product-features end-->

        <!--product-scene star-->
        <section class="content content-product-scene" id="section-3">
            <div class="center">
                <h4 class="h4-subheading">使用场景</h4>
                <h2 class="h2-section-heading h2-clear-bottom">七牛云对象存储使用场景</h2>
                <div class="tabs tabs-scene-wrap">
                    <ul class="ul-tabs">
                        <li><a href="#tab-content-section-1">在线存储和分发</a></li>
                        <li><a href="#tab-content-section-2">镜像存储</a></li>
                        <li><a href="#tab-content-section-3">备份和归档</a></li>
                        <li><a href="#tab-content-section-4">富媒体数据处理</a></li>
                        <li><a href="#tab-content-section-5">静态资源托管</a></li>
                    </ul>
                    <div class="tab-content tab-content-scene">
                        <section id="tab-content-section-1">
                             <div class="scene-intro">
                                <h4>在线存储和分发</h4>
                                <p>七牛云提供高可用和高可靠的对象存储服务，使得用户可以放心的将各种内容存储在云端。利用七牛云对象存储的扩展性和按需付费的优势，可以满足用户持续快速增长的存储需求。用户也可以将七牛云的对象存储和融合 CDN 服务搭配使用，实现全球覆盖、快速高效的内容分发。</p>
                            </div>
                            <div class="scene-img">
                                <img src="<?php bloginfo('template_url');?>/images/products/kodo/data-storage.png" alt="数据存储" />
                            </div>
                        </section>
                        <section id="tab-content-section-2">
                             <div class="scene-intro">
                                <h4>镜像存储</h4>
                                <p>七牛云支持镜像存储，这是一种快速的数据迁移和加速服务。可以帮助用户实现无缝数据迁移，迁移过程中并不影响原有业务系统的访问。镜像存储适用于迁移原有业务系统的已有数据。</p>
                            </div>
                            <div class="scene-img">
                                <img src="<?php bloginfo('template_url');?>/images/products/kodo/upload-file.png" alt="跨地域容灾" />
                            </div>
                        </section>
                        <section id="tab-content-section-3">
                             <div class="scene-intro">
                                <h4>备份和归档</h4>
                                <p>七牛云提供高可用和高可靠的存储解决方案来备份和归档用户的关键数据。通过七牛云的身份验证机制可以设置不同的访问权限和级别，保障用户数据的访问安全。相比传统自建的备份和归档存储系统，用户无需在业务初期采购高昂硬件，无需担心数据增长带来的扩容问题，从而节省更多的存储成本、维护成本和人力资源成本。</p>
                            </div>
                            <div class="scene-img">
                                <img src="<?php bloginfo('template_url');?>/images/products/kodo/application-distribution.png" alt="静态资源托管" />
                            </div>
                        </section>
                        <section id="tab-content-section-4">
                             <div class="scene-intro">
                                <h4>富媒体数据处理</h4>
                                <p>针对海量的用户生成内容，七牛云对象存储能够提供跨地域、高并发的内容上传和访问服务。同时结合七牛云提供的数据处理服务，可以在云端实现图片裁剪、格式转化和水印，以及视频转码、切片和拼接等富媒体处理功能，满足移动网络场景下多终端设备的访问需求。</p>
                            </div>
                            <div class="scene-img">
                                <img src="<?php bloginfo('template_url');?>/images/products/kodo/data-processing.png" alt="应用程序分发" />
                            </div>
                        </section>
                        <section id="tab-content-section-5">
                             <div class="scene-intro">
                                <h4>静态资源托管</h4>
                                <p>七牛云无缝集合各类第三方扩展插件，如 WordPress、Discuz、Emlog 等，并支持一键将各类插件里的静态资源托管到七牛。</p>
                            </div>
                            <div class="scene-img">
                                <img src="<?php bloginfo('template_url');?>/images/products/kodo/static-resources-managed.png" alt="数据处理" />
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
                        <li><h4>对象存储文档</h4></li>
                        <li><a href="http://developer.qiniu.com/article/index.html#quickstart" target="_blank">快速入门</a></li>
                        <li><a href="http://developer.qiniu.com/article/index.html#kodo-scenario" target="_blank">应用场景</a></li>
                        <li><a href="http://developer.qiniu.com/article/index.html#kodo-developer-guide" target="_blank">开发者指南</a></li>
                        <li><a href="http://developer.qiniu.com/article/index.html#kodo-api-handbook" target="_blank">API 参考</a></li>
                        <li><a class="link-more link-developer-help" href="http://developer.qiniu.com/article/index.html#kodo" target="_blank">更多文档</a></li>
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
                    </ul>
                </nav>
             </div>
        </section>
        <!--developer-help end-->

        <!--common-questions star-->
        <section class="content content-common-questions" id="section-5">
             <div class="center">
                <h2>对象存储常见问题</h2>
                <ul class="ul-common-questions">
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/70012/" target="_blank">如何将线上的数据热迁移到七牛云</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/69078/" target="_blank">如何上传 base64 编码图片到七牛云</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/68964/" target="_blank">如何获取存储文件的外链</a></li>
                    <li><a class="link" href="tps://support.qiniu.com/hc/kb/article/68884/" target="_blank">什么是样式以及样式分隔符</a></li>
                </ul>
                <ul class="ul-common-questions common-questions-right">
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/112806/" target="_blank">公开空间和私有空间的区别是什么</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/112817/" target="_blank">如何避免用户上传同名文件</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/73533/" target="_blank">镜像存储功能在源站 URL 含有问号时的抓取资源规则</a></li>
                    <li><a class="link" href="https://support.qiniu.com/hc/kb/article/112993/" target="_blank">手机端网络测试工具 (Android、iOS)</a></li>
                </ul>
                <div class="clear"></div>
                <a class="btn btn-normal" href="https://support.qiniu.com/hc/kb/category/17889/" target="_blank">查看更多问题</a>
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