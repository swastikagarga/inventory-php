<?php
include('header.php');
include('conn.php');

$rs=mysqli_query($conn,"select * from stocks s join materials m on s.mid=m.mid ");
$res=mysqli_query($conn,"select * from subdivision");
$resu=mysqli_query($conn,"select * from division");


if(isset($_GET['mid'])){
  $miid = $_GET['mid'];
  $reas=mysqli_query($conn, "select * from stocks where mid='$miid'");
  //$row=mysqli_fetch_array($reas);
}
if(isset($_GET['grsno'])){
  $grsno = $_GET['grsno'];
  $matexe=mysqli_query($conn,"select * from stocks where grsno='$grsno'");

  $mat = mysqli_fetch_array($matexe);

}
//$reas=mysqli_query($conn,"select * from stocks s join materials m on s.mid=m.mid ");

?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Issue Materials</strong>
            <?php
                                        if(isset($_GET['issue_material'])){
                                            if($_GET['issue_material']=='ok'){
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
        
        <form action="insertissue.php" method="POST">
                     <h6 class="heading-small text-muted mb-4">Issued Materials</h6>
                   <div class="pl-lg-4">
                    <div class="row">
                     <div class="col-lg-4">
                       <div class="form-group">
                       
                        <label class="form-control-label" for="input-mname">Material name</label>
                          <select class="form-control form-control-alternative"  onchange="javascript:location.href = this.value;" >
                          <option value="">Select Material name...</option>
                            <?php
                              while($row1=mysqli_fetch_array($rs))
                              {   
                                if($_GET['mid']==$row1['mid']){
                                  ?>
                                      
                                      <option value="issue.php?mid=<?php echo $row1['mid'] ?>" selected><?php echo $row1['mname'] ?></option>
                                      <?php
                                        }
                                        if($_GET['mid']!=$row1['mid']){
                                        ?>
                                  <option value="issue.php?mid=<?php echo $row1['mid'] ?>"><?php echo $row1['mname'] ?></option>
                                  <?php
                                }
                              }
                            ?>
                          </select>
                       </div>
                     </div>
                  
                   <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-material-name">GRS Number</label>
                        <select class="form-control form-control-alternative" onchange="javascript:location.href = this.value;"  >
                                <option value="">Select Grs no</option>
                                <?php

                                    while($row2=mysqli_fetch_array($reas))
                                    {
                                ?>
                                        
                                    
                                    <option value="issue.php?mid=<?php echo $_GET['mid']?>&grsno=<?php echo $row2['grsno'] ;?>"><?php echo $row2['grsno'] ;?></option>
                                    
                                    <?php
                                    }
                                      ?>
                        </select>
                      </div>
                    </div>
                      <?php
                        if(isset($_GET['grsno'])){
                      ?>
                      <div class="col-lg-3">
                      <div class="form-group">
                      <input type="hidden" value="<?php echo $mat['stockid']; ?>" name="stockid">
                        <label class="form-control-label" for="input-material-name">Expiry Date</label>
                        <input type="date" id="input-date" value="<?php echo $mat['expirydate'] ?>" class="form-control form-control-alternative" disabled >
                      </div>
                    </div>

                      <input type="hidden" value="<?php echo $_GET['mid']; ?>" name="mid">
                        
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-issued-to">Issued to</label>
                        <select class="form-control form-control-alternative" name="issueto" >
                                   <?php
                                     while($row2=mysqli_fetch_array($res))
                                     {   
                                   ?>
                                     <option value="<?php echo $row2['sdivid'] ?>"><?php echo $row2['sdivname'] ?></option>
                                    <?php
                                     }
                                    ?>
                            
                                    </select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-issued-from">Issued From</label>
                        <select class="form-control form-control-alternative" name="issuefrom" >
                                   <?php
                                     while($row3=mysqli_fetch_array($resu))
                                     {   
                                   ?>
                                     <option value="<?php echo $row3['divid'] ?>"><?php echo $row3['divname'] ?></option>
                                    <?php
                                     }
                                    ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-requisition">Quantity Of Requisition</label>
                        <input type="number" id="input-requisition" class="form-control form-control-alternative" name="requisition">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                      <input type="hidden" name="dbqty" value="<?php echo $mat['quantity'] ?>">
                        <label class="form-control-label" for="input-issue">Issue Quantity</label>
                        <input type="number" id="input-issue" class="form-control form-control-alternative" name="issuequan" required >
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-mrp">Rate(MRP)</label>
                        <input type="number" id="input-mrp" class="form-control form-control-alternative" value="<?php echo $mat['rate']?>" name="mrp"  >
                      </div>
                    </div>
                    <!--<div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-amount">Amount(sellprice)</label>
                        <input type="number" id="input-amount" class="form-control form-control-alternative" name="amount" >
                      </div>
                    </div>-->
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
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
                </div>
                                    <?php }?>
       <hr class="my-4" />
        </form>
      </div>
</div>
<div>