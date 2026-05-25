<?php
include "koneksi.php";
if (isset($_POST['submit'])){

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO pengaduan(username, email, password) VALUES ('$username', '$email', '$password')";
$result = mysqli_query($koneksi,$query);
 
if ($result){
   echo "login berhasil";

}else{
   echo "login gagal"; mysqli_error($koneksi);
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>from login</title>
</head>
<body>
   <h2>FORM LOGIN</h2>
   <form method="POST">
      <label>username</label>
      <input type="text" name="username" required ><br><br>

      <label>email</label>
      <input type="text" name="email" required><br><br>

      <label>password</label>
      <input type="text" name="password" required><br><br>

      <button type="submit" name="submit">daftar</button>
   </form>
</body>
</html>