<aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0">
    <div class="py-4 text-black-1E1E1E">
        <div class="py-2 px-2 flex justify-center items-center">
            <a class="font-bold text-black-1E1E1E" href="#">
                <img src={{asset('img/logo.png')}} alt="logo" class="h-8 w-auto">
            </a>
        </div>
        <ul class="mt-10">
            <li class="relative px-6 py-3">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center w-full text-sm font-semibold text-blue-06283d transition-colors duration-300 hover:opacity-70">
                    <i class="fi fi-rs-dashboard"></i>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a href="{{ route('mobil') }}" class="inline-flex items-center w-full text-sm font-semibold text-blue-06283d transition-colors duration-300 hover:opacity-70">
                    <i class="fi fi-rs-cars"></i>
                    <span class="ml-4">Mobil</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a href="{{ route('users') }}" class="inline-flex items-center w-full text-sm font-semibold text-blue-06283d transition-colors duration-300 hover:opacity-70">
                    <i class="fi fi-rs-users"></i>
                    <span class="ml-4">Users</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a href="{{ route('peminjaman') }}" class="inline-flex items-center w-full text-sm font-semibold text-blue-06283d transition-colors duration-300 hover:opacity-70">
                    <i class="fi fi-rs-time-past"></i>
                    <span class="ml-4">Riwayat Peminjaman</span>
                </a>
            </li>
        </ul>        
    </div>
</aside>