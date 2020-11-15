<html>
<head>
    <link rel="icon" type="image/png" href="emoji 1.png">
    <title>Tambah Pemain</title>   
    <style>
body {
        background-image: url('bg 1.png');
        background-size:150%;
        background-repeat:no-repeat;
        background-color :#720a0a;
    }
    a,th,td,tr{color : white;}
</style>	
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0" background : white>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>No Telp</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>    
                <td>Alamat</td>
                <td><input type="text" name="address"></td></tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php


    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];

 
        include_once("config.php");

      
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile,address) VALUES('$name','$email','$mobile','$address')");

        
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>