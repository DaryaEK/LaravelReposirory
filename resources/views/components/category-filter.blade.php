{{--@props (['categories'])--}}

{{--<div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">--}}

{{--   <div x-data="{open: false}">--}}
{{--       <button @click="open = ! open" @click.away="open = false"--}}
{{--               class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold"--}}
{{--       >Category--}}

{{--           <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"--}}
{{--                height="22" viewBox="0 0 22 22">--}}
{{--               <g fill="none" fill-rule="evenodd">--}}
{{--                   <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">--}}
{{--                   </path>--}}
{{--                   <path fill="#222"--}}
{{--                         d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>--}}
{{--               </g>--}}
{{--           </svg>--}}
{{--       </button>--}}




{{--        <div show="open" class="absolute mt-5 bg-gray-100 w-full rounded-xl max-h-60 overflow-x-hidden overflow-y-scroll">--}}
{{--            @foreach($categories as $category)--}}
{{--                <a href="/posts/category/{{ $category -> slug }}"--}}
{{--                    class="flex bg-gray-100 hover:bg-gray-400 hover:text-white"--}}
{{--                    focus:bg-gray-500 focus:text-white py-2 pl-3 pr-9 text-sm rounded-xl
{{--                >{{ $category -> name }}</a>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--   </div>--}}
{{--</div>--}}