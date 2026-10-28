<html>
  <head>
  </head>
  <body>
    <h1>My website</h1>
    <?php echo "This my first php "; ?>
    <hr>
    <?php
      $nama = "Yoga";
      $umur = 20;
      $suhu = 4.1;
      $nikah = false;

      $label_nama = "<b>My Name Is ". $nama . "</b>";

      echo "<br>";
      echo $label_nama;
      echo "<br>";
      echo "";
    ?>

    <hr>

    <?php
    // Data Mahasiswa dan Nilai
    $mahasiswa = [
        [
            "nama" => "Andi",
            "nilai" => [
                "APBO" => 90,
                "Web Programming" => 80,
                "Mobile Programming" => 70,
                "Machine Learning" => 60
            ]
        ],
        [
            "nama" => "Xixo",
            "nilai" => [
                "APBO" => 60,
                "Web Programming" => 50,
                "Mobile Programming" => 30,
                "Machine Learning" => 10
            ]
        ]
    ];

    // Menampilkan Data Mahasiswa & Nilai
    foreach ($mahasiswa as $mhs) {
        echo "Nama Mahasiswa : " . $mhs['nama'] . "<br>";
        echo "Nilai kelasnya adalah :";
        foreach ($mhs['nilai'] as $matkul => $nilai) {
            echo "Nilai kelas " . $matkul . " adalah " . $nilai . "<br>";
        }
        echo "<br>";
    }

    // Data Kelas
    $kelas = [
        1 => "APBO",
        2 => "Web Programming",
        3 => "Mobile Programming",
        4 => "Machine Learning"
    ];
    ?>

    <!-- Tabel Daftar Kelas -->
    <table border="1" style="border-collapse: collapse; width: 100%;">
        <thead>
            <tr>
                <th style="width: 30%;">Nomor</th>
                <th>Nama Kelas</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kelas as $no => $nama_kelas): ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $nama_kelas; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br>

    <?php
    // Kelas Favorite Spesifik
    echo "Kelas favorite saya adalah : " . $kelas[3] . "<br><br>";

    // Perulangan Kelas Favorite
    foreach ($kelas as $no => $nama_kelas) {
        echo "Kelas favorite saya adalah : " . $no . " - " . $nama_kelas . "<br>";
    }

    echo "<br>";

    // Status Hari Libur
    $is_holiday = false;
    if ($is_holiday) {
        echo "Today is a holiday";
    } else {
        echo "<span style='color: red;'>Today is not a holiday</span>";
    }
    ?>
  </body>
</html>