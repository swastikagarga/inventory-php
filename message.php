<?php



include('header.php');
include('conn.php');

$user=$_SESSION['userid'];

$rs=mysqli_query($conn,"select * from users where userid!='$user'");
if(isset($_GET['uid'])){
    $uid = $_GET['uid'];
    $reas=mysqli_query($conn, "select * from users where userid='$uid'");
    //$row=mysqli_fetch_array($reas);
  }
  

?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Chating</strong>
        </div>
<div class="card-body card-block"> 
        <form action="insertmessage.php" method="POST">
                    <h6 class="heading-small text-muted mb-4">Message</h6>
                   <div class="pl-lg-4">
                    <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                      <label class="form-control-label" for="input-mname">User name</label>
                        <select class="form-control form-control-alternative" >
                        <?php while($row=mysqli_fetch_array($rs))
                              {   
                                if($_GET['uid']==$row['uid']){
                                  ?>
                                      <option value="message.php?uid=<?php echo $row['uid'] ?>" selected><?php echo $row['username'] ?></option>
                                      <?php
                                        }
                                        if($_GET['uid']!=$row['uid']){
                                        ?>
                                  <option value="message.php?uid=<?php echo $row1['uid'] ?>"><?php echo $row1['username'] ?></option>
                                  <?php
                                }
                              }?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="form-group">
                            <label class="form-control-label" for="input-write">Write message</label>
                        <textarea rows="4" cols="50" id="input-date" class="form-control form-control-alternative" name="msg" ></textarea>
                    </div>
                    </div>
                    </div>
                  <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                </div>
                </div>
       <hr class="my-4" />
        </form>
      </div>
</div>
<div>
   