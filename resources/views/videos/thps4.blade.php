<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>{{$thps4Video['Title']}}</title>
    <style>
    .video-js .vjs-big-play-button {
        display: none;
    }
    .vjs-waiting .vjs-loading-spinner {
        display: none;
    }
    </style>
</head>
<body class="bg-black">

    <div class="h-full w-screen pt-20">
        <video
            id="vid1"
            class="video-js"
        >
      </video>

        <div
            x-data="{close: true}"
            x-show="close"
            class="text-center"
        >
            <p class="text-sm text-gray-500">
              Mute is enabled by default, sorry for that
            </p>
            <p 
                x-on:click="close = false"
                class="text-green-500 text-sm cursor-pointer"
            >
                close
            </p>
        </div> {{-- inconveniences message --}}

    </div>
    
    <!-- videojs -->
    <script src="//vjs.zencdn.net/7.10.2/video.min.js"></script>
    <script src="{{ asset ('/js/Youtube.min.js') }}"></script>
    
    <script>
        var player = videojs('vid1', { 
            "techOrder": ["youtube"], 
            "sources": [{ "type": "video/youtube", 
            "src": "http://www.youtube.com/watch?v={{ $thps4Video['ID'] }}"}],
            "controls": true,
            "fluid": true,
            "autoplay": true
        });
        player.ready(function() {
            setTimeout(function() {
                player.autoplay('muted');
                player.volume(0.5);
            }, 2000);
        });
    </script>

</body>
</html>