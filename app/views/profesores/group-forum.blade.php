@extends('profesores.group-master')
@section('tab-content')
<div class="panel panel-profile">
    <div class="panel-body margin-bottom-50">
        
        @foreach($threads as $t)
        <div class="media media-v2">
            <a class="pull-left" href="#">
                <img class="media-object rounded-x" src="{{asset('assets/img/testimonials/img2.jpg')}}" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">
                    <strong><a href="#">{{$t->user->person->first_name.' '.$t->user->person->last_name}}</a></strong> @EvaNelson
                    <small>About an hour ago</small>
                </h4>
                <p>{{$t->description}}</p>
                <ul class="list-inline results-list pull-left">
                    <li><a href="#">25 Likes</a></li>
                    <li><a href="#">10 Share</a></li>
                </ul>    
                <ul class="list-inline pull-right">
                    <li><a href="#"><i class="expand-list rounded-x fa fa-reply"></i></a></li>
                    <li><a href="#"><i class="expand-list rounded-x fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="expand-list rounded-x fa fa-retweet"></i></a></li>
                </ul>
            </div>
        </div>    
        @endforeach
        <button type="button" class="btn-u btn-u-default btn-block">Load More</button>
    </div>
</div>
@stop