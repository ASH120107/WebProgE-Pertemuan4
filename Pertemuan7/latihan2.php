<?php
    // Percabangan if pada php

    $nilai = 70;

    // beri keterangan Lulus apa bila nilai 65 ke atas

   $ket = "Lulus" ;
    if( $nilai <=65){
        $ket = "Tidak Lulus";
    }

    echo "Keterangan: " . $ket;