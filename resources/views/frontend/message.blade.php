@extends('layouts.master')

@section('content')

<!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
         
                <div class="row">
                
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
            
                <div class="col-lg-12 text-left">
                    <h2 class="section-heading">介绍</h2>
                    <hr class="primary">
                    <p class="text-muted">短彩邮，即短信，彩信，电子邮件。作为电商企业维护顾客关系的重要工具，有快递，直接的特点。我司提供短彩邮服务，除了价格较低，服务响应及时之外，我们不同于别的服务商，我们还提供免费的业务咨询服务。我们诞生于电商公司，有丰富的活动策划经验，我们可以根据您的顾客特点，制定发送方案，已达到最好的效果。
此外我们还帮您制作效果报表，优化建议。您将以最低的人力成本和资金成本获取最高的收益。</p>
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
