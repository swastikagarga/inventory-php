<?php

include('header.php');
include('conn.php'); 
$resu=mysqli_query($conn,"select * from division");

?>   
                     <div class="row">
                         <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Users Form</strong> 
                                    </div>
                                    <?php
                                        if(isset($_GET['users'])){
                                            if($_GET['users']=='ok'){
                                                ?>
                                                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                                <span class="badge badge-pill badge-success">Success</span>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
                                                <?php
                                            }else{
                                                ?>
                                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
											<span class="badge badge-pill badge-danger">Insertion Failed</span>
											
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

                                                <?php
                                            }
                                        }
                                        ?>    
                                    <div class="card-body card-block">
                                        <form action="insertusers.php" method="post" class="form-horizontal">
                                         
                                        <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username"  name="uname" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="example@gmail.com" name="email" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name"  name="fname" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name"  name="lname" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-designation">Designation</label>
                        <input type="text" id="input-designation" class="form-control form-control-alternative" placeholder="designation"  name="designation" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-user-type">User Type</label>
                        <select id="usertype" class="form-control form-control-alternative" name="usertype" >
                            <option value="1">Admin</option>
                            <option value="2">Division User</option>
                            </select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-division">Division</label>
                        <select class="form-control form-control-alternative" name="divid" >
                        <?php
                                     while($row=mysqli_fetch_array($resu))
                                     {   
                                   ?>
                                     <option value="<?php echo $row['divid'] ?>"><?php echo $row['divname'] ?></option>
                                    <?php
                                     }
                                    ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-user-type">Gender</label>
                        <select class="form-control form-control-alternative" name="gender" >
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Others</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-date-of-birth">Date of Birth</label>
                        <input type="date" id="input-date-of-birth" class="form-control form-control-alternative"  name="dob" required>
                      </div>
                    </div>
                    </div>
                  <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                   <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative"  name="country" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-state">State</label>
                        <input type="text" id="input-state" class="form-control form-control-alternative"  name="state" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative"  name="city" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-pincode">Postal code</label>
                        <input type="text" id="input-pincode" class="form-control form-control-alternative"  name="pin" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-phone-no">Phone No</label>
                        <input type="text" id="input-phone-no" class="form-control form-control-alternative"  name="phone" required>
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