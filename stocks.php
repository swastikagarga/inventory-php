<?php
include('header.php');
include('conn.php'); 
$rs=mysqli_query($conn,"select * from stocks");

if(isset($_GET['expiry'])){
    $expiry= $_GET['expiry'];
    
$join=mysqli_query($conn," select * from stocks s join materials m on s.mid=m.mid where s.expirydate='$expiry'");
}

else
{$join=mysqli_query($conn,"select * from stocks s join materials m on s.mid=m.mid ");}
?>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">data table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md-10">
                                        <form action='stocks.php'>
                                            <label>Expiry date</label>
                                            <input type="date" name="expiry">
                                            <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button></form>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--md-10">
                                        <form action='stocks.php'>
                                            
                                            <div class="dropDownSelect2"></div>
                                    <div class="table-data__tool-right">
                                    
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" onchange="javascript:location.href = this.value;" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="stockpdf.php">PDF</option>
                                                <option value="">EXCEL</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                <a href="stocktable.php">Print</a>
                                        </button>
                                        
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                            <th>material name</th>
                                            <th>grs no</th>
                                            <th>grs date</th>
                                            <th>Material quantity</th>
                                            <th>manufacture date</th>
                                            <th>expiry date</th>
                                            <th>rate</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                            while($row=mysqli_fetch_array($join))
                            {
                                
                    ?>
                      <tr class="tr-shadow">   
                      <td >
                    <?php echo $row['mname'] ?>
                    </td>          
                    <td >
                    <?php echo $row['grsno'] ?>
                    </td>
                    <td >
                    <?php echo $row['grsdate'] ?>
                    </td>
                    <td>
                    <?php echo $row['quantity'] ?>
                    </td>
                    <td>
                    <?php echo $row['mfgdate'] ?>
                    </td>
                    <td>
                    <?php echo $row['expirydate'] ?>
                    </td>
                    <td>
                    <?php echo $row['rate'] ?>
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Show Details">
                                <a href="showstocks.php?id=<?php echo $row['stockid'] ?>" > <i class="zmdi zmdi-mail-send"></i></a>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                            <a href="editstocks.php?id=<?php echo $row['stockid'] ?>"><i class="zmdi zmdi-edit"></i></a>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Damage">
                            <a href="damage.php?id=<?php echo $row['stockid'] ?>"><i class="zmdi zmdi-delete"></i>
                            </button>
                        </div>
                    </td>
                            <?php } ?>
                    <tr class="spacer"></tr>
                </tr>
            </tbody>
            </form>
        </table>
    </div></div></div>
    

                                <!-- END DATA TABLE -->