<?php
include('conn.php');

$join=mysqli_query($conn,"select * from stocks s join materials m on s.mid=m.mid ");

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

<h2>Stocks Table</h2>
<form>
<table>
  <tr>
    <th>GRS NO</th>
    <th>Quantity</th>
    <th>Manufacture date</th>
    <th>Expiry date</th>
    <th>rate</th>
  </tr>
  <?php
                            while($row=mysqli_fetch_array($join))
                            {
                                
                    ?>
  <tr>
    <td><?php echo $row['grsno'] ?></td>
    <td><?php echo $row['quantity'] ?></td>
    <td><?php echo $row['mfgdate'] ?></td>
    <td><?php echo $row['expirydate'] ?></td>
    <td><?php echo $row['rate'] ?></td>
  </tr>
<?php } ?>
</table>
<button onclick="window.print()">Print</button>
</form>
</body>
</html>
