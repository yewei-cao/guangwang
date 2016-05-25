@extends('layouts.master')

@section('content')

<!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">积发软件</h1>
                        <p class="intro-text">电商企业的CRM与IT后盾,您忠实的电商合作伙伴，解决您管理客户的烦恼</p>
                        <a href="#contact" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
       <div class="container">
           <div class="col-lg-8 col-lg-offset-2">
              <h2>加盟积分联盟是您明智的决定</h2>
               <p>积分联盟拥有超过30家天猫旗舰店的加盟，超过1000种商品出售。为商家维护老客户管理提供了超过30套的客户完整方案。为天猫网店带来了无限商机。积发软件公司是您忠实的合作伙伴。</p>
               <a href="#" class="btn btn-default btn-lg">联系我们</a>
           </div>
       </div>
    </section>
    
    <!-- Services Section -->
    <section id="services" class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">我们的服务</h2>
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

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; 积发软件公司 2016</p>
        </div>
    </footer>
    
@endsection
