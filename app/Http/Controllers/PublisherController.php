<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    //
    public function show()
    {
        $publishers = Publisher::all();

        return view('publisher', compact('publishers'));
    }

    public function index($id)
    {
        $publisher = Publisher::find($id);
        $books = $publisher->Book()->get();

        return view('publisherDetail', compact('books', 'publisher'));
    }
}
