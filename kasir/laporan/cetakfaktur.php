<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Kasir</title>
  </head>
  <body>
    <div class="container" style="margin-top: 2%;">
        <div class="card">
            <div class="card-header">
            <p style="font-size: 20px;">Form Cetak Faktur Penjualan</p>
            <a class="nav-link" href="../kasir.php" tabindex="-1" style="color:black; margin-left:90%; margin-top:-4%" >Back</a>
            </div>
            <div class="card-body" >
                <div class="mb-3 col-sm-6" style="width: 100%;">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">No Faktur </label>
                    <select name="faktur" class="form-control" required>
                    <option value=""></option>
                        <option value="FK0000000000000001">FK0000000000000001</option>
                        <option value="FK0000000000000002">FK0000000000000002</option>
                        <option value="FK0000000000000003">FK0000000000000003</option>
                        <option value="FK0000000000000004">FK0000000000000004</option>
                        <option value="FK0000000000000005">FK0000000000000005</option>
                        <option value="FK0000000000000006">FK0000000000000006</option>
                        <option value="FK0000000000000007">FK0000000000000007</option>
                        <option value="FK0000000000000008">FK0000000000000008</option>
                        <option value="FK0000000000000009">FK0000000000000009</option>
                        <option value="FK0000000000000010">FK0000000000000010</option>
                        <option value="FK0000000000000011">FK0000000000000011</option>
                        <option value="FK0000000000000012">FK0000000000000012</option>
                        <option value="FK0000000000000013">FK0000000000000013</option>
                        <option value="FK0000000000000014">FK0000000000000014</option>
                        <option value="FK0000000000000015">FK0000000000000015</option>
                    </select>
                </div>
                <a href="#" type="button" class="btn btn-primary" style="width: 100%;">LIHAT</a> 
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
