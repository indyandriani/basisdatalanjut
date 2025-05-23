<?php

$data[] = array('No' => 1, 'Nama' => 'Jerman', 'Ibukota' => 'Berlin');
$data[] = array('No' => 2, 'Nama' => 'Prancis', 'Ibukota' => 'Paris');
$data[] = array('No' => 3, 'Nama' => 'Italia', 'Ibukota' => 'Roma');
$data[] = array('No' => 4, 'Nama' => 'Spanyol', 'Ibukota' => 'Madrid');
$data[] = array('No' => 5, 'Nama' => 'Belanda', 'Ibukota' => 'Amsterdam');
$data[] = array('No' => 6, 'Nama' => 'Austria', 'Ibukota' => 'Wina');
$data[] = array('No' => 7, 'Nama' => 'Polandia', 'Ibukota' => 'Warsawa');
$data[] = array('No' => 8, 'Nama' => 'Swedia', 'Ibukota' => 'Stockholm');
$data[] = array('No' => 9, 'Nama' => 'Norwegia', 'Ibukota' => 'Oslo');
$data[] = array('No' => 10, 'Nama' => 'Yunani', 'Ibukota' => 'Athena');

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('eropa.json', $jsonfile);

?>
