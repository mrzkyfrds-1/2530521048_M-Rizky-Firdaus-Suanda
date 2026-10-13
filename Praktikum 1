<?php
$nim = "";
$nama = "";
$fakultas = "";
$prodi = "";
$asal_sekolah = "";
$alamat_sekolah = "";
$semester = "";
$hobi = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim          = $_POST["nim"] ?? "";
    $nama         = $_POST["nama"] ?? "";
    $fakultas     = $_POST["fakultas"] ?? "";
    $prodi        = $_POST["prodi"] ?? "";
    $asal_sekolah = $_POST["asal_sekolah"] ?? "";
    $alamat_sekolah = $_POST[""] ??
    $semester     = $_POST["semester"] ?? "";
    $hobi         = !empty($_POST["hobi"]) ? $_POST["hobi"] : "-";
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #3053ec 0%, #3053ec 100%);
            margin: 0;
            padding: 40px 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            max-width: 650px;
            background-color: #ffffff;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #3053ec;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 700;
        }

        label {
            display: block;
            margin-top: 18px;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333333;
            font-size: 15px;
        }
        
        input,
        select {
            width: 100%;
            padding: 12px 16px;
            box-sizing: border-box;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 15px;
            color: #444;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #3053ec;
            background-color: #fff;
            box-shadow: 0 0 8px rgba(102, 126, 234, 0.4);
            transform: translateY(-1px);
        }

        button {
            margin-top: 30px;
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #3053ec 0%, #3053ec 100%);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 17px;
            font-weight: bold;
            box-shadow: 0 5px 15px rgba(118, 75, 162, 0.4);
            transition: all 0.3s ease;
        }

        button:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(118, 75, 162, 0.6);
        }

        button:active {
            transform: translateY(0);
        }

        .hasil {
            margin-top: 35px;
            padding: 25px;
            background-color: #f0f4ff;
            border-radius: 15px;
            border-left: 6px solid #3053ec;
            box-shadow: inset 0 2px 5px rgba(0,0,0,0.05);
        }

        .hasil h2 {
            margin-top: 0;
            color: #2b6cb0;
            font-size: 22px;
            border-bottom: 2px dashed #cbd5e0;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        
        .hasil p {
            margin: 12px 0;
            font-size: 16px;
            color: #4a5568;
            line-height: 1.5;
        }

        .hasil strong {
            color: #2d3748;
            display: inline-block;
            width: 140px;
        }
    </style>

</head>

<body>

<div class="container">

    <h1>Input Data Mahasiswa</h1>

    <form method="POST">

        <label>NIM</label>
        <input type="text" name="nim" placeholder="Masukkan NIM Anda" required>

        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" required>

        <label>Fakultas</label>
        <input type="text" name="fakultas" placeholder="Contoh: Fakultas Teknik" required>

        <label>Program Studi</label>
        <input type="text" name="prodi" placeholder="Contoh: Teknik Informatika" required>

        <label>Asal Sekolah</label>
        <input type="text" name="asal_sekolah" placeholder="Contoh: SMAN 4 Kota Sukabumi" required>

        <label>Alamat Sekolah</label>
        <input type="text" name="alamat_sekolah" placeholder="Contoh: Jl. Pasundan" required>

        <label>Semester</label>
        <select name="semester" required>
            <option value="">-- Pilih Semester Aktif --</option>
            <option value="1">Semester 1</option>
            <option value="2">Semester 2</option>
            <option value="3">Semester 3</option>
            <option value="4">Semester 4</option>
            <option value="5">Semester 5</option>
            <option value="6">Semester 6</option>
            <option value="7">Semester 7</option>
            <option value="8">Semester 8</option>
        </select>

        <label>Hobi</label>
        <input type="text" name="hobi" placeholder="Contoh: Olahraga">


        <button type="submit">Simpan Data</button>

    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>

        <div class="hasil">

            <h2>Data Berhasil Disimpan!</h2>

            <p><strong>NIM:</strong> <?= htmlspecialchars($nim) ?></p>
            <p><strong>Nama:</strong> <?= htmlspecialchars($nama) ?></p>
            <p><strong>Fakultas:</strong> <?= htmlspecialchars($fakultas) ?></p>
            <p><strong>Prodi:</strong> <?= htmlspecialchars($prodi) ?></p>
            <p><strong>Asal Sekolah:</strong> <?= htmlspecialchars($asal_sekolah) ?></p>
            <p><strong>Alamat Sekolah:</strong> <?= htmlspecialchars($alamat_sekolah) ?></p>
            <p><strong>Semester:</strong> <?= htmlspecialchars($semester) ?></p>
            <p><strong>Hobi:</strong> <?= htmlspecialchars($hobi) ?></p>

        </div>

    <?php } ?>

</div>

</body>
</html>
