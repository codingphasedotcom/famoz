@extends('layouts/main-layout')

@section('title', 'Page Title')

@section('content')
    
    <div id="media-content">
        <section id="top-section">
            <div class="row">
                <div class="col-md-9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$video->youtube_id}}?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <span class="video-title">{{$video->title}}</span>
                </div>
                <div class="col-md-3 ad-space d-none d-md-block d-lg-block d-xl-block">
                    <img src="/img/160x600ad.jpeg">
                </div>
            
            </div>
        </section>
        <section id="info-section"> 
            <div class="row">
                <div class="col-sm-6 col-md-2" style="display:flex;justify-content:center; align-items:center;flex-direction: column;">
                    <a href="/ozuna" class="profile-link">Ozuna</a>
                </div>
                <div class="col-sm-3 col-md-2" style="display:flex;justify-content:center; align-items:center;flex-direction: column;">
                    {{-- <h6>Vote</h6> --}}
                    
                    @if ($liked)
                        <a href="/video/{{$video->id}}/dislike" class="vote-btn  active">
                            <i class="fas fa-fire-alt"></i>
                         </a>
                    @else
                        <a href="/video/{{$video->id}}/like" class="vote-btn">
                            <i class="fas fa-fire-alt"></i>
                         </a>
                    @endif
                    
                </div>
                <div class="col-sm-3 col-md-2" style="display:flex;justify-content:center; align-items:center;flex-direction: column;">
                    {{-- <h6>Repost</h6> --}}
                    @if ($reposted)
                        <a href="/video/{{$video->id}}/norepost" class="repost-btn active"><i class="fas fa-retweet"></i></a>
                    @else
                        <a href="/video/{{$video->id}}/repost" class="repost-btn"><i class="fas fa-retweet"></i></a>
                    @endif
                    
                </div>
                <div class="col-sm-12 col-md-6">
                    <h6>{{ __('crew') }}</h6>
                    <div class="cast-members">
                        <div class="member">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="user-image">
                            <span class="title">Artist</span>
                        </div>
                        <div class="member">
                            <img src="https://tinyfac.es/data/avatars/7D3FA6C0-83C8-4834-B432-6C65ED4FD4C3-500w.jpeg" class="user-image">
                            <span class="title">Artist</span>
                        </div>
                        <div class="member">
                            <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BNTk2OGU4NzktODhhOC00Nzc2LWIyNzYtOWViMjljZGFiNTMxXkEyXkFqcGdeQXVyMTE1NTQwOTk@._V1_UY256_CR12,0,172,256_AL_.jpg" class="user-image">
                            <span class="title">Producer</span>
                        </div>
                        <div class="member">
                            <img src="https://tinyfac.es/data/avatars/AEF44435-B547-4B84-A2AE-887DFAEE6DDF-200w.jpeg" class="user-image">
                            <span class="title">Director</span>
                        </div>
                        <div class="member">
                            <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMjAwMzc5OTEzOF5BMl5BanBnXkFtZTgwMDc5ODU3MTE@._V1_UX172_CR0,0,172,256_AL_.jpg" class="user-image">
                            <span class="title">Model</span>
                        </div>
                        <div class="member">
                            <img src="https://tinyfac.es/data/avatars/8B510E03-96BA-43F0-A85A-F38BB3005AF1-500w.jpeg" class="user-image">
                            <span class="title">Model</span>
                        </div>
                        <div class="member">
                            <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMjAwMzc5OTEzOF5BMl5BanBnXkFtZTgwMDc5ODU3MTE@._V1_UX172_CR0,0,172,256_AL_.jpg" class="user-image">
                            <span class="title">Model</span>
                        </div>
                        <div class="member">
                            <img src="https://tinyfac.es/data/avatars/8B510E03-96BA-43F0-A85A-F38BB3005AF1-500w.jpeg" class="user-image">
                            <span class="title">Model</span>
                        </div>
                        <div class="member">
                            <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMjAwMzc5OTEzOF5BMl5BanBnXkFtZTgwMDc5ODU3MTE@._V1_UX172_CR0,0,172,256_AL_.jpg" class="user-image">
                            <span class="title">Model</span>
                        </div>
                        <div class="member">
                            <img src="https://tinyfac.es/data/avatars/8B510E03-96BA-43F0-A85A-F38BB3005AF1-500w.jpeg" class="user-image">
                            <span class="title">Model</span>
                        </div>
                    </div>
                </div>
                
            </div> 
        </section>
        
        <div class="row">
            <div class="col-md-6 order-sm-2 order-md-1">
                <h5>Comments</h5>
                <div class="comments">
                    <div class="comment">
                        <div class="user-image"></div>
                        <div class="info">
                            <div class="name">Billy</div>
                            <div class="message">El Cherry Scom, Kiko El Crazy, Ozuna
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-sm-1 order-md-2">
                <h5>More From This Artist</h5>
                <div class="editors-list">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="box-user">
                                </div>
                                <div class="box-user">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-user">
                                </div>
                                <div class="box-user">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>More From This Artist</h5>
                <div class="editors-list">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="box-user">
                                </div>
                                <div class="box-user">
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="box-user">
                                </div>
                                <div class="box-user">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection