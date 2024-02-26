<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="naga.css">
    <title>Data Siswa</title>
    <style>
        a{
    text-decoration: none;
    color: aqua;
    align-items: center;
    justify-content: center;
    

    }
    th {
    background-color: #00c3ff;
}
    </style>
    
</head>
<body>
<header>
    
    <h2>DATA USER</h2>
    <hr>
</header>

<?php
include 'koneksi.php';

$query_data = mysqli_query($connection, "SELECT * FROM tbl_user");
?>

<table>
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>password</th>
        
    </tr>
    <?php
    if (mysqli_num_rows($query_data) > 0) {
        $counter = 1;
        while ($row = mysqli_fetch_assoc($query_data)) {
            echo "<tr>";
            echo "<td>" . $counter . "</td>";
            echo "<td>" . $row['nis'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
            $counter++;
        }
    } else {
        echo "<tr><td colspan='7'>Tidak ada data.</td></tr>";
    }

    mysqli_close($connection);
    ?>
    <tr></tr>
</table>



</body>
</html>
