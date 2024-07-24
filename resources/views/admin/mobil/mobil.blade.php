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
                        Daftar Mobil
                    </h2>
                    <a href="{{ url('/admin/mobil_add') }}" type="button" class="focus:outline-none text-white bg-green-400 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2">
                        + <span class="px-2"> | </span> Mobil  
                    </a>
                </div>
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead class="bg-gray-900">
                                <tr class="text-xs font-semibold tracking-wide text-center text-gray-200 uppercase border-b">
                                    <th class="px-2 py-3">No</th>
                                    <th class="px-2 py-3">Gambar</th>
                                    <th class="px-2 py-3">Merk</th>
                                    <th class="px-2 py-3">Model</th>
                                    <th class="px-2 py-3">Tahun</th>
                                    <th class="px-2 py-3">Plat Nomor</th>
                                    <th class="px-2 py-3">Tarif</th>
                                    <th class="px-2 py-3">Jumlah</th>
                                    <th class="px-2 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-200">

                                @php $no=0; @endphp
                                @foreach ($mobil as $row)
                                @php $no++; @endphp

                                <tr class="text-gray-900">
                                    <td class="px-2 py-3 text-sm">
                                        {{ $no }}
                                    </td> 
                                    <td class="px-2 py-3 text-sm">
                                        <img src="{{ asset($row->gambar) }}" alt="{{ $row->merk }}" class="w-16 h-auto object-cover rounded-sm"/>
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->merk }}
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->model }}
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->tahun }}
                                    </td> 
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->plat }}
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        @currency($row->tarif)/ hari
                                    </td>
                                    <td class="px-2 py-3 text-sm">
                                        {{ $row->jumlah }}
                                    </td>
                                    <td class="px-2 py-3 text-sm flex flex-row gap-1">
                                        <button class="text-center rounded-lg bg-yellow-500 py-1 px-2 hover:opacity-50 transition duration-300">
                                                <a href="{{ route('mobil_edit', $row->id) }}" onclick="return confirm('Yakin diubah ?')" class="text-xs font-inter font-normal text-blue-800"> 
                                                    <i class="fi fi-rs-pencil"></i>
                                                </a>
                                            </button>
                                        <button class="text-center rounded-lg bg-red-600 py-1 px-2 hover:opacity-50 transition duration-300">
                                            <a href="{{ route('mobil_delete', $row->id) }}" onclick="return confirm('Yakin dihapus ?')" class="text-xs font-inter font-normal text-blue-800"> 
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