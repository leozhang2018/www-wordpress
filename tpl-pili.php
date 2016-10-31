<?php /* Template Name: 直播云服务 */ get_header(); ?>
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
                <li><a href="#section-1" class="smoothScroll">直播云介绍</a></li>
                <li><a href="#section-2" class="smoothScroll">产品优势</a></li>
                <li><a href="#section-3" class="smoothScroll">功能特性</a></li>
                <li><a href="#section-4" class="smoothScroll">使用场景</a></li>
                <li><a href="#section-5" class="smoothScroll">客户案例</a></li>
                <li><a href="#section-6" class="smoothScroll">快速接入</a></li>
            </ul>
            <a class="btn btn-small products-sub-menu-signup" href="https://portal.qiniu.com/signup/choice">立即使用</a>
        </div>
    </nav>
	<div id="container">
        <!--hero star-->
		<section class="content hero hero-pili" id="section-1">
			<div class="center">
                <h1 class="h1-page-heading">七牛直播云服务上线</h1>
                <p class="hero-text">七牛在视频直播大爆发时代，推出专为直播平台打造的全球化直播流服务和端到端直播场景解决方案，完美解决视频企业的三高之痛：技术门槛高、成本高、卡顿延时率高。</p>
                <a class="btn btn-normal" href="https://portal.qiniu.com/signin">立即使用</a>
			</div>
		</section>
        <!--hero end-->

        <!--product-features start-->
		<section class="content product-features product-features-pili" id="section-2">
            <h4 class="h4-subheading">我们的优势</h4>
            <h2 class="h2-section-heading">从推流到播放的一站式解决</h2>
            <p class="section-text">七牛自建实时流网络（LiveNet），采用智能调度等技术，满足直播特有的网络需求；数据监控平台实现质量透明，帮助用户完成运营闭环；深耕场景丰富性与开放性，全面降低直播平台开发的技术门槛。</p>
			<ul class="column-three column-pili-features-list">
                <li>
                    <img src="<?php bloginfo('template_url');?>/images/products/pili/features-pili-1.png" alt="全球化的实时流网络" />
                    <h4>全球化的实时流网络</h4>
                    <p class="column-three-text">采用全新网络技术，实时计算全链路状态，按需智能伸缩最佳路径节点。实现秒开、低延迟不卡顿，和节点故障常态处理等直播需求。</p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url');?>/images/products/pili/features-pili-2.png" alt="端到端，场景化 SDK" />
                    <h4>端到端，场景化 SDK</h4>
                    <p class="column-three-text">提供多平台采集 SDK 和播放 SDK，并开放云端 API 实现透明播控管理，助力企业开发者快速构建直播平台的核心业务，提高开发效率。</p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url');?>/images/products/pili/features-pili-3.png" alt="智能化质量监控" />
                    <h4>智能化质量监控</h4>
                    <p class="column-three-text">基于单个直播流业务粒度的线路质量智能监控及实时动态的数据统计，提供自动容错及全方位的数据分析，定位并优化直播卡顿率。</p>
                </li>
            </ul>
		</section>
        <!--product-features end-->

        <!--products-properties start-->
        <section class="content content-products-properties" id="section-3">
            <div class="center">
                <h4 class="h4-subheading">产品功能</h4>
                <h2 class="h2-section-heading">实时、连接、互动</h2>
                <ul class="products-properties-column">
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-real-time-recording.png" alt="实时录制" />
                        <div class="properties-intro">
                            <h4>实时录制</h4>
                            <p>直播实时录制，云端实时存储，并支持按需回看。</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-real-time-watermarking.png" alt="实时水印" />
                        <div class="properties-intro">
                            <h4>实时水印</h4>
                            <p>可定制图文水印或动态水印，方便辨识和版权保护。</p>
                        </div>
                    </li>
                    <li class="clear-right">
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-real-time-screenshot.png" alt="实时截图" />
                        <div class="properties-intro">
                            <h4>实时截图</h4>
                            <p>直播实时截帧，生成直播流封面。</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-real-time-transcoding.png" alt="实时转码" />
                        <div class="properties-intro">
                            <h4>实时转码</h4>
                            <p>一路推流，按指定码率和分辨率多路输出，满足各种播放需求。</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-real-time-yellow.png" alt="实时鉴⻩" />
                        <div class="properties-intro">
                            <h4>实时鉴⻩</h4>
                            <p>实时识别敏感图像，并提供监控告警，大大提高运营审核效率。</p>
                        </div>
                    </li>
                    <li class="clear-right">
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-even-wheat-interactions.png" alt="连麦互动" />
                        <div class="properties-intro">
                            <h4>连麦互动</h4>
                            <p>主播连线观众，实时双向互动，并输出直播给其他观众。</p>
                        </div>
                    </li>
                    <li class="clear-bottom">
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-ban.png" alt="秒级禁播" />
                        <div class="properties-intro">
                            <h4>秒级禁播</h4>
                            <p>支持对不合规范的直播流进行秒级禁播，更可自定义时间段禁播。</p>
                        </div>
                    </li>
                    <li class="clear-bottom">
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-delay.png" alt="延时直播" />
                        <div class="properties-intro">
                            <h4>延时直播</h4>
                            <p>预留直播时间，保障直播内容审核无误。</p>
                        </div>
                    </li>
                    <li class="clear-right clear-bottom">
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-beauty.png" alt="美颜滤镜" />
                        <div class="properties-intro">
                            <h4>美颜滤镜</h4>
                            <p>集成低功耗高性能美颜，灵活开放可自定义滤镜进行特效处理。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--products-properties end-->

        <!--products-scene start-->
        <section class="content content-pili-scene" id="section-4">
            <div class="center">
                <h4 class="h4-subheading">使用场景</h4>
                <h2 class="h2-section-heading">满足「直播+」各种行业的使用场景</h2>
                <p class="section-text">在 Live 时代下，直播真正的机会在于做「直播+」，即直播跟其他各种领域和垂直行业的结合。七牛直播云，能够更快速、更灵活、更开放的满足不同行业、场景的客户对直播功能的需求，并广泛应用于活动，监控，游戏，电台，教学，VR，社交，无人机等众多行业领域。</p>
                <ul class="pili-scene-list">
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-social.png" alt="社交直播" />
                        <h5>社交直播</h5>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-game.png" alt="游戏直播" />
                        <h5>游戏直播</h5>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-webcam.png" alt="摄像头直播" />
                        <h5>摄像头直播</h5>
                    </li>
                    <li class="clear-right">
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-education.png" alt="在线教学直播" />
                        <h5>在线教学直播</h5>
                    </li>
                    <li class="clear-bottom">
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-live-event.png" alt="现场活动直播" />
                        <h5>现场活动直播</h5>
                    </li>
                    <li class="clear-bottom">
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-radio.png" alt="网络电台直播" />
                        <h5>网络电台直播</h5>
                    </li>
                    <li class="clear-bottom">
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-vr.png" alt="VR 直播" />
                        <h5>VR 直播</h5>
                    </li>
                    <li class="clear-right clear-bottom">
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-uav.png" alt="无人机场景直播" />
                        <h5>无人机场景直播</h5>
                    </li>
                </ul>
            </div>
        </section>
        <!--products-scene end-->


        <!--products-case start-->
        <section class="content content-pili-case" id="section-5">
            <div class="center">
                <h4 class="h4-subheading">客户案例</h4>
                <h2 class="h2-section-heading h2-clear-bottom">这些优秀的直播产品都在用</h2>
                <a class="btn btn-normal btn-pili-case" href="https://portal.qiniu.com/signup/choice">我也要用</a>
                <ul class="ul-case ul-pili-case">
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/maomeng.png" width="46" height="39"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/xiandanjia.png" width="36" height="47"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/panda.png" width="95" height="34"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/lexiu.png" width="41" height="45"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/yunxi.png" width="50" height="34"/>
                    </li>
                    <li class="clear-right">
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/blued.png" width="40" height="40"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/dongqiudi.png" width="45" height="39"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/wink.png" width="45" height="37"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/dashengtv.png" width="81" height="27"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/hujiang.png" width="41" height="44"/>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/in.png" width="50" height="38"/>
                    </li>
                    <li class="clear-right">
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/shouyin.png" width="39" height="46"/>
                    </li>
                </ul>
            </div>
        </section>
        <!--products-case end-->


        <!--products-SDK start-->
        <section class="content content-pili-access" id="section-6">
            <div class="center">
                <h2>轻松接入，即刻使用</h2>
                <ul class="pili-access-step">
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-application.png" alt="实时录制" />
                        <div class="step-no">1</div>
                        <h4>申请直播空间</h4>
                        <p>注册七牛帐号，登录后在七牛管理平台申请开通直播空间服务。</p>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-sdk.png" alt="接入 SDK" />
                        <div class="step-no">2</div>
                        <h4>接入 SDK</h4>
                        <p>下载 SDK 阅读开发文档进行部署，七牛管理平台添加直播流地址进行推流。</p>
                    </li>
                    <li class="clear-right">
                        <img src="<?php bloginfo('template_url');?>/images/products/pili/icon-online.png" alt="调试上线" />
                        <div class="step-no">3</div>
                        <h4>调试上线</h4>
                        <p>获取推流地址后，进行调试播放。成功后即可上线。</p>
                    </li>
                    <div class="access-step-line"></div>
                </ul>
                <a class="btn btn-normal btn-pushstream" href="/products/pili/pili-sdk-pushstream">推流 SDK</a>
                <a class="btn btn-normal" href="/products/pili/pili-sdk-player">播放器 SDK</a>
            </div>
        </section>
        <!--products-SDK end-->

        <!--page-links star-->
        <section class="content content-page-links page-links-pili">
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