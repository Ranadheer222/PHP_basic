<?php 

function multi($no1,$no2){
    return $no1*$no2;
}

function adding($no1,$no2){
    return $no1+$no2;
}

function sub($no1,$no2){
    if($no1<$no2){
        return "no2 should not be greater";
    }
    else{
        return $no1-$no2;
    }
}

function div($no1,$no2){
    if($no2==0){
        return 'give proper value';
    }
    else{
        return $no1/$no2;
    }
}

$no1=(int)readline('enter 1st=');
$no2=(int)readline('enter 2nd =');

$multires=multi($no1,$no2);
$addres=adding($no1,$no2);
$subres=sub($no1,$no2);
$divres=div($no1,$no2);

print 'res is= '.$multires. "\n";
print "addres is= " .$addres. "\n";
print "subres is = " .$subres. "\n";
print "div is=" . $divres. "\n";

?>