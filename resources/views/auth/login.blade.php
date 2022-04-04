@extends('Layouts.AppLogin', ['title' => 'Login'])

@section('form-login')
    <form class="pt-3" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
        </div>
        <div class="text-center mt-4 fw-light">
            Don't have an account? <a href="{{ route('register') }}" class="text-primary">Register</a>
        </div>
    </form>
@endsection
