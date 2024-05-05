<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allProduct=Product::all();
        return view("admin.product",compact("allProduct"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("product.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){


        $image=$request->file('image');
        $imageName=time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'),$imageName);
        $productDetail=[
        "title"=>$request->title,
        "description"=>$request->description,
        "price"=>$request->price,
        "image"=>$imageName
        ];
        // Public Folder
        Product::create($productDetail);


        return redirect()->route('product.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.detail', ['item' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        return view("product.edit",compact("product"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $formFields = $request->all();
        if($request->hasFile('image')){
            dd('has file');
        };
        $formFields ['image'] = $product->image;
        $product->fill($formFields)->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
    public function product() {
        $allProduct = Product::all();


                return view('admin.product',compact('allProduct'));
    }
    // public function detail($id)
    // {
    //     $product = Product::findOrFail($id);

    //     return view('product.detail', ['item' => $product]);
    // }
}
