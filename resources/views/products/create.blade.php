@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Thêm sản phẩm</h1>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('products.store') }}">
                @csrf
                <div class="form-group">
                    <label for="code">Mã sản phẩm</label>
                    <input id="code" name="code" placeholder="mã sản phẩm" class="form-control" required="" type="text">
                </div>

                <div class="form-group">
                    <label for="name">Tên sản phẩm</label>
                    <input id="name" name="name" placeholder="tên sản phẩm" class="form-control" required=""
                        type="text">
                </div>

                <div class="form-group">
                    <label for="material_code">Mã chất liệu</label>
                    <input id="material_code" name="material_code" placeholder="mã chất liệu" class="form-control"
                        required="" type="text">
                </div>

                <div class="form-group">
                    <label for="material_name">Tên chất liệu</label>
                    <input id="material_name" name="material_name" placeholder="tên chất liệu" class="form-control"
                        required="" type="text">
                </div>

                <div class="form-group">
                    <label for="color">Màu</label>
                    <input id="color" name="color" placeholder="màu" class="form-control" required="" type="text">
                </div>

                <div class="form-group">
                    <label for="size">Size</label>
                    <input id="size" name="size" placeholder="size" class="form-control" required="" type="text">
                </div>

                <div class="form-group">
                    <label for="quantity">Số lượng</label>
                    <input id="quantity" name="quantity" placeholder="số lượng" class="form-control" required=""
                        type="number">
                </div>

                <div class="form-group">
                    <label for="import_unit_price">Đơn giá nhập</label>
                    <input id="import_unit_price" name="import_unit_price" placeholder="đơn giá nhập"
                        class="form-control" required="" type="number">
                </div>

                <div class="form-group">
                    <label for="selling_price">Đơn giá bán</label>
                    <input id="selling_price" name="selling_price" placeholder="đơn giá bán" class="form-control"
                        required="" type="number">

                </div>

                <div class="form-group">
                    <label for="note">Ghi chú</label>
                    <input id="note" name="note" placeholder="ghi chú" class="form-control" required="" type="text">
                </div>

                <button type="submit" class="btn btn-primary-outline">Thêm sản phẩm</button>
            </form>
        </div>
    </div>
</div>
@endsection
