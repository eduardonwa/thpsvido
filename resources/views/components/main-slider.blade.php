<div
  x-data="configureLoading()"
  class="mb-12 mx-auto rounded-md relative bg-gray-900 h-full shadow-xl"
>    
  <div 
    x-show="!loaded"
    class="animate-pulse mb-12 mx-auto rounded-md bg-gray-700"
    style="height: 600px;"
  > 
  {{-- Loading state --}} 
  </div>

  <div 
    x-show="loaded"
  >

  <div
    class="overflow-hidden text-sm px-8 lg:w-96
          flex flex-col justify-center items-start space-y-1 md:space-y-8
          bg-gradient-to-r from-black h-full w-1/2 absolute z-10" 
  >
    <h1 class="font-bold text-md sm:text-lg lg:text-2xl tracking-wider">THPS4 Rewind: Summer of 2003 Unreleased (Edited by Maxfli)</h1>

    <a
      class="border rounded-md p-2 md:w-32 flex items-center justify-center
          bg-black font-bold border-gray-700 hover:bg-green-500 hover:shadow-xl transition ease-in-out"
      href="#"
    >
    <svg
      class="w-6 h-6"
      viewBox="0 0 20 20" 
      xmlns="http://www.w3.org/2000/svg"
    >
      <g id="Page-1" stroke="none" stroke-width="1" fill="gainsboro" fill-rule="evenodd">
        <g id="icon-shape">
          <polygon id="Rectangle-161" points="4 4 16 10 4 16"></polygon>
        </g>
      </g>
    </svg>
      Play Now
    </a>

  </div> {{-- Description overlay --}}

    <video
      id="vid1"
      class="video-js"
      controls
      preload="metadata"
      height="600px"
      poster="img/thpsvido-logo.svg"
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


