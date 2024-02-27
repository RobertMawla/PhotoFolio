<?php
session_start();

if(!isset($_SESSION['userid'])){
    header("location: landing.php");
    exit();
}

if(isset($_GET['komentarid']) && is_numeric($_GET['komentarid'])){
    include "koneksi.php";
    $komentarid = $_GET['komentarid'];

    $hapus_komentar = mysqli_query($conn, "DELETE FROM komentarfoto WHERE komentarid = $komentarid");

    if($hapus_komentar){
        header("location: {$_SERVER['HTTP_REFERER']}?pesan=Komentar berhasil dihapus.");
        exit();
    } else {
        header("location: {$_SERVER['HTTP_REFERER']}?pesan=Gagal menghapus komentar.");
        exit();
    }
} else {
    header("location: {$_SERVER['HTTP_REFERER']}?pesan=Komentar tidak valid.");
    exit();
}
?>
