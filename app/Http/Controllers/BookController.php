<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Requests\ErrorFromRequest;

class BookController extends Controller
{
    
    public function index()
    {
        $books = Book::all();  
        // compact = data uanng mau dikirm ke foldernya
        return view('book.index', compact('books'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(ErrorFromRequest $request)
    {
        // $upload = "N";
        if($request->hasFile('cover'))
        {
            $destination = "cover/";
            $filename = $request->file('cover');
            $filename->move($destination, $filename->getClientOriginalName());
            $upload = new Book;
            $upload->judul = $request->judul;
            $upload->tahun = $request->tahun;
            $upload->pengarang = $request->pengarang;
            $upload->halaman = $request->halaman;
            $upload->cover = $request->cover->getClientOriginalName();
            $upload->save();
            // $upload = "Y";
        } else {
            Book::create($request->all());
        }
        
        return redirect('/');
    }

    public function show($id)
    {
        $book = Book::findOrfail($id);

        return view('book.detail', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('book.edit', compact('book'));
    }

    public function update($id, ErrorFromRequest $request)
    {
        $book = Book::findOrFail($id);

        $book->update([
            'judul' => $request->judul,
            'tahun' => $request->tahun,
            'pengarang' => $request->pengarang,
            'halaman' => $request->halaman,
            'cover' => $request->cover,
        ]);

        return redirect()->route('book.index');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('book.index');
    }
}
