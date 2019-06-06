<?php

include('header.php');
include('conn.php'); 
$join=mysqli_query($conn,"select * from damage ");
?>
                      <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">data table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
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