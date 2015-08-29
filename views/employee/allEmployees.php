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
                    <form class="navbar-form" role="search" method="post" action="">
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
                            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                //then search is done
                                $searchWord=$_POST['q'];
                                $bean=null;
                                //check if input is not NIC
                                if (!preg_match('/[^A-Za-z ]/', $searchWord))
                                {
                                    //then this is not the nic. so search for full name
                                    $bean = R::find('employee',' full_name LIKE :full_name ',
                                        array(':full_name' => '%' . $searchWord . '%' )
                                    );
                                }else{
                                    $bean = R::find('employee',' nic LIKE :nic ',
                                        array(':nic' => '%' . $searchWord . '%' )
                                    );
                                }





                                if(!empty($bean)){
//                                    echo "not empty result";
                                    //then show the result

                                    foreach ($bean as $employee) {?>
                                        <tr> <td><?php echo $employee->id;?></th><td><a href="updateEmployee.php?id=<?php echo $employee->id;?>"><?php echo $employee->fname." ". $employee->mname." ". $employee->lname?></a></td> <td><?php echo $employee->position;?></td></tr>


                                        <?php }?>

<?php
                                }else{
                                    echo "empty result";
                                }

                            }else{


                            //load all employees
                            $employes = R::dispense( 'employee' );
                            $employes = R::findAll('employee');
                            foreach ($employes as $employee) {
                            ?>


                            <tr> <td><?php echo $employee->id;?></th><td><a href="updateEmployee.php?id=<?php echo $employee->id;?>"><?php echo $employee->fname." ". $employee->mname." ". $employee->lname?></a></td> <td><?php echo $employee->position;?></td></tr>

                            <?php
                                 }
                            }//end of else
                            ?>
                        </table>
                </div>
            </div>
        </div>


<?php
require "../../footer.php";
?>