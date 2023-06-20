<?php
$m = new Memcached();
$c = $m->addServer('127.0.0.1',11211);
echo $m->getResultMessage()." ".$m->getResultCode()."- </br>";
var_dump($m->set('key', 'value', 3600));
echo $m->getResultMessage()." ".$m->getResultCode()."- </br>";
//var_dump($m->getAllKeys());
//$m->addServers([
//    ['0.0.0.0',11212,100],
//    ['0.0.0.0',11213,10],
//    ['0.0.0.0',11214,10],
//]);