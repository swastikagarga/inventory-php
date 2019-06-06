<?php
include('header.php');
include('conn.php');

$join=mysqli_query($conn,"select * from system_set");

?>
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
                                            <th scope="col">Type</th>
                                            <th scope="col">Description</th>
                                        </tr>
                                        </thead>
                                        <?php
                                            while($row = mysqli_fetch_array($join)){
                                              ?>
                                        <tr>
                                        <th scope="col">Email Id</th>
                                        <td>
                                            <?php echo $row['description']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                        <th scope="col">Password</th> 
                                        <td >
                                            <div class="media-body">
                                                <span class="mb-0 text-sm"><?php echo $row['type']; ?></span>
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
