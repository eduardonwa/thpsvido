<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
    .video-js .vjs-big-play-button {
        display: none;
    }
    .vjs-waiting .vjs-loading-spinner {
                display: none;
    }
    </style>
</head>
<body>

    <div>
        <video
            id="vid1"
            class="video-js"
            controls
            preload="auto"
            data-setup='{ 
                "techOrder": ["youtube"], 
                "sources": [{ "type": "video/youtube", 
                "src": "https://www.youtube.com/watch?v=zY5nYmTUfnQ"}], 
                "fluid": true,
                "autoplay": true
            }'
        >
      </video>
    </div>

        <!-- videojs -->
        <script src="//vjs.zencdn.net/7.10.2/video.min.js"></script>
        <script src="{{ asset ('/js/Youtube.min.js') }}"></script>
    
        <script>
            var player = videojs('vid1');
            player.ready(function() {
                setTimeout(function() {
                    player.autoplay('muted');
                    player.fluid('true')
                }, 2000);
            });
        </script>
</body>
</html>