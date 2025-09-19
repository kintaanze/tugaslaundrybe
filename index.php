<?php
require "Form.php";
$form = new Form();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Laundry</title>
</head>
<body>
    <h2>Form Input Pesanan Laundry</h2>
    <?php
    echo $form->open("AksiLaundry.php", "POST");
    echo $form->text("nama_user", "Nama User");
    echo $form->password("password", "Password");
    echo $form->radio("jenis_laundry", "Jenis Laundry", [
        "kiloan" => "Kiloan",
        "satuan" => "Satuan",
        "express" => "Express"
    ]);
    echo $form->select("isian_laundry", "Isian Laundry", [
        "per_kg" => "Per Kg",
        "per_pcs" => "Per Pcs",
        "bed_cover" => "Bed Cover",
        "karpet" => "Karpet"
    ]);
    echo $form->checkbox("karakteristik", "Karakteristik Laundry", [
        "pewangi" => "Pewangi",
        "setrika" => "Setrika",
        "express_service" => "Express Service",
        "paket_hemat" => "Paket Hemat"
    ]);
    echo $form->textarea("keterangan", "Keterangan Laundry");
    echo $form->submit("Simpan");
    echo $form->close();
    ?>
</body>
</html>
