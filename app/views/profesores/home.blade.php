@extends('profesores.master')

@section('breadcrums')
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Inicio</h1>
        <ul class="pull-right breadcrumb">
             <li class="active">Inicio</li>
        </ul>
    </div>
</div>
@stop

@section('profile-body')

<!--Service Block v3-->
<div class="row margin-bottom-10">
    <div class="col-sm-6 sm-margin-bottom-20">
        <div class="service-block-v3 service-block-u">
            <i class="icon-users"></i>
            <span class="service-heading">Overall Visits</span>
            <span class="counter">52,147</span>

            <div class="clearfix margin-bottom-10"></div>

            <div class="row margin-bottom-20">
                <div class="col-xs-6 service-in">
                    <small>Last Week</small>
                    <h4 class="counter">1,385</h4>
                </div>
                <div class="col-xs-6 text-right service-in">
                    <small>Last Month</small>
                    <h4 class="counter">6,048</h4>
                </div>
            </div>
            <div class="statistics">
                <h3 class="heading-xs">Statistics in Progress Bar <span class="pull-right">67%</span></h3>
                <div class="progress progress-u progress-xxs">
                    <div style="width: 67%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="67" role="progressbar" class="progress-bar progress-bar-light">
                    </div>
                </div>
                <small>11% less <strong>than last month</strong></small>
            </div>            
        </div>
    </div>

    <div class="col-sm-6">
        <div class="service-block-v3 service-block-blue">
            <i class="icon-screen-desktop"></i>
            <span class="service-heading">Overall Page Views</span>
            <span class="counter">324,056</span>

            <div class="clearfix margin-bottom-10"></div>

            <div class="row margin-bottom-20">
                <div class="col-xs-6 service-in">
                    <small>Last Week</small>
                    <h4 class="counter">26,904</h4>
                </div>
                <div class="col-xs-6 text-right service-in">
                    <small>Last Month</small>
                    <h4 class="counter">124,766</h4>
                </div>
            </div>
            <div class="statistics">
                <h3 class="heading-xs">Statistics in Progress Bar <span class="pull-right">89%</span></h3>
                <div class="progress progress-u progress-xxs">
                    <div style="width: 89%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="89" role="progressbar" class="progress-bar progress-bar-light">
                    </div>
                </div>
                <small>15% higher <strong>than last month</strong></small>
            </div>            
        </div>
    </div>
</div><!--/end row-->
<!--End Service Block v3-->

<hr>

<div class="row margin-bottom-20">
    <!--Profile Post-->
    <div class="col-sm-6">
        <div class="panel panel-profile no-bg">
            <div class="panel-heading overflow-h">
                <h2 class="panel-title heading-sm pull-left"><i class="fa fa-pencil"></i>Notes</h2>
                <a href="#"><i class="fa fa-cog pull-right"></i></a>
            </div>
            <div id="scrollbar" class="panel-body contentHolder">
                <div class="profile-post color-one">
                    <span class="profile-post-numb">01</span>
                    <div class="profile-post-in">
                        <h3 class="heading-xs"><a href="#">Creative Blog</a></h3>
                        <p>How to market yourself as a freelance designer</p>
                    </div>
                </div>
                <div class="profile-post color-two">
                    <span class="profile-post-numb">02</span>
                    <div class="profile-post-in">
                        <h3 class="heading-xs"><a href="#">Codrops Collective #117</a></h3>
                        <p>Web Design &amp; Development News</p>
                    </div>
                </div>
                <div class="profile-post color-three">
                    <span class="profile-post-numb">03</span>
                    <div class="profile-post-in">
                        <h3 class="heading-xs"><a href="#">Sketch Toolbox</a></h3>
                        <p>Basic prototype of a package manager for Sketch</p>
                    </div>
                </div>
                <div class="profile-post color-four">
                    <span class="profile-post-numb">04</span>
                    <div class="profile-post-in">
                        <h3 class="heading-xs"><a href="#">Amazing Portfolio</a></h3>
                        <p>Create a free online portfolio lookbook with Readz</p>
                    </div>
                </div>
                <div class="profile-post color-five">
                    <span class="profile-post-numb">05</span>
                    <div class="profile-post-in">
                        <h3 class="heading-xs"><a href="#">Discover New Features</a></h3>
                        <p>More than 100+ amazing add-ons coming soon...</p>
                    </div>
                </div>
                <div class="profile-post color-six">
                    <span class="profile-post-numb">06</span>
                    <div class="profile-post-in">
                        <h3 class="heading-xs"><a href="#">Corporation Plans</a></h3>
                        <p>Discussion of new corporation plans</p>
                    </div>
                </div>
                <div class="profile-post color-seven">
                    <span class="profile-post-numb">07</span>
                    <div class="profile-post-in">
                        <h3 class="heading-xs"><a href="#">Project Updates</a></h3>
                        <p>New features of coming update</p>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <!--End Profile Post-->

    <!--Profile Event-->
    <div class="col-sm-6 md-margin-bottom-20">
        <div class="panel panel-profile no-bg">
            <div class="panel-heading overflow-h">
                <h2 class="panel-title heading-sm pull-left"><i class="fa fa-briefcase"></i>Upcoming Events</h2>
                <a href="#"><i class="fa fa-cog pull-right"></i></a>
            </div>
            <div id="scrollbar2" class="panel-body contentHolder">
                <div class="profile-event">
                    <div class="date-formats">
                        <span>25</span>
                        <small>05, 2014</small>
                    </div>
                    <div class="overflow-h">
                        <h3 class="heading-xs"><a href="#">GitHub seminars in Japan.</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing.</p>
                    </div>    
                </div>
                <div class="profile-event">
                    <div class="date-formats">
                        <span>31</span>
                        <small>06, 2014</small>
                    </div>
                    <div class="overflow-h">
                        <h3 class="heading-xs"><a href="#">Bootstrap Update</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing.</p>
                    </div>    
                </div>
                <div class="profile-event">
                    <div class="date-formats">
                        <span>07</span>
                        <small>08, 2014</small>
                    </div>
                    <div class="overflow-h">
                        <h3 class="heading-xs"><a href="#">Apple Conference</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing.</p>
                    </div>    
                </div>
                <div class="profile-event">
                    <div class="date-formats">
                        <span>22</span>
                        <small>10, 2014</small>
                    </div>
                    <div class="overflow-h">
                        <h3 class="heading-xs"><a href="#">Backend Meeting</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing.</p>
                    </div>    
                </div>
                <div class="profile-event">
                    <div class="date-formats">
                        <span>14</span>
                        <small>11, 2014</small>
                    </div>
                    <div class="overflow-h">
                        <h3 class="heading-xs"><a href="#">Google Conference</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing.</p>
                    </div>    
                </div>
                <div class="profile-event">
                    <div class="date-formats">
                        <span>05</span>
                        <small>12, 2014</small>
                    </div>
                    <div class="overflow-h">
                        <h3 class="heading-xs"><a href="#">FontAwesome Update</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing.</p>
                    </div>    
                </div>
            </div>    
        </div>
    </div>
    <!--End Profile Event-->
</div><!--/end row-->

<hr>

<!--Profile Blog-->
<div class="panel panel-profile">
    <div class="panel-heading overflow-h">
        <h2 class="panel-title heading-sm pull-left"><i class="fa fa-tasks"></i>Contacts</h2>
        <a href="profile_users.html" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-xs pull-right">View All</a>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="profile-blog blog-border">
                    <img class="rounded-x" src="{{asset('assets/img/testimonials/img1.jpg')}}" alt="">
                    <div class="name-location">
                        <strong>Mikel Andrews</strong>
                        <span><i class="fa fa-map-marker"></i><a href="#">California,</a> <a href="#">US</a></span>
                    </div>
                    <div class="clearfix margin-bottom-20"></div>    
                    <p>Donec non dignissim eros. Mauris faucibus turpis volutpat sagittis rhoncus. Pellentesque et rhoncus sapien, sed ullamcorper justo.</p>
                    <hr>
                    <ul class="list-inline share-list">
                        <li><i class="fa fa-bell"></i><a href="#">12 Notifications</a></li>
                        <li><i class="fa fa-group"></i><a href="#">54 Followers</a></li>
                        <li><i class="fa fa-twitter"></i><a href="#">Retweet</a></li>
                    </ul>
                </div>
            </div>        

            <div class="col-sm-6">
                <div class="profile-blog blog-border">
                    <img class="rounded-x" src="{{asset('assets/img/testimonials/img4.jpg')}}" alt="">
                    <div class="name-location">
                        <strong>Natasha Kolnikova</strong>
                        <span><i class="fa fa-map-marker"></i><a href="#">Moscow,</a> <a href="#">Russia</a></span>
                    </div>
                    <div class="clearfix margin-bottom-20"></div>    
                    <p>Donec non dignissim eros. Mauris faucibus turpis volutpat sagittis rhoncus. Pellentesque et rhoncus sapien, sed ullamcorper justo.</p>
                    <hr>
                    <ul class="list-inline share-list">
                        <li><i class="fa fa-bell"></i><a href="#">37 Notifications</a></li>
                        <li><i class="fa fa-group"></i><a href="#">46 Followers</a></li>
                        <li><i class="fa fa-twitter"></i><a href="#">Retweet</a></li>
                    </ul>
                </div> 
            </div>    
        </div>
    </div>        
</div><!--/end row-->   
<!--End Profile Blog-->

<hr>

<!--Table Search v1-->
<div class="table-search-v1 margin-bottom-20">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th class="hidden-sm">Description</th>
                    <th>Headquarters</th>
                    <th>Progress</th>
                    <th width="100">Status</th>
                    <th>Contacts</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="#">HP Enterprise Service</a>
                    </td>
                    <td class="td-width">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu.</td>
                    <td>
                        <div class="m-marker">
                            <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                            <a href="#" class="display-b">USA</a>
                            <a href="#">Palo Alto</a>
                        </div>    
                    </td>
                    <td>
                        <div class="progress progress-u progress-xxs">
                            <div class="progress-bar progress-bar-u" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%">
                            </div>
                        </div>
                    </td>
                    <td><button class="btn-u btn-u-red btn-block btn-u-xs"><i class="fa fa-sort-amount-desc margin-right-5"></i> Deep</button></td>
                    <td>
                        <span>1(123) 456</span>
                        <span><a href="#">info@example.com</a></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">Samsung Electronics</a>
                    </td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu.</td>
                    <td>
                        <div class="m-marker">
                            <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                            <a href="#" class="display-b">South Korea</a>
                            <a href="#">Suwon</a>
                        </div>
                    </td>    
                    <td>
                        <div class="progress progress-u progress-xxs">
                            <div class="progress-bar progress-bar-u" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%">
                            </div>
                        </div>
                    </td>
                    <td><button class="btn-u btn-block btn-u-dark btn-u-xs"><i class="icon-graph margin-right-5"></i> High</button></td>
                    <td>
                        <span>1(123) 456</span>
                        <span><a href="#">info@example.com</a></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">LG</a>
                    </td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu.</td>
                    <td>
                        <div class="m-marker">
                            <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                            <a href="#" class="display-b">South Korea</a>
                            <a href="#">Seoul</a>
                        </div>
                    </td>
                    <td>
                        <div class="progress progress-u progress-xxs">
                            <div class="progress-bar progress-bar-u" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                            </div>
                        </div>
                    </td>
                    <td><button class="btn-u btn-block btn-u-aqua btn-u-xs"><i class="fa fa-level-down margin-right-5"></i> Low</button></td>
                    <td>
                        <span>1(123) 456</span>
                        <span><a href="#">info@example.com</a></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">Sony Corporation</a>
                    </td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu.</td>
                    <td>
                        <div class="m-marker">
                            <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                            <a href="#" class="display-b">Japan</a>
                            <a href="#">Tokyo</a>
                        </div>
                    </td>
                    <td>
                        <div class="progress progress-u progress-xxs">
                            <div class="progress-bar progress-bar-u" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                            </div>
                        </div>
                    </td>
                    <td><button class="btn-u btn-block btn-u-yellow btn-u-xs"><i class="fa fa-arrows-v margin-right-5"></i> Middle</button></td>
                    <td>
                        <span>1(123) 456</span>
                        <span><a href="#">info@example.com</a></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">Lenovo Group</a>
                    </td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu.</td>
                    <td>
                        <div class="m-marker">
                            <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                            <a href="#" class="display-b">Chinese</a>
                            <a href="#">Beijing</a>
                        </div>
                    </td>
                    <td>
                        <div class="progress progress-u progress-xxs">
                            <div class="progress-bar progress-bar-u" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                            </div>
                        </div>
                    </td>
                    <td><button class="btn-u btn-block btn-u-green btn-u-xs"><i class="fa fa-level-up margin-right-5"></i> High</button></td>
                    <td>
                        <span>1(123) 456</span>
                        <span><a href="#">info@example.com</a></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">Acer</a>
                    </td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor arcu.</td>
                    <td>
                        <div class="m-marker">
                            <a href="#"><i class="color-green fa fa-map-marker"></i></a>
                            <a href="#" class="display-b">Taiwan</a>
                            <a href="#">Taipei</a>
                        </div>
                    </td>
                    <td>
                        <div class="progress progress-u progress-xxs">
                            <div class="progress-bar progress-bar-u" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                            </div>
                        </div>
                    </td>
                    <td><button class="btn-u btn-block btn-u-blue btn-u-xs"><i class="icon-graph margin-right-5"></i> Stabile</button></td>
                    <td>
                        <span>1(123) 456</span>
                        <span><a href="#">info@example.com</a></span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>    
</div>
<!--End Table Search v1-->

<hr>

<div class="row">
    <!--Alert-->
    <div class="col-sm-7 sm-margin-bottom-30">
        <div class="panel panel-profile">
            <div class="panel-heading overflow-h">
                <h2 class="panel-title heading-sm pull-left"><i class="fa fa-send"></i> Alarm Notification</h2>
                <a href="#"><i class="fa fa-cog pull-right"></i></a>
            </div>
            <div id="scrollbar3" class="panel-body contentHolder">
                <div class="alert-blocks alert-blocks-pending alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <img class="rounded-x" src="{{asset('assets/img/testimonials/img3.jpg')}}" alt="">
                    <div class="overflow-h">
                        <strong class="color-yellow">Pending... <small class="pull-right"><em>Just now</em></small></strong> 
                        <p>Your friend request has been sent.</p>
                    </div>    
                </div>
                <div class="alert-blocks alert-blocks-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <img class="rounded-x" src="{{asset('assets/img/testimonials/img2.jpg')}}" alt="">
                    <div class="overflow-h">
                        <strong class="color-green">Accepted. <small class="pull-right"><em>7 hours ago</em></small></strong> 
                        <p>Your friend request has been accepted.</p>
                    </div>    
                </div>
                <div class="alert-blocks alert-blocks-info alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <i class="icon-custom rounded-x icon-bg-blue fa fa-bolt"></i>
                    <div class="overflow-h">
                        <strong class="color-blue">Info <small class="pull-right"><em>2 days ago</em></small></strong> 
                        <p>Your friend request has been denied :)</p>
                    </div>    
                </div>
                <div class="alert-blocks alert-blocks-error alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <img class="rounded-x" src="{{asset('assets/img/testimonials/img6.jpg')}}" alt="">
                    <div class="overflow-h">
                        <strong class="color-red">Denied! <small class="pull-right"><em>2 days ago</em></small></strong> 
                        <p>Your friend request has been denied.</p>
                    </div>    
                </div>
                <div class="alert-blocks alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <i class="icon-custom rounded-x icon-bg-dark fa fa-magic"></i>
                    <div class="overflow-h">
                        <strong class="color-dark">Default <small class="pull-right"><em>Just now</em></small></strong> 
                        <p><strong>Adam Johnson's</strong> friend request pending..</p>
                    </div>    
                </div>
                <div class="alert-blocks alert-blocks-pending alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <i class="icon-custom rounded-x icon-bg-yellow fa fa-info"></i>
                    <div class="overflow-h">
                        <strong class="color-yellow">Pending <small class="pull-right"><em>Just now</em></small></strong> 
                        <p><strong>Adam Johnson's</strong> friend request pending..</p>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <!--End Alert-->

    <div class="col-sm-5">
        <div class="panel panel-profile">
            <div class="panel-heading overflow-h">
                <h2 class="panel-title heading-sm pull-left"><i class="fa fa-comments-o"></i> Discussions</h2>
                <a href="profile_comments.html" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-xs pull-right">View All</a>
            </div>
            <div id="scrollbar4" class="panel-body contentHolder">
                <div class="comment">
                    <img src="{{asset('assets/img/testimonials/img6.jpg')}}" alt="">
                    <div class="overflow-h">
                        <strong>Taylor Lee<small class="pull-right"> 25m</small></strong> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="list-inline comment-list">
                            <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                            <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                        </ul>
                    </div>    
                </div>
                <div class="comment">
                    <img src="{{asset('assets/img/testimonials/img2.jpg')}}" alt="">
                    <div class="overflow-h">
                        <strong>Miranda Clarsson<small class="pull-right"> 44m</small></strong> 
                        <p>Donec cursus, orci non posuere luctus, risus massa luctus nisi, sit amet cursus leo massa id arcu. Nunc tincidunt magna sit amet sapien congue.</p>
                        <ul class="list-inline comment-list">
                            <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                            <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                        </ul>
                    </div>    
                </div>
                <div class="comment">
                    <img src="{{asset('assets/img/testimonials/img4.jpg"')}}" alt="">
                    <div class="overflow-h">
                        <strong>Natasha Kolnikova<small class="pull-right"> 7h</small></strong> 
                        <p>Suspendisse est est, sollicitudin eget auctor et, pharetra eu sapien. Mauris mollis libero ac auctor iaculis.</p>
                        <ul class="list-inline comment-list">
                            <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                            <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                        </ul>
                    </div>    
                </div>
                <div class="comment">
                    <img src="{{asset('assets/img/testimonials/img1.jpg')}}" alt="">
                    <div class="overflow-h">
                        <strong>Mikel Andrews<small class="pull-right"> 15h</small></strong> 
                        <p>Nam ut dolor cursus nibh aliquet bibendum in eget risus.</p>
                        <ul class="list-inline comment-list">
                            <li><i class="fa fa-heart"></i> <a href="#">20</a></li>
                            <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                        </ul>
                    </div>    
                </div>
                <div class="comment">
                    <img src="{{asset('assets/img/testimonials/img7.jpg')}}" alt="">
                    <div class="overflow-h">
                        <strong>Edward Rooster<small class="pull-right"> 1d</small></strong> 
                        <p>Nam ut dolor cursus nibh aliquet bibendum in eget risus. Mauris mollis libero ac auctor iaculis.</p>
                        <ul class="list-inline comment-list">
                            <li><i class="fa fa-heart"></i> <a href="#">23</a></li>
                            <li><i class="fa fa-comments"></i> <a href="#">5</a></li>
                        </ul>
                    </div>    
                </div>
            </div>
        </div>    
    </div>
</div><!--/end row-->        

<hr>

<!--Table Search v2-->
<div class="table-search-v2 margin-bottom-20">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>User Image</th>
                    <th class="hidden-sm">About</th>
                    <th>Status</th>
                    <th>Contacts</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img class="rounded-x" src="{{asset('assets/img/testimonials/img1.jpg')}}" alt="">
                    </td>
                    <td class="td-width">
                        <h3><a href="#">Sed nec elit arcu</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id commodo lacus. Fusce non malesuada ante. Donec vel arcu.</p>
                        <small class="hex">Joined February 28, 2014</small>
                    </td>
                    <td>
                        <span class="label label-success">Success</span>
                    </td>
                    <td>
                        <ul class="list-inline s-icons">
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Dropbox" href="#">
                                    <i class="fa fa-dropbox"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Linkedin" href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                        <span><a href="#">info@example.com</a></span>
                        <span><a href="#">www.htmlstream.com</a></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="rounded-x" src="{{asset('assets/img/testimonials/img2.jpg')}}" alt="">
                    </td>
                    <td>
                        <h3><a href="#">Donec at aliquam est, a mattis mauris</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id commodo lacus. Fusce non malesuada ante. Donec vel arcu.</p>
                        <small class="hex">Joined March 2, 2014</small>
                    </td>
                    <td>
                        <span class="label label-info"> Pending</span>
                    </td>
                    <td>
                        <ul class="list-inline s-icons">
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Dropbox" href="#">
                                    <i class="fa fa-dropbox"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Linkedin" href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                        <span><a href="#">info@example.com</a></span>
                        <span><a href="#">www.htmlstream.com</a></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="rounded-x" src="{{asset('assets/img/testimonials/img3.jpg')}}" alt="">
                    </td>
                    <td>
                        <h3><a href="#">Pellentesque semper tempus vehicula</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id commodo lacus. Fusce non malesuada ante. Donec vel arcu.</p>
                        <small class="hex">Joined March 3, 2014</small>
                    </td>
                    <td>
                        <span class="label label-warning">Expiring</span>
                    </td>
                    <td>
                        <ul class="list-inline s-icons">
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Dropbox" href="#">
                                    <i class="fa fa-dropbox"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Linkedin" href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                        <span><a href="#">info@example.com</a></span>
                        <span><a href="#">www.htmlstream.com</a></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="rounded-x" src="{{asset('assets/img/testimonials/img4.jpg')}}" alt="">
                    </td>
                    <td>
                        <h3><a href="#">Alesuada fames ac turpis egestas</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id commodo lacus. Fusce non malesuada ante. Donec vel arcu.</p>
                        <small class="hex">Joined March 4, 2014</small>
                    </td>
                    <td>
                        <span class="label label-danger">Error!</span>
                    </td>
                    <td>
                        <ul class="list-inline s-icons">
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Dropbox" href="#">
                                    <i class="fa fa-dropbox"></i>
                                </a>
                            </li>
                            <li>
                                <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Linkedin" href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                        <span><a href="#">info@example.com</a></span>
                        <span><a href="#">www.htmlstream.com</a></span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>    
</div>
<!--End Table Search v2-->

@stop