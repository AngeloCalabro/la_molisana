<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $formData = $request->all();

        // $newProduct = new Product();
        // $newProduct->fill($formData); ////nel caso in cui uso FILLABLE nel Models

            // $newProduct->title = $formData['title'];
            // $newProduct->description = $formData['description'];
            // $newProduct->type = $formData['type'];
            // $newProduct->image = $formData['image'];
            // $newProduct->cooking_time = $formData['cooking_time'];
            // $newProduct->weight = $formData['weight'];

            // $newProduct->save();

        $newProduct = Product::create($formData);

        return redirect()->route('products.show', $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // $product = Product::findOrFail($id); ////nel caso in cui non passo l'oggetto al metodo
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $formData = $request->all();
            $product->title = $formData['title'];
            $product->description = $formData['description'];
            $product->type = $formData['type'];
            $product->image = $formData['image'];
            $product->cooking_time = $formData['cooking_time'];
            $product->weight = $formData['weight'];

            $product->update();

        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
