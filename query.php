 <?php
 include('header.php');
include('conn.php'); 

    $select_activity = "select * from activity order by id desc";


    $all_activity = mysqli_query($conn, $select_activity);
?>
<div class="card-body">
<?php
while($row = mysqli_fetch_array($all_activity)){
    ?>
    	
        <div class="alert alert-danger" role="alert">
											
    <div class="image img-cir img-40">
        <img src="#"  />
    </div>
    <span>
        <h6><?php echo $row['userid']; ?></h6>
        <p><?php echo $row['description']; ?></p></span>
        <span class="time"><?php echo $row['time']; ?></span>
    
    </div>

    <?php

}

?>

		