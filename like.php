<?php
include "koneksi.php";
session_start();

if (!isset($_SESSION['userid'])) {
    header("location:index.php");
} else {
    $fotoid = $_GET['fotoid'];
    $userid = $_SESSION['userid'];

    $checkLikeQuery = mysqli_query($conn, "SELECT * FROM likefoto WHERE fotoid='$fotoid' AND userid='$userid'");

    if (mysqli_num_rows($checkLikeQuery) == 1) {
        mysqli_query($conn, "DELETE FROM likefoto WHERE fotoid='$fotoid' AND userid='$userid'");
        header("location:2index.php");
    } else {
        $tanggalLike = date("Y-m-d");
        mysqli_query($conn, "INSERT INTO likefoto VALUES('', '$fotoid', '$userid', '$tanggalLike')");
        header("location:2index.php");
    }
}

$likeQuery = mysqli_query($conn, "SELECT user.username FROM likefoto INNER JOIN user ON likefoto.userid = user.userid WHERE likefoto.fotoid='$fotoid'");
$likeData = mysqli_fetch_array($likeQuery);
$likedByUsername = $likeData['username'];
?>
