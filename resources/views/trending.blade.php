@extends('layouts/main-layout')

@section('title', 'Page Title')

@section('content')
    <section id="filter">
        <div class="filter-selection">
            <label>{{ __('genre') }}</label>
            <select>
                <option>All</option>
                <option>Reggaeton</option>
                <option>Dembow</option>
                <option>Trap</option>
            </select>
        </div>
        <div class="filter-selection">
            <label>{{ __('date') }}</label>
            <select>
                <option>{{ __('Today') }}</option>
                <option>{{ __('This Week') }}</option>
                <option>{{ __('This Month') }}</option>
            </select>
        </div>
    </section>
    <div id="trending-content">
        <a href="/video/baje-con-trenza" class="home-jumbo">
            <div class="title">

            </div>
        </a>
        <div class="row">
            <div class="col-md-6">
                <h2>{{ __('trending') }}</h2>
                <div class="trending-list">
                    <div class="video">
                        <div class="number">01</div>
                        <div class="video-image"></div>
                        <div class="info">
                            <div class="title">Baje Con Trenza Remix</div>
                            <div class="artist">El Cherry Scom, Kiko El Crazy, Ozuna
                            </div>
                        </div>
                    </div>
                    <div class="video">
                        <div class="number">02</div>
                        <div class="video-image"></div>
                        <div class="info">
                            <div class="title">Baje Con Trenza Remix</div>
                            <div class="artist">El Cherry Scom, Kiko El Crazy, Ozuna
                            </div>
                        </div>
                    </div>
                    <div class="video">
                        <div class="number">03</div>
                        <div class="video-image"></div>
                        <div class="info">
                            <div class="title">Baje Con Trenza Remix</div>
                            <div class="artist">El Cherry Scom, Kiko El Crazy, Ozuna
                            </div>
                        </div>
                    </div>
                    <div class="video">
                        <div class="number">04</div>
                        <div class="video-image"></div>
                        <div class="info">
                            <div class="title">Baje Con Trenza Remix</div>
                            <div class="artist">El Cherry Scom, Kiko El Crazy, Ozuna
                            </div>
                        </div>
                    </div>
                    <div class="video">
                        <div class="number">05</div>
                        <div class="video-image"></div>
                        <div class="info">
                            <div class="title">Baje Con Trenza Remix</div>
                            <div class="artist">El Cherry Scom, Kiko El Crazy, Ozuna
                            </div>
                        </div>
                    </div>
                    <div class="video">
                        <div class="number">06</div>
                        <div class="video-image"></div>
                        <div class="info">
                            <div class="title">Baje Con Trenza Remix</div>
                            <div class="artist">El Cherry Scom, Kiko El Crazy, Ozuna
                            </div>
                        </div>
                    </div>
                    <div class="video">
                        <div class="number">07</div>
                        <div class="video-image"></div>
                        <div class="info">
                            <div class="title">Baje Con Trenza Remix</div>
                            <div class="artist">El Cherry Scom, Kiko El Crazy, Ozuna
                            </div>
                        </div>
                    </div>
                    <div class="video">
                        <div class="number">08</div>
                        <div class="video-image"></div>
                        <div class="info">
                            <div class="title">Baje Con Trenza Remix</div>
                            <div class="artist">El Cherry Scom, Kiko El Crazy, Ozuna
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 editors-list">
                <h2>{{ __('editors choice') }}</h2>
                <div class="box-user">
                </div>
                <div class="box-user">
                </div>
                <div class="box-user">
                </div>
                <div class="box-user">
                </div>
            </div>
            <div class="col-md-3 ad-space">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/6bc5b433427407.56aa8c7f96f3c.jpg">
            </div>
        </div>
    </div>
    
@endsection