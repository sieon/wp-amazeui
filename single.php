<?php

add_action('wp_enqueue_scripts', 'lean_product1_scripts');
function lean_product1_scripts() {
  //wp_enqueue_script( 'lean-common1', get_template_directory_uri() . '/assets/js/common.js');
  wp_enqueue_style( 'lean-index1', get_template_directory_uri() . '/assets/css/news.min.css');
}

get_header(); ?>



    <!--===========layout-container================-->
    <div class="layout-container">
      <div class="page-header">
        <div class="am-container">
          <h1 class="page-header-title">News</h1>
        </div>
      </div>

      <div class="breadcrumb-box">
        <div class="am-container">
          <ol class="am-breadcrumb">
            <li><a href="../index.html">首页</a></li>
            <li class="am-active">News</li>
          </ol>
        </div>
      </div>
    </div>

    <div class="section news-section">
      <div class="container">
        <!--news-section left start-->
        <div class="am-u-md-9">
          <div class="article">
            <header class="article--header">
              <h2 class="article--title"><a href="#" rel="">云适配企业浏览器获首批“移动信息化可信”认证</a></h2>
              <ul class="article--meta">
                <li class="article--meta_item"><i class="am-icon-calendar"></i>October 10, 2016</li>
                <li class="article--meta_item"><i class="am-icon-user"></i>by张三</li>
                <li class="article--meta_item"><i class="am-icon-commenting-o"></i>33评论</li>
              </ul>
            </header>
            <div class="article--content">
              <p>
                7月19日，云适配（美通云动（北京）科技有限公司）今日宣布，由中国通信标准化协会管理，工业和信息化部业务指导下的数据中心联盟与移动智能终端技术创新与产业联盟发起的移动信息化可信选型认证（第一批）评选中，云适配两大产品Enterplorer企业浏览器、Enterplorer Studio开发工具，通过了移动企业应用平台的认证，成为“第一批”获得移动信息化可信选型认证的两大产品。该结果已于今天上午在北京召开“2016移动智能终端峰会新闻发布会暨移动信息化可信选型认证结果发布会”上进行了通报。
							</p>
              <figure><img src="../assets/images/news/post01.jpg" alt=""></figure>
              <p>
                据了解，移动信息化可信选型认证是由工业和信息化部指导，数据中心联盟组织，中国信息通信研究院测试评估面向移动办公、移动应用、移动开发等领域新发起的一个评估认证，是目前国内唯一针对移动信息化选型可信性的权威认证体系，为用户选择可信赖的移动信息化解决方案提供了很好的依据。它是继数据中心联盟推出可信云认证之后，在移动办公、移动信息化领域开辟的又一个权威认证。
              </p>
              <figure><img src="../assets/images/news/post02.jpg" alt=""></figure>
              <p>
                据了解，云适配企业级浏览器Enterplorer，融合了HTML5标准以及双渲染引擎技术，在“NO APP、NO API”的前提下，摒弃了企业在移动化过程中开发多个原生APP的传统方式，帮助企业在一周之内开始移动办公模式。
              </p>
              <p>
                Enterplorer Studio是一套面向企业级移动信息化建设的开发平台。集聚开发、测试、打包、发布于一体的移动化开发综合平台。用户无需更改任何原有系统后台流程逻辑，无需为移动应用单独开发后台，实现对原有业务系统的零依赖。开发者无需经过复杂的编程，开发平台集成丰富的组件库，通过组件拖拽方式即可帮助企业将复杂的业务系统高效快速的适配到移动终端，极大减小了企业办公系统移动化的难度，加快企业办公移动化的脚步。
              </p>
              <p>
                云适配创始人兼CEO陈本峰表示：“移动化已经成为企业发展的标配，随着移动技术的深入发展，国家和企业对移动化服务的安全和可靠性的重视程度在不断加深，这也是移动信息化可信选型认证出台的最关键的原因。云适配凭借全球领先的移动化技术和专业的安全能力与经验，将HTML5技术最高效的应用在了企业移动化进程中。未来，云适配将继续发挥在浏览器和HTML5技术方面的领先优势，为用户提供安全的、高效的企业移动化服务。”
              </p>
            </div>
          </div>

          <div class="comments">
            <div class="comments">
							<h2 class="comments--title">Comments (2)</h2>
							<ul class="comments_list">
								<li class="comment">
									<header class="comment--header">
										<figure class="comment--userpic"><img src="../assets/images/news/av01.jpg" alt=""></figure>
										<strong class="comment--username"><a href="#">Brad Bukovsky</a></strong>
										<time datetime="2001-05-15T19:00" class="comment--date">30th of January, 2016</time>
									</header>
									<div class="comment--content">
										<p>
                      评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论
										</p>
										<a href="#" class="comment--reply">回复</a>
									</div>
									<ul class="comments_list">
										<li class="comment">
											<header class="comment--header">
												<figure class="comment--userpic"><img src="../assets/images/news/av02.jpg" alt=""></figure>
												<strong class="comment--username"><a href="#">Brad Bukovsky</a></strong>
												<time datetime="2001-05-15T19:00" class="comment--date">30th of January, 2016</time>
											</header>
											<div class="comment--content">
												<p>
                          评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评
												</p>
												<a href="#" class="comment--reply">回复</a>
											</div>
										</li>
									</ul>
								</li>
								<li class="comment">
									<header class="comment--header">
										<figure class="comment--userpic"><img src="../assets/images/news/av01.jpg" alt=""></figure>
										<strong class="comment--username"><a href="#">Brad Bukovsky</a></strong>
										<time datetime="2001-05-15T19:00" class="comment--date">30th of January, 2016</time>
									</header>
									<div class="comment--content">
										<p>
                      评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论评论
										</p>
										<a href="#" class="comment--reply">回复</a>
									</div>
								</li>
							</ul>
							<div class="comment_form">
								<h2 class="comment_form--title">Leave Comment</h2>
                <form class="am-form am-form-horizontal">
                  <div class="am-form-group">
                    <div class="am-g">
                      <div class="am-u-md-4">
                        <input type="text"   placeholder="Full Name">
                      </div>
                      <div class="am-u-md-4">
                        <input type="Email"  placeholder="Email" >
                      </div>
                      <div class="am-u-md-4">
                        <input type="url" placeholder="Website URL">
                      </div>
                    </div>
                    <div class="am-g">
                      <textarea name="comment" cols="30" rows="10" placeholder="Type in here..."></textarea>
                    </div>
                    <div class="comment-form-footer">
                      <button type="button" class="am-btn am-btn-secondary">确认提交</button>
                    </div>
                  </div>
                </form>

							</div>
						</div>
          </div>
        </div>
        <!--news-section left end-->

        <!--news-section right start-->
        <div class="am-u-md-3">
          <div class="blog_sidebar">
            <div class="widget">
              <h2 class="widget--title"><i class="am-icon-file-text-o"></i>最新资讯</h2>
              <ul>
								<li><a href="#">公司报道</a></li>
								<li><a href="#">行业资讯</a></li>
								<li><a href="#">云适配观点</a></li>
							</ul>
            </div>
            <div class="widget">
              <h2 class="widget--title"><i class="am-icon-comments-o"></i>热门动态</h2>
              <ul>
								<li><a href="#">科大讯飞严峻：借力HTML5 推进“智能语音技术”应用普及</a></li>
								<li><a href="#">金山万勇：打破信息孤岛 HTML5优势凸显将成核心</a></li>
								<li><a href="#">阿里吴志华：基于HTML5技术开发Native体验应用</a></li>
							</ul>
            </div>
            <div class="widget">
              <h2 class="widget--title"><i class="am-icon-rss"></i>站内公告</h2>
              <ul>
								<li><a href="#">今天的应用号只是用了HTML技术中无需下载安装、跨平台的功能， 并没有用到HTML开发互联的精髓。 它只是一个...</a><span class="rss-date">November 10, 2015</span></li>
								<li><a href="#">云适配带来了一个全新的“互联网+政务”解决方案，我们可以非常好的利用你现有的IT系统，就是你还是用原来的PC网站一套系统，只要安装一下云适配的产品Xcloud网站跨屏...</a><span class="rss-date">November 10, 2015</span></li>
							</ul>
            </div>
          </div>
        </div>
        <!--news-section right end-->
      </div>
    </div>
  </div>


  <div class="section" style="margin-top:0px;background-image: url('../assets/images/pattern-light.png');">
    <div class="container">
      <!--index-container start-->
      <div class="index-container">
        <div class="am-g">
          <div class="am-u-md-4">
            <div class="contact_card">
							<i style="color:#59bcdb" class="contact_card--icon am-icon-phone"></i>
							<strong class="contact_card--title">Contact Us</strong>
							<p class="contact_card--text">Feel free to call us on <br> <strong>0 (855) 233-5385</strong> <br> Monday - Friday, 8am - 7pm</p>
              <button type="button" class="am-btn am-btn-secondary">Order a Call Back</button>
						</div>
          </div>
          <div class="am-u-md-4">
            <div class="contact_card">
							<i style="color:#59bcdb" class="contact_card--icon am-icon-envelope-o"></i>
							<strong class="contact_card--title">Our Email</strong>
							<p class="contact_card--text">Drop us a line anytime at <br> <strong><a href="mailto:info@financed.com">info@financed.com</a>,</strong> <br> and we’ll get back soon.</p>
              <button type="button" class="am-btn am-btn-secondary">Start Writing</button>
						</div>
          </div>
          <div class="am-u-md-4">
            <div class="contact_card">
							<i style="color:#59bcdb" class="contact_card--icon am-icon-map-marker"></i>
							<strong class="contact_card--title">Our Address</strong>
							<p class="contact_card--text">Come visit us at <br> <strong>Stock Building, New York,</strong> <br> NY 93459</p>
              <button type="button" class="am-btn am-btn-secondary">See the Map</button>
						</div>
          </div>
        </div>
      </div>
      <!--index-container end-->
    </div>
  </div>

<?php get_footer(); ?>
