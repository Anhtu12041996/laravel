@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Sửa sản phẩm</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('products.update', $product->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="code">Mã sản phẩm:</label>
                <input type="text" class="form-control" name="code" value={{ $product->code }} />
            </div>

            <div class="form-group">
                <label for="name">Tên sản phẩm:</label>
                <input type="text" class="form-control" name="name" value={{ $product->name }} />
            </div>

            <div class="form-group">
                <label for="material_code">Mã chất liệu:</label>
                <input type="text" class="form-control" name="material_code" value={{ $product->material_code }} />
            </div>
            <div class="form-group">
                <label for="material_name">Tên chất liệu:</label>
                <input type="text" class="form-control" name="material_name" value={{ $product->material_name }} />
            </div>
            <div class="form-group">
                <label for="color">Màu:</label>
                <input type="text" class="form-control" name="color" value={{ $product->color }} />
            </div>
            <div class="form-group">
                <label for="job_title">Size:</label>
                <input type="text" class="form-control" name="size" value={{ $product->size }} />
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng:</label>
                <input type="text" class="form-control" name="quantity" value={{ $product->quantity }} />
            </div>
            <div class="form-group">
                <label for="import_unit_price">Giá nhập:</label>
                <input type="text" class="form-control" name="import_unit_price" value={{ $product->import_unit_price }} />
            </div>
            <div class="form-group">
                <label for="selling_price">Giá bán:</label>
                <input type="text" class="form-control" name="selling_price" value={{ $product->selling_price }} />
            </div>
            <div class="form-group">
                <label for="note">Ghi chú:</label>
                <input type="text" class="form-control" name="note" value={{ $product->note }} />
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>
@endsection
