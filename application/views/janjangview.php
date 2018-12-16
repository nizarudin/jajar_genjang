<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model Jajar Genjang</title>
</head>
<body>
    <h2>Model Jajar Genjang</h2>
    
    <!-- memanggil metode get_radius() dari objek $model -->
    Nilai alas: <?php echo $model->get_alas(); ?><br />
    Nilai tinggi: <?php echo $model->get_tinggi(); ?><br />
    Nilai simir: <?php echo $model->get_simir(); ?><br />

    <!-- memanggil metode hitung_luas() dari objek $model -->
    Luas Jajar Genjang: <?php echo $model->hitung_luas(); ?><br />

    <!-- memanggil metode hitung_keliling() dari objek $model -->
    Keliling Jajar Genjang: <?php echo $model->hitung_keliling(); ?><br />
</body>
</html>