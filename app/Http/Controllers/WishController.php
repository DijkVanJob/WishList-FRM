<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wish;

class WishController extends Controller
{
    public function index()
    {
        $wishes = Wish::all();

        return view('wishes.index', compact('wishes'));
    }

    public function create()
    {
        return view('wishes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'description' => 'required|min:3',
            'price' => 'required|numeric',
            'link' => 'required|url'
        ]);



        $data['image'] = $request->file('image')->store('uploads');

        $wish = Wish::create($data);

        return redirect()->back();
    }
}
