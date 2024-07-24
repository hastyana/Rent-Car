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
                        Dashboard
                    </h2>
                </div>                               
            </div>
        </main>
    </div>            
</div>

@endsection