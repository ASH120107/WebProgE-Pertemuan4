<?php 
    // transaksi penjualan produk
    $namaproduk = "Baju ngapung";
    $harga_satuan = 500000;
    $qty = 5;

    // hitung harga yang harus di bayar
    $tharga =$harga_satuan * $qty;

    echo "Sub Total:" . $tharga;
    // terdapat diskon %5 jika sub total lebih dari 500.000

    if($tharga > 500000){
        $diskon = $tharga * 5/500;
    }else{
        $diskon =0;

    }

$total_bayar = $tharga - $diskon;

echo "<br>Diskon" . $diskon;
echo "<br>Total Bayar: " . $total_bayar;
?>

    