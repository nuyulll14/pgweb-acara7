<!DOCTYPE html>
<html>
<body>

<h2>Tabel Data Kecamatan</h2>
<?php
$NumberKecamatan = array("1", "2", "3", "4", "5");
$Provinsi = array("Sleman", "Bantul", "Gunung Kidul", "Kota Yogyakarta", "Kulon Progo");
$Kecamatan = array("Gamping", "Srandakan", "Semanu", "Jetis", "Nanggulan");

echo "<table border='1'>";
echo "<tr><th>No</th><th>Provinsi</th><th>Kecamatan</th></tr>";
for($i = 0; $i < count($NumberKecamatan); $i++) {
    echo "<tr>
            <td>{$NumberKecamatan[$i]}</td>
            <td>{$Provinsi[$i]}</td>
            <td>{$Kecamatan[$i]}</td>
          </tr>";
}
echo "</table>";
?>

<h2>Tabel Data Objek Wisata</h2>
<?php
$NumberWisata = array("1", "2", "3", "4", "5");
$NamaObjekWisata = array("Candi Borobudur", "Gunung Telemoyo", "Kebun Teh Kemuning", "Telaga Sarangan", "Gunung Bromo");
$LokasiWisata = array("Magelang", "Wonosobo", "Karanganyar", "Magetan", "Pasuruan");

echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama Objek Wisata</th><th>Lokasi Wisata</th></tr>";
for($i = 0; $i < count($NumberWisata); $i++) {
    echo "<tr>
            <td>{$NumberWisata[$i]}</td>
            <td>{$NamaObjekWisata[$i]}</td>
            <td>{$LokasiWisata[$i]}</td>
          </tr>";
}
echo "</table>";
?>

<h2>Tabel Data Makanan Khas Daerah</h2>
<?php
$NumberMakanan = array("1", "2", "3", "4", "5");
$NamaMakanan = array("Gudeg", "Ayam Betutu", "Geblek", "Pempek", "Gado-Gado");
$LokasiMakanan = array("Yogyakarta", "Bali", "Kulon Progo", "Palembang", "Jakarta");

echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama Makanan</th><th>Lokasi Makanan</th></tr>";
for($i = 0; $i < count($NumberMakanan); $i++) {
    echo "<tr>
            <td>{$NumberMakanan[$i]}</td>
            <td>{$NamaMakanan[$i]}</td>
            <td>{$LokasiMakanan[$i]}</td>
          </tr>";
}
echo "</table>";
?>

</body>
</html>
