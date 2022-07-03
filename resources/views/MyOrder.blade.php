@extends('layouts/app')
@section('content')
<style>
td,tr {
text-align: center;
}
th {
background-color: black;
color: white;
}

</style>
@if ($final_order->isEmpty())
<h3 class="alert alert-danger" style="text-align: center;margin-top:50px">لايوجد طلبات ! قم بالاضافة الان!</h3>

@else

<div class="container">
<h1 style="margin-top: 40px;text-align: center">طلباتي</h1>
<ol>
@foreach ($final_order as $key => $order)

<li style="">
<table class="table table-striped table-hover table-responsive-sm ">


<tr>
<th>الصنف</th>
<th>السعر</th>
<th>الكمية</th>
<th>السعر الاجمالي</th>
</tr>
<tr>
@foreach ($order as $orders)

<td>{{$orders->product->name}}</td>
<td>{{$orders->product->salary}}</td>
<td> {{$orders->count}} </td>
<td> @php
static $sum    =0;
$sum+=   $orders->product->salary * $orders->count;
echo  $orders->product->salary * $orders->count;
@endphp </td>

</tr>@endforeach 

</th>
</tr>
<hr>
<tr>
    <td class="table-danger">ملاحظات</td>
    <td class="table-danger" colspan="3">
        @if ($orders->note)
        ({{$orders->note }})
        @else
        لا يوجد
        @endif    
    
    </td>
<tr>
<td class="table-info"> العنوان ({{$orders->location }})</td>
<td class="table-info"> تاريخ الطلب ({{$orders->created_at->format('d/m/Y') }})</td>
<td class="table-info"> وقت الطلب ({{$orders->created_at->format("H:i") }})</td>

<td class="table-info"> المبلغ المطلوب <span style="color: red;font-size: 13px;">(غير شامل التوصيل)</span> <span style="font-size: 19px;color: rgb(0, 37, 116);background-color:aliceblue;padding :5px">
@php
echo $sum;
$sum =0;

@endphp    
</span></td>
</tr>  
</table>   </li>
<hr>



@endforeach
</ol>

</div>
</div>


@endif


@endsection


