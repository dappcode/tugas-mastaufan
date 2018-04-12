@extends('layouts.master')
    @section('title', 'Detail Book')
    @section('content')

    <div class="container">
        <div class="detail" style="padding: 50px 0 0 0">
            <div class="card text-center">
                <div class="card-header">
                    <h1 class="text-center" style="padding: 30px 0 0 0;">{{ $book->judul}} Books</h1>
                </div>
                <div class="card-body">
                @if($book->cover)
                    <img src="/cover/{{ $book->cover}} " alt=" {{ $book->judul }} image " height="200px">
                @else
                        <img src="/cover/default-image.png"  alt="Dont Have a Image">   
                @endif
                    <h5 class="card-title"> {{ $book->pengarang }} </h5>
                    <p class="card-text"> Number of Pages : {{ $book->halaman }} </p>
                    <p class="card-text"> Production Year : {{ $book->tahun }} </p>
                </div>
                <div class="card-footer text-muted">
                    <form action="{{ route('book.destroy', $book->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"> Deleted </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop