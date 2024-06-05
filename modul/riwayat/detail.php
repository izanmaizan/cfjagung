<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Detail Riwayat - T-corn</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      margin: 0;
      padding: 20px;
    }

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

    .box {
      margin-top: 20px;
      border-radius: 10px;
      border: 1px solid #ddd;
    }

    .box-header {
      padding: 10px;
      border-bottom: 1px solid #ddd;
      background-color: #f8f8f8;
    }

    .box-body {
      padding: 10px;
    }

    .box-info {
      border-left: 5px solid #00A65A;
    }

    .box-warning {
      border-left: 5px solid #f39c12;
    }

    .box-danger {
      border-left: 5px solid #dd4b39;
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
    echo "</div>
    </div>
    <div class='box box-info'>
      <div class='box-header'>
        <h3 class='box-title'>Detail</h3>
      </div>
      <div class='box-body'>
        <h4>";
    echo $ardpkt[$idpkt[1]];
    echo "</h4>
      </div>
    </div>
    <div class='box box-warning'>
      <div class='box-header'>
        <h3 class='box-title'>Saran</h3>
      </div>
      <div class='box-body'>
        <h4>";
    echo $arspkt[$idpkt[1]];
    echo "</h4>
      </div>
    </div>
    <div class='box box-danger'>
      <div class='box-header'>
        <h3 class='box-title'>Kemungkinan lain:</h3>
      </div>
      <div class='box-body'>
        <h4>";
    for ($ipl = 2; $ipl < count($idpkt); $ipl++) {
      echo " <h4><i class='fa fa-caret-square-o-right'></i> " . $nmpkt[$ipl] . "</b> / "
        . round($vlpkt[$ipl], 2) . " % (" . $vlpkt[$ipl] . ")<br></h4>";
    }
    echo "</div></div>
      </div>";
  }
  ?>

</body>

</html>