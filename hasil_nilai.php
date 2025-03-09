<?php
if(!isset($_POST['nama'])){
    
}
?>
    <script>alert("anda harus mengisi form terlebih dahulu!")</script>
    <meta http-equiv="refresh" content="0; url=form-nilai.php">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil nilai Mahasiswa</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $_POST["nama"]?></td>
        </tr>
        <tr>
            <td>rombel</td>
            <td>:</td>
            <td><?= $_POST["rombel"]?></td>
        </tr>
        <tr>
            <td>nim</td>
            <td>:</td>
            <td><?= $_POST["nim"]?></td>
        </tr>
        <tr>
            <td>tugas</td>
            <td>:</td>
            <td><?= $_POST["tugas"]?></td>
        </tr>
        <tr>
            <td>matkul</td>
            <td>:</td>
            <td><?= $_POST["matkul"]?></td>
        </tr>
        <tr>
            <td>nilai UTS</td>
            <td>:</td>
            <td><?= $_POST["uts"]?></td>
        </tr>
        <tr>
            <td>Nilai uas</td>
            <td>:</td>
            <td><?= $_POST["uas"]?></td>
        </tr>
        <tr>
            <td>predikat</td>
            <td>:</td>
            <td></td>
        </tr>
        <?php
        $tugas = $_POST["tugas"] * (35/100);
        $uts = $_POST["uts"] * (30/100);
        $uas = $_POST["uas"] * (35/100);
        $total = $tugas + $uts + $uas;

        if ($total <= 35){
            echo "E";
        }
        elseif ($total <= 55) {
            echo "d";
        }
        elseif ($total <= 69) {
            echo "c";
        }
        elseif ($total <= 84) {
            echo "b";
        }
        elseif ($total <= 100) {
            echo "a";
        } 
         else{
            echo "tidak di ketahui";
        }
        ?>
        <tr>
            <td>keterangan</td>
            <td>:</td>
            <td>
                <?php
                switch ($pred){
                    case "A";
                        echo "sangat baik";
                    break;
                    case 'B';
                        echo "B aja";
                    case 'C';
                        echo "Cukup";
                    case 'D';
                        echo "Kurang";

                    case (
                         echo "tidak ketahui"; 
                    )
                }
                
                ?>
        </tr>

    </table>
</body>
</html>