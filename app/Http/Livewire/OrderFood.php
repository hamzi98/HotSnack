<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\order;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class OrderFood extends Component
{

public $SumProduct =0;public  $sum=0  ;
public  $s1=0  ;public $s2 = 0;   public $s3 = 0;
public $s4 = 0; public $s5 = 0;   public $s6 = 0;
public $s7 = 0; public $s8 = 0;   public $s9 = 0;
public $s10 = 0;   public $s11 = 0;
public $s12 = 0; public $s13 = 0;   public $s14 = 0;
public $s15 = 0; public $s16 = 0;   public $s17 = 0;
public $s18 = 0; public $s19 = 0;   public $s20 = 0;public $s21 = 0;public $s22 = 0;
public $s23 = 0; public $s24 = 0;   public $s25 = 0;
public $s26 = 0; public $s27 = 0;   public $s28 = 0;
public $s29 = 0; public $s30 = 0;   public $s31 = 0;
public $s32 = 0;  public $s33 = 0;  public $s34 = 0; 
public $s35 = 0;  public $s36 = 0;  public $s37 = 0; 
public $s38 = 0;  public $s39 = 0;  public $s40 = 0; 
public $s41 = 0;  public $s42= 0;  public $s43 = 0;
public $s44 = 0;  public $s45 = 0;  public $s46 = 0;
public $s47 = 0;  public $s48 = 0;  public $s49 = 0;
public $s50 = 0; public $s51 = 0;public $s52 = 0;
public $s53 = 0; public $s54 = 0;public $s55 = 0;
public $s56 = 0; public $s57 = 0;public $s58 = 0;



public function sum(){
$this->SumProduct= $this->s1+$this->s2+$this->s3+$this->s4+$this->s5+$this->s6+$this->s7+$this->s8+$this->s9+$this->s10+$this->s11+$this->s12+$this->s13+$this->s14+$this->s15+$this->s16+$this->s17+$this->s18+$this->s19+$this->s20+$this->s21+$this->s22+$this->s23+$this->s24+$this->s25+$this->s26+$this->s27+$this->s28+$this->s29+$this->s30+$this->s31+$this->s32+$this->s33+$this->s34+$this->s35+$this->s36+$this->s37+$this->s38+$this->s39+$this->s40+$this->s41+$this->s42+$this->s43+$this->s44+$this->s45+$this->s46+$this->s47+$this->s48+$this->s49+$this->s50+$this->s51+$this->s52+$this->s53+$this->s54+$this->s55+$this->s56+$this->s57+$this->s58;
}

public function s1_Ad(){ 
    $find=order::where('product_id',1)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '1')->where('done',null)->update(['count' => 1+$this->s1]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'1',
    'count'=>1+$this->s1]);
    }
$this->s1++;$this->sum();}

public function s1_De(){
    $find=order::where('product_id',1)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '1')->where('done',null)->update(['count' => $this->s1-1]);
if ($this->s1!=0) $this->s1--;$this->sum();}

public function s2_Ad(){ 
    $find=order::where('product_id',2)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '2')->where('done',null)->update(['count' => 1+$this->s2]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'2',
    'count'=>1+$this->s2]);
    }
$this->s2++;$this->sum();}

public function s2_De(){
    $find=order::where('product_id',2)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '2')->where('done',null)->update(['count' => $this->s2-1]);
if ($this->s2!=0) $this->s2--;$this->sum();}

public function s3_Ad(){ 
    $find=order::where('product_id',3)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '3')->where('done',null)->update(['count' => 1+$this->s3]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'3',
    'count'=>1+$this->s3]);
    }
$this->s3++;$this->sum();}

public function s3_De(){
    $find=order::where('product_id',3)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '3')->where('done',null)->update(['count' => $this->s3-1]);
if ($this->s3!=0) $this->s3--;$this->sum();}


public function s4_Ad(){ 
    $find=order::where('product_id',4)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '4')->where('done',null)->update(['count' => 1+$this->s4]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'4',
    'count'=>1+$this->s4]);
    }
$this->s4++;$this->sum();}

public function s4_De(){
    $find=order::where('product_id',4)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '4')->where('done',null)->update(['count' => $this->s4-1]);
if ($this->s4!=0) $this->s4--;$this->sum();}


public function s5_Ad(){ 
    $find=order::where('product_id',5)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '5')->where('done',null)->update(['count' => 1+$this->s5]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'5',
    'count'=>1+$this->s5]);
    }
$this->s5++;$this->sum();}

public function s5_De(){
    $find=order::where('product_id',5)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '5')->where('done',null)->update(['count' => $this->s5-1]);
if ($this->s5!=0) $this->s5--;$this->sum();}
public function s6_Ad(){ 
    $find=order::where('product_id',6)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '6')->where('done',null)->update(['count' => 1+$this->s6]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'6',
    'count'=>1+$this->s6]);
    }
$this->s6++;$this->sum();}

public function s6_De(){
    $find=order::where('product_id',6)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '6')->where('done',null)->update(['count' => $this->s6-1]);
if ($this->s6!=0) $this->s6--;$this->sum();}

public function s7_Ad(){ 
    $find=order::where('product_id',7)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '7')->where('done',null)->update(['count' => 1+$this->s7]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'7',
    'count'=>1+$this->s7]);
    }
$this->s7++;$this->sum();}

public function s7_De(){
    $find=order::where('product_id',7)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '7')->where('done',null)->update(['count' => $this->s7-1]);
if ($this->s7!=0) $this->s7--;$this->sum();}

public function s8_Ad(){ 
    $find=order::where('product_id',8)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '8')->where('done',null)->update(['count' => 1+$this->s8]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'8',
    'count'=>1+$this->s8]);
    }
$this->s8++;$this->sum();}

public function s8_De(){
    $find=order::where('product_id',8)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '8')->where('done',null)->update(['count' => $this->s8-1]);
if ($this->s8!=0) $this->s8--;$this->sum();}

public function s9_Ad(){ 
    $find=order::where('product_id',9)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '9')->where('done',null)->update(['count' => 1+$this->s9]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'9',
    'count'=>1+$this->s9]);
    }
$this->s9++;$this->sum();}

public function s9_De(){
    $find=order::where('product_id',9)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '9')->where('done',null)->update(['count' => $this->s9-1]);
if ($this->s9!=0) $this->s9--;$this->sum();}

public function s10_Ad(){ 
    $find=order::where('product_id',10)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '10')->where('done',null)->update(['count' => 1+$this->s10]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'10',
    'count'=>1+$this->s10]);
    }
$this->s10++;$this->sum();}

public function s10_De(){
    $find=order::where('product_id',10)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '10')->where('done',null)->update(['count' => $this->s10-1]);
if ($this->s10!=0) $this->s10--;$this->sum();}

public function s11_Ad(){ 
    $find=order::where('product_id',11)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '11')->where('done',null)->update(['count' => 1+$this->s11]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'11',
    'count'=>1+$this->s11]);
    }
$this->s11++;$this->sum();}

public function s11_De(){
    $find=order::where('product_id',11)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '11')->where('done',null)->update(['count' => $this->s11-1]);
if ($this->s11!=0) $this->s11--;$this->sum();}


public function s12_Ad(){ 
    $find=order::where('product_id',12)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '12')->where('done',null)->update(['count' => 1+$this->s12]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'12',
    'count'=>1+$this->s12]);
    }
$this->s12++;$this->sum();}

public function s12_De(){
    $find=order::where('product_id',12)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '12')->where('done',null)->update(['count' => $this->s12-1]);
if ($this->s12!=0) $this->s12--;$this->sum();}

public function s13_Ad(){ 
    $find=order::where('product_id',13)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '13')->where('done',null)->update(['count' => 1+$this->s13]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'13',
    'count'=>1+$this->s13]);
    }
$this->s13++;$this->sum();}

public function s13_De(){
    $find=order::where('product_id',13)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '13')->where('done',null)->update(['count' => $this->s13-1]);
if ($this->s13!=0) $this->s13--;$this->sum();}


public function s14_Ad(){ 
    $find=order::where('product_id',14)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '14')->where('done',null)->update(['count' => 1+$this->s14]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'14',
    'count'=>1+$this->s14]);
    }
$this->s14++;$this->sum();}

public function s14_De(){
    $find=order::where('product_id',14)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '14')->where('done',null)->update(['count' => $this->s14-1]);
if ($this->s14!=0) $this->s14--;$this->sum();}

public function s15_Ad(){ 
    $find=order::where('product_id',15)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '15')->where('done',null)->update(['count' => 1+$this->s15]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'15',
    'count'=>1+$this->s15]);
    }
$this->s15++;$this->sum();}

public function s15_De(){
    $find=order::where('product_id',15)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '15')->where('done',null)->update(['count' => $this->s15-1]);
if ($this->s15!=0) $this->s15--;$this->sum();}

public function s16_Ad(){ 
    $find=order::where('product_id',16)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '16')->where('done',null)->update(['count' => 1+$this->s16]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'16',
    'count'=>1+$this->s16]);
    }
$this->s16++;$this->sum();}

public function s16_De(){
    $find=order::where('product_id',16)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '16')->where('done',null)->update(['count' => $this->s16-1]);
if ($this->s16!=0) $this->s16--;$this->sum();}

public function s17_Ad(){ 
    $find=order::where('product_id',17)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '17')->where('done',null)->update(['count' => 1+$this->s17]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'17',
    'count'=>1+$this->s17]);
    }
$this->s17++;$this->sum();}

public function s17_De(){
    $find=order::where('product_id',17)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '17')->where('done',null)->update(['count' => $this->s17-1]);
if ($this->s17!=0) $this->s17--;$this->sum();}

public function s18_Ad(){ 
    $find=order::where('product_id',18)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '18')->where('done',null)->update(['count' => 1+$this->s18]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'18',
    'count'=>1+$this->s18]);
    }
$this->s18++;$this->sum();}

public function s18_De(){
    $find=order::where('product_id',18)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '18')->where('done',null)->update(['count' => $this->s18-1]);
if ($this->s18!=0) $this->s18--;$this->sum();}


public function s19_Ad(){ 
    $find=order::where('product_id',19)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '19')->where('done',null)->update(['count' => 1+$this->s19]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'19',
    'count'=>1+$this->s19]);
    }
$this->s19++;$this->sum();}

public function s19_De(){
    $find=order::where('product_id',19)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '19')->where('done',null)->update(['count' => $this->s19-1]);
if ($this->s19!=0) $this->s19--;$this->sum();}
public function s20_Ad(){ 
    $find=order::where('product_id',20)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '20')->where('done',null)->update(['count' => 1+$this->s20]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'20',
    'count'=>1+$this->s20]);
    }
$this->s20++;$this->sum();}

public function s20_De(){
    $find=order::where('product_id',20)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '20')->where('done',null)->update(['count' => $this->s20-1]);
if ($this->s20!=0) $this->s20--;$this->sum();}


public function s21_Ad(){ 
    $find=order::where('product_id',21)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '21')->where('done',null)->update(['count' => 1+$this->s21]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'21',
    'count'=>1+$this->s21]);
    }
$this->s21++;$this->sum();}

public function s21_De(){
    $find=order::where('product_id',21)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '21')->where('done',null)->update(['count' => $this->s21-1]);
if ($this->s21!=0) $this->s21--;$this->sum();}

public function s22_Ad(){ 
    $find=order::where('product_id',22)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '22')->where('done',null)->update(['count' => 1+$this->s22]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'22',
    'count'=>1+$this->s22]);
    }
$this->s22++;$this->sum();}

public function s22_De(){
    $find=order::where('product_id',22)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '22')->where('done',null)->update(['count' => $this->s22-1]);
if ($this->s22!=0) $this->s22--;$this->sum();}


public function s23_Ad(){ 
    $find=order::where('product_id',23)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '23')->where('done',null)->update(['count' => 1+$this->s23]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'23',
    'count'=>1+$this->s23]);
    }
$this->s23++;$this->sum();}

public function s23_De(){
    $find=order::where('product_id',23)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '23')->where('done',null)->update(['count' => $this->s23-1]);
if ($this->s23!=0) $this->s23--;$this->sum();}


public function s24_Ad(){ 
    $find=order::where('product_id',24)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '24')->where('done',null)->update(['count' => 1+$this->s24]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'24',
    'count'=>1+$this->s24]);
    }
$this->s24++;$this->sum();}

public function s24_De(){
    $find=order::where('product_id',24)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '24')->where('done',null)->update(['count' => $this->s24-1]);
if ($this->s24!=0) $this->s24--;$this->sum();}


public function s25_Ad(){ 
    $find=order::where('product_id',25)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '25')->where('done',null)->update(['count' => 1+$this->s25]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'25',
    'count'=>1+$this->s25]);
    }
$this->s25++;$this->sum();}

public function s25_De(){
    $find=order::where('product_id',25)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '25')->where('done',null)->update(['count' => $this->s25-1]);
if ($this->s25!=0) $this->s25--;$this->sum();}

public function s26_Ad(){ 
    $find=order::where('product_id',26)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '26')->where('done',null)->update(['count' => 1+$this->s26]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'26',
    'count'=>1+$this->s26]);
    }
$this->s26++;$this->sum();}

public function s26_De(){
    $find=order::where('product_id',26)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '26')->where('done',null)->update(['count' => $this->s26-1]);
if ($this->s26!=0) $this->s26--;$this->sum();}

public function s27_Ad(){ 
    $find=order::where('product_id',27)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '27')->where('done',null)->update(['count' => 1+$this->s27]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'27',
    'count'=>1+$this->s27]);
    }
$this->s27++;$this->sum();}

public function s27_De(){
    $find=order::where('product_id',27)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '27')->where('done',null)->update(['count' => $this->s27-1]);
if ($this->s27!=0) $this->s27--;$this->sum();}

public function s28_Ad(){ 
    $find=order::where('product_id',28)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '28')->where('done',null)->update(['count' => 1+$this->s28]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'28',
    'count'=>1+$this->s28]);
    }
$this->s28++;$this->sum();}

public function s28_De(){
    $find=order::where('product_id',28)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '28')->where('done',null)->update(['count' => $this->s28-1]);
if ($this->s28!=0) $this->s28--;$this->sum();}

public function s29_Ad(){ 
    $find=order::where('product_id',29)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '29')->where('done',null)->update(['count' => 1+$this->s29]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'29',
    'count'=>1+$this->s29]);
    }
$this->s29++;$this->sum();}

public function s29_De(){
    $find=order::where('product_id',29)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '29')->where('done',null)->update(['count' => $this->s29-1]);
if ($this->s29!=0) $this->s29--;$this->sum();}


public function s30_Ad(){ 
    $find=order::where('product_id',30)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '30')->where('done',null)->update(['count' => 1+$this->s30]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'30',
    'count'=>1+$this->s30]);
    }
$this->s30++;$this->sum();}

public function s30_De(){
    $find=order::where('product_id',30)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '30')->where('done',null)->update(['count' => $this->s30-1]);
if ($this->s30!=0) $this->s30--;$this->sum();}

public function s31_Ad(){ 
    $find=order::where('product_id',31)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '31')->where('done',null)->update(['count' => 1+$this->s31]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'31',
    'count'=>1+$this->s31]);
    }
$this->s31++;$this->sum();}

public function s31_De(){
    $find=order::where('product_id',31)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '31')->where('done',null)->update(['count' => $this->s31-1]);
if ($this->s31!=0) $this->s31--;$this->sum();}


public function s32_Ad(){ 
    $find=order::where('product_id',32)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '32')->where('done',null)->update(['count' => 1+$this->s32]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'32',
    'count'=>1+$this->s32]);
    }
$this->s32++;$this->sum();}

public function s32_De(){
    $find=order::where('product_id',32)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '32')->where('done',null)->update(['count' => $this->s32-1]);
if ($this->s32!=0) $this->s32--;$this->sum();}

public function s33_Ad(){ 
    $find=order::where('product_id',33)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '33')->where('done',null)->update(['count' => 1+$this->s33]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'33',
    'count'=>1+$this->s33]);
    }
$this->s33++;$this->sum();}

public function s33_De(){
    $find=order::where('product_id',33)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '33')->where('done',null)->update(['count' => $this->s33-1]);
if ($this->s33!=0) $this->s33--;$this->sum();}


public function s34_Ad(){ 
    $find=order::where('product_id',34)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '34')->where('done',null)->update(['count' => 1+$this->s34]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'34',
    'count'=>1+$this->s34]);
    }
$this->s34++;$this->sum();}

public function s34_De(){
    $find=order::where('product_id',34)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '34')->where('done',null)->update(['count' => $this->s34-1]);
if ($this->s34!=0) $this->s34--;$this->sum();}


public function s35_Ad(){ 
    $find=order::where('product_id',35)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '35')->where('done',null)->update(['count' => 1+$this->s35]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'35',
    'count'=>1+$this->s35]);
    }
$this->s35++;$this->sum();}

public function s35_De(){
    $find=order::where('product_id',35)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '35')->where('done',null)->update(['count' => $this->s35-1]);
if ($this->s35!=0) $this->s35--;$this->sum();}

public function s36_Ad(){ 
    $find=order::where('product_id',36)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '36')->where('done',null)->update(['count' => 1+$this->s36]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'36',
    'count'=>1+$this->s36]);
    }
$this->s36++;$this->sum();}

public function s36_De(){
    $find=order::where('product_id',36)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '36')->where('done',null)->update(['count' => $this->s36-1]);
if ($this->s36!=0) $this->s36--;$this->sum();}

public function s37_Ad(){ 
    $find=order::where('product_id',37)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '37')->where('done',null)->update(['count' => 1+$this->s37]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'37',
    'count'=>1+$this->s37]);
    }
$this->s37++;$this->sum();}

public function s37_De(){
    $find=order::where('product_id',37)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '37')->where('done',null)->update(['count' => $this->s37-1]);
if ($this->s37!=0) $this->s37--;$this->sum();}


public function s38_Ad(){ 
    $find=order::where('product_id',38)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '38')->where('done',null)->update(['count' => 1+$this->s38]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'38',
    'count'=>1+$this->s38]);
    }
$this->s38++;$this->sum();}

public function s38_De(){
    $find=order::where('product_id',38)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '38')->where('done',null)->update(['count' => $this->s38-1]);
if ($this->s38!=0) $this->s38--;$this->sum();}


public function s39_Ad(){ 
    $find=order::where('product_id',39)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '39')->where('done',null)->update(['count' => 1+$this->s39]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'39',
    'count'=>1+$this->s39]);
    }
$this->s39++;$this->sum();}

public function s39_De(){
    $find=order::where('product_id',39)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '39')->where('done',null)->update(['count' => $this->s39-1]);
if ($this->s39!=0) $this->s39--;$this->sum();}

public function s40_Ad(){ 
    $find=order::where('product_id',40)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '40')->where('done',null)->update(['count' => 1+$this->s40]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'40',
    'count'=>1+$this->s40]);
    }
$this->s40++;$this->sum();}

public function s40_De(){
    $find=order::where('product_id',40)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '40')->where('done',null)->update(['count' => $this->s40-1]);
if ($this->s40!=0) $this->s40--;$this->sum();}

public function s41_Ad(){ 
    $find=order::where('product_id',41)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '41')->where('done',null)->update(['count' => 1+$this->s41]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'41',
    'count'=>1+$this->s41]);
    }
$this->s41++;$this->sum();}

public function s41_De(){
    $find=order::where('product_id',41)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '41')->where('done',null)->update(['count' => $this->s41-1]);
if ($this->s41!=0) $this->s41--;$this->sum();}


public function s42_Ad(){ 
    $find=order::where('product_id',42)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '42')->where('done',null)->update(['count' => 1+$this->s42]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'42',
    'count'=>1+$this->s42]);
    }
$this->s42++;$this->sum();}

public function s42_De(){
    $find=order::where('product_id',42)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '42')->where('done',null)->update(['count' => $this->s42-1]);
if ($this->s42!=0) $this->s42--;$this->sum();}



public function s43_Ad(){ 
    $find=order::where('product_id',43)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '43')->where('done',null)->update(['count' => 1+$this->s43]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'43',
    'count'=>1+$this->s43]);
    }
$this->s43++;$this->sum();}

public function s43_De(){
    $find=order::where('product_id',43)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '43')->where('done',null)->update(['count' => $this->s43-1]);
if ($this->s43!=0) $this->s43--;$this->sum();}


public function s44_Ad(){ 
    $find=order::where('product_id',44)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '44')->where('done',null)->update(['count' => 1+$this->s44]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'44',
    'count'=>1+$this->s44]);
    }
$this->s44++;$this->sum();}

public function s44_De(){
    $find=order::where('product_id',44)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '44')->where('done',null)->update(['count' => $this->s44-1]);
if ($this->s44!=0) $this->s44--;$this->sum();}


public function s45_Ad(){ 
    $find=order::where('product_id',45)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '45')->where('done',null)->update(['count' => 1+$this->s45]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'45',
    'count'=>1+$this->s45]);
    }
$this->s45++;$this->sum();}

public function s45_De(){
    $find=order::where('product_id',45)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '45')->where('done',null)->update(['count' => $this->s45-1]);
if ($this->s45!=0) $this->s45--;$this->sum();}

public function s46_Ad(){ 
    $find=order::where('product_id',46)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '46')->where('done',null)->update(['count' => 1+$this->s46]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'46',
    'count'=>1+$this->s46]);
    }
$this->s46++;$this->sum();}

public function s46_De(){
    $find=order::where('product_id',46)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '46')->where('done',null)->update(['count' => $this->s46-1]);
if ($this->s46!=0) $this->s46--;$this->sum();}


public function s47_Ad(){ 
    $find=order::where('product_id',47)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '47')->where('done',null)->update(['count' => 1+$this->s47]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'47',
    'count'=>1+$this->s47]);
    }
$this->s47++;$this->sum();}

public function s47_De(){
    $find=order::where('product_id',47)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '47')->where('done',null)->update(['count' => $this->s47-1]);
if ($this->s47!=0) $this->s47--;$this->sum();}


public function s48_Ad(){ 
    $find=order::where('product_id',48)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '48')->where('done',null)->update(['count' => 1+$this->s48]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'48',
    'count'=>1+$this->s48]);
    }
$this->s48++;$this->sum();}

public function s48_De(){
    $find=order::where('product_id',48)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '48')->where('done',null)->update(['count' => $this->s48-1]);
if ($this->s48!=0) $this->s48--;$this->sum();}

public function s49_Ad(){ 
    $find=order::where('product_id',49)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '49')->where('done',null)->update(['count' => 1+$this->s49]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'49',
    'count'=>1+$this->s49]);
    }
$this->s49++;$this->sum();}

public function s49_De(){
    $find=order::where('product_id',49)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '49')->where('done',null)->update(['count' => $this->s49-1]);
if ($this->s49!=0) $this->s49--;$this->sum();}


public function s50_Ad(){ 
    $find=order::where('product_id',50)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '50')->where('done',null)->update(['count' => 1+$this->s50]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'50',
    'count'=>1+$this->s50]);
    }
$this->s50++;$this->sum();}

public function s50_De(){
    $find=order::where('product_id',50)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '50')->where('done',null)->update(['count' => $this->s50-1]);
if ($this->s50!=0) $this->s50--;$this->sum();}

public function s51_Ad(){ 
    $find=order::where('product_id',51)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '51')->where('done',null)->update(['count' => 1+$this->s51]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'51',
    'count'=>1+$this->s51]);
    }
$this->s51++;$this->sum();}

public function s51_De(){
    $find=order::where('product_id',51)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '51')->where('done',null)->update(['count' => $this->s51-1]);
if ($this->s51!=0) $this->s51--;$this->sum();}

public function s52_Ad(){ 
    $find=order::where('product_id',52)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '52')->where('done',null)->update(['count' => 1+$this->s52]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'52',
    'count'=>1+$this->s52]);
    }
$this->s52++;$this->sum();}

public function s52_De(){
    $find=order::where('product_id',52)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '52')->where('done',null)->update(['count' => $this->s52-1]);
if ($this->s52!=0) $this->s52--;$this->sum();}

public function s53_Ad(){ 
    $find=order::where('product_id',53)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '53')->where('done',null)->update(['count' => 1+$this->s53]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'53',
    'count'=>1+$this->s53]);
    }
$this->s53++;$this->sum();}

public function s53_De(){
    $find=order::where('product_id',53)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '53')->where('done',null)->update(['count' => $this->s53-1]);
if ($this->s53!=0) $this->s53--;$this->sum();}


public function s54_Ad(){ 
    $find=order::where('product_id',54)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '54')->where('done',null)->update(['count' => 1+$this->s54]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'54',
    'count'=>1+$this->s54]);
    }
$this->s54++;$this->sum();}

public function s54_De(){
    $find=order::where('product_id',54)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '54')->where('done',null)->update(['count' => $this->s54-1]);
if ($this->s54!=0) $this->s54--;$this->sum();}

public function s55_Ad(){ 
    $find=order::where('product_id',55)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '55')->where('done',null)->update(['count' => 1+$this->s55]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'55',
    'count'=>1+$this->s55]);
    }
$this->s55++;$this->sum();}

public function s55_De(){
    $find=order::where('product_id',55)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '55')->where('done',null)->update(['count' => $this->s55-1]);
if ($this->s55!=0) $this->s55--;$this->sum();}


public function s56_Ad(){ 
    $find=order::where('product_id',56)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '56')->where('done',null)->update(['count' => 1+$this->s56]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'56',
    'count'=>1+$this->s56]);
    }
$this->s56++;$this->sum();}

public function s56_De(){
    $find=order::where('product_id',56)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '56')->where('done',null)->update(['count' => $this->s56-1]);
if ($this->s56!=0) $this->s56--;$this->sum();}


public function s57_Ad(){ 
    $find=order::where('product_id',57)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '57')->where('done',null)->update(['count' => 1+$this->s57]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'57',
    'count'=>1+$this->s57]);
    }
$this->s57++;$this->sum();}

public function s57_De(){
    $find=order::where('product_id',57)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '57')->where('done',null)->update(['count' => $this->s57-1]);
if ($this->s57!=0) $this->s57--;$this->sum();}

public function s58_Ad(){ 
    $find=order::where('product_id',58)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    order::where('user_id',Auth::id())->where('product_id', '58')->where('done',null)->update(['count' => 1+$this->s58]);
    else{
    order::Create([
    'user_id'=>Auth::id(),
    'product_id'=>'58',
    'count'=>1+$this->s58]);
    }
$this->s58++;$this->sum();}

public function s58_De(){
    $find=order::where('product_id',58)->where('user_id',Auth::id())->where('done',null)->first();
    if($find)
    if($find->count ==1)
    $find->delete();
    elseif($find)
    order::where('user_id',Auth::id())->where('product_id', '58')->where('done',null)->update(['count' => $this->s58-1]);
if ($this->s58!=0) $this->s58--;$this->sum();}



public function delet(){
    order::where('user_id',Auth::id())->delete();
    return redirect('/menus');
}

public function render(){

$this->SumProduct=$order=order::where('user_id',Auth::id())->sum('count');
$total=0;
$order=order::where('user_id',Auth::id())->get();
foreach($order as $item){
    for ($i=1; $i <59 ; $i++) { 
        $var="s".$i;
        if($item->product_id == $i)
        $this->$var=$item->count;
        }
        $total+=$item->count * $item->product->salary;      

}



return view('livewire.order-food',['order'=>$order],['total'=>$total]);
}







}
