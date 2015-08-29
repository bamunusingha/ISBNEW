<?php
/**
 * Created by PhpStorm.
 * User: vishwa
 * Date: 8/28/2015
 * Time: 10:51 PM
 *
 * Add a new employee
 */

require "../../header.php";
require "../../includes/commonFunctions.php";
?>

<?php
    //get employee according to eid
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $eid=$_GET['id'];

    //get the result
    $emp = R::find('employee',' id = ? ',
        array( $eid )
    );
    if(empty($emp)){
        die("Wrong Link");
    }

    foreach ($emp as $employee) {

}

?>

    <!-- Page Content (End of page content div is at footer.php)-->
<div class="container">

    <!--        Insert Employee-->
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center">Add Employee</h1>
            <div class="col-md-12">
                <form class="form-horizontal" action="" method="post">


                    <input type="hidden" value="<?php echo $employee->id;?>" name="id">

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Employee First Name</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="text" class="form-control" id="efname" name="emplyoeeFname" placeholder="Please Enter Employee First Name Here" value="<?php echo $employee->fname;?>">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Employee Middle Name</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="text" class="form-control" id="emname" name="emplyoeeMname" placeholder="Please Enter Employee Middle Name Here" value="<?php echo $employee->mname;?>">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Employee Last Name</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="text" class="form-control" id="elname" name="emplyoeeLname" placeholder="Please Enter Employee Last Name Here" value="<?php echo $employee->lname;?>">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>

                        <div class="col-sm-10 padding-left-30">
                            <div class="form-group">
                                <div class="radio">
                                    <label class="radio-inline"><input <?php
                                            if($employee->gender=="male"){
                                                echo "checked";
                                            }
                                        ?> type="radio" name="optradio" value="male">Male</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="radio">
                                    <label class="radio-inline"><input <?php
                                        if($employee->gender=="female"){
                                            echo "checked";
                                        }
                                        ?> type="radio" name="optradio" value="female">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Date of Birth</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="date" class="form-control" id="dob" name="emplyoeeDob" value="<?php echo $employee->dateOfBirth;?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">NIC Number</label>
                        <div class="col-sm-10">
                            <input data-validation="required length" data-validation-length="10" type="text" class="form-control" id="nic" name="emplyoeeNic" placeholder="Please Enter Employee Nic Here (xxxxxxxxV)" value="<?php echo $employee->nic;?>">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Employee Address</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="text" class="form-control" id="address" name="emplyoeeAddress" placeholder="Please Enter Employee Address Here" value="<?php echo $employee->address;?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Employee Contact Number</label>
                        <div class="col-sm-10">
                            <input data-validation="required number length" data-validation-length="10" type="text" class="form-control" id="contact_num" name="emplyoeeContact" placeholder="Please Enter Employee Contact Number Here" value="<?php echo $employee->contact;?>">
                        </div>
                    </div>





                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Employee Position</label>
                        <div class="col-sm-10">
                            <select name="positon">
                                <option <?php
                                if($employee->position=="Employee"){
                                    echo "selected";
                                }
                                ?>>Employee</option>
                                <option <?php
                                if($employee->position=="Manager"){
                                    echo "selected";
                                }
                                ?>>Manager</option>
                                <option <?php
                                if($employee->position=="Devision Manager"){
                                    echo "selected";
                                }
                                ?>>Devision Manager</option>

                            </select>



                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Joined Date</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="date" class="form-control" id="joined_date" name="emplyoeeJoined" value="<?php echo $employee->joindDate;?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Bank</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="text" class="form-control" id="bank" name="employeeBank" placeholder="Please Enter Employee Bank Here" value="<?php echo $employee->bank;?>">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Account Number</label>
                        <div class="col-sm-10">
                            <input data-validation="required number" type="text" class="form-control" id="acc_num" name="emplyoeeAcc" placeholder="Please Enter Employee Account Number Here" value="<?php echo $employee->account;?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Basic Salary</label>
                        <div class="col-sm-10">
                            <input data-validation="required number" type="text" class="form-control" id="basic_sal" name="emplyoeeBsal" placeholder="Please Enter Employee Basic Salary Here" value="<?php echo $employee->basicSal;?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default" name="btnUpdate">Update Employee</button>
                            <button type="submit" class="btn btn-default" name="btnDelete" onclick="return confirm('Are you sure you want to delete this Employee ?');">Delete Employee</button>
                        </div>

                    </div>
                </form>


            </div>
        </div>
    </div>

    <?php } //end of foreach?>

<?php
require "../../footer.php";
?>

<?php
/*
 * capture submitted data and save it
 * */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['btnDelete'])) {
        // delete block
        $id = null;
        if (isset($_POST["id"]) && !empty($_POST["id"])) {
            $id = $_POST['id'];
        }

        //load
        $emp = R::load('employee', $id);

        //trash
        R::trash( $emp );

        //redirect to allEmployee page
        redirect("allEmployees.php");

        echo "delete";
    }else {


        $id = null;
        $Efname = null;
        $Emname = null;
        $Elname = null;
        $Edob = null;
        $Enic = null;
        $Eaddrees = null;
        $Econtact = null;
        $Ejoined = null;
        $Ebank = null;
        $Eaccount = null;
        $Ebasic = null;
        $Gender = null;
        $Position = null;


//$conn->

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST["id"]) && !empty($_POST["id"])) {
                $id = $_POST['id'];
            }

            if (isset($_POST["emplyoeeFname"]) && !empty($_POST["emplyoeeFname"])) {
                $Efname = $_POST['emplyoeeFname'];
            }


            if (isset($_POST["emplyoeeMname"]) && !empty($_POST["emplyoeeMname"])) {
                $Emname = $_POST['emplyoeeMname'];
            }


            if (isset($_POST["emplyoeeLname"]) && !empty($_POST["emplyoeeLname"])) {
                $Elname = $_POST['emplyoeeLname'];
            }


            if (isset($_POST["emplyoeeDob"]) && !empty($_POST["emplyoeeDob"])) {
                $Edob = date('Y-m-d', strtotime($_POST['emplyoeeDob']));

            }

            if (isset($_POST["emplyoeeNic"]) && !empty($_POST["emplyoeeNic"])) {
                $Enic = $_POST['emplyoeeNic'];
            }


            if (isset($_POST["emplyoeeAddress"]) && !empty($_POST["emplyoeeAddress"])) {
                $Eaddrees = $_POST['emplyoeeAddress'];
            }

            if (isset($_POST["emplyoeeContact"]) && !empty($_POST["emplyoeeContact"])) {
                $Econtact = $_POST['emplyoeeContact'];
            }


            if (isset($_POST["emplyoeeJoined"]) && !empty($_POST["emplyoeeJoined"])) {
                $Ejoined = date('Y-m-d', strtotime($_POST['emplyoeeJoined']));
            }

            if (isset($_POST["employeeBank"]) && !empty($_POST["employeeBank"])) {
                $Ebank = $_POST['employeeBank'];
            }

            if (isset($_POST["emplyoeeAcc"]) && !empty($_POST["emplyoeeAcc"])) {
                $Eaccount = $_POST['emplyoeeAcc'];
            }

            if (isset($_POST["emplyoeeBsal"]) && !empty($_POST["emplyoeeBsal"])) {
                $Ebasic = $_POST['emplyoeeBsal'];
            }
//    gender
            if (isset($_POST["optradio"]) && !empty($_POST["optradio"])) {
                $Gender = $_POST['optradio'];
            }

            if (isset($_POST["positon"]) && !empty($_POST["positon"])) {
                $Position = $_POST['positon'];
            }
        }


        //VALIDATION MUST GO THERE

        //load
        $emp = R::load('employee', $id);

//    $emp = R::dispense( 'employee' );

        $emp->fname = $Efname;
        $emp->mname = $Emname;
        $emp->lname = $Elname;
        $emp->dateOfBirth = $Edob;
        $emp->nic = $Enic;
        $emp->address = $Eaddrees;
        $emp->contact = $Econtact;
        $emp->position = $Position;
        $emp->joindDate = $Ejoined;
        $emp->bank = $Ebank;
        $emp->account = $Eaccount;
        $emp->basicSal = $Ebasic;
        $emp->gender = $Gender;
        //this is added for search in allEmployee.php
        $emp->fullName = $Efname . " " . $Emname . " " . $Elname;


        $id = R::store($emp);

        //redirect
        redirect("updateEmployee.php?id=" . $id);
    }//update block
}//end
?>