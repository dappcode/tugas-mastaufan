@extends('layouts.master')
    @section('title', 'Add Book')

    @section('content')

    <div class="container">
        <h1 class="text-center" style="padding: 30px 0 0 0;"  >Add Books</h1>

        {{-- {{ dump($errors)}} --}}
        <form action="{{ route('book.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFormControlInput1">Book Title : </label>
                <input type="text" name="judul" class="form-control" placeholder="Book Title">
                @if ($errors->has('judul'))
                    <strong class="text-danger">{{ $errors->first('judul') }}</strong><br>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Publication Year : </label>
                <input type="text" name="tahun" class="form-control" placeholder="Publication Year">
                @if ($errors->has('tahun'))
                    <strong class="text-danger">{{ $errors->first('tahun') }}</strong><br>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Author : </label>
                <input type="text" name="pengarang" class="form-control" placeholder="Author">
                @if ($errors->has('pengarang'))
                    <strong class="text-danger">{{ $errors->first('pengarang') }}</strong><br>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Number of pages : </label>
                <input type="text" name="halaman" class="form-control" placeholder="Number of Pages">
                @if ($errors->has('halaman'))
                    <strong class="text-danger">{{ $errors->first('halaman') }}</strong><br>
                @endif
            </div>
            <div class="form-group">
                <label>Image of Book: </label>
                <input name="cover" type="file" class="form-control" placeholder="Your Picture">
                @if ($errors->has('cover'))
                    <strong class="text-danger">{{ $errors->first('cover') }}</strong><br>
                @endif
            </div>
            <button type="submit" class="btn btn-primary"> Add Book </button>
        </form>
    </div>
@stop