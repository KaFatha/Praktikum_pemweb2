<?php require_once 'class_mahasiswa.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
            </tr>
            <tr>
                <td>1</td>
                <td><?= $mahasiswa1->nim; ?></td>
                <td><?= $mahasiswa1->nama; ?></td>
                <td><?= $mahasiswa1->prodi; ?></td>
                <td><?= $mahasiswa1->angkatan; ?></td>
                <td><?= $mahasiswa1->ipk; ?></td>
                <td><?= $mahasiswa1->predikat_ipk() ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td><?= $mahasiswa2->nim; ?></td>
                <td><?= $mahasiswa2->nama; ?></td>
                <td><?= $mahasiswa2->prodi; ?></td>
                <td><?= $mahasiswa2->angkatan; ?></td>
                <td><?= $mahasiswa2->ipk; ?></td>
                <td><?= $mahasiswa2->predikat_ipk() ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td><?= $mahasiswa3->nim; ?></td>
                <td><?= $mahasiswa3->nama; ?></td>
                <td><?= $mahasiswa3->prodi; ?></td>
                <td><?= $mahasiswa3->angkatan; ?></td>
                <td><?= $mahasiswa3->ipk; ?></td>
                <td><?= $mahasiswa3->predikat_ipk() ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td><?= $mahasiswa4->nim; ?></td>
                <td><?= $mahasiswa4->nama; ?></td>
                <td><?= $mahasiswa4->prodi; ?></td>
                <td><?= $mahasiswa4->angkatan; ?></td>
                <td><?= $mahasiswa4->ipk; ?></td>
                <td><?= $mahasiswa4->predikat_ipk() ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td><?= $mahasiswa5->nim; ?></td>
                <td><?= $mahasiswa5->nama; ?></td>
                <td><?= $mahasiswa5->prodi; ?></td>
                <td><?= $mahasiswa5->angkatan; ?></td>
                <td><?= $mahasiswa5->ipk; ?></td>
                <td><?= $mahasiswa5->predikat_ipk() ?></td>
            </tr>
            <tr></tr>
        </table>
    </div>
</body>
</html>