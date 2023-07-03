@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
               

                    @foreach ($usuariosarr as $usuario )
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item active">{{ $usuario['name'] }}</li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                </ul>
            </div>

            @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
