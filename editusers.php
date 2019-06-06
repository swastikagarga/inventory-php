<?php

include('header.php');

include('conn.php');

$id = $_GET['id'];

$rs=mysqli_query($conn,"select * from users where userid='$id'");

$row=mysqli_fetch_array($rs);
    
?><div class="row">
<div class="col-lg-12">
       <div class="card">
           <div class="card-header">
               <strong>Users Form</strong> 
           </div>
           <div class="card-body card-block">
               <form action="upadateusers.php" method="post" class="form-horizontal">
               <div class="row">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="hidden" value="<?php echo $row['userid'] ?>" name="uid" >
                        <input type="text" id="input-username" class="form-control form-control-alternative" value="<?php echo $row['username'] ?>"  name="uname" required>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" value="<?php echo $row['email'] ?>" name="email" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" value="<?php echo $row['firstname'] ?>"  name="fname" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" value="<?php echo $row['lastname'] ?>"  name="lname" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-user-type">User Type</label>
                        <select class="form-control form-control-alternative" name="usertype" value="<?php echo $row['usertypes'] ?>" >
                            <option value="1">Admin</option>
                            <option value="2">Division User</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-user-type">Gender</label>
                        <select class="form-control form-control-alternative" name="gender" value="<?php echo $row['gender'] ?>" >
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Others</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-date-of-birth">Date of Birth</label>
                        <input type="date" id="input-date-of-birth" class="form-control form-control-alternative" value="<?php echo $row['dob'] ?>" name="dob" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-phone-no">Phone No</label>
                        <input type="text" id="input-phone-no" class="form-control form-control-alternative" value="<?php echo $row['phone'] ?>" name="phone" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" value="<?php echo $row['country'] ?>"  name="country" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-state">State</label>
                        <input type="text" id="input-state" class="form-control form-control-alternative"value="<?php echo $row['state'] ?>"  name="state" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative"value="<?php echo $row['city'] ?>"  name="city" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-pincode">Pincode</label>
                        <input type="text" id="input-pincode" class="form-control form-control-alternative" value="<?php echo $row['pincode'] ?>" name="pin" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                                    </form>