@extends('inc.add')
@section('content')

    <h1>Products</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Product Category</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td> 
            <td>{{$product->name}}</td>
            <td>{{$product->category}}</td>
            <td>
                <a href="{{route('product.edit',['product'=>$product])}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </td>
            <td>
              <i class="fa fa-trash" aria-hidden="true" onclick="showDeleteConfirmationModal({{ $product->id }})"></i>
            </td>
        </tr>

        @endforeach
  </tbody>
</table>

{{-- Delete confirmation modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete Product</h5>
        <button type="button" onclick="closeModal()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you want to delte the prodcut?
      </div>
      <div class="modal-footer">
        <button onclick="closeModal()" type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button onclick="deleteProduct()" type="button" class="btn btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div>
@endsection


  <script>
    var productID = null;
    function showDeleteConfirmationModal($pID){
      productID = $pID
      $('#exampleModalCenter').modal('show')
    }

    function closeModal(){
      $('#exampleModalCenter').modal('hide')
    }

    function deleteProduct(){
      if (productID != null) {
        var url = '{{ route("product.delete", ":productID") }}';
        url = url.replace(':productID', productID);
        window.location.href = url;
      }
    }
  </script>