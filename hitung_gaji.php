<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Slip Gaji</title>
</head>
<body>
    <main>
        <a class="top-link" href="index.php">Home</a>
        <h2 class="header-text">Slip Gaji Karyawan</h2>

        <?php
            function gajiPokok($gol) {
                $basic_salary = 0;
                if ($gol == 1) {
                    $basic_salary = 3000000;
                } else if ($gol == 2) {
                    $basic_salary = 4000000;
                } else if ($gol == 3) {
                    $basic_salary = 5000000;
                }else {
                    $basic_salary = 6000000;
                }
                return $basic_salary;
            } // akhir dari gajiPokok

            function upahLembur($jam) {
                $tunjangan_lembur = 0;
                if ($jam <= 20) {
                    $tunjangan_lembur = 100000 * $jam;
                }else{
                    $tunjangan_lembur = 2000000;
                }

                return $tunjangan_lembur;
            }// akhir dari func tunjangan lembur

            function tunjanganAnak($n_anak) {
                $nilai_tunjangan = 0;
                if ($n_anak <= 3) {
                    $nilai_tunjangan = 500000 * $n_anak;
                }else {
                    $nilai_tunjangan = 1500000 ;
                }
                return $nilai_tunjangan;
            }// akhir dari func tunjangan Anak

            function total_gaji($gaji_pokok, $upah_lembur, $tunjangan_anak) {
                $gaji_total = $gaji_pokok + $upah_lembur + $tunjangan_anak;

                return $gaji_total;
            }// akhir dari func total Gaji
        
        if($_POST) {

            $nama_karyawan = $_POST['karyawan'];
            $golongan = $_POST['golongan'];
            $jumlah_anak = $_POST['n_anak'];
            $jumlah_jam = $_POST['jam_lembur'] ;

            echo "<ul>";

            echo "<li> <h3>Nama Karyawan : " .  $nama_karyawan . "</h3></li>";
            $nama_karyawan . "</h3></li>";
            
            echo "<li> <h3>Gaji Pokok : <span>" . gajiPokok($golongan)  . "</h3></li>";
            $nama_karyawan . "</span></h3></li>";

            echo "<li> <h3>Tunjangan Anak : <span>" . tunjanganAnak($jumlah_anak)  . "</h3></li>";
            $nama_karyawan . "</span></h3></li>";

            echo "<li> <h3>Tunjangan Lembur : <span>" . upahLembur($jumlah_jam)  . "</h3></li>";
            $nama_karyawan . "</span></h3></li>";

            echo "<li class='last=item'> <h3>Total Gaji : <span>" . total_gaji(gajiPokok($golongan), tunjanganAnak($jumlah_anak), upahLembur($jumlah_jam))  . "</h3></li>";
            $nama_karyawan . "</span></h3></li>";

            echo "</ul>";

        }
        ?>
    </main>
</body>
</html>