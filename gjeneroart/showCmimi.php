<?php
include('../db_conn.php');

$k = $_POST['id'];
$k = trim($k);

$sql = "SELECT * FROM Artikujt WHERE Cmimi='{$k}'";
$res = mysqli_query($conn, $sql);

while ($rows = mysqli_fetch_array($res)) {
    ?>
    <tr>
        <td><?php echo $rows['Id']; ?></td>
        <td><?php echo $rows['Artcode']; ?></td>
        <td><?php echo $rows['Pershkrimi']; ?></td>
        <td><?php echo $rows['Cmimi']; ?></td>
        <td><?php echo $rows['Departamenti']; ?></td>
    </tr>   

<?php
}
echo $sql;

?>


