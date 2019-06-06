<?php
include('conn.php');

$join=mysqli_query($conn,"select * from issue i join materials m on i.mid = m.mid join subdivision s on s.sdivid=i.issuedto join division d on d.divid=i.issuedfrom");
$row=mysqli_fetch_array($join);
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

<h2>Issue Table</h2>
<form>
<table>
  <tr>
    <th>Material Name</th>
    <th>date</th>
    <th>Issued to</th>
    <th>Issued from</th>
    <th>Requisition quantity</th>
    <th>Issue quantity</th>
    <th>Amount</th>
  </tr>
  <?php
                            while($row=mysqli_fetch_array($join))
                            {
                                
                    ?>
  <tr>
    <td><?php echo $row['mname'] ?></td>
    <td><?php echo $row['date'] ?></td>
    <td><?php echo $row['issuedto'] ?></td>
    <td><?php echo $row['issuedfrom'] ?></td>
    <td><?php echo $row['quantityofreq'] ?></td>
    <td><?php echo $row['issuequan'] ?></td>
    <td><?php echo $row['amount'] ?></td>
  </tr>
<?php } ?>
</table>
<button onclick="window.print()">Print</button>
</form>
</body>
</html>
