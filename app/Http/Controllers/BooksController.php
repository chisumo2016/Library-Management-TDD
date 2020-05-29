<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function store()
    {
        $data = $this->validateRequest();

        Book::create($data);
    }

    public function update(Book $book)
    {
        $data = $this->validateRequest();

        $book ->update($data);

    }

    /**
     * @return array
     */
    protected function validateRequest(): array
    {
        return request()->validate([
            'title' => 'required',
            'author' => 'required',
        ]);
    }


}
