@extends('layouts.master')
    @section('title', 'Welcome')

    @section('content')

    <div class="container">
        <h1 class="text-center" style="font-size: 70px; padding: 70px 0 20px 0;">
            Selamat Datang di Book Store 
        </h1>

        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
            <a href="{{ route('book.index') }}" class="nav-link btn btn-primary mr-md-3 btn-lg" role="button"> List Book </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('book.create') }}" class="nav-link btn btn-secondary mr-md-3 btn-lg" role="button"> Add Book </a>
            </li>
        </ul>

    </div>


@stop