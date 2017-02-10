@if($errors->count() > 0)
    <div class="alert alert-danger animated slideInDown">
        <button class="close" data-dismiss="alert">
            ×
        </button>
        {{--<i class="fa-fw fa fa-times"></i>--}}

        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('message'))
    <div class="alert alert-success animated slideInDown">
        <button class="close" data-dismiss="alert">
            ×
        </button>
        <i class="fa-fw fa fa-times"></i>
        <strong>OK!</strong>
        <span>{{session('message')}}</span>
    </div>
@endif