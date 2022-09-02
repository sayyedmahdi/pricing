<?php

namespace App\Http\Controllers;

use App\Imports\ProductsImport;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('product.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('product.create' , compact('categories'));
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
            'price1' => 'required|numeric',
            'price2' => 'required|numeric',
            'price3' => 'required|numeric',
            'image' => 'required'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $image_path = '';
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
            $image_path = $filename;
        }

        Product::create([
            'name' => $request->name,
            'price1' => $request->price1,
            'price2' => $request->price2,
            'price3' => $request->price3,
            'image' => $image_path,
            'category_id' => $request->category
        ]);

        return redirect()->route('index_product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function showEdit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('product.edit' , compact('product' , 'categories'));
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
            'id'   => 'required|numeric|exists:products,id',
            'name' => 'required|string',
            'price1' => 'required|numeric',
            'price2' => 'required|numeric',
            'price3' => 'required|numeric',
            'image' => 'nullable'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }



        $product = Product::find($request->id);

        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $image_path = $filename;
            $product->image = $image_path;
        }

        $product->price1 = $request->price1;
        $product->price2 = $request->price2;
        $product->price3 = $request->price3;
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->save();

        return redirect()->route('index_product');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product){
            $product->delete();
        }

        return response()->json('product deleted' , '200');
    }

    public function showProducts(){
        $products = Product::all();

        return view('products' , compact('products'));
    }

    public function import(Request $request){
        $validator = Validator::make($request->all() , [
            'file' => 'required|file'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }

        Excel::import(new ProductsImport, $request->file('file'));

        //return redirect()->back()->with('success', 'User Imported Successfully');
    }
}
