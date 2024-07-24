<div class="alert-danger">
    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'.$msg))
            <p class="alert alert-{{ $msg }}">
                {{ Session::get('alert-'.$msg) }} 
                <a href="" class="close" data-dismiss="alert" aria-label="close">
                    &times;
                </a>
            </p>
        @endif
    @endforeach
</div>

@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li class="text-red-600">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(count($errors) < 0)
<div class="alert alert-success">
    <ul>
        @foreach($errors->all() as $error)
            <li class="text-green-600">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif