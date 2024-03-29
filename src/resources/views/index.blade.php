<!--公开源码
-->
<!-- 灵空自制模板 -->

<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">	
    <meta name="description" content="Hostcox - Web hosting & WHMCS HTML5 Template">
    <meta name="keywords" content="Hostcox, domain, domain search, flathost, hosting, hosting psd, hosting template, hosting website, html5, mobile, one page, responisve, single page, whmcs, whmcs template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" id="setscale" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
  <script type="text/javascript">
    let type;
    
    if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
      type =  "mobile"
    } else {
      type =  "pc"
    }
    
    if(type != 'pc')  window.location.replace(window.location.origin + "#");
  </script>

  <link href="static/css/main.css" rel="stylesheet">
    <title>{{ config('sys.web.title',config('sys.web.name','网站首页')) }}</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon"  href="
/IMG_20230813_104750.png">
	<!-- Google Fonts -->
	<link href="static/css/bbad45ffb4f041bcbc5dddfc1ebb6730.css" rel="stylesheet">
	<!-- Font  css  -->
	<link rel="stylesheet" href="static/css/font-awesome.min.css">
	<link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/flaticon.css">	
    <link rel="stylesheet" href="static/css/meanmenu.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="static/css/owl.carousel.min.css">
	<link rel="stylesheet" href="static/css/owl.theme.default.min.css">
	<!-- Main Css -->
    <link rel="stylesheet" href="static/css/style.css">	
    <link rel="stylesheet" href="static/css/responsive.css">
    <link rel="stylesheet" href="static/css/master.css">
</head>
<body class="home-version-one_u" id="home-version-one_u">
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<header class="banner-area">
	<!--banner nav-->
	<div class="nav-header">
		<!-- header-top -->
		<div class="header-top">
			<div class="container">
				<div class="top-flex">
					<div class="top-area-left">
						<div class="left-header-top">
							<div class="email">
								<span class="header-top-icon"><i class="fa fa-envelope-o"></i></span><p>XXX@qq.com</p>
							</div>
						</div>
						<div class="middle-header-top">
							<div class="phone">
								<span class="header-top-icon"><i class="fa fa-commenting-o header-top-icon"></i></span><p>XXX</p>
							</div>
						</div>
					</div>
					<div class="top-area-right text-right">
						<div class="right-header-top">
							<ul>
								<li><a href="/login"><i class="fa fa-user header-top-icon"></i>登录</a></li>
								<li><a href="/login?act=reg"><i class="fa fa-headphones header-top-icon"></i>注册</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- nav-menu -->
		<div class="eco_nav">
			<div class="container">
	            <nav class="navbar navbar-expand-md navbar-light bg-faded">
	                <a class="navbar-brand navbar-logo" href="#"><img src="static/picture/1.png" alt=""></a>
                    <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav nav ml-auto">
                        
                                                            <ul class="nav_mega">
                                   <li>
                                        <div class="mega_menu_container">
                                            <div class="row pb-30">
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="mega_menu_box">
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>                           
                            </li>                                      
                                     
                                     
                            <li class="nav-item single_nav"><a href="#" class="nav-link dropdown_icon nav-menu">网站列表<i class="fa fa-angle-down"></i></a>
                                <ul class="navbar-nav nav mx-auto">              
                                                        <li class="nav-item"><a href="#" class="nav-link">新网站<主></a></li>
                                                        
                                                        <li class="nav-item"><a href="#" class="nav-link">新网站<分></a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link">新网站<分></a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link">旧网站<主></a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link">旧网站<分></a></li>
                                       </ul>
                            </li>                                                                   
                            <li class="nav-item single_nav"><a href="/home" class="nav-link nav-menu">域名</a>    
                            </li>
                            <!-- 灵空自制模板 -->
                            
                            <li class="nav-item p-nav"><a href="mu.html" class="nav-link nav-menu">关于</a></li>
                        </ul>
                    </div>
                    <div class="demo">	
						<div class="mr-auto sign-in-option btn-demo" data-toggle="modal" data-target="#myModal2">
			                <ul class="navbar-nav">
			                    <li>
			                    	<a href="#"><img src="static/picture/menu.png" alt=""></a>
			                    </li>
			                </ul>
			            </div>
						<!-- Modal -->
						<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="flaticon-cancel-music"></i></span></button>
                                        <h2 class="modal-title" id="myModalLabel2"><a href="#"><img src="static/picture/img_20230809_223343-removebg-preview.png" alt=""></a><span class="disabled">logo</span></h2>
                                    </div>
                                    <div class="modal-body">
                                        <div class="bar-nav">
                                            <div class="bar-top">
                                                <h2>服务</h2>
                                                <ul>
                                <li><a href="ew/index.html">云服务器<i class="fa fa-angle-right"></i></a></li>
                                                    <li><a href="ew/index.html">免费虚拟主机<i class="fa fa-angle-right"></i></a></li>
                                                    <li><a href="ew/index.html">CDN<i class="fa fa-angle-right"></i></a></li>
                                                    <li><a href="ew/index.html">域名<i class="fa fa-angle-right"></i></a></li>
                                                    <li><a href="ew/index.html">关于<i class="fa fa-angle-right"></i></a></li>
                                                    <li><a href="ew/index.html">常见问题<i class="fa fa-angle-right"></i></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="bar-contact">
                                            <span>联系</span>
                                            <span>###</span>
                                            <span>###@qq.com</span>
                                        </div>

                                        <div class="bar-icon">
                                            <div class="serach_option widget_single">
                                                <form>
                                                    <input type="text" name="Name" class="input-c" placeholder="Name">
                                                    <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                                                </form>
                                            </div>
                                            <ul class="social_iocns">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- modal-content -->
							</div><!-- modal-dialog -->
						</div><!-- modal -->
					</div><!-- sidebar -->     
                </nav><!-- END NAVBAR -->
            </div> 
        </div>
	</div><!--banner area-->
<!-- 灵空自制模板 -->
	<div class="banner-body">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="banner-body-image  wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
						<img src="static/picture/loptop-1.png" alt="" class="img_1">
                        <img src="static/picture/phone-1.png" alt="" class="img_2">
                        <img src="static/picture/house-1.png" alt="" class="img_3">
                        <img src="static/picture/cloud-1.png" alt="" class="img_4">
                        <img src="static/picture/phone-2.png" alt="" class="img_5">
					</div>
				</div>
				<div class="col-md-5">
					<div class="banner-body-content">
						<h2>XXX二级域名分发</h2>
						<p>中国目前少数免费域名分发网站之一</p>
						<a href="#" class="g-btn">快速入门</a>
					</div>
				</div>
			</div>
		</div>

		<div class="shape"></div>
		<div class="shape_1"></div>
		<div class="shape_3"></div>
		<div class="shape_4"></div>
	</div>
<!-- 灵空自制模板 -->
	<!--banner search-->
	<div class="banner-search-area">
		<div class="container">
			<div class="col-md-12">
				<div class="search-banner pr-30 pl-30 pb-70">
				    	                    <input type="text" class="form-control search-inner"   placeholder="在此处搜索您的域名">			
					<div  class="search-option"><i class="fa fa-angle-down "></i>
<br>
						<select name="did" class="form-control" style="flex: none;width: 200px;height: 3rem">
                            @foreach(\App\Helper::getAvailableDomains() as $domain)
                                <option value="{{ $domain->did }}">.{{ $domain->domain }}</option>
                            @endforeach
                        </select>
						</div>
					 <div class="search-submit">
						<input type="submit" value="搜索">
					</div>
					<div class="site-search">
						<ul>
							<!-- 改的域名和金额 -->
							<li>.自己的域名<span>$0</span></li>
							<li>.自己的域名<span>$0</span></li>
							<li>.自己的域名<span>$0</span></li>
							<li>.自己的域名<span>$0</span></li>
							<li>.自己的域名<span>$0</span></li>
							<li>.自己的域名<span>$0</span></li>
							<li>.自己的域名<span>$0</span></li>
							<li>.自己的域名<span>$0</span></li>
							<li>.自己的域名<span>$0</span></li>
							<li>.自己的域名<span>$0</span></li>
							
						</ul>
					</div>
				</div>		
			</div>
		</div>
	</div>
</header><!-- End Header -->
<!-- 灵空自制模板 -->
<!-- star best section -->
<div class="best-section pb-150">
	<div class="container">
		<div class="row">		
			<div class="offset-md-2 col-md-8">	
				<div class="bestsite-head text-center pt-150 pb-100">
					<div class="section-title">
						<!-- 自己网站名称 -->
						<h2>为什么选择XXX</h2>
					</div>
					<div class="section-content">
						<p>因为XXX的域名免费，安全系数高</p>
					</div>
				</div>
			</div>	
			<div class="offset-md-2"></div>	
		</div>

		<div class="best-card">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card-site pt-80 text-center">
						  <img src="static/picture/date-migration.png" alt="Date-Migration">
						  <div class="card-body main-card pb-50">
						    <h5 class="card-title">域名免费</h5>
						    <p class="card-text">域名纯免费，不收费</p>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card-site card_site_active pt-60 text-center">
						  <img src="static/picture/cloud-backup.png" alt="Date-Migration">
						  <div class="card-body main-card pb-50">
						    <h5 class="card-title">传输快</h5>
						    <p class="card-text">不卡顿，速度快</p>
						  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card-site pt-70 text-center">
						  <img src="static/picture/gauarantee.png" alt="Date-Migration">
						  <div class="card-body main-card pb-50">
						    <h5 class="card-title">100% 保证</h5>
						    <p class="card-text">新用户7天加15天安全服务</p>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- End best-section -->
<!-- 灵空自制模板 -->
<!-- star price section -->
<div class="pricing-section pb-120">
	<div class="container">
		<div class="row">		
			<div class="offset-md-2 col-md-8">	
				<div class="bestsite-head text-center pt-100 pb-80">
					<div class="section-title">
						<h2>选择最佳计划</h2>
					</div>
					<div class="section-content">
						<p>在全知性的情况下，错误的人在真实的情况下就可以随意行事，而在结构上则必须清楚地表明自己的观点。</p>
					</div>
				</div>
			</div>	
			<div class="offset-md-2"></div>	
		</div>
		<div class="pricing-main-area">
			<div class="row">
				<div class="col-md-4">
				     <div class="price-deck text-center">
				     	<div class=" three-d-site">
					        <div class="pricing-main">		        
					            <div class="price-body">
					            	<h4>基本的</h4>		          
					            	<h3>50</h3>
					           		<small>gb</small>
					            </div>
					            <ul>
					              <li>1个自由域</li>
					              <li>300GB SSD 磁盘</li>
					              <li>特别优惠</li>
					              <li>无限支持</li>
					            </ul>
					            <div class="pricing-price">
					           		<small>$</small><h3>0.70 <span>/ 月</span></h3>
					       		 </div>	
					       		 <a href="#" class="g-btn">立即购买</a>	            
					        </div>
				        </div>
				     </div>
		  		</div>
		  		<div class="col-md-4">
				     <div class="price-deck text-center">
				        <div class="pricing-main">
				            <div class="price-body">
				            	<h4>标准的</h4>		          
				            	<h3>235</h3>
				            	<small>gb</small>
				            </div>
				            <ul>
				            <li>1个自由域</li>

					              <li>300GB SSD 磁盘</li>

					              <li>特别优惠</li>
					              <li>无限支持</li>
				            </ul>
				            <div class="pricing-price">
				           		<small>$</small><h3>5.99 <span>/ 月</span></h3>
				       		 </div>	
				       		 <a href="#" class="g-btn">立即购买</a>	            
				        </div>    
				     </div>
		  		</div>
		  		<div class="col-md-4">
				     <div class="price-deck text-center">
				     	<div class="three-d-copy">
				       		<div class="pricing-main">		        
				            	<div class="price-body">
				            		<h4>专业的</h4>		          
				           	 		<h3>450</h3>
				            		<small>gb</small>
				            	</div>
				            	<ul
				            	><li>1个自由域</li>

					              <li>300GB SSD 磁盘</li>

					              <li>特别优惠</li>
					              <li>无限支持</li>
				            	</ul>
					            <div class="pricing-price">
					           		<small>$</small><h3>9.98 <span>/ 月</span></h3>
					       		 </div>	
				       		 	<a href="#" class="g-btn">立即购买</a>	            
				        	</div>
				        </div>        
				     </div>
		  		</div>
			</div>
		</div>
	</div>	
	<div class="shape"></div>
	<div class="shape_1"></div>
	<div class="shape_3"></div>
	<div class="shape_4"></div>
	<img src="static/picture/8826be5633114df1b2583c965f82ebec.gif" alt="">
</div><!-- End price section -->
<!-- 灵空自制模板 -->
<!-- 灵空自制模板 -->
<!-- 灵空自制模板 -->
<!-- star Secured section -->
<div class="speed-section spreed_top_1 pt-150 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="speed--Secured-section pt-20">
                    <div class="left_img">
                        <img src="static/picture/support_1.png" alt="" class="supprt_1">
                        <div class="img_shape">
                            <img src="static/picture/services1_1.png" alt="" class="ser_1">
                            <img src="static/picture/services1_2.png" alt="" class="ser_2">
                            <img src="static/picture/services1_2.png" alt="" class="ser_3">
                            <img src="static/picture/services1_2.png" alt="" class="ser_4">
                            <img src="static/picture/services1_2.png" alt="" class="ser_5">
                        </div>
                    </div>
                    <img src="static/picture/support_2.png" alt="" class="supprt_2">
				</div>
			</div>
			<div class="col-md-6">
				<div class="speed-Secured-content pl-70">
					<h2 class="pb-10">为您的网站带来超快的速度，以便于您的访客</h2>
					<p class="">网速一般是指电脑或手机上网时，上传和下载数据时，请求和返回数据所用的时间长短。要提高（电脑）网速，要看ISP（网络服务商）的接入网情况。</p>
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i>支持同时在线人数一千多</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>上行速率:4M 下行速率:4M</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>无域名问题</li>
                    </ul>
					<a href="#"  class="g-btn">快速入门</a>
				</div>

			</div>
		</div>
	</div>
</div><!-- End Secured section -->
<!-- 灵空自制模板 -->
<!-- star super speed section -->
<div class="speed-section spreed_btm_1 pt-100 pb-150">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="speed-Secured-content speed-Secured-content_2 pr-70 ">
					<h2 class="pt-30 pb-10">为您的网站提供专用的安全服务</h2>
					<p class="">DNS系统面临着来自内部和外部的两种风险，因此要提升DNS的安全性，就需要从构建DNS外部防护体系和DNS内部防护策略两方面出发。</p>
                    <ul class="item_key">
                        <li>
                            <i class="fa fa-life-ring" aria-hidden="true"></i> 
                            <div class="item_key_content">
                                <h4>DNS外部安全防护体系</h4>
                                <p>DNS外部安全防护体系需要将边界路由器、防火墙策略和端口管理、负载均衡策略等软硬件防护策略结合起来，构建立体化的DNS安全防护体系。</p>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-expeditedssl" aria-hidden="true"></i> 
                            <div class="item_key_content">
                                <h4>DNS内部安全策略</h4>

<p>1.DNS协议或者软件设计与配置上的漏洞会被黑客利用，并向DNS发起攻击以达到非法目的。使用最新版的Bind可以大大提高DNS的安全性。此外，通过采取DNSSEC安全协议为解析数据进行加密，限制DNS递归服务器的缓存能力以及在域名解析时设置较小的TTL值等方式，也能有效提升DNS解析的安全能力。</p>

<p>2.由于DNS在互联网中的重要角色以及其缺乏足够的安全验证机制，导致DNS越来越受到网络攻击的关注，因此了解DNS攻击手段以及提升DNS安全防护能力，对于提升网站的安全十分必要。</p>

<p>3.最后大家忽略的是在DNS攻击之前，我们可以通过查询IP地址的归属地，风险画像等信息，直接避免伤害。</p>
                                
                            </div>
                        </li>

                    </ul>
					<a href="#" class="g-btn">快速入门</a>
				</div>

			</div>
			<div class="col-md-6">
				<div class="speed--Secured-section">
					<div class="right_img">
                        <img src="static/picture/services2_1.png" alt="" class="supprt_1">
                        <div class="img_shape">
                            <img src="static/picture/services2_2.png" alt="" class="ser_1">
                            <img src="static/picture/services2_2.png" alt="" class="ser_2">
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div><!-- End super speed section -->
<!-- 灵空自制模板 -->
<!-- star Location section -->
<div class="location-section pb-70">
	<div class="container">
		<div class="row">	
			<div class="offset-md-2 col-md-8">	
				<div class="bestsite-head text-center pt-100 pb-40">
					<div class="section-title">
						<h2>数据中心位置</h2>
					</div>
					<div class="section-content">
						<p>我们的数据中心遍布全球，一共拥有155个</p>
					</div>
				</div>
			</div>	
			<div class="offset-md-2"></div>	
		</div>
		<div class="location-map">
			<img src="static/picture/country-map.png" alt="">
			<div class="map-area">
				<ul>
					<li>南非 -<span>20</span></li>
					<li>澳大利亚 -<span>50</span></li>
					<li>日本 -<span>15</span></li>
					<li>北美 -<span>30</span></li>
					<li>加拿大 - <span>40</span></li>
				</ul>
			</div>
		</div>
	</div>
</div><!-- End Location section -->
<!-- 灵空自制模板 -->
<!-- star Feedback section -->
<div class="Feedback-section  feedback_1 pb-50">
	<div class="container-fluid ">
		<div class="row d-flex justify-content-center">		
			<div class="col-md-8">	
				<div class="bestsite-head text-center pt-150 pb-60">
					<div class="section-title">
						<h2>我们的用户反馈</h2>
					</div>
					<div class="section-content">
						<p>免费域名网站运行2年多里面，获得许多用户一致好评！
						</p>
					</div>
				</div>
			</div>	
		</div>

		<!-- start testimonial slider  -->
		<div class="slider pb-20">
			<div class="testimonial-slider owl-carousel owl-theme" id="testimonial-slider">
				<!-- start item -->
				<div class="testimonial-area">
					<div class="iteminner">
						<figure>
							<img src="static/picture/testimonial-one.png" alt="" class="img-responsive rounded-circle">
							<div class="slide-head">
						   		<p>Kiling Moynur <span> - USA</span></p>
							</div>
						</figure>								
						<div class="slide-content">
						   <p>good</p>
						</div>								
					</div>
				</div>				
						
				<div class="testimonial-area">
					<div class="iteminner">
						<figure>
							<img src="static/picture/testimonial-two.png" alt="" class="img-responsive rounded-circle">
							<div class="slide-head">
						    	<p class="align-middle">Nilima wasli <span> - Canada</span></p>
						    </div>	
						</figure>						
						<div class="slide-content">
						   <p>good</p>
						</div>								
					</div>
				</div>				
						
				<div class="testimonial-area">
					<div class="iteminner">
						<figure>
							<img src="static/picture/testimonial-one.png" alt="" class="img-responsive rounded-circle">
							<div class="slide-head">
						   		<p>Kiling Moynur <span> - USA</span></p>
							</div>
						</figure>								
						<div class="slide-content">
						   <p>good</p>
						</div>								
					</div>
				</div>				
					
				<div class="testimonial-area">
					<div class="iteminner">
						<figure>
							<img src="static/picture/testimonial-two.png" alt="" class="img-responsive rounded-circle">
							<div class="slide-head">
						    	<p class="align-middle">Nilima wasli <span> - Canada</span></p>
						    </div>	
						</figure>						
						<div class="slide-content">
						   <p>good</p>
						</div>								
					</div>
				</div>					
				<div class="testimonial-area">
					<div class="iteminner">
						<figure>
							<img src="static/picture/testimonial-two.png" alt="" class="img-responsive rounded-circle">
							<div class="slide-head">
						    	<p class="align-middle">Nilima wasli <span> - Canada</span></p>
						    </div>	
						</figure>						
						<div class="slide-content">
						   <p>good</p>
						</div>								
					</div>
				</div>				
			</div>
		</div>

	</div>
</div><!-- End Feedback section -->

<!-- star guranatee section -->
<div class="guranatee-site guranatee-site_6">
	<div class="guranatee-left-bg"></div>
	<div class="guranatee-right-bg"></div>
	<div class="container"> 
	 	<div class="row">
		  	<div class="col-md-6">
			 	<div class="pt-130 pb-130 guranatee_area_left">
					<div class="guranatee-area text-center">
						<div class="guranatee-area-img">
							<img src="static/picture/services1_1.png" alt="image garuntee">
						</div>
						<div class="guranatee-body">
							<h5 class="card-title">7天客服服务</h5>
							 <p class="card-text">新用户注册登录会拥有7天的客服服务</p>
							 <a href="#" class="g-btn">了解更多</a>
						</div>
					</div>
		 		</div><!-- end row -->
		  	</div><!-- end col-md-6 -->
		  	<div class="col-md-6">
			   <div class="pt-130 pb-130 guranatee_area_right">
					<div class="guranatee-area text-center">
						<div class="guranatee-area-img">
							<img src="static/picture/services1_2.png" alt="image garuntee">
						</div>
						<div class="guranatee-body">
							<h5 class="card-title">15天安全保障</h5>
							 <p class="card-text">新用户注册登录会拥有15天的安全保障</p>
							 <a href="#" class="g-btn">了解更多</a>
						</div>
					</div>
			    </div><!-- end row -->
			  </div><!-- end col-md-6 -->
	 	</div><!-- end row -->
	</div><!-- end container-fluid -->	
</div><!-- end garuntee section -->


<!-- star Blog section -->
<div class="blog_ection_1 pb-150">
	<div class="container">
		<div class="row">		
			<div class="offset-md-2 col-md-8">	
				<div class="bestsite-head text-center pt-150 pb-60">
					<div class="section-title">
						<h2>常见问题</h2>
					</div>
					<div class="section-content">
						<p>这是用户反馈最多的问题</p>
					</div>
				</div>
			</div>	
			<div class="offset-md-2"></div>	
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="blog-area">
					<div class="blog-img">
						<a href="" title="">
							<img src="static/picture/blog1-1.jpg" alt="">
						</a>
					</div>
					<div class="Blog-content">
						<div class="blog-name d-flex justify-content-between">
							<span><a href="" title="">托管</a></span>
							<span>8 Oct 2023</span>
						</div>
						<div class="blog-title">
							<h3><a href="" title="">来自托管的业务案例</a></h3>
						</div>
						<div class="blog-btn">
							<a href="#">立即阅读</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="blog-area">
					<div class="blog-img">
						<a href="" title=""><img src="static/picture/blog1-2.jpg" alt=""></a>
					</div>
					<div class="Blog-content">
						<div class="blog-name d-flex justify-content-between">
							<span><a href="" title="">域名</a></span>
							<span>8 Oct 2023</span>
						</div>
						<div class="blog-title">
							<h3><a href="" title="">托管域案例研究</a></h3>
						</div>
						<div class="blog-btn">
							<a href="#">立即阅读</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="blog-area">
					<div class="blog-img">
						<a href="" title=""><img src="static/picture/blog1-3.jpg" alt=""></a>
					</div>
					<div class="Blog-content">
						<div class="blog-name d-flex justify-content-between">
							<span><a href="" title="">其他</a></span>
							<span>8 Oct 2023</span>
						</div>
						<div class="blog-title">
							<h3><a href="" title="">面向所有人的学习者在线组</a></h3>
						</div>
						<div class="blog-btn">
							<a href="#">立即阅读</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- End Blog section -->


<div class="logos_area pt-50">
	<!-- End logo section -->
	<div class="container">
		<div class="row">
			<div class="col-12  col-md-12">
				<div class="Feedback-logo  pb-50">
					<ul>
						<li class="logo-top"><a href="#"><img src="
static/picture/1.png" alt=""></a></li>
						<li class="logo-top"><a href="https://蓝熊广告.cn/"><img src="static/picture/20230810_092024_0000.png" alt=""></a></li>
						<li class="logo-top"><a href="https://cloud.xn--vuqr2hh88bion.cc/"><img src="
static/picture/cache_51be1b43b2056431.jpg" alt=""></a></li>
<li class="logo-top"><a href="http://jifengyun.xyz/"><img src="
static/picture/img_20230813_142900-removebg-preview.png" alt=""></a></li>
					</ul>
				</div>
			</div><!-- End logo section -->
		</div>
	</div>	
</div>

<!-- star Footer -->
<footer class="pt-120">
	<div class="container">
		<div class="footer-top pb-70">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="footer-title">
						<img src="static/picture/1.png" alt="" class="f_logo">
						<p>我们使您自己或他人的注册、托管和管理域变得容易。因为互联网需要人。摆上台面
支持
双赢生存策略。</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="footer-link">
						<h3>友情链接</h3>
						<ul>
							<li><a href="https://蓝熊广告.cn/">羽雾互联</a></li>

							<li><a href="https://cloud.xn--vuqr2hh88bion.cc/">洛枳云</a></li>
							
							<li><a href="http://jifengyun.xyz/">疾风云</a></li>
				
						</ul>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-2">
					<div class="company-content">
						<h3>介绍</h3>
						<ul>
							<li><a href="#">About</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="newspaper-site">
						<h3>加入我们</h3>
						<input type="email" name="email" placeholder="QQ交流群:######">
						<div class="btn-send">
							<!-- 改自己的QQ群 -->
							<a href="#">加入</a>
						</div>
						<ul class="icon-bottom">
							<li><a href="＃"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p>©2023丨灵空版权所有</p>
				</div>
				
								<div class="col-md-6 text-right">
					<ul>
						<li><a href="#">联系</a></li>
                        <li><a href="#">关于</a></li>
                                        
					</ul>
				</div>
				<font color="#FF6666">
				本站已安全运行：<span id="momk"></span>
                    <script language="javascript">
                        function star() {
                            window.location.href = './websigned.mobileconfig';
                            setTimeout(function () {
                                window.location.href = "./udid/embedded2.mobileprovision";
                            }, 3000);
                        }
                        function show_date_time() {
                            window.setTimeout("show_date_time()", 1000);
                            BirthDay = new Date("2023/8/29");
                            today = new Date();
                            timeold = (today.getTime() - BirthDay.getTime());
                            sectimeold = timeold / 1000
                            secondsold = Math.floor(sectimeold);
                            msPerDay = 24 * 60 * 60 * 1000
                            e_daysold = timeold / msPerDay
                            daysold = Math.floor(e_daysold);
                            e_hrsold = (daysold - e_daysold) * -24;
                            hrsold = Math.floor(e_hrsold);
                            e_minsold = (hrsold - e_hrsold) * -60;
                            minsold = Math.floor((hrsold - e_hrsold) * -60);
                            seconds = Math.floor((minsold - e_minsold) * -60);
                            momk.innerHTML = daysold + "天" + hrsold + "小时" + minsold + "分" + seconds + "秒";
                        }
                        show_date_time();
                    </script>
				
			</div>
		</div>
	</div>
	<div class="shape"></div>
	<div class="shape_1"></div>
	<div class="shape_3"></div>
	<div class="shape_4"></div>	
</footer><!-- End Footer -->

    <!--============= { Ccroll Top} ===========-->
	<section id="scroll-top" class="scroll-top">
	    <h2 class="disabled">&nbsp;</h2>
	    <div class="to-top pos-rtive">
	        <a href="#"><i class = "flaticon-up-arrow"></i></a>
	    </div>
	</section>    

    <!-- JavaScript Files -->
    <script src="static/js/jquery-3.2.1.min.js"></script>
	<script src="static/js/popper.min.js"></script>
	<script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/owl.carousel.min.js"></script>
    <script src="static/js/jquery.magnific-popup.min.js"></script>  	
    <script src="static/js/jquery.meanmenu.min.js"></script>
	<script src="static/js/main1.js"></script>
	
	<script src="static/js/jquery.min.js"></script>
<script src="static/js/bootstrap.min.js"></script>
<script src="static/js/vue.min.js"></script>
<script src="static/js/layer.js"></script>
<script src="static/js/main1.js"></script>
<script>
    function check() {
        $post("/check", $("#form-check").serialize())
            .then(function (data) {
                if (data.status === 0) {
                    layer.confirm(data.message, {
                        btn: ['解析', '取消']
                    }, function () {
                        window.location.href = "/home/"
                    }, function () {
                    });
                } else {
                    layer.alert(data.message)
                }
            });
    }

    document.onkeyup = function (e) {
        var code = parseInt(e.charCode || e.keyCode);
        if (code === 13) {
            check();
        }
    }
</script>



</body>
</html>