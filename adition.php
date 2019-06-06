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
                                        <strong>Division</strong>
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
                                        <form action="division.php" method="post" novalidate="novalidate">
                                           <input type="hidden" id="company" placeholder="" class="form-control" name="divid">

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Divsion Name</label>
                                                <input type="text" id="company" placeholder="" class="form-control" name="divname">
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
                                        <strong>Sub Division</strong>
                                        <small> 

                                        <?php
                                        if(isset($_GET['sdiv'])){
                                            if($_GET['sdiv']=='ok'){
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
                                    <form action="subdivision.php" method="post" novalidate="novalidate">
                                            <input type="hidden" id="company" placeholder="" class="form-control" name="sdivid">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1"> Sub Divsion Name</label>
                                                <input type="text" id="company" placeholder="" class="form-control" name="sdivname">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Divsion Name</label>
                                                <select  name="divid" id="select" class="form-control">
                                                    <?php
                                                        $rs=mysqli_query($conn,"select * from division");
                                                        while($row=mysqli_fetch_array($rs))
                                                        {
                                                            
                                                        ?>
                                                        <option value="<?php echo $row['divid'] ?>"><?php echo $row['divname'] ?></option>
                                                        <?php
                                                            }
                                                            ?>
                                                            </select>
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
                                        <strong>Category</strong>
                                        <small> 

                                        <?php
                                        if(isset($_GET['cat'])){
                                            if($_GET['cat']=='ok'){
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
                                    <form action="category.php" method="post" novalidate="novalidate">
                                             <input type="hidden" id="company" placeholder="" class="form-control" name="catid">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1"> Category Name</label>
                                                <input type="text" id="company" placeholder="" class="form-control" name="catname">
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
                                        <strong>Types/Capacity</strong>
                                        <small> 

                                        <?php
                                        if(isset($_GET['type'])){
                                            if($_GET['type']=='ok'){
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
                                    <form action="type.php" method="post" novalidate="novalidate">
                                           <input type="hidden" id="company" placeholder="" class="form-control" name="tid">
                                            
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1"> Type/Capacity Name</label>
                                                <input type="text" id="company" placeholder="" class="form-control" name="type">
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
                        