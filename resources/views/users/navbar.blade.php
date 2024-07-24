<nav id="navbar" class="flex flex-wrap items-center justify-between w-full py-2 px-5 2xl:px-20 md:px-10 md:py-1 bg-gray-900 mt-0 z-10 top-0">
    <div>
        <a href="{{ url('/users/home_login') }}" class="flex items-center no-underline transform duration-300 hover:no-underline hover:opacity-70">
            <img src={{asset('img/logo.png')}} alt="logo" class="h-8 w-auto">
        </a>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer xl:hidden block text-gray-200 shadow-lg" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>        
    <div class="hidden bg-gray-900 md:bg-gray-900 w-full xl:flex md:items-center md:w-auto" id="menu">
        <ul class="pt-4 md:flex md:justify-between md:pt-0 text-sm text-gray-200 font-inter font-semibold">
            <li>
                <a href="{{ url('/users/home_login') }}#cta" class="xl:p-4 md:p-2 py-2 uppercase block no-underline duration-300 transform hover:opacity-70 hover:border-b-2 hover:border-gray-200">Beranda</a>
            </li>
            <li>
                <a href="{{ url('/users/home_login') }}#tentang" class="xl:p-4 md:p-2 py-2 uppercase block no-underline duration-300 transform hover:text-opacity-70 hover:border-b-2 hover:border-gray-200">Tentang Kami</a>
            </li>
            <li>
                <a href="{{ url('/users/home_login') }}#mobil" class="xl:p-4 md:p-2 py-2 uppercase block no-underline duration-300 transform hover:text-opacity-70 hover:border-b-2 hover:border-gray-200">Mobil</a>
            </li>
            <li class="group relative dropdown">
                <button id="dropdown-button" data-dropdown-toggle="dropdown" class="uppercase relative inline-flex items-center xl:p-4 md:p-2 py-2 no-underline duration-300 transform hover:opacity-70 hover:border-b-2 hover:border-gray-900" type="button">
                    <i class="fi fi-ss-user text-gray-200"></i> &nbsp; {{auth()->user()->username}}
                    <svg class="w-3 h-3 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown-menu" class="group-hover:block absolute z-10 hidden bg-gray-900 divide-y divide-white rounded-lg shadow w-auto">
                    <ul class="top-0 py-2 text-sm text-blue-06283d font-inter font-semibold" aria-labelledby="dropdownDefaultButton">
                        <li class="px-4 py-2">
                            <a href="{{ route('profil') }}" class="xl:p-4 md:p-2 py-2 uppercase block no-underline duration-300 transform hover:opacity-70 hover:border-b-2 hover:border-gray-900">Profil</a>
                        </li>
                        <li class="px-4 py-2">
                            <a href="{{ route('riwayat') }}" class="xl:p-4 md:p-2 py-2 uppercase block no-underline duration-300 transform hover:opacity-70 hover:border-b-2 hover:border-gray-900">Riwayat Peminjaman</a>
                        </li>
                        <li class="px-4 py-2">
                            <a href="{{ url('logout') }}" class="px-2 py-2 uppercase block no-underline duration-300 transform rounded-lg bg-transparent border-2 border-gray-200 hover:bg-gray-200 hover:text-gray-900">Logout</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>

{{-- Mobile Menu --}}
<script type="text/javascript">
    const button = document.querySelector('#menu-button');
    const menu = document.querySelector('#menu');
    button.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    });
</script>