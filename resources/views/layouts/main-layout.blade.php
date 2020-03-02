<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <link href="/css/app.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/5d7449fda0.js" crossorigin="anonymous"></script>
    </head>
    <body>
    @guest
        <a href="/" id="user-bubble" style="background: url('');background-position: center;
    background-size: cover;"></a>    
    @else
        <a href="/" id="user-bubble" style="background: url('{{ Auth::user()->image_url }}');background-position: center;
    background-size: cover;"></a>   
    @endguest
    
        <div id="main-layout">
            <div class="side-menu">
                <a href="/" class="logo">
                    Famoz
                </a>
                <div class="links">
                    @guest
                        <a href="/login">
                            <i class="fab fa-buffer"></i>
                            <span>{{ __('feed') }}</span>
                        </a>      
                    @else
                        <a href="/">
                            <i class="fab fa-buffer"></i>
                            <span>{{ __('feed') }}</span>
                        </a>
                    @endguest
                    <a href="/discover"> 
                        <i class="fas fa-tv"></i>
                        <span>{{ __('discover') }}</span>
                    </a>
                    <a href="/upload/video" class="upload-btn">
                        <i class="fas fa-plus-square"></i>
                        <span>{{ __('upload') }}</span>
                    </a>
                    <a href="/trending">
                        <i class="fas fa-fire"></i>
                        <span>{{ __('trending') }}</span>
                    </a>
                    @guest
                        <a href="/login">
                            <i class="fas fa-user-circle"></i>
                            <span>{{ __('settings') }}</span>
                        </a>      
                    @else
                        <a href="/{{ Auth::user()->username }}">
                            <i class="fas fa-user-circle"></i>
                            <span>{{ __('settings') }}</span>
                        </a>
                    @endguest
                </div>
            </div>
            <div class="content-area">
                @yield('content')
                
            </div>
        </div>
        </div>
    </body>
</html>
