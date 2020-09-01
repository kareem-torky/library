<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(3);

        return view(
            'categories.index',  
            compact('categories')
        );
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);

        return view(
            'categories.show', 
            compact('category')
        );
    }

    public function create()
    {
        return view(
            'categories.create'
        );
    }

    public function store(Request $request)
    {
        // validation 
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect( route('categories.index') );
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view(
            'categories.edit',
            compact('category')
        );
    }

    public function update(Request $request, $id)
    {
        // validation 
        $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->name,
        ]);

        return redirect( route('categories.edit', $id) );
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect( route('categories.index') );
    }
}

