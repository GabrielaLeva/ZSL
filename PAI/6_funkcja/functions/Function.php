<?php 
    function show(){
        echo "Funkcja Show <br>";
    }
    function showName($name){
        $name=stringValidate($name);
        return "imię = ".$name;
    }
    function stringValidate($str1){
    $str1=trim($str1);
    $str1=strtolower($str1);
    $str1=ucfirst($str1);
    $param=strlen($str1);
    echo "Dłogość : ".$param."<br>";
    return $str1;
}
    ?>