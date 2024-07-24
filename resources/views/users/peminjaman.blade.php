@extends('users/layout_user')
@section('content')

{{ View::make('users/navbar') }}

<section class="bg-gray-200 py-10">
    <div class="w-full lg:w-1/2 px-4 mx-auto">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
            <div class="px-6 py-4">
                <div class="flex justify-center items-center content-center">
                    <img src="{{ asset($mobils->gambar) }}" alt="{{ $mobils->merk }}" class="w-40 h-auto">
                </div>
                <form class="py-10 px-5 font-inter text-white" method="POST" action="{{ route('peminjaman_save', $mobils->id) }}" onsubmit="return confirmSubmit()" enctype="multipart/form-data">
                        
                    @csrf

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="nama" id="nama" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('users', $user->nama) }}" required />
                        <label for="nama" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="no_telp" id="no_telp" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('users', $user->no_telp) }}" required />
                        <label for="no_telp" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Telepon</label>
                    </div> 
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="merk" id="merk" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('mobil', $mobils->merk) }}" required />
                        <label for="merk" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Merk</label>
                    </div> 
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="tahun" id="tahun" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('mobil', $mobils->tahun) }}" required />
                        <label for="tahun" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tahun</label>
                    </div> 
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="plat" id="plat" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('mobil', $mobils->plat) }}" required />
                        <label for="plat" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Plat Nomor</label>
                    </div> 
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="tarif" id="tarif" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="{{ old('mobil', $mobils->tarif) }}" required /> 
                        <label for="tarif" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tarif (@currency(old('mobil', $mobils->tarif)))</label>
                    </div> 
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="durasi" id="durasi" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="" required />
                        <label for="durasi" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Durasi</label>
                    </div>         
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="date" name="mulai" id="mulai" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="" required />
                        <label for="mulai" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal Mulai</label>
                    </div>  
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="date" name="selesai" id="selesai" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="" required />
                        <label for="selesai" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal Selesai</label>
                    </div>  
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="harga" id="harga" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="" required />
                        <label for="harga" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Harga</label>
                    </div>   
                    <button type="submit" class="focus:outline-none text-white-fafafa bg-green-400 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2">
                        Upload
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{ View::make('users/footer') }}

<script type="text/javascript">
    $('#tarif, #durasi').on('keyup', function() {
        let tarif = $('#tarif').val();
        tarif = $.isNumeric(tarif) ? parseInt(tarif) : 0;

        let durasi = $('#durasi').val();
        durasi = $.isNumeric(durasi) ? parseInt(durasi) : 0;

        $('#harga').val(tarif*durasi);

        console.log(tarif);
        console.log(durasi);
    });
</script>

@endsection
