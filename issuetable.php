 <?php

include('header.php');
include('conn.php'); 

if(isset($_GET['from'])){
    $from= $_GET['from'];
    $upto = $_GET['upto'];
    $join=mysqli_query($conn,"select * from issue i join materials m on i.mid = m.mid join subdivision s on s.sdivid=i.issuedto join division d on d.divid=i.issuedfrom where date between '$from' and '$upto'");
}elseif(isset($_GET['divna'])){
   $divid=$_GET['divna'];
    $join=mysqli_query($conn,"select * from issue i join materials m on i.mid = m.mid join subdivision s on s.sdivid=i.issuedto join division d on d.divid=i.issuedfrom where d.divid='$divid'");
}
else{
    $join=mysqli_query($conn,"select * from issue i join materials m on i.mid = m.mid join subdivision s on s.sdivid=i.issuedto join division d on d.divid=i.issuedfrom ");
}

?>

<div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">data table</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <div class="rs-select2--light rs-select2--md-10">
                    <form action='issuetable.php'>
                        <label >From</label>
                        <input type="date" name="from">
                    
                        </div>
                        <div class="rs-select2--light rs-select2--mD-10">
                        <label >Upto</label>
                        <input type="date" name="upto">
                            
                        </div>
                        <button class="au-btn-filter">
                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                    </form>
                </div>
                <div class="table-data__tool-right">
                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <select class="js-select2" onchange="javascript:location.href=this.value;" name="type">
                            <option selected="selected">Export</option>
                            <option value="stockpdf.php">PDF</option>
                            <option value="">EXCEL</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <a href="viewissuetable.php">Print</a>
                    </button>
                </div>
            </div>
    
       <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                        <tr>
                   <th scope="col">Material Name</th>
                   <th scope="col">Date</th>
                    <th scope="col">Issued TO</th>
                    <th scope="col">Issued FROM</th>
                    <th scope="col">QUANTITY OF REQUISITION</th>
                    <th scope="col">Issue Quantity</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Amount</th>
                  </tr>
                </thead>
                <tbody>

                    <?php

                            while($row=mysqli_fetch_array($join))
                            {
                                
                    ?>
                    <tr>
                    <td >
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['mname'] ?></span>
                            </div>
                    </td>
                    <td >
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['date'] ?></span>
                        </div>
                    </td>
                    <td>
                      
                        <i class="bg-warning"></i> <?php echo $row['sdivname'] ?>
                      </span>
                    </td>
                    <td>
                    <div class="media-body">
                          <span class="mb-0 text-sm"><a href="issuetable.php?divna=<?php echo $row['divid'] ?>"><?php echo $row['divname'] ?></a></span>
                        </div>
                    </td>
                    <td class="text-center" >
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['quantityofreq'] ?></span>
                        </div>
                    </td>
                    <td class="text-center">
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['issuequan'] ?></span>
                        </div>
                    </td>
                    <td >
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['rate'] ?></span>
                        </div>
                    </td>
                    <td >
                    <div class="media-body">
                          <span class="mb-0 text-sm"><?php echo $row['amount'] ?></span>
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