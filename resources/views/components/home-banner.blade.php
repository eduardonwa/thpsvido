<div
  class="mb-12 rounded-md relative bg-gray-900 h-full shadow-xl"
>    

  <div
    class="overflow-hidden text-sm px-8 lg:w-96
          flex flex-col justify-center items-start space-y-1 md:space-y-8
          bg-gradient-to-r from-black h-full w-1/2 absolute z-10" 
  >
    <h1 class="font-bold text-md sm:text-lg lg:text-2xl tracking-wider">Phunky Phresh</h1>

    <x-play-now-button/>
 
    <x-mute-button/>

  </div> {{-- Description overlay --}}

  <video
    id="vid1"
    class="video-js"
  >
  </video>

</div>

<script>  
  var player = videojs('vid1', { 
    "techOrder": ["youtube"], 
    "sources": [
      { 
        "type": "video/youtube", 
        "src": "https://www.youtube.com/watch?v=0n23qfZawlw"
      }
    ], 
    "aspectRatio": '13:5',
    "poster": '/img/thpsvido-logo.svg'
  })

  player.ready(function() {
    player.autoplay('muted');
  });

  player.on('ended', function() {
    player.poster('/img/thpsvido-logo.svg');
    /* .video-js.vjs-ended .vjs-poster { display: block; } */
  });

  const muteButton = document.querySelector('.mute-control');
  muteButton.addEventListener('click', function() {
      var video = videojs("vid1").player();
      var muted = video.muted();
      
      if (muted == true) {
          video.muted(false);
      } else {
          video.muted(true);
      }
  });
</script>


