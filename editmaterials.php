<?php
include('header.php');
include('conn.php');
$id = $_GET['id'];
$rs=mysqli_query($conn,"select * from materials where mid='$id'");
$res=mysqli_query($conn,"select * from category");
$resu=mysqli_query($conn,"select * from types");

$row=mysqli_fetch_array($rs);

?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Edit</strong> Materials
        </div>
        <?php
                                        if(isset($_GET['editmaterial'])){
                                            if($_GET['editmaterial']=='ok'){
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
        <form action="updatematerial.php" method="POST">
                <h6 class="heading-small text-muted mb-4">Materials information</h6>
                <div class="pl-lg-10">
                  <div class="row">
                  <input type="hidden" id="input-mid" class="form-control form-control-alternative" value="<?php echo $row['mid'] ?>" name="mid">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-categoryname">Category Name</label>
                        <select class="form-control form-control-alternative" name="catid" >
                        <?php
                            while($row1=mysqli_fetch_array($res))
                            {
                                if($row['catid']==$row1['catid']){
                                ?>
                                
                                <option value="<?php echo $row1['catid'] ?>" selected><?php echo $row1['catname'] ?></option>
                                <?php
                                    } 
                            ?>
                            <?php
                            if($row['catid']!=$row1['catid']){
                                ?>
                            <option value="<?php echo $row1['catid'] ?>"><?php echo $row1['catname'] ?></option>
                            <?php
                                    }
                                }
                            ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-material-code">Material code</label>
                        <input type="text" id="input-material-code" class="form-control form-control-alternative" value="<?php echo $row['matcode'] ?>"  name="mcode" >
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-material-name">Material Name</label>
                        <input type="text" id="input-material-name" class="form-control form-control-alternative" value="<?php echo $row['mname'] ?>" name="mname" >
                      </div>
                    </div>
                    
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-make">Make</label>
                        <input type="text" id="input-make" class="form-control form-control-alternative"value="<?php echo $row['make'] ?>" name="make" >
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-type">Type/Capacity</label>
                        <select class="form-control form-control-alternative" name="type" >
                        <?php
                              while($row2=mysqli_fetch_array($resu))
                              {
                                if($row['t_id']==$row2['id']){
                                  ?>
                                  <option value="<?php echo $row2['id'] ?>" selected><?php echo $row2['type'] ?></option>
                                      <?php
                                      } 
                          ?>
                              <?php
                                  if($row['type']!=$row2['id']){
                                    
                              ?>
                          <option value="<?php echo $row2['id'] ?>"><?php echo $row2['type'] ?></option>
                          <?php
                                }
                              }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-remarks">Remarks</label>
                        <input type="text" id="input-remarks" class="form-control form-control-alternative" value="<?php echo $row['remarks'] ?>" name="remarks" >
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