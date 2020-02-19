@extends('layouts/main-layout')

@section('title', 'Page Title')

@section('content')
    
    <div id="profile-content">
        <section id="top-section">
            <div class="user-image">
                <img src="https://i1.sndcdn.com/avatars-000720436693-hfwlc7-t500x500.jpg">
            </div>
            <div class="profile-information">
                <div class="user-title">
                    <h3>@ozuna</h3>
                    <h5>Juan Carlos Ozuna Rosado</h5>
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
                        OZUNA 🇵🇷🌎🇩🇴🧸
                        N I B I R U ☄️☄️
                        MANAGER @rebecaleon
                        orcd.co/ozuna100preguntas/youtube
                    </p>
                </div>
            </div>
        </section>
        <section id="cast-section"> 
            <div class="row">
                <div class="col-sm-3 col-md-4">
                    <h3>dembowBaje Contrenza - El Cherry Scom Ft. Ozuna, Kiko El Crazy</h3>
                </div>
                <div class="col-sm-3 col-md-2">
                    <h6>Vote</h6>
                    <div class="vote-btn">
                        <i class="fas fa-heart"></i>
                    </div>

                </div>
                <div class="col-sm-12 col-md-6">
                    <h6>Crew</h6>
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