<?php

include('header.php');
include('conn.php'); 
$join=mysqli_query($conn,"select * from damage, materials where damage.mcode= materials.mid");
?>
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">DAMAGE TABLE</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                    
                    <div class="dropDownSelect2"></div>
                </div>
                <div class="rs-select2--light rs-select2--sm">
                    
                    <div class="dropDownSelect2"></div>
                </div>
                </div>
            <div class="table-data__tool-right">
            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <a href="damagetable.php">Print</a>
            </button>
                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                    <select class="js-select2" name="type">
                        <option selected="selected">Export</option>
                        <option value="stockpdf.php">PDF</option>
                        <option value="">EXCEL</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                  <th scope="col">Damaged Id</th>
                   <th scope="col">Material Name</th>
                    <th scope="col">Quantity</th>
                                                                </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                              while($row=mysqli_fetch_array($join))
                              {
                                  
                      ?>
                      <tr>
                      <th scope="row">
                      <div class="media align-items-center">
                          <div class="media-body">
                            <span class="mb-0 text-sm"><?php echo $row['damid'] ?></span>
                          </div>
                        </div>
                        <td>
                          <div class="media-body">
                            <span class="mb-0 text-sm"><?php echo $row['mname'] ?></span>
                          </div>
                        </td>
                      </th>
                      <td >
                          <i class="bg-warning"></i> <?php echo $row['quantity'] ?>
                        </span>
                    </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <a href="damage.php?id=<?php echo $row['mid'] ?>"> <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                                <tr class="spacer"></tr>
                                            </tr>
                                            <?php
                            }

                    ?>           
                                        </tbody>
                                    </table>
                                </div>
                        
                                <!-- END DATA TABLE -->