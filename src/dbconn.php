<?php

$CONN = mysqli_connect("localhost", "root", "", "REGISTRATION_PAGE");

if (!$CONN) {
    die("". mysqli_connect_error());
}
