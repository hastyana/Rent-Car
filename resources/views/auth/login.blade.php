@extends('auth/layout_auth')
@section('content')

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="{{asset('img/logo.png')}}" alt="Rent Car">
        <h1 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h1>
    </div>  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

        @include('errors.message')

        <form class="space-y-6" action="{{ route('proses_login') }}" method="POST" enctype="multipart/form-data">

        @csrf

            <div>
                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                <div class="mt-2">
                    <input id="username" name="username" type="text" required class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" required class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>    
            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
            </div>
        </form>    
        <p class="mt-10 text-center text-sm text-gray-500">
            Not a member?
            <a href="{{ url('/register') }}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register Now</a>
        </p>
        <p class="mt-5 text-center text-sm text-gray-500">
            Back to guest website
            <a href="{{ url('/') }}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Go back</a>
        </p>
    </div>
</div>

@endsection