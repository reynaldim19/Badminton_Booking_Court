<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upload Postingan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
  <form method="POST" action="upload.php" enctype="multipart/form-data" class="m-auto pt-5" style="width: 60%;">
    <h1 class="text-center">Form Upload Informasi</h1>
    <div class="mb-3">
      <label class="form-label">Nama Turnamen</label>
      <input name="nama" type="text" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Deskripsi</label>
      <input type="text" name="deskripsi" class="form-control" rows="3"></input>
    </div>
    <div class="mb-4">
      <label class="form-label">Foto</label>
      <input type="file" name="foto" class="form-control">
    </div>
    <div class="form-actions d-grid gap-2 d-md-flex justify-content-md-end">
      <button type="submit" name="proses" value="Upload" class="btn btn-success">Upload</button>
      <button type="button" class="btn btn-success">Cancel</button>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/zdist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>