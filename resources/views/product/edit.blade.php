@extends('inc.add')
@section('content')
<div class="container">
  <form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST">
        @csrf
        @method('PUT') {{-- Use the PUT method for updating --}}
        <input type="hidden" name="product_id" value="{{ $product->id }}"> {{-- Hidden input for product ID --}}
        <div class="mb-3">
            <label for="product" class="form-label">Product</label>
            <input type="text" name="product" class="form-control" id="product" value="{{ $product->name }}">
        </div>
        <div class="dropdown">
            <select class="form-select" name="category" aria-label="Default select example">
                <option>Open this select menu</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $product->category) selected @endif>{{ $category->category }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
