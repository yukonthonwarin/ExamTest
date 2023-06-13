@extends('layouts.app')
 
@section('body')
    
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">แก้ไขสินค้า</h1>
        <a href="{{ route('product.index') }}" class="btn btn-primary">ย้อนกลับ</a>
    </div>
    <hr />
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">สินค้า</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">ราคา</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">รหัสสินค้า</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">รายละเอียดสินค้า</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">อัพเดท</button>
            </div>
        </div>
    </form>
    
@endsection