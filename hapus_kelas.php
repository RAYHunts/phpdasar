<?php
session_start();
require 'sesi/sesi_user.php';
require 'function.php';

$kelas = $_GET["kelas"];

if ( hapus_kelas($kelas) > 0 ){
echo "
<script>
alert('data santri berhasil dihapus!');
document.location.href = 'data_santri1.php';
</script>
";
} else {
echo "
<script>
alert('data santri gagal dihapus!');
document.location.href = 'data_santri1.php';
</script>
";
}
?>