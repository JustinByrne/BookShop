<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    public function index($id = null)
    {   
        if( $id != null)
        {
            return  new BookResource(Book::findOrFail($id));
        }

        return BookResource::collection( Book::Approved()->paginate());
    }
}
