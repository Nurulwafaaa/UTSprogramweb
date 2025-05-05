<?php
if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];
    echo "Halo " . htmlspecialchars($nama);
} else {
    echo "Nurul wafa";
}
?>