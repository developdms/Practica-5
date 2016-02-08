<?php

require '../classes/AutoLoad.php';

date_default_timezone_set('Europe/Madrid');

$mysql = new mysqli(Constan::SERVER, Constan::DBUSER, Constan::DBPASSWORD);
$res = $mysql->query(FileManager::read('sql/sql.sql'));

$mysql->change_user(Constan::DBUSER, Constan::DBPASSWORD, Constan::DATABASE);

$ms = scandir('../modules');
foreach ($ms as $key => $value) {
    if ($value !== '.' && $value !== '..' && $value !== 'index.php') {
        if (is_dir('../modules/' . $value)) {
            $files = scandir('../modules/' . $value .'/sql');
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    $mysql->query(FileManager::read('../modules/' . $value . '/sql/'.$file));
                }
            }
        }
    }
}
$mysql->close();

header('Location:../modules/');

