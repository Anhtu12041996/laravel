@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Thêm khánh hàng</h1>
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
            <form method="post" action="{{ route('customers.store') }}">
                @csrf
                <div class="form-group">
                    <label for="code">Mã khách hàng</label>
                    <input id="code" name="code" class="form-control" required="" type="text">
                </div>

                <div class="form-group">
                    <label for="name">Tên khách hàng</label>
                    <input id="name" name="name" class="form-control" required="" type="text">
                </div>

                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input id="address" name="address" class="form-control" required="" type="text">
                </div>

                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input id="phone" name="phone" class="form-control" required="" type="text">
                </div>
                <button type="submit" class="btn btn-primary-outline">Tạo khách hàng</button>
            </form>
        </div>
    </div>
</div>
@endsection
