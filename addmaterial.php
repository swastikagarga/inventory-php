<?php
include('header.php');
include('conn.php');
$rs=mysqli_query($conn,"select * from category");
$res=mysqli_query($conn,"select * from types");
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Add  Materials</strong>
            <?php
                                        if(isset($_GET['add_material'])){
                                            if($_GET['add_material']=='ok'){
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
        </div>
        <div class="card-body card-block">
        <form action="insertmaterial.php" method="POST">
                <h6 class="heading-small text-muted mb-4">Materials information</h6>
                <div class="pl-lg-10">
                  <div class="row">
                  
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-categoryname">Category Name</label>
                        <select class="form-control form-control-alternative" name="catid" >
                                <?php

                                    while($row=mysqli_fetch_array($rs))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row['catid'] ?>"><?php echo $row['catname'] ?></option>
                                    <?php
                                      }
                                      ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-material-code">Material code</label>
                        <input type="text" id="input-material-code" class="form-control form-control-alternative"  name="mcode" >
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-material-name">Material Name</label>
                        <input type="text" id="input-material-name" class="form-control form-control-alternative" name="mname" >
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-make">Make</label>
                        <input type="text" id="input-make" class="form-control form-control-alternative" name="make" >
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-type">Type/Capacity</label>
                        <select class="form-control form-control-alternative" name="type" >
                                <?php

                                    while($row1=mysqli_fetch_array($res))
                                    {
                                        
                                    ?>
                                    <option value="<?php echo $row1['id'] ?>"><?php echo $row1['type'] ?></option>
                                    <?php
                                      }
                                    ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-remarks">Remarks</label>
                        <input type="text" id="input-remarks" class="form-control form-control-alternative" name="remarks" >
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                </div>
       <hr class="my-4" />
        </form>
      </div>
</div>
<div>