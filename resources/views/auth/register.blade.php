@extends('layout.layout')

@section('content')
    <div class="container form-container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-lg-5  bg-white">
                @if(session('mssg'))
                    <p>{{ session('mssg') }}</p>
                @endif
                <form action="" method="post">
                    @csrf
                    <div class="input-field">
                        <input type="text" name="name" id="name" placeholder="Your name">
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-field">
                        <input type="text" name="username" id="username" placeholder="Username">
                        @error('username')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
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
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password">
                        @error('password_confirmation')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-field">
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection