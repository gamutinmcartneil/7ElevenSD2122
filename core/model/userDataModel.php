<?php

include_once '../../configure/dbh.php';

class UsersDataModel extends Dbh
{

    public function getData()
    {
        $statement = $this->connect()->query('SELECT users_name FROM users');

        // get all publishers
        $publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($publishers) {
            // show the publishers
            foreach ($publishers as $publisher) {
                echo $publisher['users_name'] . '<br>';
            }
        }
    }
}


$userData = new UsersDataModel();

$userData->getData();
