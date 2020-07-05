<?php

$file = file_get_contents('https://api.covid19api.com/summary',0,null,null);
$array = json_decode($file, JSON_FORCE_OBJECT);

echo "<pre>";
print_r($array);

// print_r($array[3]);

// foreach ($array as $key => $value) {

//     print_r($key . ' : '. $value);
// }

for ($i=0; $i < count($array['Countries']); $i++) { 
    // echo ($array['Countries'][$i]['Country']) . '<br>';

}

?>