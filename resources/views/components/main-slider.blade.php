<div
  x-data="configureLoading()"
  class="mb-12 mx-auto rounded-md"
>    
  <div 
    x-show="!loaded"
    class="animate-pulse mb-12 mx-auto rounded-md bg-gray-700"
    style="height: 600px;"
  > 
  {{-- Loading state --}} 
  </div>

  <div x-show="loaded">
    <video
      id="vid1"
      class="video-js"
      controls
      preload="metadata"
      height="600px"
      width="1230px"
      data-setup='{ 
      "techOrder": ["youtube"], 
      "sources": [{ "type": "video/youtube", 
      "src": "https://www.youtube.com/watch?v=zY5nYmTUfnQ"}], 
      "fluid": true 
      }'
    >
    </video>
  </div>
</div>

<script>
  /* 
  const player = function() {
    autoplay: 'muted',
    controls: true,
    fluid: true,
    load: true
  }
  */

    window.configureLoading = function() {
        return {
          loaded: true,
            // Use Video JS https://docs.videojs.com/html5#load to wait for loading and then change the loaded to true
        }
    }
</script>


