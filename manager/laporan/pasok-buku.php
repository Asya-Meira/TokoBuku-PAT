<!doctype html>
<html lang="en">
<head>
   <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Manager</title>
</head>
<body>
    <div class="container" style="margin-top: 2%;">
        <div class="card">
        <div class="card-header">
                <p style="font-size: 20px;">LAPORAN PASOK BUKU</p>
                <a class="nav-link" href="../manager.php" tabindex="-1" style="color:black; margin-left:92%; margin-top:-4%">Back</a>
            </div>
            <div class="card-body">
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
                <div class="buton" style="margin-left: 76.7%; margin-top:-5%">
                    <a href="#" type="button" class="btn btn-info" style="color: white;">Tampilkan</a>
                    <a href="#" type="button" class="btn btn-primary">Refresh</a>
                    <a href="#" type="button" class="btn btn-success">Cetak</a>
                </div>
                <table align="center" border="1" class="table table-bordered mt-4">
                    <tr>
                        <th>No</th>
                        <th>Nama Distributor</th>
                        <th>Judul Buku</th>
                        <th>NO ISBN</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th>Jumlah Pasok</th>
                        <th>Tanggal</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>PT. Angkasa</td>
                        <td>Harry Potter</td>
                        <td>1234555</td>
                        <td>Lupa</td>
                        <td>Grammer</td>
                        <td>95.000</td>
                        <td>150</td>
                        <td>100</td>
                        <td>21-06-2021</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PT. Grammed</td>
                        <td>Kisah Kita</td>
                        <td>08778899</td>
                        <td>Asya Meira</td>
                        <td>Grammed</td>
                        <td>85.000</td>
                        <td>234</td>
                        <td>149</td>
                        <td>21-07-2020</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PT. Grammed</td>
                        <td>Antara Aku Dan Dia</td>
                        <td>123456789</td>  
                        <td>Ira Maharani</td>
                        <td>Grammed</td>
                        <td>95.000</td>
                        <td>678</td>
                        <td>600</td>
                        <td>22-04-2021</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>PT. Grammed</td>
                        <td>LASKAR PELANGI</td>
                        <td>1234577</td>
                        <td>Asya Meira</td>
                        <td>Grammed</td>
                        <td>70.000</td>
                        <td>768</td>
                        <td>567</td>
                        <td>15-01-2021</td>
                    </tr>  
                    <tr>
                        <td colspan="2" align="right"><strong>Jumlah</strong></td>
                        <td colspan="8"><strong>4 Data</strong></td>
                    </tr>  
                </table>                       
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>