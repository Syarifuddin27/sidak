@extends('includes.log')

<div class="container">

        <div class="row text-center"  style="margin-top: 20%">
            <img src="{{ asset('uploads/bg/logo-mja.png') }}" alt="">
        </div>

        <div class="row text-center">
            @if (Route::has('login'))
                <div class="top-right links">
            @auth
            <button class="btn btn-primary btn-sm">
                <a href="{{ url('/admin/home') }}"><b>HOME</b></a>
            </button>
            <button class="btn btn-primary btn-sm">
                <a href="{{ route('daftar') }}"><b>DAFTAR</b></a>
            </button>
            @else
            <button class="btn btn-primary btn-sm">
                <a href="{{ route('login') }}"><b>LOGIN</b></a>
            </button>

            <button class="btn btn-primary btn-sm">
                <a href="{{ route('daftar') }}"><b>DAFTAR</b></a>
            </button>

                {{-- <a href="{{ route('register') }}">Register</a> --}}
            @endauth
                </div>
            @endif
        </div>
</div>

