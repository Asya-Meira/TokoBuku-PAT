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
                <p style="font-size: 20px;">FORM BUKU</p>
                <a class="nav-link" href="../admin.php" tabindex="-1" style="color:black; margin-left:92%; margin-top:-4%">Back</a>
            </div>
            <div class="card-body" >
                <div class="mb-3 col-sm-8">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">Kode Buku</label>
                    <input type="text" class="form-control" style="color: grey;" placeholder="Masukan Kode Buku">
                </div>
                <div class="mb-3 col-sm-8">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">Judul Buku</label>
                    <input type="text" class="form-control" style="color: grey;" placeholder="Masukan judul buku">
                </div>
                <div class="mb-3 col-sm-8">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">NO ISBN</label>
                    <input type="text" class="form-control" style="color: grey;" placeholder="Masukan ISBN">
                </div>
                <div class="mb-3 col-sm-8">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">Penulis</label>
                    <input type="text" class="form-control" style="color: grey;" placeholder="Masukan penulis">
                </div>
                <div class="mb-3 col-sm-8">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">Penerbit</label>
                    <input type="text" class="form-control" style="color: grey;" placeholder="Masukan Penerbit">
                </div>
                <div class="mb-3 col-sm-8">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">Tahun Terbit</label>
                    <input type="text" class="form-control" style="color: grey;" placeholder="Masukan Tahun">
                </div>
                <div class="mb-3 col-sm-8">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">Harga Pokok</label>
                    <input type="text" class="form-control" style="color: grey;" placeholder="Maasukan harga pokok">
                </div>
                <div class="mb-3 col-sm-8">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">Tahun Jual</label>
                    <input type="text" class="form-control" style="color: grey;" placeholder="Masukan harga jual">
                </div>
                <div class="mb-3 col-sm-8">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">Diskon</label><a>%</a>
                    <input type="text" class="form-control" style="color: grey;" placeholder="Masukan Diskon">
                </div>
                
                
                <a href="#" type="button" class="btn btn-primary">Simpan</a> 
            </div>
        </div>

        <table align="center" border="1" class="table table-bordered mt-4">
            <tr>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>NO ISBN</th>
                <th>Penullis</th>
                <th>Penerbit</th>
                <th>Tahun </th>
                <th>Harga Pokok</th>
                <th>Harga Jual</th>
                <th>Diskon</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            <tr>
                <td>BQU0000000000000047	</td>
                <td>Kisah Kita</td>
                <td>08778899</td>
                <td>Asya Meira</td>
                <td>PT Grammed</td>
                <td>2020</td>
                <td>80.000</td>
                <td>85.000</td>
                <td>10%</td>
                <td><a href="#" onclick="return confirm('Hapus Data?')" class="btn btn-danger">Hapus</a></td>
                <td><a href="#" class="btn btn-warning">Edit</a></td>
            </tr>
            <tr>
                <td>BQU0000000000000048</td>
                <td>Antara Aku Dan Dia</td>
                <td>123456789</td>
                <td>Ira Maharani</td>
                <td>PT Grammed</td>
                <td>2017</td>
                <td>90.000</td>
                <td>95.000</td>
                <td>12%</td>
                <td><a href="#" onclick="return confirm('Hapus Data?')" class="btn btn-danger">Hapus</a></td>
                <td><a href="#" class="btn btn-warning">Edit</a></td>
            </tr>      
            <tr>
                <td>BQU0000000000000049</td>
                <td>Catatan AKhir Sekolah</td>
                <td>2224783578</td>
                <td>Putri Hani</td>
                <td>PT Grammed</td>
                <td>2019</td>
                <td>70.000</td>
                <td>75.000</td>
                <td>5%</td>
                <td><a href="#" onclick="return confirm('Hapus Data?')" class="btn btn-danger">Hapus</a></td>
                <td><a href="#" class="btn btn-warning">Edit</a></td>
            </tr>      
            <tr>
                <td colspan="1"><strong>Jumlah : 3 Buku</strong></td>
            </tr> 
        </table>                      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>