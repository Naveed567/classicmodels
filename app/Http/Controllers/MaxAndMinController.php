<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orderdetails;
use DB;
class MaxAndMinController extends Controller
{
    public function index()
    {
      $productbysales = DB::table('products')
    ->select([
        'products.productCode',
        'products.productName',
        DB::raw('SUM(orderdetails.quantityOrdered) as total_sales'),
    ])
    ->join('orderdetails', 'orderdetails.productCode', '=', 'products.productCode')
    ->join('orders', 'orderdetails.orderNumber', '=', 'orders.orderNumber')
    ->where([
        ['products.ProductLine', '=', 'Classic Cars'],
        ['orders.status','=','Shipped'],
          ])
    ->groupBy('products.productCode' ,'products.productName' )
    ->orderByDesc('total_sales')
    ->paginate(5);


    $productbysalesmin = DB::table('products')
    ->select([
        'products.productCode',
        'products.productName',
        DB::raw('SUM(orderdetails.quantityOrdered) as total_sales'),
    ])
    ->join('orderdetails', 'orderdetails.productCode', '=', 'products.productCode')
    ->join('orders', 'orderdetails.orderNumber', '=', 'orders.orderNumber')
    ->where([
        ['products.ProductLine', '=', 'Classic Cars'],
        ['orders.status','=','Shipped'],
          ])
    ->groupBy('products.productCode' ,'products.productName' )
    ->orderBy('total_sales', 'asc')
    ->paginate(5);

    return view('maxandmin', compact('productbysalesmin' , 'productbysales'));

    }
}
