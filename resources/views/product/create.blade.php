@extends('inc.add')
@section('content')
<div class="container">
<form action="{{route('product.save')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="product" class="form-label">Product</label>
    <input type="text" name="product" class="form-control" id="product" >
    
  </div>
  <div class="dropdown">

  <select class="form-select" name="category" aria-label="Default select example">
  <option selected>Open this select menu</option>
  
  @foreach($categories as $category)
  <option value="{{$category->id}}">{{$category->category}}</option>
  @endforeach
</select>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>    
</div>


@endsection

