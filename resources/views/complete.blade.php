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
<div class="container" style="margin-top: 30px">


    <h1 style="text-align: center"><span style="color: red;font-size:16px;">*الخطوة الأخيرة ، أدخل العنوان وانقر على (تأكيد طلبك) لإرسال الطلب إلى المطعم</span></h1>

<div class="table-responsive">

<table class="table table-bordered table-striped table-highlight">
<tr>
<td class="table-success"><i class="fas fa-user"></i> الزبون</td>
<td class="table-success" >{{Auth::user()->name}}</td>
<td class="table-success"><i class="fas fa-phone"></i> رقم الهاتف</td>
<td class="table-success">{{Auth::user()->username}}</td>
</tr>

<tr>
<form id="title" action="" method="post">
@csrf
<td colspan="2"  class="">  
     <input type="text"   class="form-control"  name="location"  placeholder="(اجباري)أدخل العنوان">
     <span class="text-danger error-text location_err" ></span>

    </td>

<td  class=""><button type="submit" class="pull-right btn btn-success">تأكيد طلبك</button><br>
</td>
<td  class=""><button class="btn btn-danger" onclick="window.location.href='/delete'" >الغاء الطلب</button></td>
</tr>
<tr>
    <td colspan="2"  class="">  
        <input type="text"   class="form-control"  name="note"  placeholder="(اجباري)أدخل العنوان">
         <span class="text-danger error-text note_err" ></span>
    
        </td>
    </tr>
    

</form>
</table>
</div>
<hr>

<table class="table table-striped table-hover table-responsive-sm ">
    <h1 style="text-align: center">الفاتورة </h1><hr>

<tr>
<th>الصنف</th>
<th>السعر</th>
<th>الكمية</th>
<th>السعر الاجمالي</th>

</tr>
@foreach($final_order as $item)
<tr>
<td>{{$item->product->name}}</td>

<td>{{$item->product->salary}}</td>
<td> {{$item->count}} </td>
<td>{{$item->product->salary * $item->count  }}</td> 
</tr>
@endforeach        
</th>
</tr>
<tr>
<td ></td>
<td ></td>
<td > المبلغ المطلوب <span style="color: red">(غير شامل التوصيل)</span></td>
<td class="table-danger">{{$sum }}</td> 
</tr>
</table>          
</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

$.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
   $('#title').submit(function(e) {
       e.preventDefault();

       let formData = new FormData(this);
        $('.location_err').text('');
        $('.note_err').text('');

       $.ajax({
          type:'POST',
          url: '/SaveLocation',
           data: formData,
           contentType: false,
           processData: false,
           success: function(data) {
        printMsg(data);
        }
        });
        }); 
        function printMsg (msg) {
        if($.isEmptyObject(msg.error)){
        alert("(تمت العمليه بنجاح ) سنقوم بإعداد طلبك على الفور. شكرا لك لاختيارنا ");
        window.location.href = "/wait"}


        else{
        $.each( msg.error, function( key, value ) {
        $('.'+key+'_err').text(value);
        });
        }
        
        }




</script>

@endsection
