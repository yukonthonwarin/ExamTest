@extends('layouts.app')
 
@section('body')


    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">รายการสินค้า</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary">เพิ่มสินค้า</a>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <form method="get" action="/search">
                <div class="input-group">
                    <input class="form-control" name="search" placeholder="ค้นหา....">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>ลำดับ</th>
                <th>สินค้า</th>
                <th>ราคา</th>
                <th>รหัสสินค้า</th>
                <th>รายละเอียดสินค้า</th>
                <th>ตัวเลือก</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->price }}฿</td>
                        <td class="align-middle">{{ $rs->product_code }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('product.show', $rs->id) }}" type="button" class="btn btn-secondary">รายละเอียด</a>
                                <a href="{{ route('product.edit', $rs->id)}}" type="button" class="btn btn-warning">แก้ไข</a>
                                <form action="{{ route('product.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">ลบ</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
    
    
@endsection