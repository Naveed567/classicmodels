@extends('layout.app')

@section('content')

<div class="container py-3">
   

     <h2 class="text-center"> List of Cars</h2>
    <div class="row">
@if(!empty($products) && $products->count())
            @foreach($products as $key => $value)
<div class="col-4 py-3">
<div class="card" style="width: 18rem;">
  <img src ={{ url('/images/product.png') }} class="card-img-top" alt="Product Image">
  <div class="card-body">
    <h5 class="card-title">{{ $value->productName}}</h5>
    <p class="card-text">{{ $value->productLine}}</p>
    <h3 class="card-text">USD {{ $value->MSRP}}</h3>
    <div class="input-group">
      <button type="button" class="btn btn-danger btn-number" id={{'minus'.$value->productCode}} onclick="minus(this.id)">
        <span>-</span>
      </button>
   
  <input type="text" id={{'quantity'.$value->productCode}} name="quantity" class="form-control input-number text-center" value="1" min="1" max="100">
  
      <button type="button" class="quantity-right-plus btn btn-success btn-number" id={{'plus'.$value->productCode}} onclick="plus(this.id)">
          <span >+</span>
      </button>
   
    </div>
    <p class="text-center pt-3" ><a href={{ url('orders/'.$value->productCode) }} class="btn btn-primary ">Order Now</a></p>
  </div>
</div>


</div>

            @endforeach
            <br>
            <p class="text  -center">  {!! $products->links() !!}<p>
  @else
  <tr>
                    <td colspan="5">There are no data.</td>
                </tr>
  @endif
 

</div>
</div>
@endsection
