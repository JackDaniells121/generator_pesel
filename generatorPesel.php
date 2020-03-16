<?php
/*
generates string[9]
*/
function generatePesel()
{
    $pesel='';
    $day = rand(1,31);
    
    if($day<10) $day = '0'.$day;
    
    $month = rand(0,1)==0?(rand(1,12)):rand(21,32); 
    
    if($month<10)       $month = '0'.$month;
    if($month>=20)      $year = rand(2000,2020);
        else            $year = rand(1900,1999);
    
    $year =  strval($year);
    $seria = rand(1000,9999);
    
    
    $pesel = $year[2].$year[3].$month.$day.$seria;
    
    
    //var_dump($year.'-'.$month.'-'.$day);
    return $pesel.controlNumber($pesel);
}

/*
$v string len 9
9×a + 7×b + 3×c + 1×d + 9×e + 7×f + 3×g + 1×h + 9×i + 7×j
*/
function controlNumber($v){
    $v = 9*(int)$v[0]+7*(int)$v[1]+3*(int)$v[2]+(int)$v[3]+9*(int)$v[4]+7*(int)$v[5]+3*(int)$v[6]+(int)$v[7]+9*(int)$v[8]+7*(int)$v[9];
    return $v % 10;    
}
    

echo generatePesel();
?>