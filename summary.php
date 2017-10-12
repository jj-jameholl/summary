<?php
$t = str_pad('hello',100000,'world');
print_r(memory_get_usage());
print '<br>';
$t1 = str_pad('hello',100000,'fuck');
print_r(memory_get_usage());
print '<br>';
$h = &$t;
print_r(memory_get_usage());
print '<br>';
$t = $t1;
print_r(memory_get_usage());
print '<br>';
var_dump($t);
var_dump($h);
exit;
//$t1 = str_pad('hello',100000,'worl');
//print_r(memory_get_usage());
//print '<br>';
//exit;
//$t2 = $t1;
//print_r(memory_get_usage());
//print '<br>';
//$t2 = $t2.'hhh';
//print_r(memory_get_usage());
//exit;
$t = array_fill(0,100,'hello');
print_r(memory_get_usage());
print '<br>';
$t1 = array_fill(0,100,'world');
print_r(memory_get_usage());
print '<br>';
$t2 = &$t1;
print_r(memory_get_usage());
print '<br>';
$t1 = $t;
print_r(memory_get_usage());
print '<br>';
var_dump($t1);
print '<br>';
var_dump($t2);
exit;
//$arr1 = [1,2,3,4,5];
//foreach($arr1 as $key => $value){
//    print_r($arr1);
//    $value = $arr1[$key]*2;
//    print_r($arr1);
//    print '<br>';
//}
//print_r($arr1);
//exit;
//$arr2 = $arr1;
//$arr2[0] = &$arr1[0];
//$arr2[0] = 3;
//print_r($arr2);
//print_r($arr1);
//exit;
//$arr1[0] = '3';
//print_r($arr1);
//print_r($arr2);
//exit;
class t{
   public $p = 1;
}
class t1{
    public $p = 3;
}
$r = new t();
print_r(memory_get_usage());
print '<br>';
$r1 = new t1();
print_r(memory_get_usage());
print '<br>';
$r2 = $r;
print_r(memory_get_usage());
print '<br>';
$r->p = 100;
print_r(memory_get_usage());
print '<br>';
//$r2 = new t1();
//print_r(memory_get_usage());
//print '<br>';
//$rr = $r;
//print_r(memory_get_usage());
//print '<br>';
//$r->p = 100;
//print_r(memory_get_usage());
//print '<br>';
var_dump($r);
var_dump($r2);
exit;
$a = ' hello';
function test(){
    $a = 'zhan';
}
test();
print_r($a);
