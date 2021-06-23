@extends('layout.layout')

@section('content')
    <div class="container form-container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8  bg-white">
                <form action="" method="post">
                    @csrf
                    <div class="input-field">
                        <textarea name="post" id="" cols="30" rows="10" placeholder="Post something"></textarea>
                        @error('post')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-field">
                        <button type="submit">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection