<?php
include('header.php');
include('conn.php');

?>  


<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                <div class="card-header">
                                        <strong>User photo</strong>
                                        <small> 
                                        
                                        <?php
                                        if(isset($_GET['div'])){
                                            if($_GET['div']=='ok'){
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
                                        

                                        </small>

                                    </div>
                                    <div class="card-body">
                                        <form action="uploadpic.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Profile pic</label>
                                                
                                                <input type="file" name="fileToUpload" id="fileToUpload">
                                                
                                            
                                           </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Change password</strong>
                                        <small> 

                                        <?php
                                        if(isset($_GET['password'])){
                                            if($_GET['password']=='ok'){
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

                                        </small>
                                    </div>
                                    <div class="card-body ">
                                    <form action="password.php" method="post" novalidate="novalidate">
                                            
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Old Password</label>
                                                <input type="text" id="company" placeholder="" class="form-control" name="opass">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">New Password</label>
                                                <input type="password" id="company" placeholder="" class="form-control" name="npass">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Confirm Password</label>
                                                <input type="password" id="company" placeholder="" class="form-control" name="cpass">
                                                </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                             
                                
                            
                            
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        