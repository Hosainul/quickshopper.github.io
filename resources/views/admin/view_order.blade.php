@extends('admin_layout')
@section('admin_content')


<div class="row-fluid sortable">
    <div class="box span4">
        <div class="box-header">
            <h2> <i class="halflings-icon align-justity"></i> <span class="break"></span>Customer Details </h2>
        </div>
        <div class="box-content">
            <table class="table">
                <thead>
                <tr>
                    <th>Customer Name </th>
                    <th>Phone Number </th>
                </tr>
                </thead>

                @foreach ($order_by_id as $v_order) 
                <tr>
                     <td>{{$v_order->customer_name}}</td>
                     <td>{{$v_order->customer_mobile}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="box span8">
        <div class="box-header">
            <h2> <i class="halflings-icon align-justity"></i> <span class="break"></span>Customer Details </h2>
        </div>
        <div class="box-content">
            <table class="table">
                <thead>
                    <tr>
                        <th>Full Name </th>
                        <th>Phone Number </th>
                        <th>Email Address </th>
                        <th>Address </th>
                    </tr>
                </thead>

                @foreach ($order_by_id as $v_order) 
                    <tr>
                        <td>{{$v_order->shipping_first_name}} {{$v_order->shipping_first_name}}</td>
                        <td>{{$v_order->shipping_address}}</td>
                        <td>{{$v_order->shipping_mobile}}</td>
                        <td>{{$v_order->customer_email}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <div class="box span10">
        <div class="box-header">
            <h2> <i class="halflings-icon align-justity"></i> <span class="break"></span>Customer Details </h2>
        </div>
        <div class="box-content">
            <table class="table">
                <thead>
                    <tr>
                        <th>SN.</th>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                    </tr>
                </thead>

                @foreach ($order_by_id as $v_order)
                    <tr>
                        <td></td>
                        <td>{{$v_order->product_id}}</td>
                        <td>{{$v_order->product_name}}</td>
                        <td>{{$v_order->product_price}}</td>
                        <td>{{$v_order->product_sales_quantity}}</td>
                        <td>{{$v_order->order_total}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


</div>





@endsection