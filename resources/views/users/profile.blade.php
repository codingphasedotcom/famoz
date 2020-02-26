@extends('layouts/main-layout')

@section('title', 'Page Title')

@section('content')
    
    <div id="profile-content">
        <section id="top-section">
            <div class="user-image">
                <img loading="lazy" src="{{$user->image_url}}">
            </div>
            <div class="profile-information">
                <div class="user-title">
                    <h3>@
                    {{$user->username}}</h3>
                    <h5>{{$user->full_name}}</h5>
                </div>
                <div class="user-stats">
                    <div class="stat">
                        <div class="numbers">23</div>
                        <div class="stat-title">Posts</div>
                    </div>
                    <div class="stat">
                        <div class="numbers">1M</div>
                        <div class="stat-title">Followers</div>
                    </div>
                    <div class="stat">
                        <div class="numbers">32</div>
                        <div class="stat-title">Following</div>
                    </div>
                </div>
                <div class="profile-text">
                    <p>
                        {{$user->description}}
                    </p>
                </div>
            </div>
        </section>
        <section id="profile-tabs">
            <div class="tab-menu">
                <div class="tab active">Videos</div>
                <div class="tab">Status</div>
            </div>
            <div class="tab-content">
                <section class="tab video-feed active">
                    <div class="row">
                        <div class="col-md-12 col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="video-post">
                                        <a href="/video/baje-con-trenza">
                                            <img loading="lazy" src="https://www.rollingstone.com/wp-content/uploads/2019/12/Ozuna-1.jpg">
                                        </a>
                                        <a href="/video/baje-con-trenza" class="video-title">Baje Con Trenza</a>
                                        <span class="post-stats">12,988 views testing - <i class="fas fa-heart"></i></span>
                                        
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="video-post">
                                        <a href="/video/baje-con-trenza">
                                            <img loading="lazy" src="https://www.rollingstone.com/wp-content/uploads/2019/12/Ozuna-1.jpg">
                                        </a>
                                        <a href="/video/baje-con-trenza" class="video-title">Baje Con Trenza</a>
                                        <span class="video-info">12,988 views</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="video-post">
                                        <a href="/video/baje-con-trenza">
                                            <img loading="lazy" src="https://www.rollingstone.com/wp-content/uploads/2019/12/Ozuna-1.jpg">
                                        </a>
                                        <a href="/video/baje-con-trenza" class="video-title">Baje Con Trenza</a>
                                        <span class="video-info">12,988 views</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="video-post">
                                        <a href="/video/baje-con-trenza">
                                            <img loading="lazy" src="https://www.rollingstone.com/wp-content/uploads/2019/12/Ozuna-1.jpg">
                                        </a>
                                        <a href="/video/baje-con-trenza" class="video-title">Baje Con Trenza</a>
                                        <span class="video-info">12,988 views</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="video-post">
                                        <a href="/video/baje-con-trenza">
                                            <img loading="lazy" src="https://www.rollingstone.com/wp-content/uploads/2019/12/Ozuna-1.jpg">
                                        </a>
                                        <a href="/video/baje-con-trenza" class="video-title">Baje Con Trenza</a>
                                        <span class="video-info">12,988 views</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="video-post">
                                        <a href="/video/baje-con-trenza">
                                            <img loading="lazy" src="https://www.rollingstone.com/wp-content/uploads/2019/12/Ozuna-1.jpg">
                                        </a>
                                        <a href="/video/baje-con-trenza" class="video-title">Baje Con Trenza</a>
                                        <span class="video-info">12,988 views</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="video-post">
                                        <a href="/video/baje-con-trenza">
                                            <img loading="lazy" src="https://www.rollingstone.com/wp-content/uploads/2019/12/Ozuna-1.jpg">
                                        </a>
                                        <a href="/video/baje-con-trenza" class="video-title">Baje Con Trenza</a>
                                        <span class="video-info">12,988 views</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-12 col-lg-3">
                            <div class="video-post">
                                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/6bc5b433427407.56aa8c7f96f3c.jpg">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="tab status-feed">
                    <div class="row">
                        <div class="col-md-12 col-lg-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="video-post">
                                        <p>Venmo hexagon tacos shabby chic, 8-bit viral vegan. Ramps bespoke four loko brunch pickled listicle polaroid single-origin coffee yr thundercats master cleanse authentic banjo vegan. Semiotics distillery man bun iPhone wayfarers, cray lo-fi freegan. Bitters franzen sriracha, subway tile fixie tattooed VHS single-origin coffee mustache church-key blog YOLO edison bulb. Banh mi unicorn literally forage before they sold out chicharrones selvage pinterest schlitz celiac skateboard butcher artisan selfies.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-3">
                            <div class="video-post">
                                <span class="post-stats">12,988 views</span>
                            </div>
                        </div>
                    </div>
                </section>
                
            </div>
        </section>
    </div>
    
@endsection