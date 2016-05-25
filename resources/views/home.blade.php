@extends('layouts.master')

@section('content')

<!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
           
                <div class="row">
                
                <div class="col-lg-12 text-left">
                
			        <!-- Jssor Slider Begin -->
			        <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
			        <!-- ================================================== -->
			        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
			        top: 0px; left: 0px; width: 1920px; height: 450px; overflow: hidden;">
			            <!-- Loading Screen -->
			            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
			                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
			                top: 0px; left: 0px; width: 100%; height: 100%;">
			                </div>
			                <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
			                top: 0px; left: 0px; width: 100%; height: 100%;">
			                </div>
			            </div>
			            <!-- Slides Container -->
			            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1920px; height: 450px; overflow: hidden;">
			                <div>
			                    <img u="image" src2="/img/home_01.jpg" />
			                </div>
			                <div>
			                    <img u="image" src2="/img/home_02.jpg" />
			                </div>
			                <div>
			                    <img u="image" src2="/img/home_03.jpg" />
			                </div>
			            </div>
			            
			            <!--#region Bullet Navigator Skin Begin -->
			            <!-- Help: http://www.jssor.com/tutorial/set-bullet-navigator.html -->
			            <style>
			                /* jssor slider bullet navigator skin 21 css */
			                /*
			                .jssorb21 div           (normal)
			                .jssorb21 div:hover     (normal mouseover)
			                .jssorb21 .av           (active)
			                .jssorb21 .av:hover     (active mouseover)
			                .jssorb21 .dn           (mousedown)
			                */
			                .jssorb21 {
			                    position: absolute;
			                }
			                .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
			                    position: absolute;
			                    /* size of bullet elment */
			                    width: 19px;
			                    height: 19px;
			                    text-align: center;
			                    line-height: 19px;
			                    color: white;
			                    font-size: 12px;
			                    background: url(/img/b21.png) no-repeat;
			                    overflow: hidden;
			                    cursor: pointer;
			                }
			                .jssorb21 div { background-position: -5px -5px; }
			                .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
			                .jssorb21 .av { background-position: -65px -5px; }
			                .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
			            </style>
			            <!-- bullet navigator container -->
			            <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
			                <!-- bullet navigator item prototype -->
			                <div u="prototype"></div>
			            </div>
			            <!--#endregion Bullet Navigator Skin End -->
			            
			            <!--#region Arrow Navigator Skin Begin -->
			            <!-- Help: http://www.jssor.com/tutorial/set-arrow-navigator.html -->
			            <style>
			                /* jssor slider arrow navigator skin 21 css */
			                /*
			                .jssora21l                  (normal)
			                .jssora21r                  (normal)
			                .jssora21l:hover            (normal mouseover)
			                .jssora21r:hover            (normal mouseover)
			                .jssora21l.jssora21ldn      (mousedown)
			                .jssora21r.jssora21rdn      (mousedown)
			                */
			                .jssora21l, .jssora21r {
			                    display: block;
			                    position: absolute;
			                    /* size of arrow element */
			                    width: 55px;
			                    height: 55px;
			                    cursor: pointer;
			                    background: url(/img/a21.png) center center no-repeat;
			                    overflow: hidden;
			                }
			                .jssora21l { background-position: -3px -33px; }
			                .jssora21r { background-position: -63px -33px; }
			                .jssora21l:hover { background-position: -123px -33px; }
			                .jssora21r:hover { background-position: -183px -33px; }
			                .jssora21l.jssora21ldn { background-position: -243px -33px; }
			                .jssora21r.jssora21rdn { background-position: -303px -33px; }
			            </style>
			            <!-- Arrow Left -->
			            <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
			            </span>
			            <!-- Arrow Right -->
			            <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
			            </span>
			         
			        </div>
			        <!-- Jssor Slider End -->
                
                
                
                </div>
                   
                </div>
        </div>
    </header>

        
    <!-- Services Section -->
    <section id="services" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">产品与服务</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-location-arrow text-primary" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;"></i>
                        <h3>积分联盟</h3>
                        <p class="text-muted">让积分更有价值，提升转化率与回购率，异业联盟，获取更多的免费流量!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;"></i>
                        <h3>软件服务</h3>
                        <p class="text-muted">拥有电商企业5年业务开发经验，对供应链、财务、营销等各项业务提供整套解决方案。</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-envelope-o text-primary" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceIn;"></i>
                        <h3>短信彩信邮件</h3>
                        <p class="text-muted">低于市场价格! 7*24小时响应服务，提供数据处理、效果报表等附加服务。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Partner Section -->
    
    <section id="partner" class="content-section">
    	<div class="container">
            <div class="row">
                <div class="col-lg-12  text-center">
                    <h2 class="section-heading">合作伙伴</h2>
                    <hr class="primary">
                </div>
                <div class="col-lg-3 text-center">
                    <p><a href="#">膜法世家</a></p>
                </div>
                <div class="col-lg-3 text-center">
                    <p><a href="#">爱唯施</a></p>
                </div>
                <div class="col-lg-3 text-center">
                   <p><a href="#">拉菲斯丁</a></p>
                </div>
            </div>
        </div>
    </section>
    
    
    <section id="contact" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">联系我们</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="您的姓名 *" id="name" required="" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="您的邮件 *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="您的手机号码 *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="您的信息 *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">发送信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; 积发软件公司 2016</p>
        </div>
    </footer>
    
@endsection
