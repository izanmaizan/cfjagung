<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detail Riwayat - T-corn</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <style>
    .content {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    table th,
    table td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    table th {
        background-color: #00A65A;
        color: #fff;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table tr:hover {
        background-color: #ddd;
    }

    .kondisipilih {
        font-weight: bold;
    }

    .well {
        background-color: #f5f5f5;
        border-left: 5px solid #00A65A;
        padding: 10px;
        border-radius: 5px;
        margin-top: 20px;
    }

    .card-img-top {
        border-radius: 10px;
    }

    .minimal-box {
        margin-top: 20px;
        border-radius: 8px;
        border: 1px solid #ddd;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .minimal-box:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .minimal-box-header {
        padding: 12px;
        background-color: #f5f5f5;
        color: #333;
        font-size: 18px;
        /* Increase font size */
        font-weight: 600;
        display: flex;
        align-items: center;
    }

    .minimal-box-header h3 {
        margin: 0;
        flex-grow: 1;
    }

    .minimal-box-body {
        padding: 15px;
        background-color: #fff;
        font-size: 16px;
        /* Increase font size */
        color: #555;
    }

    .minimal-box-info {
        border-left: 3px solid #00A65A;
    }

    .minimal-box-info .minimal-box-header {
        background-color: #e6f7e6;
    }

    .minimal-box-warning {
        border-left: 3px solid #f39c12;
    }

    .minimal-box-warning .minimal-box-header {
        background-color: #fff3e6;
    }

    .minimal-box-danger {
        border-left: 3px solid #dd4b39;
    }

    .minimal-box-danger .minimal-box-header {
        background-color: #f7e6e6;
    }

    h4 {
        margin-top: 0;
        font-size: 16px;
        /* Increase font size */
        color: #555;
    }



    .callout {
        padding: 10px;
        margin: 20px 0;
        border-radius: 5px;
        background-color: #f4f4f4;
        border-left: 5px solid #ddd;
    }

    .callout-success {
        background-color: #dff0d8;
        border-left: 5px solid #00A65A;
    }

    button {
        padding: 10px 20px;
        background-color: #00A65A;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #007F45;
    }

    button:focus {
        outline: none;
    }

    .formula {
        background-color: #f0f0f0;
        padding: 10px;
        border-left: 5px solid #06f;
        margin: 20px 0;
        font-family: 'Cambria Math', sans-serif;
        /* font-size: 24px; */
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        color: #333;
        line-height: 1.6;
    }

    .rumus {
        font-size: 20px;
    }

    .formula b {
        color: #06f;
    }

    .step {
        margin: 10px 0;
    }

    .result {
        background-color: #dfd;
        padding: 10px;
        border-left: 5px solid #0a0;
        /* font-weight: bold; */
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .formula,
    .step,
    .result {
        background-color: #ecf0f1;
        padding: 10px;
        border-left: 5px solid #00A65A;
        margin-bottom: 20px;
    }

    .highlight {
        background-color: #e74c3c;
        color: white;
        padding: 2px 5px;
    }
    </style>
</head>

<body>

    <?php
  if ($_GET['id']) {
    $arcolor = array(
      '#FFFFFF',
      '#CC66FF',
      '#019AFF',
      '#00CBFD',
      '#00FEFE',
      '#A4F804',
      '#FFFC00',
      '#FDCD01',
      '#FD9A01',
      '#FB6700'
    );
    date_default_timezone_set('Asia/Jakarta');
    $inptanggal = date('Y-m-d H:i:s');

    $arbobot = array('0', '1', '0.8', '0.6', '0.4', '-0.2', '-0.4', '-0.6', '-0.8', '-1');
    $argejala = array('');

    $sqlkondisi = mysqli_query($conn, "SELECT * FROM kondisi order by id+0");
    while ($rkondisi = mysqli_fetch_array($sqlkondisi)) {
      $arkondisitext[$rkondisi['id']] = $rkondisi['kondisi'];
    }

    $sqlpkt = mysqli_query($conn, "SELECT * FROM penyakit order by kode_penyakit+0");
    while ($rpkt = mysqli_fetch_array($sqlpkt)) {
      $arpkt[$rpkt['kode_penyakit']] = $rpkt['nama_penyakit'];
      $ardpkt[$rpkt['kode_penyakit']] = $rpkt['det_penyakit'];
      $arspkt[$rpkt['kode_penyakit']] = $rpkt['srn_penyakit'];
      $argpkt[$rpkt['kode_penyakit']] = $rpkt['gambar'];
    }

    $sqlhasil = mysqli_query($conn, "SELECT * FROM hasil where id_hasil=" . $_GET['id']);
    while ($rhasil = mysqli_fetch_array($sqlhasil)) {
      $arpenyakit = unserialize($rhasil['penyakit']);
      $argejala = unserialize($rhasil['gejala']);
    }

    $np1 = 0;
    foreach ($arpenyakit as $key1 => $value1) {
      $np1++;
      $idpkt1[$np1] = $key1;
      $vlpkt1[$np1] = $value1;
    }

    echo "<div class='content'>
    <h2 class='text text-bold'>Hasil Identifikasi📖 &nbsp;&nbsp;<button id='print' onClick='window.print();'
        data-toggle='tooltip' data-placement='right' title='Klik tombol ini untuk mencetak hasil identifikasi'>Cetak</button> </h2>
    <hr>
    <table>
      <tr>
        <th width='8%'>No</th>
        <th width='10%'>Kode</th>
        <th>Gejala yang terlihat pada jagung</th>
        <th width='20%'>Kondisi</th>
      </tr>";
    $ig = 0;
    foreach ($argejala as $key => $value) {
      $kondisi = $value;
      $ig++;
      $gejala = $key;
      $sql4 = mysqli_query($conn, "SELECT * FROM gejala where kode_gejala = '$key'");
      $r4 = mysqli_fetch_array($sql4);
      echo '<tr>
        <td>' . $ig . '</td>';
      echo '<td>G' . str_pad($r4['kode_gejala'], 3, '0', STR_PAD_LEFT) . '</td>';
      echo '<td><span class="hasil text text-primary">' . $r4['nama_gejala'] . "</span></td>";
      echo '<td><span class="kondisipilih" style="color:' . $arcolor[$kondisi] . '">' . $arkondisitext[$kondisi] .
        "</span></td>
      </tr>";
    }
    $np = 0;
    foreach ($arpenyakit as $key => $value) {
      $np++;
      $idpkt[$np] = $key;
      $nmpkt[$np] = $arpkt[$key];
      $vlpkt[$np] = $value;
    }
    if ($argpkt[$idpkt[1]]) {
      $gambar = 'gambar/penyakit/' . $argpkt[$idpkt[1]];
    } else {
      $gambar = 'gambar/noimage.png';
    }
    echo "
    </table>
    <div class='well'><img class='card-img-top' style='float:right; margin-left:15px;'
        src='" . $gambar . "' height=200>
      <h3>Hasil Identifikasi</h3>";
    echo "<div class='callout'>Jenis penyakit yang diderita adalah <b>
          <h3 class='text text-success'>" . $nmpkt[1] . "
        </b> / " . round($vlpkt[1] * 100, 2) . " % (" . $vlpkt[1] . ")<br></h3>";
    echo "</div>";
    // Tampilkan tombol "Detail Perhitungan"
    echo '<button id="showDetailBtn" class="btn btn-instagram"><i class="fa-solid fa-square-root-variable" style="font-size:20px;"></i> Rincian</button>';

    // Tambahkan div untuk menampilkan detail perhitungan (dengan style display: none)
    echo '<div id="detailPerhitungan" style="display: none;">';
    // Tampilkan tabel CF dan proses perhitungan
    echo '<h2>Detail Perhitungan Certainty Factor (CF)</h2>';
    // Tabel CF
    echo "<table>
<th width=2%>Kode Penyakit</th>
<th width=15%>Nama Penyakit</th>
<th width=5%>Kode Gejala</th>
<th width=2%>MB</th>
<th width=2%>MD</th>
<th width=10%>CF Rule</th>
<th width=10%>Bobot dari User</th>
</tr>";
    $ig = 0;
    $cf_values = array(); // Menyimpan nilai CF untuk setiap aturan
    foreach ($argejala as $key => $value) {
      $ig++;
      $gejala = $key;
      $sql_cf = mysqli_query($conn, "SELECT bp.kode_penyakit, bp.mb, bp.md, py.nama_penyakit 
                              FROM basis_pengetahuan bp
                              INNER JOIN penyakit py ON bp.kode_penyakit = py.kode_penyakit
                              WHERE bp.kode_gejala = '$key'");
      while ($r_cf = mysqli_fetch_array($sql_cf)) {
        $nama_penyakit = $r_cf['nama_penyakit'];
        $kd_penyakit = $r_cf['kode_penyakit'];
        $mb = $r_cf['mb'];
        $md = $r_cf['md'];
        $cf = ($mb - $md);
        $cf_user = $arbobot[$value];
        $cf_final = $cf * $cf_user; // Rumus perhitungan CF
        $cf_values[] = $cf_final;
        echo '<tr><td>' . $kd_penyakit . '</td>';
        echo '<td>' . $nama_penyakit . '</td>';
        echo '<td>G' . str_pad($gejala, 3, '0', STR_PAD_LEFT) . '</td>';
        echo '<td>' . $mb . '</td>';
        echo '<td>' . $md . '</td>';
        echo '<td>' . round($cf, 2) . '</td>';
        echo '<td>' . $cf_user . '</td></tr>';
      }

      // Simpan data untuk proses selanjutnya
      $gejala_data[] = str_pad($gejala, 3, '0', STR_PAD_LEFT);
      $penyakit_data[] = $kd_penyakit;
      $mb_data[] = $mb;
      $md_data[] = $md;
      $cf_rule_data[] = round($cf, 2);
      $bobot_data[] = $cf_user;
    }
    echo "</table>";

    ?>

    <h1>Proses Perhitungan Certainty Factor (CF)</h1>

    <div class="formula">
        <h2>Rumus Perhitungan CF</h2>
        <p>CF dihitung menggunakan rumus:</p>
        <p class="rumus">\[
            \text{CF} = (\text{MB} - \text{MD}) \times \text{Bobot dari User}
            \]</p>
        <p>Kombinasi CF dilakukan sebagai berikut:</p>
        <ul>
            <li>Jika \( \text{CF}_1 \) dan \( \text{CF}_2 \) keduanya positif:
                <p class="rumus">
                    \[
                    \text{CF}_{\text{kombinasi}} = \text{CF}_1 + \text{CF}_2 \times (1 - \text{CF}_1)
                    \]
                </p>
            </li>
            <li>Jika \( \text{CF}_1 \) dan \( \text{CF}_2 \) keduanya negatif:
                <p class="rumus">
                    \[
                    \text{CF}_{\text{kombinasi}} = \text{CF}_1 + \text{CF}_2 \times (1 + \text{CF}_1)
                    \]
                </p>
            </li>
            <li>Jika \( \text{CF}_1 \) dan \( \text{CF}_2 \) berlawanan tanda:
                <p class="rumus">
                    \[
                    \text{CF}_{\text{kombinasi}} = \frac{\text{CF}_1 + \text{CF}_2}{1 - \min(\left|\text{CF}_1\right|,
                    \left|\text{CF}_2\right|)}
                    \]
                </p>
            </li>
        </ul>
    </div>

    <?php
    // Fungsi untuk menampilkan detail proses perhitungan CF
    function display_steps($gejala, $penyakit, $mb, $md, $cf_rule, $bobot)
    {
      $penyakit_cf = [];
      $steps = [];

      foreach ($gejala as $index => $value) {
        $cf = ($mb[$index] - $md[$index]) * $bobot[$index];
        $step = "<div class='step'>Gejala: <b>$gejala[$index]</b>, Penyakit: <b>$penyakit[$index]</b>, MB: <b>$mb[$index]</b>, MD: <b>$md[$index]</b>, CF Rule: <b>$cf_rule[$index]</b>, Bobot: <b>$bobot[$index]</b><br>";
        $step .= "CF = ($mb[$index] - $md[$index]) * $bobot[$index] = " . number_format($cf, 4) . "<br>";

        if (isset($penyakit_cf[$penyakit[$index]])) {
          $cflama = $penyakit_cf[$penyakit[$index]];
          if ($cf >= 0 && $cflama >= 0) {
            $cflama = $cflama + $cf * (1 - $cflama);
            $step .= "Kombinasi Positif: CF Baru = " . number_format($cflama, 4) . "<br>";
          } elseif ($cf < 0 && $cflama < 0) {
            $cflama = $cflama + $cf * (1 + $cflama);
            $step .= "Kombinasi Negatif: CF Baru = " . number_format($cflama, 4) . "<br>";
          } else {
            $cflama = ($cflama + $cf) / (1 - min(abs($cflama), abs($cf)));
            $step .= "Kombinasi Berbeda Tanda: CF Baru = " . number_format($cflama, 4) . "<br>";
          }
          $penyakit_cf[$penyakit[$index]] = $cflama;
        } else {
          $penyakit_cf[$penyakit[$index]] = $cf;
          $step .= "Inisialisasi CF: CF Baru = " . number_format($cf, 4) . "<br>";
        }

        $step .= "</div>";
        $steps[] = $step;
      }

      return [$penyakit_cf, $steps];
    }

    // Menampilkan proses perhitungan
    list($penyakit_cf, $steps) = display_steps($gejala_data, $penyakit_data, $mb_data, $md_data, $cf_rule_data, $bobot_data);

    // Mengurutkan penyakit berdasarkan CF tertinggi
    arsort($penyakit_cf);

    // Menampilkan langkah-langkah
    echo "<h2>Langkah-langkah Proses Perhitungan:</h2>";
    foreach ($steps as $step) {
      echo $step;
    }

    // Mendapatkan data nama penyakit dari tabel penyakit
    $sql_nama_penyakit = mysqli_query($conn, "SELECT kode_penyakit, nama_penyakit FROM penyakit");
    $nama_penyakit = [];
    while ($row = mysqli_fetch_array($sql_nama_penyakit)) {
      $nama_penyakit[$row['kode_penyakit']] = $row['nama_penyakit'];
    }

    // Menampilkan hasil akhir
    echo "<h2>Hasil Akhir:</h2>";
    echo "<div class='result'>";
    $max_cf = max($penyakit_cf); // Mendapatkan nilai CF tertinggi
    foreach ($penyakit_cf as $kode_penyakit => $cf) {
      // Mendapatkan nama penyakit berdasarkan kode penyakit
      $nama = $nama_penyakit[$kode_penyakit];
      // Jika nilai CF saat ini adalah nilai tertinggi, tambahkan tag <strong> dan beri warna merah
      if ($cf === $max_cf) {
        echo "<strong style='font-size:18px;'>Penyakit: <span style='color:red;'>$nama</span>, CF: <span style='color:red;'>" . number_format($cf, 4) . "</span></strong><br>";
      } else {
        echo "Penyakit: $nama, CF: " . number_format($cf, 4) . "<br>";
      }
    }
    echo "</div>";
    echo "</div>";

    echo '<script>
            document.getElementById("showDetailBtn").addEventListener("click", function() {
              var detailPerhitungan = document.getElementById("detailPerhitungan");
              if (detailPerhitungan.style.display === "none") {
                detailPerhitungan.style.display = "block";
              } else {
                detailPerhitungan.style.display = "none";
              }
            });
          </script>';
    echo "</div>";



    echo "<div class='minimal-box minimal-box-info'>
        <div class='minimal-box-header'>
            <h3 class='box-title'>Detail</h3>
        </div>
        <div class='minimal-box-body'>
            <h4>" . $ardpkt[$idpkt[1]] . "</h4>
        </div>
      </div>
      <div class='minimal-box minimal-box-warning'>
        <div class='minimal-box-header'>
            <h3 class='box-title'>Saran</h3>
        </div>
        <div class='minimal-box-body'>
            <h4>" . $arspkt[$idpkt[1]] . "</h4>
        </div>
      </div>
      <div class='minimal-box minimal-box-danger'>
        <div class='minimal-box-header'>
            <h3 class='box-title'>Kemungkinan lain:</h3>
        </div>
        <div class='minimal-box-body'>
            <h4>";
    for ($ipl = 2; $ipl < count($idpkt); $ipl++) {
      echo "<h4><i class='fa fa-caret-square-o-right'></i> " . $nmpkt[$ipl] . " / "
        . round($vlpkt[$ipl], 2) . " % (" . $vlpkt[$ipl] . ")<br></h4>";
    }
    echo "</h4>
        </div>
      </div>
      </div>";

  }
  ?>

</body>

</html>