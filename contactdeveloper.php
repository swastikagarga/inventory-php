<?php
include('header.php');
include('conn.php');

?>
<div class="card-body card-block">
        <form action="insertdamage.php" method="POST">
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-10">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">

                      <label class="form-control-label" for="input-mname">Email</label>
                        <input type="hidden" value="<?php echo $row['mid'] ?>" name="damid">
                        <input type="text"id="input-materialname" class="form-control form-control-alternative" value="<?php echo $row['mname'] ?>" name="mname" >
                       </div>
                     </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-grsno">Subject</label>
                        <input type="text" id="input-grsno" class="form-control form-control-alternative" value="<?php echo $row['grsno'] ?>"  name="grsno">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-quantity">Message</label>
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