<?php
include('header.php');
include('conn.php');


//$reas=mysqli_query($conn,"select * from materials ");
     
$id = $_GET['id'];

$rs=mysqli_query($conn,"select * from stocks s join materials m on s.mid=m.mid where stockid='$id'");

$row=mysqli_fetch_array($rs);



?>
        
        <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Damage</strong> Materials
        </div>
        <?php
                                        if(isset($_GET['damagematerial'])){
                                            if($_GET['damagematerial']=='ok'){
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
        <form action="insertdamage.php" method="POST">
                <h6 class="heading-small text-muted mb-4">Damage information</h6>
                <div class="pl-lg-10">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">

                      <label class="form-control-label" for="input-mname">Material name</label>
                        <input type="hidden" value="<?php echo $row['stockid'] ?>" name="damid">
                        <input type="text"id="input-materialname" class="form-control form-control-alternative" value="<?php echo $row['mname'] ?>" name="mname" >
                       </div>
                     </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-grsno">GRS No</label>
                        <input type="text" disabled id="input-grsno" class="form-control form-control-alternative" value="<?php echo $row['grsno'] ?>"  name="grsno">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-quantity">Quantity</label>
                        <input type="hidden" name="dbqty" value="<?php echo $row['quantity'] ?>">
                        <input type="text" id="input-quantity" class="form-control form-control-alternative"  name="quantity" required>
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