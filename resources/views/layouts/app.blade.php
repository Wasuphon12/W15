<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Blog Application
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blog2') }}">จัดการบทความ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('create') }}">เขียนบทความ</a>
                            </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">สมัครเป็นนักเขียน</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    สวัสดี ,{{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('create') }}">เขียนบทความ</a>
                                    <a class="dropdown-item" href="{{ route('blog2') }}">จัดการบทความ</a>
                                    <a class="dropdown-item" href="{{ route('about2') }}">เกี่ยวกับเรา</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        ออกจากระบบ
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container py-4">
            @yield('content')
        </div>
    </div>

    <!-- resources/views/layouts/app.blade.php -->
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Summernote Lite CSS & JS CDN -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
    function getYouTubeId(url) {
        if (!url) return null;
        var iframeMatch = url.match(/<iframe.*?src=["'](.*?)["']/i);
        if (iframeMatch) url = iframeMatch[1];
        var match = url.match(/(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=|shorts\/))([\w-]{11})/i);
        return match ? match[1] : null;
    }

    $(document).ready(function() {
        $('#content').summernote({
            placeholder: 'เขียนเนื้อหาบทความที่นี่...',
            tabsize: 2,
            height: 250,
            callbacks: {
                onPaste: function (e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                    var trimmed = bufferText ? bufferText.trim() : '';
                    var ytId = getYouTubeId(trimmed);
                    if (ytId) {
                        e.preventDefault();
                        var iframeHtml = '<div class="ratio ratio-16x9 my-3"><iframe src="https://www.youtube.com/embed/' + ytId + '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div><p><br></p>';
                        $('#content').summernote('pasteHTML', iframeHtml);
                        return;
                    }
                    e.preventDefault();
                    document.execCommand('insertText', false, bufferText);
                }
            }
        });

        // แก้ปัญหาลิงก์ YouTube ยุคใหม่ (?si=... หรือ /shorts/) ในช่อง Video Dialog ของ Summernote
        $(document).on('input paste change', '.note-video-url', function() {
            var $input = $(this);
            setTimeout(function() {
                var val = $input.val().trim();
                var ytId = getYouTubeId(val);
                if (ytId) {
                    $input.val('https://www.youtube.com/watch?v=' + ytId);
                    $input.closest('.note-modal').find('.note-video-btn').removeClass('disabled').prop('disabled', false);
                }
            }, 50);
        });
    });
</script>

</body>

</html>
