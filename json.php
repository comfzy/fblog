<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Control-Type, Content-Type, token, Accept, x-access-sign, x-access-time");
header("Content-type:application/json;charset=utf-8");
echo '{"code":1,"qb":[1,3,2,4,10,5,0.5,0.8],"fw":["0"],"ms":"此脚本可执行全地图所有功能！"}';
?>