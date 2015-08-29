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
                <div class="col-sm-6">
                    <h1 class="text-center">All Employees</h1>
                </div>
                <div class="col-sm-4">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <div class="row">


                <div class="col-md-6 col-md-offset-3 table-responsive">
                        <table class="table allEmployeeTable">

                            <tr>
                                <th>Emp Id</th>
                                <th>Emp Name</th>
                                <th>Emp Postion</th>
                            </tr>
                            
                            
                            <?php
                            //load all employees
                            $employes = R::dispense( 'employee' );
                            $employes = R::findAll('employee');

                            
                            foreach ($employes as $employee) {
                                    


                            ?>


                            <tr> <td><?php echo $employee->id;?></th><td><a href="#"><?php echo $employee->fname." ". $employee->mname." ". $employee->lname?></a></td> <td><?php echo $employee->position;?></td></tr>

                            <?php
                            }
                            ?>
                        </table>
                </div>
            </div>
        </div>


<?php
require "../../footer.php";
?>