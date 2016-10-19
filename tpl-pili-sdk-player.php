<?php /* Template Name: 直播云播放器 SDK */ get_header(); ?>
	<div id="container">
        <!--hero star-->
		<section class="content hero-pilisdk">
			<div class="center">
                <h1 class="h1-page-heading">轻量且高性能的播放器 SDK</h1>
                <p class="hero-text" style="width:730px">强大的播放解码 SDK，专注直播而不限直播。难以置信的轻量体积，体验直播秒开的快感。</p>
                <ul class="column-three column-pilisdk-player">
                    <li class="clear-bottom">
                        <img src="<?php bloginfo('template_url');?>/images/products/sdk/get-stream.png" alt="拉流" />
                        <h4>拉流</h4>
                        <p class="product-intro-text">从服务端拉取支持以 RTMP、 HTTP-FLV 以及 HLS 等协议的音视频流。</p>
                    </li>
                    <li class="clear-bottom">
                        <img src="<?php bloginfo('template_url');?>/images/products/sdk/decoding.png" alt="解码" />
                        <h4>解码</h4>
                        <p class="product-intro-text">对拉流后的视频直播流进行高性能解码，让直播更流畅。</p>
                    </li>
                    <li class="clear-bottom clear-right">
                        <img src="<?php bloginfo('template_url');?>/images/products/sdk/player.png" alt="播放" />
                        <h4>播放</h4>
                        <p class="product-intro-text">支持包括 MP4、FLV、M3U8 等多样视频播放格式，给用户多重选择。</p>
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
                            <h3>给用户直播秒开的快感</h3>
                            <p>通过优化 SDK 网络层，使用户实现秒级打开播放器的效果。</p>
                        </div>
                        <div class="sdk-section-illustrations">
                            <img src="<?php bloginfo('template_url');?>/images/products/sdk/fast.png" alt="给用户直播秒开的快感" width="340" height="240" />
                        </div>
                    </li>
                    <li>
                        <div class="sdk-section-illustrations">
                            <img src="<?php bloginfo('template_url');?>/images/products/sdk/optimization.png" alt="追帧优化，让延迟销声匿迹" width="340" height="240" />
                        </div>
                        <div class="sdk-section-content sdk-section-content-right">
                            <h3>追帧优化，让延迟销声匿迹</h3>
                            <p>通过优化 SDK 网络层，使用户实现秒级打开播放器的效果。</p>
                        </div>
                    </li>
                     <li>
                        <div class="sdk-section-content sdk-section-content-left">
                            <h3>多协议多格式，让直播点播一体呈现</h3>
                            <ul>
                                <li>支持直播，多协议解析（RTMP、HTTP-FLV、HLS）。</li>
                                <li>支持点播，本地文件，网络播放（MP4、M4V、FLV ...）。</li>
                                <li>高性能解码，优先硬解（高清视频解码、降低功耗）。</li>
                                <li>支持软解(更好兼容)，自适应码率（服务端多码率，播放器切换）。</li>
                            </ul>
                        </div>
                        <div class="sdk-section-illustrations">
                            <img src="<?php bloginfo('template_url');?>/images/products/sdk/http.png" alt="多协议多格式，让直播点播一体呈现" width="340" height="240" />
                        </div>
                    </li>
                    <li>
                        <div class="sdk-section-illustrations">
                            <img src="<?php bloginfo('template_url');?>/images/products/sdk/rich.png" alt="多种播放功能，满足用户的多样需求" width="340" height="240" />
                        </div>
                        <div class="sdk-section-content sdk-section-content-right">
                            <h3>多种播放功能，满足用户的多样需求</h3>
                            <ul>
                                <li>后台播放，只解码音频不解码视频的后台播放处理，大大降低功耗。</li>
                                <li>横竖屏旋转，多角度的支持，感应用户使用场景，自动切换横竖屏。</li>
                                <li>镜像反转，用户使用前置摄像头时，选择镜像反转，观看真实视角。 </li>
                            </ul>
                        </div>
                    </li>
                     <li>
                        <div class="sdk-section-content sdk-section-content-left">
                            <h3>高度定制化和二次开发，让你的品牌数据优先</h3>
                            <p>自定义 UI 、播放状态信息获取（事件回调接口）。</p>
                        </div>
                        <div class="sdk-section-illustrations">
                            <img src="<?php bloginfo('template_url');?>/images/products/sdk/customization.png" alt="高度定制化和二次开发，让你的品牌数据优先" width="340" height="240" />
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