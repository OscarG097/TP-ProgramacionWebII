<?php 
$categorias = array(
    1 => array(
        'id' => 1,
        'nombre' => 'Procesadores'
    ),
    2 => array(
        'id' => 2,
        'nombre' => 'Motherboard'
    ),
    3 => array(
        'id' => 3,
        'nombre' => 'Placas de Video'
    ),
    4 => array(
        'id' => 4,
        'nombre' => 'Discos Rigidos'
    ),
    5 => array(
        'id' => 5,
        'nombre' => 'SSD'
    ),
    6 => array(
        'id' => 6,
        'nombre' => 'Teclados'
    ),
    7 => array(
        'id' => 7,
        'nombre' => 'Mouse'
    ),
    8 => array(
        'id' => 8,
        'nombre' => 'Auriculares'
    ),
    9 => array(
        'id' => 9,
        'nombre' => 'Memorias Ram'
    ),
); 
echo json_encode($categorias);
?>