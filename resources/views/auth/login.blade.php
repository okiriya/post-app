@extends('layout.layout')

@section('content')
    <div class="container form-container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-lg-5  bg-white">
                <form action="" method="post">
                    @csrf
                    <div class="input-field">
                        <input type="text" name="email" id="email" placeholder="Your email">
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="password" placeholder="Choose a password">
                        @error('password')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-field">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
