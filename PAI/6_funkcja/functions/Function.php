<?php 
    function show(){
        echo "Funkcja Show <br>";
    }
    function showName($name,$kolor){
        $name=stringValidate($name);
        echo $kolor;
        return "<span style=\"color:$kolor\"> imię =$name</span>";
    }
    function stringValidate($str1){
    $str1=trim($str1);
    $str1=strtolower($str1);
    $str1=ucfirst($str1);
    $str1=str_replace(" ", "",$str1);
    $param=strlen($str1);
    echo "Dłogość : ".$param."<br>";
    return $str1;
}
    ?>
    