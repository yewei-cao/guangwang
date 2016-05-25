@extends('layouts.master')

@section('content')

<!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
         
                <div class="row">
                
                	<div class="intro_banner ">
                		<h1>Video</h1>
                	</div>
                
                
                </div>

        </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="content-section">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-12 text-left">
                    <h2 class="section-heading">积分联盟简介</h2>
                    <hr class="primary">
                    <p class="text-muted">积分联盟，是一个积分兑换商品的平台。汇集各个商家的商品，使得消费者使用积分兑换商品的时候有更多的选择，更能兑换到自己需求的，自己喜爱的商品，从而使得积分更具有价值，使消费者更认可这个积分。积分是商家维护顾客关系的重要工具，是提高客单价和回购率重要手段。商家可以把自己本身用于给用户兑换的积分赠品或者在售商品，提供到积分联盟平台，入驻积分联盟。商家的消费者会更喜欢您给积分。同时我们会提供一整套IT解决方案，节约商家的运营成本。此外，还能给商家带来来自平台的流量和产品/品牌的展示。积分联盟诚邀您的加入！</p>
                </div>
                
            </div>
        </div>
       
    </section>
    
    
   @include('includes.contactus')

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; 积发软件公司 2016</p>
        </div>
    </footer>
    
@endsection
