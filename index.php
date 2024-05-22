<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <!-- Link Css  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Bahan Bakar</h1>

        <div class="container">
                <form action="" method="POST">
                    <div class="container-input">
                        <div class="content1">
                            <label for="jumlah">Masukan Jumlah Liter :</label>
                            <input type="text" name="jumlah" id="jumlah" placeholder="Masukan Angka" required>
                        </div>
                        <div class="content2">
                            <label for="jenis">Pilih Tipe Bahan bakar :</label>
                            <select name="jenis" id="jenis" required>
                                <option disable selected > ---Pilih Shell---- </option>
                                <option value="SSuper">Shell Super</option>
                                <option value="SVpower">Shell VPower</option>
                                <option value="SVpowerDiesel">Shell Vpower Diesel</option>
                                <option value="SVpowerNitro">Shell VPower NItro</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <br>
                    <button type="submit" name="beli">Beli</button>
                </form>
<?php 

    include "proses.php";

    $proses = new Beli();
    $proses->setHarga(15530, 16350, 16130, 16570);

?> 

<?php if (isset($_POST['beli']) && !empty($_POST['jumlah']) && !empty($_POST['jenis']))  : ?>
    <p>
        <?php $proses->jenis = $_POST['jenis']; ?> 
        <?php $proses->jumlah = $_POST['jumlah']; ?> 
        <?php $proses->hargaBeli(); ?>

        <?php $proses->cetak(); ?> 
    </p>
<?php endif; ?>
</div>

</body>
</html> 