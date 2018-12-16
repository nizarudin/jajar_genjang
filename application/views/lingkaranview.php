<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model Lingkaran</title>
</head>
<body>
    <h2>Model Lingkaran</h2>
    
    <!-- memanggil metode get_radius() dari objek $model -->
    Nilai jari-jari: <?php echo $model->get_radius(); ?><br />

    <!-- memanggil metode hitung_luas() dari objek $model -->
    Luas Lingkaran: <?php echo $model->hitung_luas(); ?><br />

    <!-- memanggil metode hitung_keliling() dari objek $model -->
    Keliling Lingkaran: <?php echo $model->hitung_keliling(); ?><br />
</body>
</html>