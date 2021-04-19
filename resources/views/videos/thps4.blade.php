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
    .vjs-waiting .vjs-loading-spinner {
        display: none;
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
        
            player.src({ "type": "video/youtube", "src": "https://www.youtube.com/watch?v={{ $thps4Video['ID'] }}"});
            
            player.play();
            
            player.on('ended', function () {
                setTimeout(function() {
                window.location.href = "http://www.thpsvido.com";
                }, 2000);
            });
        
        });

    </script>

</body>
</html>
