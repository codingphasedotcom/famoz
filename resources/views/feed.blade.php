@extends('layouts/main-layout')

@section('title', 'Page Title')

@section('content')
    <div id="feed-content">
        <div class="row">
            <div class="col-md-6 col-xl-8">
                <div class="feed-list">
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-lg-12 col-xl-6">
                        <div class="post video">
                            <a href="/video/{{$post->post_id}}">
                                <img src="{{$post->post_image_url}}" class="video-image">
                            </a>
                            <div class="info">
                                <div class="user-image">
                                    <a href="/{{$post->user_username}}">
                                        <img src="{{$post->user_image_url}}">
                                    </a>
                                </div>
                                <div>
                                    <div class="title">{{$post->title}}</div>
                                    <span class="post-stats"><i class="fas fa-eye"></i> {{$post->views}} 
                                    <i class="fas fa-fire-alt" aria-hidden="true"></i>{{$post->likes_total}} 
                                    <i class="fas fa-retweet" aria-hidden="true"></i> {{$post->reposts_total}}
                                    </span>
                                    {{-- <div class="artist">El Cherry Scom, Kiko El Crazy, Ozuna
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                    {{-- <div class="post status">
                        <p>
                            Lorem ipsum dolor amet blog pinterest cred, fingerstache live-edge lomo woke cliche vinyl chambray locavore. Fam umami subway tile paleo food truck drinking vinegar offal four loko bitters marfa. Pickled beard readymade, 3 wolf moon shoreditch schlitz actually fingerstache activated charcoal disrupt church-key adaptogen. Keffiyeh shoreditch 8-bit edison bulb poke cloud bread. Bespoke poke activated charcoal shoreditch YOLO yuccie cold-pressed cornhole schlitz put a bird on it flannel.
                        </p>
                        <div class="info">
                            <div class="user-image">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg">
                            </div>
                            <div>
                                <div class="title">Baje Con Trenza Remix</div>
                                <span class="post-stats"><i class="fas fa-eye"></i> 121,988 <i class="fas fa-fire-alt" aria-hidden="true"></i> 1.5k <i class="fas fa-retweet" aria-hidden="true"></i> 1.2k</span>
                                <div class="artist">El Cherry Scom
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post video">
                        <div class="video-image"></div>
                        <div class="info">
                            <div class="user-image">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg">
                            </div>
                            <div>
                                <div class="title">Baje Con Trenza Remix</div>
                                <span class="post-stats"><i class="fas fa-eye"></i> 121,988 <i class="fas fa-fire-alt" aria-hidden="true"></i> 1.5k <i class="fas fa-retweet" aria-hidden="true"></i> 1.2k</span>
                                <div class="artist">El Cherry Scom, Kiko El Crazy, Ozuna
                                </div>
                            </div>
                        </div>
                    </div> --}}
                {{ $posts->links() }}
                </div>
            </div>
            <div class="col-md-2 notifications-list">
                <h2>{{ __('notifications') }}</h2>
                <div class="box-user">
                </div>
                <div class="box-user">
                </div>
                <div class="box-user">
                </div>
                <div class="box-user">
                </div>
            </div>
            <div class="col-xl-2 ad-space">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/6bc5b433427407.56aa8c7f96f3c.jpg">
            </div>
        </div>
    </div>
    
@endsection