@extends('users/layout_user')
@section('content')

{{ View::make('users/navbar') }}

<section class="bg-gray-200 py-10">
    <div class="w-full lg:w-4/12 px-4 mx-auto">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
            <div class="px-6 py-4">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full px-4 flex justify-center">
                        <div class="relative">
                            <i class="fi fi-ss-user text-gray-200 text-4xl"></i>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <h3 class="text-xl font-semibold leading-normal text-gray-900">
                        {{ $profil->nama }}
                    </h3>
                    <div class="text-sm leading-normal mt-2 text-gray-900">
                        {{ $profil->username }}
                    </div>
                    <div class="text-sm leading-normal mt-5 text-gray-900">
                        <i class="fi fi-ss-envelope text-gray-900"></i> &nbsp;
                        {{ $profil->email }}
                    </div>
                    <div class="text-sm leading-normal mt-2 text-gray-900">
                        <i class="fi fi-ss-marker text-gray-900"></i> &nbsp;
                        {{ $profil->alamat }}
                    </div>
                    <div class="text-sm leading-normal mt-2 text-gray-900">
                        <i class="fi fi-ss-phone-flip text-gray-900"></i> &nbsp;
                        {{ $profil->no_telp }}
                    </div>
                    <div class="mb-2 text-blueGray-600 mt-5">
                        <i class="fi fi-ss-credit-card text-gray-900"></i> &nbsp;
                        {{ $profil->sim }} - {{ $profil->no_sim }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{ View::make('users/footer') }}

@endsection
