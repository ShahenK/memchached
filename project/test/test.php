<?php
echo "<pre/>";

$arr = ["num1", "num2", "num3", "num4", "num5", "num6", "num7", "num8", "num9", "num10",
        "num11", "num12", "num13", "num14", "num15", "num16", "num17", "num18",
        "test1", "test2", "test3"];



//$keys = [];
//foreach($m->getServerList() as $server) {
//    $keys["{$server ['host']}:{$server ['port']}"] = [];
//}
////echo $m->getResultMessage()." ".$m->getResultCode()."- </br>";
////if(!$m->addByKey('test3','test3','test3'))
////{
////    echo $m->getResultMessage()." ".$m->getResultCode()."</br>";
////}
//
//
//foreach($arr as $key) {
//    $server = $m->getServerByKey($key);
//    $keys["{$server ['host']}:{$server ['port']}"][] = $key;
//}



echo "<pre>";
var_dump($m->getVersion());
//print_r($keys);
echo "</pre>";
//$m = new Memcached();
//$m->addServer('0.0.0.0',11212);
//echo $m->getResultMessage()." ".$m->getResultCode()."</br>";
//echo "</pre>";
//$m->setOption(Memcached::OPT_BINARY_PROTOCOL, true);
//echo $m->getResultMessage()." ".$m->getResultCode()."</br>";
//echo "</pre>";
////print_r($m->getStats());
////echo $m->getResultMessage()." ".$m->getResultCode()."</br>";
//echo "</pre>";
//print_r($m->getVersion());
//echo $m->getResultMessage()." ".$m->getResultCode()."</br>";
//echo "</pre>";
//print_r($m->getAllKeys());
//echo "</pre>";
//echo $m->getResultMessage()." ".$m->getResultCode()."</br>";