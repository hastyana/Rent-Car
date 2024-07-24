@extends('admin/layout_admin')
@section('content')

<div class="flex h-screen bg-white" :class="{ 'overflow-hidden': isSideMenuOpen }">
        
    {{ View::make('admin/sidebar') }}

    <div class="flex flex-col flex-1 w-full">

        {{ View::make('admin/topbar') }}

        <main class="h-full overflow-y-auto">
            <div class="container px-6 mx-auto grid py-10">
                <div class="flex justify-between items-center pb-4">
                    <h2 class="text-2xl font-semibold text-blue-06283d">
                        Pengisian Data Mobil
                    </h2>
                    <a href="{{ route('mobil') }}" type="button" class="focus:outline-none text-white-fafafa bg-yellow-400 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2">
                        < <span class="px-2"> | </span> Kembali
                    </a>
                </div> 
                <!-- Form -->
                <div class="w-full overflow-hidden rounded-lg shadow-xs bg-blue-06283d">
                    
                    @include('errors.message')

                    <form class="py-5 px-5 font-inter text-white" method="POST" action="{{ route('mobil_save') }}" onsubmit="return confirmSubmit()" enctype="multipart/form-data">
                        
                        @csrf

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="merk" id="merk" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="" required />
                            <label for="merk" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Merk</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="model" id="model" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="" required />
                            <label for="model" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Model</label>
                        </div> 
                        <div class="relative z-0 w-full mb-6 group">
                            <label class="block mb-2 text-sm font-medium text-gray-900" for="gambar">Upload Gambar</label>
                            <input class="block w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300 rounded-lg cursor-pointer focus:outline-none" id="gambar" name="gambar" type="file" required>
                            <p class="font-normal py-2 md:text-start text-red-600">
                                *upload dengan format .jpg, .jpeg, .png, .gif, dan .svg <br>
                                *max file size 2MB
                            </p>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="tahun" id="tahun" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="" required />
                            <label for="tahun" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tahun</label>
                        </div> 
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="plat" id="plat" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="" required />
                            <label for="plat" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Plat Nomor</label>
                        </div> 
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="tarif" id="tarif" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="" required />
                            <label for="tarif" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tarif</label>
                        </div> 
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="jumlah" id="jumlah" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="" required />
                            <label for="jumlah" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jumlah</label>
                        </div>          
                        <button type="submit" class="focus:outline-none text-white-fafafa bg-green-400 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2">
                            Upload
                        </button>
                    </form>
                </div>                        
            </div>
        </main>
    </div>            
</div>

@endsection