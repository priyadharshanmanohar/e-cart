<?php
$table = 'products';
 
$primaryKey = 'id';
 
$columns = array(
    array( 'db' => 'title', 'dt' => 0 ),
    array( 'db' => 'description',  'dt' => 1 ),
    array( 'db' => 'product_price',   'dt' => 2 ),
    array( 'db' => 'barcode', 'dt' => 3,),
    array( 'db' => 'base_product_id', 'dt' => 4,),
    array( 'db' => 'product_type','dt' => 5)
    
   
);
 
$sql_details = array(
    'user' => 'Priyadharshan',
    'pass' => '123456',
    'db'   => 'ecart',
    'host' => '127.0.0.1'
);
 
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>