<?php
include('header.php');
include('conn.php');
$id = $_GET['id'];
$stc=mysqli_query($conn,"select * from stocks where stockid='$id'");
$reew=mysqli_fetch_array($stc);
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Edit  stocks</strong>
            <?php
                                        if(isset($_GET['editstock'])){
                                            if($_GET['editstock']=='ok'){
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
        <form action="updatestocks.php" method="POST">
                <h6 class="heading-small text-muted mb-4">Materials information</h6>
                <div class="pl-lg-10">
                  <div class="row">
                  
                    <div class="col-lg-3">
                      <div class="form-group">
                      <input type="hidden"  value="<?php echo $reew['stockid'] ?>" name="mid" >
                        <label class="form-control-label" for="input-categoryname">Quantity</label>
                        <input type="number" id="input-rate" class="form-control form-control-alternative" value="<?php echo $reew['quantity'] ?>" name="quan" >
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-material-code">GRS no</label>
                        <input type="number" id="input-material-code" class="form-control form-control-alternative" value="<?php echo $reew['grsno'] ?>" name="grsno" >
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-make">Manufacture Date</label>
                        <input type="date" id="input-make" class="form-control form-control-alternative" value="<?php echo $reew['mfgdate'] ?>" name="mfgdate" >
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-type">Expiry Date</label>
                        <input type="date" id="input-rate" class="form-control form-control-alternative" value="<?php echo $reew['expirydate'] ?>" name="expdate" >
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-rate">Rate</label>
                        <input type="number" id="input-rate" class="form-control form-control-alternative" value="<?php echo $reew['rate'] ?>" name="rate" >
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
       
        </form>
      </div>
</div>
<div>