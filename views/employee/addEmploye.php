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
?>

<!-- Page Content (End of page content div is at footer.php)-->
<div class="container">

    <!--        Insert Employee-->
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center">Add Employee</h1>
            <div class="col-md-12">
                <form class="form-horizontal" action="InsertEmployee.php" method="post">
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Employee First Name</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="text" class="form-control" id="efname" name="emplyoeeFname" placeholder="Please Enter Employee First Name Here">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Employee Middle Name</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="text" class="form-control" id="emname" name="emplyoeeMname" placeholder="Please Enter Employee Middle Name Here">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Employee Last Name</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="text" class="form-control" id="elname" name="emplyoeeLname" placeholder="Please Enter Employee Last Name Here">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>

                        <div class="col-sm-10 padding-left-30">
                            <div class="form-group">
                                <div class="radio">
                                    <label class="radio-inline"><input checked type="radio" name="optradio" value="male">Male</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="radio">
                                    <label class="radio-inline"><input type="radio" name="optradio" value="female">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Date of Birth</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="date" class="form-control" id="dob" name="emplyoeeDob" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">NIC Number</label>
                        <div class="col-sm-10">
                            <input data-validation="required length" data-validation-length="10" type="text" class="form-control" id="nic" name="emplyoeeNic" placeholder="Please Enter Employee Nic Here (xxxxxxxxV)">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Employee Address</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="text" class="form-control" id="address" name="emplyoeeAddress" placeholder="Please Enter Employee Address Here">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Employee Contact Number</label>
                        <div class="col-sm-10">
                            <input data-validation="required number length" data-validation-length="10" type="text" class="form-control" id="contact_num" name="emplyoeeContact" placeholder="Please Enter Employee Contact Number Here">
                        </div>
                    </div>





                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Employee Position</label>
                        <div class="col-sm-10">
                            <select name="positon">
                                <option selected>Employee</option>
                                <option>Manager</option>
                                <option>Devision Manager</option>

                            </select>



                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Joined Date</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="date" class="form-control" id="joined_date" name="emplyoeeJoined" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Bank</label>
                        <div class="col-sm-10">
                            <input data-validation="required" type="text" class="form-control" id="bank" name="employeeBank" placeholder="Please Enter Employee Bank Here">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Account Number</label>
                        <div class="col-sm-10">
                            <input data-validation="required number" type="text" class="form-control" id="acc_num" name="emplyoeeAcc" placeholder="Please Enter Employee Account Number Here">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Basic Salary</label>
                        <div class="col-sm-10">
                            <input data-validation="required number" type="text" class="form-control" id="basic_sal" name="emplyoeeBsal" placeholder="Please Enter Employee Basic Salary Here">
                        </div>
                    </div>






                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Insert Employee</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
require "../../footer.php";
?>