<?php
//MUST INCLUDE ENV
include("config/env.php");
//SELECT
// print_r($dbal->database('default')->table('users')->select()->fetchAll());


// Single Insert
$table = $h->table('users');
print_r($table->insertOne([
    'name' => 'Saaud',
    'email'=> 'test@email.com',
    'password'=> '123456',
    'type'=> 'admin',
    'status'=>'active'
]));

?>