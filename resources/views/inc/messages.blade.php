@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="callout-alert">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('succes'))
    <div class="callout-success">
        {{session('succes')}}
    </div>
@endif

@if(session('error'))
    <div class="callout-danger">
        {{session('error')}}
    </div>
@endif