@extends('admin/layout_admin')
@section('content')

<div class="flex h-screen bg-white" :class="{ 'overflow-hidden': isSideMenuOpen }">
        
    {{ View::make('admin/sidebar') }}

    <div class="flex flex-col flex-1 w-full">

        {{ View::make('admin/topbar') }}

        <main class="h-full overflow-y-auto">
            <div class="container py-10 px-6 mx-auto grid">
                <div class="flex justify-between items-center pb-4">
                    <h2 class="text-2xl font-semibold text-gray-900">
                        Daftar Laporan Peminjaman
                    </h2>
                </div>
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead class="bg-gray-900">
                                <tr class="text-xs font-semibold tracking-wide text-center text-gray-200 uppercase border-b">
                                    <th class="px-2 py-3">No</th>
                                    <th class="px-2 py-3">Nama</th>
                                    <th class="px-2 py-3">Nomor HP</th>
                                    <th class="px-2 py-3">Merk</th>
                                    <th class="px-2 py-3">Tahun</th>
                                    <th class="px-2 py-3">Plat Nomor</th>
                                    <th class="px-2 py-3">Tarif</th>
                                    <th class="px-2 py-3">Mulai</th>
                                    <th class="px-2 py-3">Selesai</th>
                                    <th class="px-2 py-3">Durasi</th>
                                    <th class="px-2 py-3">Harga</th>
                                    <th class="px-2 py-3">Keterangan</th>
                                    <th class="px-2 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-200">

                                @php $no=0; @endphp
                                @foreach ($peminjaman as $row)
                                @php $no++; @endphp

                                <tr class="text-gray-900">
                                    <td class="px-2 py-3 text-sm">
                                        {{ $no }}
                                    </td> 
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->nama }}
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->no_telp }}
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->merk }}
                                    </td> 
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->tahun }}
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->plat }}
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        @currency($row->tarif)
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->mulai }}
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->selesai }}
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->durasi }}
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        @currency($row->harga)
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->keterangan }}
                                    </td>
                                    <td class="px-2 py-3 text-sm flex flex-row gap-1">
                                        <button class="text-center rounded-lg bg-red-600 py-1 px-2 hover:opacity-50 transition duration-300">
                                            <a href="{{ route('peminjaman_delete', $row->id) }}" onclick="return confirm('Yakin dihapus ?')" class="text-xs font-inter font-normal text-blue-500"> 
                                                <i class="fi fi-rs-trash"></i>
                                            </a>
                                        </button>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>                
            </div>
        </main>
    </div>            
</div>

@endsection