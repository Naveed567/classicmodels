@extends('layout.app') 

@section('content')
     
    <div class="container py-3" >
        <div class="jumbotron">
            <h1 class="display-4">Maximam And Minimum Sold Cars</h1>
            <p class="lead">Here is the top 5 Most Sold Cars and Top Five Least Sold Cars</p>
          
          </div>

          <h3 class="text-center">Top 5 Most Sold Cars</h3>
<table class="table">
    <thead>
      <tr> 
        <th scope="col">Product Id</th>
        <th scope="col">Product Name</th>
        <th scope="col">Total Sales</th> 
      </tr>
    </thead>
    <tbody>

        @if(!empty($productbysales) && $productbysales->count())
            @foreach($productbysales as $key => $value)
      <tr> 
        <td>{{ $value->productCode }}</td>
        <td>{{ $value->productName}}</td>
        <td>{{ $value->total_sales}}</td>     
      </tr>
      @endforeach
  @endif


   <br> <br>
  
  <table class="table">
    <h3 class="text-center">Top 5 Least Sold Cars</h3>
      <thead>
        <tr> 
          <th scope="col">Product Id</th>
          <th scope="col">Product Name</th>
          <th scope="col">Total Sales</th> 
        </tr>
      </thead>
      <tbody>
  
          @if(!empty($productbysales) && $productbysales->count())
              @foreach($productbysalesmin as $key => $data)
        <tr> 
          <td>{{ $data->productCode }}</td>
          <td>{{ $data->productName}}</td>
          <td>{{ $data->total_sales}}</td>     
        </tr>
        @endforeach
    @endif
    </tbody>
  </table>
    </div>

    @endsection
