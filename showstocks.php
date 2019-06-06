<?php

include('header.php');
include('conn.php'); 
$id = $_GET['id'];
$join=mysqli_query($conn,"select * from stocks s join materials m on s.mid=m.mid where stockid='$id'");
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
                  <th scope="col">Material Quantity</th>
                  <td >
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['quantity'] ?></span>
                        </div>
                    </td>
                </tr>
                <tr>
                  <th scope="col">GRS no</th>
                  <td>
                    <?php echo $row['grsno'] ?>
                    </td>
                </tr>
                 <tr>
                   <th scope="col">Manufacture date</th>
                   <td >
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['mfgdate'] ?></span>
                        </div>
                    </td>
                </tr>
                  <tr>
                    <th scope="col">Expiry date</th>
                    <td >
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['expirydate'] ?></span>
                        </div>
                    </td>
                   </tr>
                   <tr>
                    <th scope="col">Rate</th>
                    <td >
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['rate'] ?></span>
                        </div>
                    </td>
                   </tr>
            </tbody>
            </table>
        </div>
    </div>
