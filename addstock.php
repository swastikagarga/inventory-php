<?php
include('header.php');
include('conn.php');

$rs=mysqli_query($conn,"select * from category");
$res=mysqli_query($conn,"select * from types");
if(isset($_GET['catid'])){
    $cid = $_GET['catid'];
    $resu=mysqli_query($conn,"select * from materials where catid='$cid'");
}

if(isset($_GET['mid'])){
    $mid = $_GET['mid'];
    $matexe=mysqli_query($conn,"select * from materials where mid='$mid'");

    $mat = mysqli_fetch_array($matexe);

}

?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Add  Materials</strong>
                  <?php
                      if(isset($_GET['addstock'])){
                          if($_GET['addstock']=='ok'){
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
        <form action="insertstock.php" method="POST">
                <h6 class="heading-small text-muted mb-4">Materials information</h6>
                <div class="pl-lg-10">
                  <div class="row">
                  <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-categoryname">Category Name</label>
                        <select class="form-control form-control-alternative" onchange="javascript:location.href = this.value;" name="catid">
                        <option value="">Select Category...</option>
                                <?php

                                    while($row=mysqli_fetch_array($rs))
                                    {
                                        if($_GET['catid']==$row['catid']){
                                            ?>
                                        
                                
                                    <option value="addstock.php?catid=<?php echo $row['catid'] ?>" selected><?php echo $row['catname'] ?></option>
                                    <?php
                                        }
                                        if($_GET['catid']!=$row['catid']){
                                        ?>
                                        <option value="addstock.php?catid=<?php echo $row['catid'] ?>"><?php echo $row['catname'] ?></option>
                                    <?php
                                      } }
                                      ?>
                        </select>
                      </div>
                    </div>
                    
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-material-name">Material Name</label>
                        <select class="form-control form-control-alternative" onchange="javascript:location.href = this.value;" name="mname" >
                                <option value="">Select Material</option>
                                <?php

                                    while($row2=mysqli_fetch_array($resu))
                                    {
                                        
                                        if($_GET['mid']==$row2['mid']){
                                            ?>
                                        
                                    
                                    <option value="addstock.php?catid=<?php echo $_GET['catid']?>&mid=<?php echo $row2['mid'] ;?>" selected><?php echo $row2['mname'] ;?></option>
                                    <?php
                                }
                                if($_GET['mid']!=$row2['mid']){
                                  ?>
                                  <option value="addstock.php?catid=<?php echo $_GET['catid']?>&mid=<?php echo $row2['mid'] ;?>"><?php echo $row2['mname'] ;?></option>
                                    <?php
                                      }
                                    }
                                      ?>
                        </select>
                      </div>
                    </div>
                          <?php

                            if(isset($_GET['mid'])){


                          ?>
                    <div class="col-lg-3">
                      <div class="form-group">
                      <input type="hidden" value="<?php echo $_GET['mid']; ?>" name="mid">
                        <label class="form-control-label" for="input-make">Make</label>
                        <input type="text" id="input-remarks" class="form-control form-control-alternative" value="<?php echo $mat['make'] ?>" disabled>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-type">Type/Capacity</label>
                        <input type="text" id="input-remarks" class="form-control form-control-alternative" value="<?php echo $mat['t_id'] ?>"  disabled>
                        
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-remarks">Remarks</label>
                        <input type="text" id="input-remarks" class="form-control form-control-alternative" value="<?php echo $mat['remarks'] ?>" disabled >
                      </div>
                    </div>
                  
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-categoryname">Quantity</label>
                        <input type="number" id="input-rate" class="form-control form-control-alternative" name="quan" >
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-material-code">GRS no</label>
                        <input type="number" id="input-material-code" class="form-control form-control-alternative"  name="grsno" >
                      </div>
                    </div>
                    
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-make">Manufacture Date</label>
                        <input type="date" id="input-make" class="form-control form-control-alternative" name="mfgdate" >
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-type">Expiry Date</label>
                        <input type="date" id="input-rate" class="form-control form-control-alternative" name="expdate" >
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-rate">Rate</label>
                        <input type="number" id="input-rate" class="form-control form-control-alternative" name="rate" >
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

                            <?php
                        }


                        ?>


       <hr class="my-4" />
        </form>
      </div>
</div>
<div>