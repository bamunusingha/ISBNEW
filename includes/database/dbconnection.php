<?php
/**
 * Created by PhpStorm.
 * User: vishwa
 * Date: 8/27/2015
 * Time: 10:11 PM
 *
 * Incluude this file to get the database connection
 */

require_once "rb.php";

R::setup( 'mysql:host=localhost;dbname=isbdatabase', 'root', '' ); //for both mysql or mariaDB