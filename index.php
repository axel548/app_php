<?php
echo "<h1>¡Hola desde PHP Demo!</h1>";
echo "<p>Ambiente: PROD</p>";


$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$redis->set("ct_app_prod", "Redis: PHP Demo PROD Environment");
echo $redis->get("ct_app_prod");

?>

