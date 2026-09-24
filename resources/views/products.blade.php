@extends('layout')
@section('title', 'สินค้า')
@section('content')
<h1>สินค้า</h1>
@if (session('status')) <div class="alert alert-success">{{ session('status') }}</div> @endif
<table class="table table-striped">
    <thead><tr><th>ชื่อ</th><th>ราคา</th></tr></thead>
    <tbody>
    @foreach ($products as $product)
        <tr><td>{{ $product['name'] }}</td><td>{{ number_format($product['price'], 2) }}</td></tr>
    @endforeach
    </tbody>
</table>
<form method="POST" action="{{ route('products.store') }}" class="mt-4">
    @csrf
    <input name="name" class="form-control mb-2" placeholder="ชื่อสินค้า">
    <button class="btn btn-primary">บันทึก</button>
</form>
@endsection
