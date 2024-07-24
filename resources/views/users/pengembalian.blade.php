@extends('users/layout_user')
@section('content')

{{ View::make('users/navbar') }}

<section class="bg-gray-200 py-10">
    <div class="w-full lg:w-1/2 px-4 mx-auto">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
            <div class="px-6 py-4">
                <form class="py-10 px-5 font-inter text-white" method="POST" action="{{ route('pengembalian_update', $update->id) }}" onsubmit="return confirmSubmit()" enctype="multipart/form-data">
                        
                    @csrf

                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="plat" id="plat" class="block py-2.5 px-0 w-full text-sm bg-transparent border-b-2 text-gray-900 border-gray-900 appearance-none focus:outline-none focus:ring-0 focus:broder-blue-56A5ED peer" value="" required />
                        <label for="plat" class="peer-focus:font-medium absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-56A5ED peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Plat Nomor</label>
                    </div>   
                    <button type="submit" class="focus:outline-none text-white-fafafa bg-green-400 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2">
                        Kembalikan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{ View::make('users/footer') }}

@endsection
