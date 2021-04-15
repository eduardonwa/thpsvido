<div
  class="mb-12 mx-auto rounded-md relative bg-gray-900 h-full shadow-xl"
>    

  <div
    class="overflow-hidden text-sm px-8 lg:w-96
          flex flex-col justify-center items-start space-y-1 md:space-y-8
          bg-gradient-to-r from-black h-full w-1/2 absolute z-10" 
  >
    <h1 class="font-bold text-md sm:text-lg lg:text-2xl tracking-wider">THPS4 Rewind: Summer of 2003 Unreleased (Edited by Maxfli)</h1>

    <a
      class="border rounded-md p-2 md:w-32 flex items-center justify-center mb-4
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

    <a
      class="mute-control bg-gray-500 hover:bg-indigo-500 rounded-full border 
              hidden sm:block relative cursor-pointer"
    >
      <svg
        class="w-7 h-7 p-1" 
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
      >
        <g id="Page-1" stroke="none" stroke-width="1" fill="white" fill-rule="evenodd">
          <g id="icon-shape">
            <path d="M7,7 L3,7 L3,13 L7,13 L12,18 L12,2 L7,7 Z M15.5355339,13.5355339 C16.4403559,12.6307119 17,11.3807119 17,10 C17,8.61928813 16.4403559,7.36928813 15.5355339,6.46446609 L14.1213203,7.87867966 C14.6642136,8.42157288 15,9.17157288 15,10 C15,10.8284271 14.6642136,11.5784271 14.1213203,12.1213203 L15.5355339,13.5355339 L15.5355339,13.5355339 Z" id="Combined-Shape"></path>
          </g>
        </g>
      </svg>
    </a>

  </div> {{-- Description overlay --}}

  <video
    id="vid1"
    class="video-js"
    autoplay="true"
    preload="auto"
    height="600px"
    width="1230px"
  >
  </video>

</div>

<script src="//vjs.zencdn.net/7.10.2/video.min.js"></script>
<script src="{{ asset ('/js/Youtube.min.js') }}"></script>

<script>  
  var player = videojs('vid1', { 
    "techOrder": ["youtube"], 
    "sources": [{ "type": "video/youtube", 
    "src": "https://www.youtube.com/watch?v=zY5nYmTUfnQ"}], 
    "fluid": true,
    "autoplay": true,
  })
  player.ready(function() {

      setTimeout(function() {
          player.autoplay('muted');
      }, 1000);
  });
</script>


