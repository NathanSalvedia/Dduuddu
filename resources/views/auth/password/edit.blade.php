@extends('layouts.general')

@section('title', 'Appointment App | Reset Password')

<div class="auth-wrapper d-flex pt-5 mt-5 p-5 ">
    <div class="col-md-4 m-auto p-5 ">
        <div class="bg-white shadow-sm">
            <h1 class="border-bottom p-4 text-center">Reset Password</h1>
            <div class="px-4 py-4 p-5">

                @if ($message = session('status'))
                <div class="alert alert-success">{{ $message }}</div>
                @endif

                <form class="form-signup" method="POST" action="{{ route('password.update')}}">
                    @csrf
                <div class="mb-3 pt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"  value="{{ request()->email }}" />

                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 pt-3">
                    <label for="password" class="form-label text-dark">Password:</label>
                    <input type="password" class="form-control  form-control-lg @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" />

                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 pt-3">
                    <label for="password" class="form-label text-dark">Password Confirmation:</label>
                    <input type="password" class="form-control  form-control-lg" name="password_confirmation" />

                    <input type="hidden" name="token"  value="{{ request()->route('token')}}">
                </div>

                <div class="mb-3 pt-3">
                    <button type="submit" class="btn btn-block btn-dark">Reset Password</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
