@extends('users/layout_user')
@section('content')

{{ View::make('users/navbar') }}

<header id="Header" class="overflow-hidden px-10 py-10">
    <div class="grid grid-cols-1">
        <div class="flex flex-col md:items-end items-center">
            <h3 class="my-5 text-3xl font-normal text-gray-900 sm:text-6xl font-montserrat text-center md:text-end uppercase">Riwayat Rental</h3>
        </div>
    </div>
    <div class="grid grid-cols-1 px-10 pt-10">

        @foreach ($riwayat as $row)

        <div class="grid md:grid-cols-2 grid-cols-1 border border-t-gray-900 border-b-gray-900">
            <div class="flex flex-col py-5 justify-start text-start px-2">
                <h3 class="text-xl font-normal text-gray-900 sm:text-3xl font-arima uppercase">{{ $row->merk }} &nbsp; ({{ $row->tahun }})</h3>
                <p class="text-base font-normal text-gray-900/50 font-arima ">Plat nomor : {{ $row->plat }}</p>
                <p class="text-base font-normal text-gray-900/50 font-arima ">{{ $row->durasi }} &nbsp; hari</p>
                <p class="text-base font-normal text-gray-900/50 font-arima ">Dari tanggal 	&nbsp; {{ $row->mulai }} &nbsp; sampai &nbsp; {{ $row->selesai }}</p>
                <p class="text-base font-normal text-gray-900/50 font-arima ">Total harga yang dibayarkan &nbsp; @currency($row->harga)</p>
                <p class="text-base font-normal text-gray-900/50 font-arima ">Keterangan : {{ $row->keterangan }}</p>
                <div class="mt-5 px-4">
                    <a href="{{ route('pengembalian_edit', $row->id) }}" class="inline-block rounded bg-yellow-400 px-12 py-3 text-sm font-medium text-gray-200 transition hover:opacity-70 focus:outline-none focus:ring focus:ring-yellow-400">
                        Kembalikan
                    </a>
                </div>
            </div>
        </div>

        @endforeach
        
    </div>
</header>

{{ View::make('users/footer') }}

@endsection
