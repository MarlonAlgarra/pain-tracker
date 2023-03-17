@extends('homeLayout')

@section('title','Store details')

@section('content')
    <style>
        h3,h2{
            color: white;
        }
    </style>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div>
            <h3>
                {{$List['name']}}
            </h3>
            <ul>
                <li>
                    Tipo de tienda: {{$List['type']}}
                </li>
                <li>
                    Seguidores: {{$List['followers']}}
                </li>
            </ul>
        </div>
    </div>   
@endsection