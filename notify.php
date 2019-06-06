<?php
 include('header.php');
include('conn.php'); 

    $select_notify = "select * from notification order by id desc";


    $all_notify = mysqli_query($conn, $select_notify);
?>
<div class="card-body">
<?php
while($row = mysqli_fetch_array($all_notify)){
    ?>
    	
        <div class="alert alert-danger" role="alert">
											
    <div class="image img-cir img-40">
        <img src="#"  />
    </div>
    <span>
        <h6><?php echo $row['usend']; ?></h6>
        <p><?php echo $row['description']; ?></p></span>
        <span class="time"><?php echo $row['time']; ?></span>
    
    </div>

    <?php

}

?>

		