<?php
include('conn.php');

$join=mysqli_query($conn,"select * from types t join materials m on t.id = m.t_id join category c on c.catid=m.catid ");

?>

<!DOCTYPE html>

<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Material Table</h2>
<form>
<table>
  <tr>
    <th>Material Code</th>
    <th>Material name</th>
    <th>Category</th>
    <th>Type</th>
    <th>Make</th>
  </tr>
  <?php
                            while($row=mysqli_fetch_array($join))
                            {
                                
                    ?>
  <tr>
    <td><?php echo $row['matcode'] ?></td>
    <td><?php echo $row['mname'] ?></td>
    <td><?php echo $row['catname'] ?></td>
    <td><?php echo $row['type'] ?></td>
    <td><?php echo $row['make'] ?></td>
  </tr>
<?php } ?>
</table>
<button onclick="window.print()">Print</button>
</form>
</body>
</html>
