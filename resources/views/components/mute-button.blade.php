<span
    class="mute-control bg-gray-500 hover:bg-gray-900 rounded-full 
            hidden sm:block relative cursor-pointer transition ease-in-out"
    x-data="{ active: false }"
    x-on:click="active = ! active " :class="{ 'bg-indigo-500' : active }"
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
</span>