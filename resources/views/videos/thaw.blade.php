<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>{{$gameVideo['Title']}}</title>
    <style>
    .video-js {
        font-size: 18px;
    }
    .vjs-waiting .vjs-loading-spinner {
        display: none;
    }
    .video-js .vjs-slider-bar {
        background-color: #10b981;
    }
    .video-js .vjs-slider {
        position: relative;
        top: 5px;
    }
    .video-js .vjs-control-bar {
        height: 89px;
        background-color: transparent;
    }
    .vjs-volume-horizontal,
    .vjs-volume-level::before {
        position: relative;
    }
    .vjs-volume-horizontal > .vjs-slider-bar {
        background-color: #708199;
    }
    .video-js .vjs-progress-control {
        position: absolute;
        bottom: 70px;
        width: 100%;
    }
    .vjs-control-bar .vjs-fullscreen-control {
        position: absolute;
        right: 0px;
    }
    </style>
</head>
<body class="bg-black">
    
    <div class="h-full w-screen">
        <video
            id="vid1"
            class="video-js h-full w-screen"
            controls
            preload="auto"
        ></video>
    </div>
    
    <!-- videojs -->
    <script src="//vjs.zencdn.net/7.10.2/video.min.js"></script>
    <script src="{{ asset ('/js/Youtube.min.js') }}"></script>
    
    <script>

        var player = videojs('vid1', {
            techOrder: ['youtube', 'html5']
        });

        player.src('/video/vido-intro.mp4');

        player.on('ended', function() {
        
            player.src({ "type": "video/youtube", "src": "https://www.youtube.com/watch?v={{ $gameVideo['ID'] }}"});
            
            player.play();
            
            player.on('ended', function () {
                setTimeout(function() {
                window.location.href = "/";
                }, 1000);
            });
        
        });

    </script>

</body>
</html>