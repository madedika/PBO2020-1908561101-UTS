<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>  
    <link rel="icon" type="image/png" href="emoji 1.png">  
    <title>Emperadors Team</title>
</head>

<body>
        <a href="add.php">Tambah Pemain</a><br/><br/>

    <table width='70%' border : 200>
    <tr>
        <th>Nama</th> <th>No. Telp</th> <th>Email</th> <th>Alamat</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";  
        echo "<td>".$user_data['address']."</td>";   
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Hapus Pemain</a></td></tr>";        
    }
    ?>
    </table>

    <style>
    table{
        border-collapse: collapse;
        text-align: left;

    }

    body {
        background-image: url('bg 1.png');
        background-size:150%;
        background-repeat:no-repeat;
        background-color :#720a0a;
    }
    a,th,td,tr{color : white;}
    </style>

</body>
</html>