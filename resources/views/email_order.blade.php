<!DOCTYPE html>
<html dir="rtl">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-spacing: 0;
  width: 100%;
  border: 3px solid black;
}
th, td {
  text-align: right ;
  padding: 6px;
	border: 1px solid black;
    font-size:20px;
text-align: right;
}
body{
    text-align: right ;
}
</style>
</head>
<body>

<h2 style="text-align: center">معلومات الزبون</h2>
<div style="overflow-x:auto;">
  <table>
    <tr>
        <th>اسم الزبون</th>
        <th>رقم الهاتف</th>
        <th>العنوان</th>
    </tr>
    <tr>
        <td class="table-danger">  ({{Auth::user()->name }})</td>
        <td class="table-danger">  ({{Auth::user()->username  }})</td>
        <td class="table-danger">  ({{$add }})</td>
    </tr>
  </table>
</div>

<h2 style="text-align: center">معلومات الطلب</h2>
<div style="overflow-x:auto;">
  <table>
    <tr>
        <th>الصنف</th>
        <th>السعر</th>
        <th>الكمية</th>
        <th>السعر الاجمالي</th>          
    </tr>
    @foreach($order_items as $item)
    <tr>
    <td>{{$item->product->name}}</td>
    <td>{{$item->product->salary}}</td>
    <td> {{$item->count}}       </td>
    <td>{{$item->count * $item->product->salary }}</td> 
    </tr>
    @endforeach
    <tr>
      <th>ملاحظات</th>
      <th colspan="3">
        @if ($noite)
        ({{$noite }})
        @else
        لا يوجد
        @endif  </th>
      </tr>
    <tr>
        <th colspan="2">المبلغ المطلوب</th>
        <th colspan="2">({{$sum }})</th>
        </tr>
        
    </table>
</div>


</body>
</html>
