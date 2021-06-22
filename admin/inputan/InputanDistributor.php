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
                <p style="font-size: 20px;">FORM DISTRIBUTOR</p>
                <a class="nav-link" href="../admin.php" tabindex="-1" style="color:black; margin-left:92%; margin-top:-4%">Back</a>
            </div>
            <div class="card-body" >
                <div class="mb-3 col-sm-8">
                    <label for="exampleFormControlInput1" class="form-label color:grey;" style="font-weight: bold;">Nama Distributor</label>
                    <input type="text" class="form-control" style="color: grey;" placeholder="Masukan nama distributor">
                </div>
                <div class="mb-3 col-sm-8">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Alamat</label>
                    <textarea name="ket" class="form-control"></textarea>
                </div>
                <div class="mb-3 col-sm-8">
                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Telpon</label>
                    <input type="text" class="form-control" placeholder="Masukan Telpon">
                </div>
                <a href="#" type="button" class="btn btn-primary">Simpan</a> 
            </div>
        </div>
        
        <div class="row">
            <form class="form-group" style="margin-top: 2%;">
                <label>Pencarian :</label>
                <input type="text" name="text-cari" class="col-sm-3" placeholder="nama distributor">
                <button type="submit" name="cari" class="form-group btn btn-info" style="color: white;">Cari</button>
                <a href="#" type="button" class="btn btn-success">Refresh</a>
            </form>
        </div>

        <table align="center" border="1" class="table table-bordered mt-4">
            <tr>
                <th>Nama Distributor</th>
                <th>Alamat</th>
                <th>Telpon</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            <tr>
                <td>Asya Meira</td>
                <td>Jl. Siliwangi III</td>
                <td>087783593580</td>
                <td><a href="#" onclick="return confirm('Hapus Data?')" class="btn btn-danger">Hapus</a></td>
                <td><a href="#" class="btn btn-warning">Edit</a></td>
            </tr>
            <tr>
                <td>Ira Maharani</td>
                <td>Jl. Bogor Raya</td>
                <td>08318787458045</td>
                <td><a href="#" onclick="return confirm('Hapus Data?')" class="btn btn-danger">Hapus</a></td>
                <td><a href="#" class="btn btn-warning">Edit</a></td>
            </tr>             
            <tr>
                <td>Putri Hani</td>
                <td>Jl. Pacian</td>
                <td>08318787747</td>
                <td><a href="#" onclick="return confirm('Hapus Data?')" class="btn btn-danger">Hapus</a></td>
                <td><a href="#" class="btn btn-warning">Edit</a></td>
            </tr>        
            <tr>
                <td colspan="1"><strong>Jumlah : 3 Distributor</strong></td>
            </tr>     
        </table>                      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>