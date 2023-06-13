@extends('layouts.app')
 
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">เพิ่มสินค้า</h1>
        <a href="{{ route('product.index') }}" class="btn btn-primary">ย้อนกลับ</a>
    </div>
    <hr />
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="สินค้า">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="ราคา">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="รหัสสินค้า">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="รายละเอียดสินค้า"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">บันทึก</button>
            </div>
        </div>
    </form>
@endsection