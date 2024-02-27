<?php
    // Panggil file koneksi.php untuk menghubungkan ke database
    include "koneksi.php";
    
    // Ambil fotoid dan isikomentar dari database
    $query = mysqli_query($conn, "SELECT fotoid, isikomentar FROM komentarfoto");

    // Lakukan perulangan untuk menampilkan data
    while($row = mysqli_fetch_assoc($query)) {
        // Ambil data fotoid dan isikomentar
        $fotoid = $row['fotoid'];
        $isikomentar = $row['isikomentar'];
        
        // Tampilkan gambar di sebelah kiri
        echo '<div style="float:left; margin-right:10px;">';
        echo '<img src="gambar/'.$fotoid.'.jpg" alt="Gambar" width="100">';
        echo '</div>';
        
        // Tampilkan komentar di sebelah kanan
        echo '<div style="float:left;">';
        echo '<p>'.$isikomentar.'</p>';
        echo '</div>';
        
        // Tambahkan clear float setelah setiap item
        echo '<div style="clear:both;"></div>';
    }
?>
