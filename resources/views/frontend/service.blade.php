@extends('layouts.master')

@section('content')

<!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
         
                <div class="row">
                
                	<div class="intro_banner home_02">
                		<a href="/service"></a>
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
                    <p class="text-muted">我们诞生于电商企业，深耕于电商企业的IT需求，开发了大量的IT系统。涵盖各个方面，包括供应链、财务、项目管理、人事管理、营销支持等各种类型的系统， 极大的提高的企业的工作效率，数据准确性和解放了大量人力。在现代社会信息技术在企业中的运用已经不可或缺，若您的企业没有IT团队，或者IT需求不大无需供养一支IT队伍，那我们将是你们很好选择。凡您需要的，无需我们改动的系统，我们将都不收费。仅对增量修改部分收费。还提供长期的支持服务。我们将会是您的企业强大IT后盾！</p>
                </div>
                
                
                <div class="col-lg-12 text-left">
                	<h2 class="section-heading">产品业务</h2>
                	<h4>补发系统</h4>
                	<p class="text-muted">....</p>
                	
                	<h4>退货系统</h4>
                	<p class="text-muted">....</p>
                	
                	<h4>卡片系统</h4>
                	<p class="text-muted">....</p>
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
