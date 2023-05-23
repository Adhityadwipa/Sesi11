<?php
    $dta[0]["no"] = "#";
    $dta[0]["nama"] = "Komang Adi";
    $dta[0]["tgl_lahir"] = "2011-11-28";
    $dta[0]["umur"] = "11";
    $dta[0]["jns_kelamin"] = "Laki-Laki";
    $dta[0]["alamat"] = "Jl. Utama 5 Blok A17";
    $dta[0]["no_hp"] = "087861630697";

    $dta[1]["no"] = "#";
    $dta[1]["nama"] = "Kazuha";
    $dta[1]["tgl_lahir"] = "2003-08-08";
    $dta[1]["umur"] = "20";
    $dta[1]["jns_kelamin"] = "Perempuan";
    $dta[1]["alamat"] = "Bali";
    $dta[1]["no_hp"] = "08123456789";

    $dta[2]["no"] = "#";
    $dta[2]["nama"] = "Kura";
    $dta[2]["tgl_lahir"] = "1998-04-18";
    $dta[2]["umur"] = "25";
    $dta[2]["jns_kelamin"] = "Perempuan";
    $dta[2]["alamat"] = "Jakarta";
    $dta[2]["no_hp"] = "08738906359";

    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($dta);