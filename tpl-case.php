<?php /* Template Name: 客户案例 */ get_header(); ?>
	<div id="container">
        <!--hero star-->
		<section class="content hero-case">
			 <div class="center">
			 	<h1 class="h1-page-heading">与 500,000+ 企业和开发者<br/>一起使用七牛</h1>
			 	<p class="hero-text clear-bottom">目前七牛已服务 50 多万家企业和开发者，七牛提供的云服务，正在包围我们的生活。顺丰、网易、饿了么、美拍、知乎、陌陌、蘑菇街等，都在使用七牛的服务。</p>
			 </div>
		</section>
        <!--hero end-->

        <section class=" content-excellent-case">
            <div id="slide-case">
                <img-slider></img-slider>
            </div>
            <template id="img-slider">
                <div class="case-container">
                    <div class="slider-wrap">
                        <ul class="slide-animate clearfix" v-bind:style='getClass'>
                            <li v-for="item in customerData" v-bind:current="current">
                                <img v-bind:src="item.poster" v-on:click="showDetails(item.id)"  alt="item.name" />
                            </li>
                        </ul>
                    </div>
                    <div v-show="currentIdx!==0" v-on:click="turnToPrev" class="btn-case-pre"></div>
                    <div v-show="currentIdx!==customerData.length - 1" v-on:click="turnToNext" class="btn-case-next"></div>
                </div>
                <div class="case-divider"></div>
                <div class="case-content-detail">
                    <div class="case-project-bg">
                        <h4>项目背景</h4>
                        <p>{{customerData[currentIdx].project_bg}}</p>
                        <a v-bind:href="customerData[currentIdx].href" class="btn btn-normal">查看案例详情</a>
                    </div>
                    <aside class="case-overview case-use-product">
                        <h4>使用产品</h4>
                        <ul>
                            <li v-for="item in customerData[currentIdx].product_using ">{{ item }}</li>
                        </ul>
                    </aside>
                </div>
            </template>
        </section>

        <!--case-list star-->
        <section class="content content-case-list">
            <div class="center">
                <h2>各行各业的成功客户</h2>
                <div class="tabs tabs-case-wrap">
                    <ul class="ul-tabs">
                        <li><a href="#tab-content-section-1">社交网络</a></li>
                        <li><a href="#tab-content-section-2">时尚生活</a></li>
                        <li><a href="#tab-content-section-3">文化娱乐</a></li>
                        <li><a href="#tab-content-section-4">医疗健康</a></li>
                        <li><a href="#tab-content-section-5">在线教育</a></li>
                        <li><a href="#tab-content-section-6">交通旅游</a></li>
                        <li><a href="#tab-content-section-5">智能硬件</a></li>
                        <li><a href="#tab-content-section-6">工具软件</a></li>
                    </ul>
                    <div class="tab-content tab-content-case">
                        <section id="tab-content-section-1">
                            <ul class="ul-case ul-case-studies">
                                <li>
                                    <a href="http://douban.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/douban.png" width="51" height="24"/></a>
                                </li>
                                <li>
                                    <a href="http://www.duitang.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/duitang.png" width="60" height="28"/></a>
                                </li>
                                <li>
                                    <a href="http://www.kedouinc.com/web" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/finger.png" width="30" height="44"/></a>
                                </li>
                                <li>
                                    <a href="http://d.guimi.vanchu.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/guimiquan.png" width="50" height="31"/></a>
                                </li>
                                <li>
                                    <a href="http://in.itugo.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/in.png" width="45" height="35"/></a>
                                </li>
                                <li class="clear-right">
                                    <a href="http://www.lianaibiji.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/lianaiji.png" width="40" height="40"/></a>
                                </li>
                                <li>
                                    <a href="http://maimai.cn/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/maimai.png" width="37" height="37"/></a>
                                </li>
                                <li>
                                    <a href="http://www.meishubao.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/meishubao.png" width="70" height="33"/></a>
                                </li>
                                <li>
                                    <a href="http://www.wandoujia.com/apps/com.sencent.mm" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/mingrenquan.png" width="41" height="41"/></a>
                                </li>
                                <li>
                                    <a href="http://www.pengpengla.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/pengpeng.png" width="45" height="38"/></a>
                                </li>
                                <li>
                                    <a href="http://www.shougongke.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/shougongke.png" width="40" height="40"/></a>
                                </li>
                                <li class="clear-right">
                                    <a href="http://www.imsobrr.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/sobrr.png" width="90" height="28"/></a>
                                </li>
                                <li class="clear-bottom">
                                    <a href="http://yinyue.ibabyzone.cn/soft/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/taijiaohezi.png" width="40" height="40"/></a>
                                </li>
                                <li class="clear-bottom">
                                    <a href="http://www.wanyoo.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/wangyuwangka.png" width="55" height="33"/></a>
                                </li>
                                <li class="clear-bottom">
                                    <a href="http://freebao.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/weiniao.png" width="53" height="26"/></a>
                                </li>
                                <li class="clear-bottom">
                                    <a href="http://www.yaowoo.cn/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/social/yawoo.png" width="90" height="16"/></a>
                                </li>
                            </ul>
                        </section>
                        <section id="tab-content-section-2">
                            <ul class="ul-case ul-case-studies">
                                <li>
                                    <a href="http://www.b5m.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/banghaibei.png" width="35" height="34" /></a>
                                </li>
                                <li>
                                    <a href="http://www.ibantang.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/bantang.png" width="60" height="30" /></a>
                                </li>
                                <li>
                                    <a href="http://ichuanyi.com/app/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/chuanyizhushou.png" width="40" height="40"/></a>
                                </li>
                                <li>
                                    <a href="http://enjoy.ricebook.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/enjoy.png" width="80" height="24" /></a>
                                </li>
                                <li>
                                    <a href="http://www.hunliji.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/hunliji.png" width="43" height="43" /></a>
                                </li>
                                <li>
                                    <a href="http://www.liwushuo.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/liwushuo.png" width="74" height="23" /></a>
                                </li>
                                <li>
                                    <a href="http://um0.cn/zizMO/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/meikemeizhuang.png" width="35" height="36" /></a>
                                </li>
                                <li>
                                    <a href="http://www.meilapp.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/meila.png" width="55" height="26" /></a>
                                </li>
                                <li>
                                    <a href="http://www.meilihuli.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/meilimeizhuang.png" width="40" height="40" /></a>
                                </li>
                                <li>
                                    <a href="http://www.meiyaapp.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/meiya.png" width="40" height="37" /></a>
                                </li>
                                <li>
                                    <a href="http://mocha.cn/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/mochameizhuang.png" width="46" height="40" /></a>
                                </li>
                                <li>
                                    <a href="http://www.runlife.com.cn/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/runshenghuo.png" width="40" height="40" /></a>
                                </li>
                                <li>
                                    <a href="http://www.sgbh.cn/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/shiguangbaohe.png" width="41" height="47" /></a>
                                </li>
                                <li>
                                    <a href="http://www.shiguangxiaowu.cn/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/shiguangxiaowu.png" width="41" height="41" /></a>
                                </li>
                                <li>
                                    <a href="http://www.fruitday.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/tiantianguoyuan.png" width="45" height="49" /></a>
                                </li>
                                <li>
                                    <a href="http://www.vmei.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/vmei.png" width="61" height="19" /></a>
                                </li>
                                <li>
                                    <a href="http://www.yohobuy.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/fashion/yoho.png" width="90" height="22" /></a>
                                </li>
                            </ul>
                        </section>
                        <section id="tab-content-section-3">
                            <ul class="ul-case ul-case-studies">
                                <li>
                                    <a href="http://pudding.cc/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/budingdonghua.png" width="55" height="31" /></a>
                                </li>
                                <li>
                                    <a href="http://www.vbuge.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/buge.png" width="40" height="37" /></a>
                                </li>
                                <li>
                                    <a href="http://www.doupai.cc/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/doupai.png" width="40" height="40" /></a>
                                </li>
                                <li>
                                    <a href="http://www.bjjoyworks.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/joyworks.png" width="70" height="35" /></a>
                                </li>
                                <li>
                                    <a href="http://comicool.cn/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/kemikumanhua.png" width="47" height="40" /></a>
                                </li>
                                <li>
                                    <a href="http://kuaikanmanhua.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/kuaikanmanhua.png" width="60" height="31" /></a>
                                </li>
                                <li>
                                    <a href="http://www.leiphone.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/leifengwang.png" width="90" height="34" /></a>
                                </li>
                                <li>
                                    <a href="http://mmmono.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/mono.png" width="45" height="32" /></a>
                                </li>
                                <li>
                                    <a href="http://www.rongshuxia.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/nanian.png" width="50" height="42" /></a>
                                </li>
                                <li>
                                    <a href="http://www.peiyinxiu.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/peiyinxiu.png" width="47" height="39" /></a>
                                </li>
                                <li>
                                    <a href="http://www.starschina.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/shoujidianshi.png" width="40" height="43" /></a>
                                </li>
                                <li>
                                    <a href="http://itangyuan.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/tangyuanchuangzuo.png" width="40" height="40" /></a>
                                </li>
                                <li>
                                    <a href="http://www.tiaooo.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/tiaoba.png" width="38" height="37" /></a>
                                </li>
                                <li>
                                    <a href="http://wx.aituwen.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/tuge.png" width="40" height="40" /></a>
                                </li>
                                <li>
                                    <a href="http://web.graphmovie.com/home/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/tujiedianying.png" width="38" height="39" /></a>
                                </li>
                                <li>
                                    <a href="http://wondering.top/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/wandianying.png" width="40" height="40" /></a>
                                </li>
                                <li>
                                    <a href="http://www.ixiaokan.cn/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/xiaokan.png" width="45" height="45" /></a>
                                </li>
                                <li>
                                    <a href="http://www.facecover.me/#/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/entertainment/zhezhe.png" width="44" height="39" /></a>
                                </li>
                            　</ul>
                        </section>
                        <section id="tab-content-section-4">
                            <ul class="ul-case ul-case-studies">
                                <li>
                                    <a href="http://www.rjfittime.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/health/fittime.png" width="37" height="35" /></a>
                                </li>
                                <li>
                                    <a href="http://www.kangda.cn/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/health/kangdayuzhen.png" width="40" height="40" /></a>
                                </li>
                                <li>
                                    <a href="https://www.gotokeep.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/health/keep.png" width="35" height="36" /></a>
                                </li>
                                <li>
                                    <a href="http://www.sportq.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/health/qudong.png" width="55" height="36" /></a>
                                </li>
                                <li>
                                    <a href="http://www.cookee.com.cn/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/health/quqidanche.png" width="40" height="40" /></a>
                                </li>
                                <li>
                                    <a href="http://www.maimaiys.com:8095/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/health/xiangcheng.png" width="39" height="50" /></a>
                                </li>
                                <li>
                                    <a href="http://www.soyoung.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/health/xingyang.png" width="41" height="41" /></a>
                                </li>
                                <li>
                                    <a href="http://d.51yund.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/health/yuedongquan.png" width="92" height="27" /></a>
                                </li>
                            </ul>
                        </section>
                        <section id="tab-content-section-5">
                            <ul class="ul-case ul-case-studies">
                                <li>
                                    <a href="http://www.mofunkorean.com/app.html" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/education/hanyumofangxiu.png" width="40" height="40" /></a>
                                </li>
                                <li>
                                    <a href="http://www.hihooray.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/education/hooray.png" width="45" height="33" /></a>
                                </li>
                                <li>
                                    <a href="http://www.jikexueyuan.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/education/jikexueyuan.png" width="55" height="26" /></a>
                                </li>
                                <li>
                                    <a href="http://www.maiziedu.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/education/maizixueyuan.png" width="40" height="40" /></a>
                                </li>
                                <li>
                                    <a href="http://www.ciwenkids.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/education/xiaohuoban-tv.png" width="34" height="51" /></a>
                                </li>
                                <li>
                                    <a href="http://www.mofunenglish.com/app.html" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/education/yingyumofangxiu.png" width="41" height="43" /></a>
                                </li>
                                <li>
                                    <a href="http://www.ileci.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/education/yueci.png" width="55" height="27" /></a>
                                </li>
                                <li>
                                    <a href="http://www.bbtree.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/education/zhihuishu.png" width="40" height="42" /></a>
                                </li>
                                <li>
                                    <a href="http://www.qingclass.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/education/qingke.png" width="70" height="38" /></a>
                                </li>
                                <li>
                                    <a href="http://www.acc5.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/education/kuaijixuetang.png" width="77" height="21" /></a>
                                </li>
                            </ul>
                        </section>
                        <section id="tab-content-section-6">
                            <ul class="ul-case ul-case-studies">
                                <li>
                                    <a href="http://www.dawanju.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tourism/dawanju.png" width="40" height="36" /></a>
                                </li>
                                <li>
                                    <a href="http://www.gtuu.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tourism/gaizhuangquan.png" width="42" height="47" /></a>
                                </li>
                                <li>
                                    <a href="http://www.tuhu.cn/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tourism/hutuyangche.png" width="41" height="35" /></a>
                                </li>
                                <li>
                                    <a href="http://www.renrenche.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tourism/renrenche.png" width="70" height="21" /></a>
                                </li>
                                <li>
                                    <a href="http://www.wanzhoumo.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tourism/zhoumoquna.png" width="45" height="56" /></a>
                                </li>
                                <li>
                                    <a href="http://www.fotoplace.cc/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tourism/zuji.png" width="45" height="40" /></a>
                                </li>
                            </ul>
                        </section>
                        <section id="tab-content-section-7">
                            <ul class="ul-case ul-case-studies">
                                <li>
                                    <a href="http://www.zte.com.cn/cn/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/hardware/zhongxing.png" width="80" height="21" /></a>
                                </li>
                                <li>
                                    <a href="http://www.whaley-vr.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/hardware/weijingkeji.png" width="81" height="59" /></a>
                                </li>
                                <li>
                                    <a href="http://www.xgimi.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/hardware/jimikeji.png" width="90" height="15" /></a>
                                </li>
                            </ul>
                        </section>
                        <section id="tab-content-section-8">
                            <ul class="ul-case ul-case-studies">
                                <li>
                                    <a href="https://www.ikcrm.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tool/aikecrm.png" width="40" height="46" /></a>
                                </li>
                                <li>
                                    <a href="http://www.epub360.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tool/epub360.png" width="70" height="35" /></a>
                                </li>
                                <li>
                                    <a href="http://www.huisuoping.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tool/huisuoping.png" width="56" height="28" /></a>
                                </li>
                                <li>
                                    <a href="http://www.maka.im/home/index.html" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tool/maka.png" width="80" height="17" /></a>
                                </li>
                                <li>
                                    <a href="http://www.mizhuan.me/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tool/mizhuan.png" width="60" height="30" /></a>
                                </li>
                                <li>
                                    <a href="https://www.testbird.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tool/testbird.png" width="90" height="32" /></a>
                                </li>
                                <li>
                                    <a href="http://www.rabbitpre.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tool/tuzhan.png" width="70" height="43" /></a>
                                </li>
                                <li>
                                    <a href="https://worktile.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/case/tool/worktile.png" width="40" height="27" /></a>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!--case-list end-->

        <section class="content content-evaluation">
            <div class="center">
                <div class="evaluation-left">
                    <h4 class="h4-subheading">用户评价</h4>
                    <h2 class="h2-section-heading h2-clear-bottom">听听他们怎么说</h2>
                </div>
                <div class="tabs evaluation-right">
                    <ul class="client-list">
                        <li><a href="#tab-evaluation-section-1"><img src="<?php bloginfo('template_url');?>/images/case/liuhongwei.jpg" width="60" height="60"/></a></li>
                        <li><a href="#tab-evaluation-section-2"><img src="<?php bloginfo('template_url');?>/images/case/wangwei.jpg" width="60" height="60"/></a></li>
                        <li><a href="#tab-evaluation-section-3"><img src="<?php bloginfo('template_url');?>/images/case/tianbo.jpg" width="60" height="60"/></a></li>
                        <li><a href="#tab-evaluation-section-4"><img src="<?php bloginfo('template_url');?>/images/case/lixingbo.jpg" width="60" height="60"/></a></li>
                        <li><a href="#tab-evaluation-section-5"><img src="<?php bloginfo('template_url');?>/images/case/xvhua.jpg" width="60" height="60"/></a></li>
                        <li><a href="#tab-evaluation-section-6"><img src="<?php bloginfo('template_url');?>/images/case/ruanyongli.jpg" width="60" height="60"/></a></li>
                    </ul>
                    <div class="tab-content tab-content-evaluation-details">
                        <section id="tab-evaluation-section-1">
                            <h3>刘宏伟<span>Camera360 副总裁</span></h3>
                            <p class="team-text">七牛在图像存储方面做了很多贴心服务，不仅解决了大规模存储问题， 也解决了移动互联网对照片浏览和计算的特殊需求。合作过程中，我们也从七牛研发团队里吸取到了前沿的研发流程。</p>
                        </section>
                        <section id="tab-evaluation-section-2">
                            <h3>汪威<span>咸蛋家 CTO</span></h3>
                            <p class="team-text">七牛为咸蛋家提供了整套的解决方案，在手机直播竞争激烈的当下，七牛提供的稳定、高效、可信赖的底层服务，使咸蛋家开发人员能集中精力开展业务逻辑方面的工作，也给咸蛋家赢得了时间和更好的行业领先地位。</p>
                        </section>
                         <section id="tab-evaluation-section-3">
                            <h3>田波<span>中兴家庭网络运营总监</span></h3>
                            <p class="team-text">中兴智能家居产品依托七牛云服务，向用户提供音视频云存储、检索、分享等衍生增值服务，七牛的专业团队为海量数据的安全性及稳定性提供了有力保障。</p>
                        </section>
                        <section id="tab-evaluation-section-4">
                            <h3>李兴波<span>海康威视萤石云平台技术总监</span></h3>
                            <p class="team-text">在和七牛合作的这几年中，深刻的感受到七牛的的确确是一家做“云服务”的公司。作为技术产品服务供应商，在技术和服务品质上有一贯的追求是七牛的核心竞争力，同时在七牛的各个方面都同时体现着另种竞争力——对服务的理解。这就是除技术和产品等硬性表现外，赢的合作伙伴信任更为重要的基础。</p>
                        </section>
                         <section id="tab-evaluation-section-5">
                            <h3>徐华<span>沪江网副总裁</span></h3>
                            <p class="team-text">七牛为沪江提供了稳定高可用的云端文件大规模存储服务，很好地帮助企业降低了运营成本，提高了响应速度。我们相信，伴随着互联网教育的快速发展，沪江和七牛会有更多深入的合作，让我们能更专注于在线教育用户的核心需求。</p>
                        </section>
                        <section id="tab-evaluation-section-6">
                            <h3>阮永丽<span>美图秀秀 CTO</span></h3>
                            <p class="team-text">美图有幸见证七牛这一路策马扬鞭的茁壮成长，其可靠云服务亦令美图的发展如虎添翼。回顾走过的历程，七牛攀登的路途上，每个足印都记录着技术的飞跃，每个里程碑都带给我们新的体验。</p>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <!--page-links star-->
        <section class="content content-page-links">
            <div class="center">
                 <ul class="ul-page-links">
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/pagelinks/icon-contact-us.png" alt="联系我们" />
                        <a href="/contact">联系我们</a>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/pagelinks/icon-media-reports.png" alt="媒体报道" />
                        <a href="http://blog.qiniu.com/archives/category/report" target="_blank">媒体报道</a>
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_url');?>/images/pagelinks/icon-blog.png" alt="七牛博客" />
                        <a href="http://blog.qiniu.com/" target="_blank">技术博客</a>
                    </li>
                </ul>
             </div>
        </section>
        <!--page-links end-->

	</div>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/case/vue.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/case/customData.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/case/slide.js"></script>
<?php get_footer();?>