 <?php

include('header.php');
include('conn.php'); 
$rs=mysqli_query($conn,"select userid,usertypes,username,firstname,email,city from users");
?>
       <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-16">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                <tr>
                   <th scope="col">Userid</th>
                   <th scope="col">Username</th>
                    <th scope="col">Usertype</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Email Id</th>
                    <th scope="col">City</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>

                    <?php

                            while($row=mysqli_fetch_array($rs))
                            {
                                
                    ?>
                    
                    <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                      
                        <div class="media-body">
                          <span class="mb-0 text-sm"><a href="editusers.php?id=<?php echo $row['userid'] ?>"> <?php echo $row['userid'] ?></a></span>
                        </div>
                      </div>
                    </th>
                    <td>
                    <?php echo $row['username'] ?>
                    </td>
                    <td>
                        <i class="bg-warning"></i> <?php echo $row['usertypes'] ?>
                      </span>
                    </td>
                    <td>
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['firstname'] ?></span>
                        </div>
                    </td>
                    <td>
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['email'] ?></span>
                        </div>
                    </td>
                    <td class="text-right">
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['city'] ?></span>
                        </div>
                    </td>
                  </tr>
                    
                    
                    <?php
                            }

                    ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>