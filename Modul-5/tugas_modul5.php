<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            padding: 20px;
        }

        header {
            background-color: #2196F3;
            color: white;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 28px;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 600px;
            margin: 0 auto 20px auto;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #2196F3;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #2196F3;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #1769aa;
        }

        .result-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .result-container h2 {
            color: #4CAF50;
            margin-bottom: 15px;
        }

        .result-container p {
            margin-bottom: 10px;
            color: #333;
            line-height: 1.6;
        }

        .result-container span {
            font-weight: bold;
            color: #2196F3;
        }

        .error {
            background-color: #ffe0e0;
            color: #cc0000;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 15px;
            border-left: 4px solid #cc0000;
        }

        .success {
            background-color: #e0f7e9;
            color: #2e7d32;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 15px;
            border-left: 4px solid #4CAF50;
        }
    </style>
</head>
<body>

    <header>
        <h1>Buku Tamu Digital STITEK Bontang</h1>
    </header>


    <div class="form-container">
        <h2>Form Buku Tamu</h2>
        <form method="post" action="">

            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap">
            </div>

            <div class="form-group">
                <label for="email">Alamat Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan alamat email">
            </div>

            <div class="form-group">
                <label for="pesan">Pesan / Komentar:</label>
                <textarea id="pesan" name="pesan" placeholder="Tulis pesan atau komentar Anda"></textarea>
            </div>

            <input type="submit" name="submit" value="Kirim Pesan">

        </form>
    </div>


    <?php
    if (isset($_POST['submit'])) {

        $nama  = trim($_POST['nama']);
        $email = trim($_POST['email']);
        $pesan = trim($_POST['pesan']);


        if (empty($nama) || empty($email) || empty($pesan)) {
            echo '<div class="result-container">';
            echo '<div class="error">Semua kolom wajib diisi. Pastikan tidak ada yang kosong!</div>';
            echo '</div>';
        } else {

            $nama  = htmlspecialchars($nama);
            $email = htmlspecialchars($email);
            $pesan = htmlspecialchars($pesan);

            echo '<div class="result-container">';
            echo '<div class="success">✅ Pesan Anda berhasil dikirim!</div>';
            echo '<h2>Data yang Dikirim</h2>';
            echo '<p>Nama Lengkap : <span>' . $nama  . '</span></p>';
            echo '<p>Alamat Email : <span>' . $email . '</span></p>';
            echo '<p>Pesan        : <span>' . $pesan . '</span></p>';
            echo '</div>';
        }
    }
    ?>

</body>
</html>