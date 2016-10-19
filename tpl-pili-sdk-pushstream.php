<?php /* Template Name: 直播云推流端 SDK */ get_header(); ?>
	<div id="container">
        <!--hero star-->
		<section class="content hero-pilisdk">
			<div class="center">
                <h1 class="h1-page-heading">轻量而功能强大的推流 SDK</h1>
                <p class="hero-text" style="width:730px">高性能的直播推流 SDK，让你的移动应用开启直播的眼睛。包体轻盈、功能丰富、轻松定制、快速二次开发。</p>
                <ul class="column-three column-pilisdk-pushstream">
                    <li class="clear-bottom">
                        <img src="<?php bloginfo('template_url');?>/images/products/sdk/collection.png" alt="采集" />
                        <h4>采集</h4>
                        <p class="product-intro-text">具备数据源开放性，能够让用户轻松获取设备采集到的视频、音频等数据。</p>
                    </li>
                    <li class="clear-bottom">
                        <img src="<?php bloginfo('template_url');?>/images/products/sdk/process.png" alt="处理" />
                        <h4>处理</h4>
                        <p class="product-intro-text">对通过采集到的音视频数据，可通过 SDK 层面接口进行润化处理，比如滤镜。</p>
                    </li>
                    <li class="clear-bottom">
                        <img src="<?php bloginfo('template_url');?>/images/products/sdk/coding.png" alt="编码" />
                        <h4>编码</h4>
                        <p class="product-intro-text">对处理后的音视频数据进行压缩编码，使之匹配推流所需协议，有效提升上传效率。</p>
                    </li>
                    <li class="clear-bottom clear-right">
                        <img src="<?php bloginfo('template_url');?>/images/products/sdk/push.png" alt="推流" />
                        <h4>推流</h4>
                        <p class="product-intro-text">压缩后的音视频，会通过七牛全球加速 LiveNet 的智能调度，高速顺畅分发至观众面前。</p>
                    </li>
                </ul>
			</div>
		</section>
        <!--hero end-->

        <section class="content pili-sdk-properties">
            <div class="center">
                <ul class="sdk-section-list">
                    <li>
                        <div class="sdk-section-content sdk-section-content-left">
                            <h3>实时美颜、自定义滤镜</h3>
                            <p>直播推流 SDK 内置了实时美颜功能，显著提高直播用户颜值。另外也提供丰富的接口，方便自定义或第三方滤镜地接入。</p>
                        </div>
                        <div class="sdk-section-illustrations">
                            <img src="<?php bloginfo('template_url');?>/images/products/sdk/filter.png" alt="实时美颜、自定义滤镜" width="340" height="240" />
                        </div>
                    </li>
                    <li>
                        <div class="sdk-section-illustrations">
                            <img src="<?php bloginfo('template_url');?>/images/products/sdk/watermark.png" alt="动态水印" width="340" height="240" />
                        </div>
                        <div class="sdk-section-content sdk-section-content-right">
                            <h3>动态水印</h3>
                            <p>在直播流推流之前添加动态水印，达到自定义、合规的视频直播输出。</p>
                        </div>
                    </li>
                     <li>
                        <div class="sdk-section-content sdk-section-content-left">
                            <h3>高性能、高质量的编码</h3>
                            <ul>
                                <li>兼容性、高性能编码（软硬编）</li>
                                <li>高清画质（1080p）</li>
                            </ul>
                        </div>
                        <div class="sdk-section-illustrations">
                            <img src="<?php bloginfo('template_url');?>/images/products/sdk/hd.png" alt="高性能、高质量的编码" width="340" height="240" />
                        </div>
                    </li>
                    <li>
                        <div class="sdk-section-illustrations">
                            <img src="<?php bloginfo('template_url');?>/images/products/sdk/save.png" alt="节约网络带宽，降低手机功耗" width="340" height="240" />
                        </div>
                        <div class="sdk-section-content sdk-section-content-right">
                            <h3>节约网络带宽，降低手机功耗</h3>
                            <ul>
                                <li>节省带宽（码率控制）；弱网优化（动态码率）</li>
                                <li>支持后台推流（退出 App 还在推流）</li>
                            </ul>
                        </div>
                    </li>
                     <li>
                        <div class="sdk-section-content sdk-section-content-left">
                            <h3>二次开发、自定义</h3>
                            <ul>
                                <li>自定义采集源（输入源：录屏、摄像头、外置输入）</li>
                                <li>推流状态实时反馈</li>
                            </ul>
                        </div>
                        <div class="sdk-section-illustrations">
                            <img src="<?php bloginfo('template_url');?>/images/products/sdk/free.png" alt="二次开发、自定义" width="340" height="240" />
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <div class="center also-become">
            <h2>直播的时代就是现在</h2>
            <a class="also-become-btn" href="https://portal.qiniu.com/signin">开启直播之旅</a>
        </div>

	</div>
<?php get_footer();?>