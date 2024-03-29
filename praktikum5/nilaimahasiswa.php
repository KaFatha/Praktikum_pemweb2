<?php require_once 'class_nilaimahasiswa.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>Nomor</th>
                <th>NIM</th>
                <th>Matkul</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Hasil</th>
            </tr>
            <tr>
                <td>01</td>
                <td><?= $nilai_mahasiswa1->nim; ?></td>
                <td><?= $nilai_mahasiswa1->nilai; ?></td>
                <td><?= $nilai_mahasiswa1->matkul; ?></td>
                <td><?= $nilai_mahasiswa1->grade() ?></td>
                <td><?= $nilai_mahasiswa1->hasil() ?></td>
            </tr>
            <tr>
                <td>02</td>
                <td><?= $nilai_mahasiswa2->nim; ?></td>
                <td><?= $nilai_mahasiswa2->nilai; ?></td>
                <td><?= $nilai_mahasiswa2->matkul; ?></td>
                <td><?= $nilai_mahasiswa2->grade() ?></td>
                <td><?= $nilai_mahasiswa2->hasil() ?></td>
            </tr>
            <tr>
                <td>03</td>
                <td><?= $nilai_mahasiswa3->nim; ?></td>
                <td><?= $nilai_mahasiswa3->nilai; ?></td>
                <td><?= $nilai_mahasiswa3->matkul; ?></td>
                <td><?= $nilai_mahasiswa3->grade() ?></td>
                <td><?= $nilai_mahasiswa3->hasil() ?></td>
            </tr>
            <tr>
                <td>04</td>
                <td><?= $nilai_mahasiswa4->nim; ?></td>
                <td><?= $nilai_mahasiswa4->nilai; ?></td>
                <td><?= $nilai_mahasiswa4->matkul; ?></td>
                <td><?= $nilai_mahasiswa4->grade() ?></td>
                <td><?= $nilai_mahasiswa4->hasil() ?></td>
            </tr>
            <tr>
                <td>05</td>
                <td><?= $nilai_mahasiswa5->nim; ?></td>
                <td><?= $nilai_mahasiswa5->nilai; ?></td>
                <td><?= $nilai_mahasiswa5->matkul; ?></td>
                <td><?= $nilai_mahasiswa5->grade() ?></td>
                <td><?= $nilai_mahasiswa5->hasil() ?></td>
            </tr>
        </table>
    </div>
</body>
</html>