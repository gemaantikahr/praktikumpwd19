<?php 

//mulai session
session_start();

//cek lagi apakah session telah terdaftar untuk username tersebut
if ($_SESSION["nama_user"]){
//dan jika terdaftar
$nama = $_SESSION["nama_user"];
}
else{

//jika tidak terdaftar, kembalikan user ke login.html

header("Location:../../pwd19/login/formlogin.php");
}
// if(!$_SESSION["nama_user"]){
//     header("Location:../../pwd19/login/formlogin.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">Logo</a>
  
  <!-- Links -->
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Log out</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>
</nav>
<?php 
include '../../pwd19/koneksi.php';
$query = mysqli_query($konek, "SELECT *FROM tbl_user");
?>

<div class="container-fluid">
  <h3>Selamat Data</h3>
  <p><?php echo $nama ?></p>
</div>
<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Nama</th>
        <th>password</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($query as $data): ?>
      <tr>
        <td><?php echo $data['nama_user'] ?></td>
        <td><?php echo $data['password_user'] ?></td>
        <td><?php echo $data['email_user'] ?></td>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
</div>


</body>
</html>
