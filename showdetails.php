<?php

include('header.php');
include('conn.php'); 
$id = $_GET['id'];
$join=mysqli_query($conn,"select * from types t join materials m on t.id = m.t_id join category c on c.catid=m.catid where mid='$id'");
$row=mysqli_fetch_array($join);
?>

            <!-- MAIN CONTENT-->
            
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        <!--function of print
                        <button onclick="window.print()">Print</button>-->
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                            <th scope="col">Name</th>
                    <th scope="col">values</th>
                   </tr>
                </thead>
                 <tr>
                  <th scope="col">Material Code</th>
                  <td >
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['matcode'] ?></span>
                        </div>
                    </td>
                </tr>
                <tr>
                  <th scope="col">Material Name</th>
                  <td>
                    <?php echo $row['mname'] ?>
                    </td>
                </tr>
                <tr>
                  <th scope="col">Category Name</th> 
                  <td >
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['catname'] ?></span>
                        </div>
                    </td>
                </tr>
                 <tr>
                   <th scope="col">Make</th>
                   <td >
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['make'] ?></span>
                        </div>
                    </td>
                </tr>
                  <tr>
                    <th scope="col">Type</th>
                    <td >
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['type'] ?></span>
                        </div>
                    </td>
                   </tr>
            </tbody>
                                    </table>
                                </div>
                            </div>
