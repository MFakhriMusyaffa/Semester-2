<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja</title>
</head>
<body>
    <h1>Belanja Online</h1>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-2 col-form-label">Customer</label>
                        <div class="col-7">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2">Pilih Produk</label>
                        <div class="col-7">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                                <label for="produk_0" name="tv" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                                <label for="produk_1" name="kulkas" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci">
                                <label for="produk_2" name="mesin_cuci" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-2 col-form-label">Jumlah</label>
                        <div class="col-7">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-2 col-7">
                            <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 23rem;">
                    <div class="card-header">
                        Daftar Harga
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">TV : 4.200.000</li>
                        <li class="list-group-item">kulkas : 3.100.000</li>
                        <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                    </ul>
                    <div class="card-footer">
                        Harga Dapat Berubah Setiap Saat
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <?php
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        //harga
        if ($produk == 'tv'){
            $harga = 4200000;
        }elseif ($produk == 'kulkas'){
            $harga = 3100000;
        }elseif ($produk == 'mesin_cuci'){
            $harga = 3800000;
        }

        $total = $jumlah * $harga;

        echo '<br/> Nama Customer : '.$customer; 
        echo '<br/>Produk Pilihan : '.$produk;
        echo '<br/>Jumlah Beli : '.$jumlah; 
        echo '<br/> Total Belanja :'.$total; 
    ?>
</body>
</html>