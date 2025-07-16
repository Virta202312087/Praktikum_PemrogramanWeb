<?php
// Inisialisasi variabel
$nama = $email = $pesan = "";
$errors = [];
$sukses = false;

// Proses form saat dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
        $errors[] = "Nama Lengkap wajib diisi.";
    } else {
        $nama = htmlspecialchars(trim($_POST["nama"]));
    }

    if (empty($_POST["email"])) {
        $errors[] = "Alamat Email wajib diisi.";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    if (empty($_POST["pesan"])) {
        $errors[] = "Pesan/Komentar wajib diisi.";
    } else {
        $pesan = htmlspecialchars(trim($_POST["pesan"]));
    }

    if (empty($errors)) {
        $sukses = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #74ebd5, #9face6);
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            background: #ffffff;
            padding: 35px;
            border-radius: 15px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            animation: fadeIn 0.6s ease-in-out;
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #4b0082;
        }

        label {
            margin-top: 15px;
            display: block;
            font-weight: 600;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            margin-top: 8px;
            padding: 12px;
            border-radius: 8px;
            border: 1.5px solid #ccc;
            font-size: 16px;
            transition: 0.3s ease;
        }

        input:focus,
        textarea:focus {
            border-color: #6a11cb;
            outline: none;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .btn-submit {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            font-size: 16px;
            font-weight: bold;
            margin-top: 25px;
            padding: 14px;
            border: none;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-submit:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .error {
            background: #ffe5e5;
            color: #d8000c;
            border-left: 5px solid #d8000c;
            padding: 10px 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        .success {
            background: #e0ffe0;
            color: #006400;
            border-left: 5px solid #006400;
            padding: 15px 20px;
            border-radius: 8px;
            margin-top: 30px;
            line-height: 1.6;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }

        @media (max-width: 600px) {
            .container {
                padding: 25px;
            }

            h1 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Buku Tamu Digital STITEK Bontang</h1>

    <?php if (!empty($errors)): ?>
        <div class="error">
            <ul>
                <?php foreach ($errors as $e) echo "<li>$e</li>"; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" value="<?= $nama ?>">

        <label for="email">Alamat Email</label>
        <input type="email" name="email" id="email" value="<?= $email ?>">

        <label for="pesan">Pesan/Komentar</label>
        <textarea name="pesan" id="pesan"><?= $pesan ?></textarea>

        <button type="submit" class="btn-submit">Kirim Pesan</button>
    </form>

    <?php if ($sukses): ?>
        <div class="success">
            <h3>🎉 Terima kasih atas pesan Anda!</h3>
            <p><strong>Nama:</strong> <?= $nama ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Pesan:</strong><br><?= nl2br($pesan) ?></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
