@extends('users/layout_user')
@section('content')

<nav id="navbar" class="flex flex-wrap items-center justify-between w-full py-2 px-5 2xl:px-20 md:px-10 md:py-1 bg-gray-900 mt-0 z-10 top-0">
    <div>
        <a href="{{ url('/') }}" class="flex items-center no-underline transform duration-300 hover:no-underline hover:opacity-70">
            <img src={{asset('img/logo.png')}} alt="logo" class="h-8 w-auto">
        </a>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer xl:hidden block text-gray-900 shadow-lg" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>        
    <div class="hidden bg-gray-900 md:bg-gray-900 w-full xl:flex md:items-center md:w-auto" id="menu">
        <ul class="pt-4 md:flex md:justify-between md:pt-0 text-sm text-gray-200 font-inter font-semibold">
            <li>
                <a href="#cta" class="xl:p-4 md:p-2 py-2 uppercase block no-underline duration-300 transform hover:opacity-70 hover:border-b-2 hover:border-gray-200">Beranda</a>
            </li>
            <li>
                <a href="#tentang" class="xl:p-4 md:p-2 py-2 uppercase block no-underline duration-300 transform hover:text-opacity-70 hover:border-b-2 hover:border-gray-200">Tentang Kami</a>
            </li>
            <li>
                <a href="#mobil" class="xl:p-4 md:p-2 py-2 uppercase block no-underline duration-300 transform hover:text-opacity-70 hover:border-b-2 hover:border-gray-200">Mobil</a>
            </li>
        </ul>
        <ul class="pt-4 md:flex md:justify-between md:pt-0 text-sm text-gray-200 font-inter font-semibold text-center">
            <li>
                <a href="{{ url('login') }}" class="px-2 py-2 uppercase block no-underline duration-300 transform rounded-lg bg-transparent border-2 border-gray-200 hover:bg-gray-200 hover:text-gray-900">Login</a>
            </li>
        </ul>
    </div>
</nav>

<section id="cta" class="overflow-hidden bg-gray-200 sm:grid sm:grid-cols-2">
    <div class="p-8 md:p-12 lg:px-16 lg:py-24 justify-center items-center flex">
        <div class="mx-auto max-w-xl md:text-left text-center">
            <h2 class="text-2xl font-bold text-gray-800 md:text-3xl">
                Jasa Rental Mobil Wilayah Bali
            </h2>
            <p class="text-gray-800/50 my-8 block md:text-base text-sm">
                Mencari layanan sewa mobil yang dapat diandalkan? Berkendara penuh gaya dengan kendaraan kami yang 
                terjangkau dan berkualitas tinggi. Pesan sekarang dan berangkat dengan mudah, aman dan nyaman!
            </p>
            <div class="">
                <a href="{{ url('login') }}" class="inline-block rounded bg-yellow-400 px-12 py-3 text-sm font-medium text-gray-200 transition hover:opacity-70 focus:outline-none focus:ring focus:ring-yellow-400">
                    Booking Now
                </a>
            </div>
        </div>
    </div>  
    <img alt="CTA" src="{{ asset ('img/cars.jpg') }}" class="h-56 w-full object-cover sm:h-full"/>
</section>

<section id="tentang" class="overflow-hidden bg-gray-200 py-20">
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8 lg:px-20 px-10 py-10 items-center">
        <div class="grid">
            <div class="text-center justify-center items-center">
                <img src="{{ asset ('img/office.jpg') }}" class="w-auto h-auto" alt="">
            </div>
        </div>
        <div class="lg:col-span-2 pt-4 md:pt-8 text-start justify-start items-start content-start flex flex-col">
            <div class="font-montserrat font-medium border-2 rounded-full text-gray-900 border-gray-900 inline-block py-1 px-4 text-center">
                Tentang Kami
            </div>
            <h2 class="text-xl font-bold text-gray-900 md:text-4xl md:mt-10 mt-4 font-arima">
                Top Car Rental Mobil
            </h2>
            <p class="text-gray-500 my-5 md:block font-arima">
                Selamat datang di Top Car, layanan persewaan mobil utama Anda yang menawarkan berbagai macam kendaraan 
                berkualitas tinggi dengan harga bersaing. Apakah Anda memerlukan mobil kompak untuk berkendara di kota, 
                SUV yang lapang untuk perjalanan keluarga, atau sedan mewah untuk acara khusus, kami memiliki kendaraan 
                yang tepat untuk Anda. Komitmen kami terhadap layanan pelanggan yang sangat baik, ketentuan sewa yang 
                fleksibel, dan opsi pemesanan yang nyaman memastikan pengalaman sewa yang lancar dan menyenangkan. 
                Pilih Top Car untuk keandalan, keterjangkauan, dan perjalanan yang sesuai dengan kebutuhan Anda.
            </p>
        </div>
    </div>
</section>

<section id="mobil" class="overflow-hidden bg-gray-200">
    <div class="text-center pb-10">
        <div class="font-montserrat font-medium border-2 rounded-full text-gray-800 border-gray-800 inline-block py-1 px-4 text-center">
            Daftar Mobil Rental
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-4 sm:grid-cols-2 gap-4 sm:gap-0">

        @foreach ($mobil as $row)

        <div class="block border border-black bg-white pb-5">
            <img alt="product" src="{{ asset($row->gambar) }}" class="h-auto w-full object-cover" />
            <h3 class="mt-4 px-4 text-lg font-bold text-gray-900 sm:text-xl font-arima">{{ $row->merk }} ({{ $row->tahun }})</h3>
            <p class="mt-2 px-4 max-w-sm text-gray-700 font-arima">
                {{ $row->model }}
            </p>
            <p class="mt-2 px-4 max-w-sm text-gray-700 font-arima">
                Plat Nomor : {{ $row->plat }}
            </p>
            <p class="mt-2 px-4 max-w-sm text-gray-700 font-arima">
                Tarif @currency($row->tarif) / hari
            </p>
            {{-- <p class="mt-2 px-4 max-w-sm text-gray-700 font-arima">
                Tersedia 3 (sisa)
            </p> --}}
        </div>

        @endforeach

    </div>
</section>

{{ View::make('users/footer') }}

{{-- Mobile Menu --}}
<script type="text/javascript">
    const button = document.querySelector('#menu-button');
    const menu = document.querySelector('#menu');
    button.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    });
</script>
@endsection