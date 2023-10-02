<?php
include "tampilkan.php"
  ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Managemen Konten</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class="m-auto pt-5" style="width: 60%;">
  <h1 class="text-center">Managemen Konten</h1>
  <a href="formUpload.php" class="btn btn-success">Upload</a>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Publish</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <?php
    while ($data = mysqli_fetch_assoc($proses)) {
      ?>
      <tbody>
        <tr>
          <th scope="row">
            <?php echo $data['id']; ?>
          </th>
          <td>
            <?php echo $data['nama']; ?>
          </td>
          <td><span class="badge text-bg-success">Published</span></td>
          <td><a href="delete.php?kode=<?php echo $data['id']; ?>" class="btn btn-danger">hapus</td>
        </tr>
      </tbody>
      <?php
    }
    ?>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/zdist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>
<footer>
  <div class="footer-top text-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h4 class="navbar-brand">Prixima<span class="dot">.</span></h4>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
            classical Latin literature from</p>
          <div class="col-auto social-icons">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-pinterest'></i></a>
          </div>
          <div class="col-auto conditions-section">
            <a href="#">privacy</a>
            <a href="#">terms</a>
            <a href="#">disclaimer</i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom text-center">
    <p class="mb-0">Copyright vicpra 2022. All rights Reserved</p> Distributed By <a
      hrefs="https://themewagon.com">ThemeWagon</a>
  </div>
</footer>

</html>