<?php
/**
 * Created by PhpStorm.
 * User: vishwa
 * Date: 8/28/2015
 * Time: 8:39 PM
 *
 * Display all employees in the database
 */

require "../../header.php";
    ?>

    <!-- Page Content (End of page content div is at footer.php)-->
    <div class="container">

<!--        Show all employees in a table-->
        <div class="container-fluid">
            <div class="row">
                <h1 class="text-center">All Employees</h1>
                <div class="col-md-6 col-md-offset-3 table-responsive">
                        <table class="table allEmployeeTable">

                            <?php
                            //load all employees
//                            $employes = R::dispense( 'employe' );
//                            $employes = R::findAll('employe');
//                            print_r($employes);





                            $all=R::load('book',1);

                            print_r($all->title);

                            ?>



                            <tr> <th>11</th><td><a href="#">dsdsdsadasdsa</a></td> </tr>
                            <tr> <th>11</th><td><a href="#">dsdsdsadasdsa</a></td> </tr>
                            <tr> <th>11</th><td><a href="#">dsdsdsadasdsa</a></td> </tr>
                            <tr> <th>11</th><td><a href="#">dsdsdsadasdsa</a></td> </tr>
                            <tr> <th>11</th><td><a href="#">dsdsdsadasdsa</a></td> </tr>
                            <tr> <th>11</th><td><a href="#">dsdsdsadasdsa</a></td> </tr>

                        </table>
                </div>
            </div>
        </div>


<?php
require "../../footer.php";
?>