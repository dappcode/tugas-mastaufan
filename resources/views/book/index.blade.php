@extends('layouts.master')
    @section('title', 'List Book')

    @section('content')
    <div class="container">
        <h1 class="text-center" style="padding: 30px 0 0 0;">List Books</h1>

        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Books Title </th>
                <th scope="col">Publication Year</th>
                <th scope="col">Author</th>
                <th scope="col">Number of Pages</th>
                <th class="text-center"scope="col" colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($books as $key => $book)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $book->judul }}</td>
                    <td>{{ $book->tahun }}</td>
                    <td>{{ $book->pengarang }}</td>
                    <td>{{ $book->halaman }}</td>
                    <td>
                        <a class="btn btn-primary" role="button" href="{{ route('book.show', $book->id) }}"> Detail </a>
                    </td>
                    <td>
                    <a class="btn btn-info" role="button" href=" {{ route('book.edit', $book->id) }}"> Edit </a>
                    </td>
                    <td>
                        <form action="{{ route('book.destroy', $book->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"> Deleted </button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@stop