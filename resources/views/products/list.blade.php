@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3 mb-3">Sản phẩm</h1>
        <a href="{{ route('products.create')}}" class="btn btn-primary">Thêm sản phẩm</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Mã sản phẩm</td>
                    <td>Tên sản phẩm</td>
                    <td>Chất liệu</td>
                    <td>Mã chất liệu</td>
                    <td>Màu</td>
                    <td>Size</td>
                    <td>Số lượng</td>
                    <td>Giá nhập</td>
                    <td>Giá bán</td>
                    <td>Note</td>
                    <td colspan=2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->code}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->material_name}}</td>
                    <td>{{$product->material_code}}</td>
                    <td>{{$product->color}}</td>
                    <td>{{$product->size}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->import_unit_price}}</td>
                    <td>{{$product->selling_price}}</td>
                    <td>{{$product->note}}</td>
                    <td>
                        <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        </div>
        <div class="col-sm-12">
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
        </div>

        @endsection
