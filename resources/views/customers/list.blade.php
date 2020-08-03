@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3 mb-3">Khách hàng</h1>
        <a href="{{ route('customers.create')}}" class="btn btn-primary mg">Thêm khách hàng</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Mã khách hàng</td>
                    <td>Tên khách hàng</td>
                    <td>Địa chỉ</td>
                    <td>Số điện thoại</td>
                    <td colspan=2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->code}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>
                        <a href="{{ route('customers.edit',$customer->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('customers.destroy', $customer->id)}}" method="post">
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
