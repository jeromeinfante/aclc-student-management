<?php

/*

MA GIBO MUNA KITA DATABASE, NAME: {BOBOY}
DB NAME: users
id: ai check int;
full_name: varchar 255;
email_address: varchar 255;
user_password: varchar 255;



*/




$CONN = mysqli_connect("localhost", "root", "", "BOBOY"); //INI SI NAME KANG DATABASE SA PHPMYADMIN

if (!$CONN) {
    die("". mysqli_connect_error());
}
