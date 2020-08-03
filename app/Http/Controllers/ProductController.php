<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

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

        return view('products.list', compact('products'));
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
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'material_code' => 'required',
            'material_name' => 'required',
            'color' => 'required',
            'size' => 'required',
            'quantity' => 'required',
            'import_unit_price' => 'required',
            'selling_price' => 'required',
            'note' => 'required'
        ]);

        $product = new Product([
            'code' => $request->get('code'),
            'name' => $request->get('name'),
            'material_code' => $request->get('material_code'),
            'material_name' => $request->get('material_name'),
            'color' => $request->get('color'),
            'size' => $request->get('size'),
            'quantity' => $request->get('quantity'),
            'import_unit_price' => $request->get('import_unit_price'),
            'selling_price' => $request->get('selling_price'),
            'note' => $request->get('note'),
        ]);
        $product->save();
        return redirect('/products')->with('success', 'Tạo sản phẩm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->code = $request->get('code');
        $product->name = $request->get('name');
        $product->material_code = $request->get('material_code');
        $product->material_name = $request->get('material_name');
        $product->color = $request->get('color');
        $product->size = $request->get('size');
        $product->quantity = $request->get('quantity');
        $product->import_unit_price = $request->get('import_unit_price');
        $product->selling_price = $request->get('selling_price');
        $product->note = $request->get('note');
        $product->save();

        return redirect('/products')->with('success', 'Cập nhật sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/products')->with('success', 'Xóa sản phẩm thành công!');
    }
}
