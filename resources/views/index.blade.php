@extends('layouts.master')

@section('content')

<!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
         
                <div class="row">
                
                	<div class="intro_banner home_01">
                		<a href="/union"></a>
                	</div>
                	
                	<div class="intro_banner home_02">
                		<a href="/service"></a>
                	</div>
                	
                	<div class="intro_banner home_03">
                		<a href="/message"></a>
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
                        
                        <img alt="积分联盟" src="/img/icon-1.png">
                        
                        <h3>积分联盟</h3>
                        <p class="text-muted">让积分更有价值，提升转化率与回购率，异业联盟，获取更多的免费流量!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <img alt="积分联盟" src="/img/icon-2.png">
                        <h3>软件服务</h3>
                        <p class="text-muted">拥有电商企业5年业务开发经验，对供应链、财务、营销等各项业务提供整套解决方案。</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                       <img alt="积分联盟" src="/img/icon-3.png">
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
