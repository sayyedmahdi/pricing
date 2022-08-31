<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('category.index' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'name' => 'required|string',
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('index_category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function showEdit($id)
    {
        $category = Category::find($id);

        return view('category.edit' , compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'id'   => 'required|numeric|exists:categories,id',
            'name' => 'required|string',
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }



        $category = Category::find($request->id);

        $category->name = $request->name;
        $category->save();

        return redirect()->route('index_category');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if ($category){
            $category->delete();
        }

        return response()->json('category deleted' , '200');
    }
}
