@extends('inc.add')
@section('content')

<form action="{{route('category.save')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input type="text" name="category" class="form-control" id="category" >
    
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>    
@endsection

