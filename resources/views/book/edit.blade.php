@extends('layouts.master')
    @section('title', 'Add Book')

    @section('content')

    <div class="container">
    <h1 class="text-center" style="padding: 30px 0 0 0;">Edit {{ $book->judul }} Books</h1>

        <form action="{{ route('book.update', $book->id )}}" method="post">
            {{ csrf_field() }}

            @csrf
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="exampleFormControlInput1">Book Title : </label>
                <input type="text" name="judul" class="form-control" value=" {{ $book->judul }}">
                @if ($errors->has('judul'))
                    <strong class="text-danger">{{ $errors->first('judul') }}</strong><br>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Publication Year : </label>
                <input type="text" name="tahun" class="form-control" value=" {{ $book->tahun }}">
                @if ($errors->has('tahun'))
                    <strong class="text-danger">{{ $errors->first('tahun') }}</strong><br>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Author : </label>
                <input type="text" name="pengarang" class="form-control" value=" {{ $book->pengarang }}">
                @if ($errors->has('pengarang'))
                    <strong class="text-danger">{{ $errors->first('pengarang') }}</strong><br>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Number of pages : </label>
                <input type="text" name="halaman" class="form-control" value=" {{ $book->halaman }}">
                @if ($errors->has('halaman'))
                    <strong class="text-danger">{{ $errors->first('halaman') }}</strong><br>
                @endif
            </div>
            <div class="form-group">
                <label>Image of Book: </label>
            <input name="cover" type="file" class="form-control" value=" {{ $book->cover }}" placeholder="Your Picture">
            </div>
            <button type="submit" class="btn btn-primary"> Save Changes </button>
        </form>
    </div>
@stop