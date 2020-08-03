@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Sửa thông tin khách hàng</h1>

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
        <form method="post" action="{{ route('customers.update', $customer->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="code">Mã khách hàng:</label>
                <input type="text" class="form-control" name="code" value={{ $customer->code }} />
            </div>

            <div class="form-group">
                <label for="name">Tên khách hàng:</label>
                <input type="text" class="form-control" name="name" value={{ $customer->name }} />
            </div>

            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" class="form-control" name="address" value={{ $customer->address }} />
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại:</label>
                <input type="text" class="form-control" name="phone" value={{ $customer->phone }} />
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>
@endsection
