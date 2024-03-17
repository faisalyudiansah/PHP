<?php 
$arrayInArrayOne = array(
    "id" => 1,
    "name" => "ronaldo",
    "retired" => false,
    true => "TRUE",
    "address" => [
        "city" => "madrid",
        "country" => "spain"
    ]
);

var_dump($arrayInArrayOne);
var_dump($arrayInArrayOne["address"]);
var_dump($arrayInArrayOne["address"]["country"]);

?>