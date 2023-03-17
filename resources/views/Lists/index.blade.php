@extends('homeLayout')

@section('title','List of Stores')

@section('content')
    <style>
        h3,h2{
            color: white;
        }
        li{
            color: white;
        }
    </style>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        @if(count($stores)>0)
            @foreach ($stores as $store)
                <div>
                    <h3>
                        <a href="{{route('Lists.show',['List'=>$store['id']])}}">{{$store['name']}}</a>
                    </h3>
                    <ul>
                        <li>
                            Tipo de tienda: {{$store['type']}}
                        </li>
                        <li>
                            Seguidores: {{$store['followers']}}
                        </li>
                    </ul>
                    
                </div>
            @endforeach
        @else
            <h2>No hay tiendas para mostrar</h2>
        @endif

    </div>   
@endsection