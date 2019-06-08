<?php



$sesusertype=$_SESSION['usertypes'];


include('header.php');
include('conn.php'); 
$rs=mysqli_query($conn,"select * from category");

if(isset($_GET['expiry'])){
    $expiry= $_GET['expiry'];
    
$join=mysqli_query($conn,"select * from types t join materials m on t.id = m.t_id join category c on c.catid=m.catid where m.expirydate<='$expiry'");
}
elseif(isset($_GET['category'])){
    $category= $_GET['category'];
    $join=mysqli_query($conn,"select * from types t join materials m on t.id = m.t_id join category c on c.catid=m.catid where c.catid='$category'");}
else
{$join=mysqli_query($conn,"select * from types t join materials m on t.id = m.t_id join category c on c.catid=m.catid");}
?>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">data table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md-10">
                                        <form action='materials.php'>
                                        <label>Expiry date</label>
                                            <input type="date" name="expiry">
                                            <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button></form>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--md-10">
                                        <form action='materials.php'>
                                            <select class="js-select2" name="category">
                                            <?php

                                            while($row=mysqli_fetch_array($rs))
                                            {
                                                
                                            ?>
                                            <option value="<?php echo $row['catid'] ?>"><?php echo $row['catname'] ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button></form>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" onchange="javascript:location.href = this.value;" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="materialpdf.php">PDF</option>
                                                
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                <a href="materialtable.php">Print</a>
                                        </button>
            
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>material code</th>
                                                <th>material name</th>
                                                <th>make </th>
                                                <th>type </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                            while($row=mysqli_fetch_array($join))
                            {
                                
                    ?>
                      <tr class="tr-shadow">             
                    <td >
                        <span class="mb-0 text-sm"><?php echo $row['matcode'] ?></span>
                    </td>
                    <td>
                    <?php echo $row['mname'] ?>
                    </td>
                    <td>
                    <?php echo $row['make'] ?>
                    </td>
                    <td>
                    <?php echo $row['type'] ?>
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Show Details">
                                <a href="showdetails.php?id=<?php echo $row['mid'] ?>" > <i class="zmdi zmdi-mail-send"></i></a>
                            </button>
                            <?php
                                        if($sesusertype==1){?>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <a href="editmaterials.php?id=<?php echo $row['mid'] ?>"><i class="zmdi zmdi-edit"></i></a>
                                            </button><?php }
                            ?>
                    
                        </div>
                    </td>
                    <tr class="spacer"></tr>
                </tr>
                <?php
                        }

                ?>           
            </tbody>
            </form>
        </table>
        
    </div>
    </div></div>
     <!-- END DATA TABLE -->