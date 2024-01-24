@extends('layout')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">

        <form class="form bg-white p-6 border-1" method="POST" action="{{ route('guitars.store') }}">
            @csrf
            <div>
                <label for="guitarName" class="text-sm">Guitar Name</label>
                <input type="text" class="text-lg border-1" id="guitarName" name="guitarName" value="{{ old('guitarName') }}">
                @error('guitarName')
                    <div class="formError">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="brand" class="text-sm">Brand</label>
                <input type="text" class="text-lg border-1" id="brand" name="brand" value="{{ old('brand') }}">
                @error('brand')
                    <div class="formError">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label for="year" class="text-sm">Year</label>
                <input type="text" class="text-lg border-1" id="year" name="year" value="{{ old('year') }}">
                @error('year')
                    <div class="formError">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button class="border-1" type="submit">Submit</button>
            </div>
        </form>

    </div>
@endsection