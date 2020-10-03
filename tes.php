<?php

$data=[
    "satu"=>["one"=>[1]]
];

foreach($data as $key=>$value)
{
    echo $key.PHP_EOL;
    foreach($value as $data=>$data_x )
    {
        echo $data.PHP_EOL;
       foreach($data_x as $data_y)
       {
           echo $data_y;
       }
    }
}