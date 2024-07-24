<header class="z-10 py-4 bg-white shadow-md">
    <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600">
        <!-- Search input -->
        <div class="flex justify-center flex-1 lg:mr-32">
            <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                <div class="absolute inset-y-0 flex items-center px-2">
                    <i class="fi fi-rs-search text-base text-blue-06283d"></i>
                </div>
                <input class="w-full py-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="" aria-label="Search" />
            </div>
        </div>
        <ul class="flex items-center flex-shrink-0 space-x-6">
            <li class="group relative dropdown">
                <button id="dropdown-button" data-dropdown-toggle="dropdown" class="relative inline-flex items-center xl:p-4 md:p-2 py-2 no-underline duration-300 transform hover:text-red-500" type="button">
                    <h2 class="font-sans font-semibold text-center text-black text-lg duration-300 transform hover:text-red-500">
                        {{auth()->user()->username}}
                    </h2>
                    <svg class="w-3 h-3 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown-menu" class="group-hover:block absolute z-10 hidden shadow w-auto bg-white">
                    <ul class="top-0 py-2 px-5 text-sm text-blue-06283d font-inter font-semibold" aria-labelledby="dropdownDefaultButton">
                        @auth
                        <a href="{{ url('logout') }}" class="group relative flex w-auto justify-center rounded-full bg-red-500 duration-200 hover:opacity-70 text-white font-semibold text-sm px-2 py-1">
                            Logout
                        </a>
                        @endauth
                    </ul>
                </div>
            </li>            
        </ul>
    </div>
</header>