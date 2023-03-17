@extends('homeLayout')

@section('title','About Us')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form action="{{ route('Lists.store')}}" method="POST" class="form p-6 border-1">
        @csrf
        <div>
            <label class="text-sm" for="name">Store Name</label>
            <input type="text" name="name" id="name" value="{{ old('name')}}" class="text-lg border-1">
            @error('name')
                <div class="form-error">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="type" class="text-sm">Store type</label>
            <input type="text" name="type" id="type" value="{{ old('type')}}" class="text-lg border-1">
            @error('type')
                <div class="form-error">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <label for="followers" class="text-sm">Current followers</label>
            <input type="text" name="followers" id="followers" value="{{ old('followers')}}" class="text-lg border-1">
            @error('followers')
                <div class="form-error">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div>
            <button class="border-1" type="submit">Submit</button>
        </div>
    </form>
    </div>
@endsection
