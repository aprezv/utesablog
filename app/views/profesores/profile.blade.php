@extends('profesores.master')

@section('styles')
{{ HTML::style( asset('assets/css/pages/profile.css') ) }}
@stop

@section('breadcrums')
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Perfil</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index-2.html">Inicio</a></li>
            <li class="active">Perfil</li>
        </ul>
    </div>
</div>
@stop

@section('profile-body')
<div class="profile-body">
    <div class="profile-bio">
        <div class="row">
            <div class="col-md-5">
                <img class="img-responsive md-margin-bottom-10" style="width: 100%" src="{{asset('assets/img/testimonials/user.jpg')}}" alt="">
                <a class="btn-u btn-u-sm" href="#">Cambiar imagen</a>
            </div>
            <div class="col-md-7">
                <h2>Edward Rooster</h2>
                <span><strong>Job:</strong> Web Developer</span>
                <span><strong>Position:</strong> Web Designer</span>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget massa nec turpis congue bibendum. Integer nulla felis, porta suscipit nulla et, dignissim commodo nunc. Morbi a semper nulla.</p>
                <p>Proin mauris odio, pharetra quis ligula non, vulputate vehicula quam. Nunc in libero vitae nunc ultricies tincidunt ut sed leo. Sed luctus dui ut congue consequat. Cras consequat nisl ante, nec malesuada velit pellentesque ac. Pellentesque nec arcu in ipsum iaculis convallis.</p>
            </div>
        </div>    
    </div><!--/end row-->

    <hr>

    <div class="row">
        <!--Social Icons v3-->
        <div class="col-sm-6 sm-margin-bottom-30">
            <div class="panel panel-profile">
                <div class="panel-heading overflow-h">
                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-pencil"></i> Social Contacts <small>(option 1)</small></h2>
                    <a href="#"><i class="fa fa-cog pull-right"></i></a>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled social-contacts-v2">
                        <li><i class="rounded-x tw fa fa-twitter"></i> <a href="#">edward.rooster</a></li>
                        <li><i class="rounded-x fb fa fa-facebook"></i> <a href="#">Edward Rooster</a></li>
                        <li><i class="rounded-x sk fa fa-skype"></i> <a href="#">edwardRooster77</a></li>
                        <li><i class="rounded-x gp fa fa-google-plus"></i> <a href="#">rooster77edward</a></li>
                        <li><i class="rounded-x gm fa fa-envelope"></i> <a href="#">edward77@gmail.com</a></li>
                    </ul>
                </div>       
            </div>
        </div>
        <!--End Social Icons v3-->

        <!--Skills-->
        <div class="col-sm-6 sm-margin-bottom-30">
            <div class="panel panel-profile">
                <div class="panel-heading overflow-h">
                    <h2 class="panel-title heading-sm pull-left"><i class="fa fa-lightbulb-o"></i> Skills</h2>
                    <a href="#"><i class="fa fa-cog pull-right"></i></a>
                </div>
                <div class="panel-body">
                    <small>HTML/CSS</small>
                    <small>92%</small>
                    <div class="progress progress-u progress-xxs">
                        <div style="width: 92%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="92" role="progressbar" class="progress-bar progress-bar-u">
                        </div>
                    </div>

                    <small>Photoshop</small>
                    <small>77%</small>
                    <div class="progress progress-u progress-xxs">
                        <div style="width: 77%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="77" role="progressbar" class="progress-bar progress-bar-u">
                        </div>
                    </div>

                    <small>PHP</small>
                    <small>85%</small>
                    <div class="progress progress-u progress-xxs">
                        <div style="width: 85%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-u">
                        </div>
                    </div>

                    <small>Javascript</small>
                    <small>81%</small>
                    <div class="progress progress-u progress-xxs">
                        <div style="width: 81%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="81" role="progressbar" class="progress-bar progress-bar-u">
                        </div>
                    </div>  
                </div>
            </div>
        </div>    
        <!--End Skills-->            
    </div><!--/end row-->    
</div>
@stop