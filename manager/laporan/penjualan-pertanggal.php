<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Manager</title>
  </head>
  <body>
    <div class="container" style="margin-top: 2%;">
        <div class="card">
            <div class="card-header">
                <p style="font-size: 20px;">FILTER PENJUALAN PERTANGGAL</p>
                <a class="nav-link" href="../manager.php" tabindex="-1" style="color:black; margin-left:90%; margin-top:-4%" >Back</a>
            </div>
            <div class="card-body" >
            <p style="font-weight: bold; margin-left: 28%;">periode :</p>
            <div class="mb-3 col-sm-6" style="width: 200px; margin-left: 35.5%; margin-top: -6%">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="date" class="form-control">
                </div>
                    <p style="margin-left: 54.5%; margin-top:-4.5%;">s/d</p>
                <div class="mb-3 col-sm-6" style="width: 200px; margin-left: 57%; margin-top:-6.5%">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="date" class="form-control" placeholder="">
                </div>
            <div class="buton" style="margin-left: 76.7%; margin-top:-5%  ">
            <a href="#" type="button" class="btn btn-info">Tampilkan</a>
            <a href="#" type="button" class="btn btn-primary">Refresh</a>
            <a href="#" type="button" class="btn btn-success">Cetak</a>
            </div>
            <table align="center" border="1" class="table table-bordered mt-4">
                <tr>
                    <th>No</th>
                    <th>No Faktur</th>
                    <th>Judul Buku</th>
                    <th>ISBN</th>
                    <th>Jumlah Beli </th>
                    <th>Harga Satuan </th>
                    <th>PPN</th>
                    <th>Diskon</th>
                    <th>Total Harga</th>
                    
                </tr>
                <tr>
                    <td>1</td>
                    <td>F1000000JH</td>
                    <td>Harry Potter</td>
                    <td>2 Buku</td>
                    <td>50.000 </td>
                    <td>5%</td>
                    <td>10%</td>
                    <td>95.000</td>
                    <td>21-06-2021</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>F1000000HN</td>
                    <td>Antara Aku Dan Dia</td>
                    <td>1 Buku</td>
                    <td>30.000 </td>
                    <td>10%</td>
                    <td>10%</td>
                    <td>30.000</td>
                    <td>21-06-2021</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>F1000000AS</td>
                    <td>Si OTAN</td>
                    <td>2 Buku</td>
                    <td>10.000 </td>
                    <td>2%</td>
                    <td>2%</td>
                    <td>10.000</td>
                    <td>22-06-2021</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>F1000000AL</td>
                    <td>My Boy Friends</td>
                    <td>5 Buku</td>
                    <td>10.000 </td>
                    <td>10%</td>
                    <td>10%</td>
                    <td>50.000</td>
                    <td>22-06-2021</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>F1000000DV</td>
                    <td>Geez & Ann #1</td>
                    <td>1 Buku</td>
                    <td>70.000 </td>
                    <td>3%</td>
                    <td>3%</td>
                    <td>70.000</td>
                    <td>22-06-2021</td>
                </tr>  
                <tr>
                    <td colspan="2" align="right"><strong>Jumlah</strong></td>
                    <td colspan="8"><strong>5 Data</strong></td>
                </tr>             
            </table>                       
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
