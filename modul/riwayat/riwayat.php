<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Riwayat - T-corn</title>
    <style>
    h2 {
        color: #333;
        font-weight: bold;
    }

    .content {
        display: flex;
        justify-content: space-between;
        background-color: #fff;
        /* padding: 20px; */
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        margin-right: 20px;
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


    .box {
        margin-top: 20px;
        border-radius: 10px;
        border: 1px solid #ddd;
    }

    .box-chart {
        margin-top: 20px;
        border-radius: 10px;
        border: 1px solid #ddd;
        width: 40%;
        background-color: #fff;
    }

    .box-chart-header {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        background-color: #00A65A;
        color: #fff;
    }

    .box-chart-title {
        margin: 0;
        font-weight: bold;
    }

    .box-chart-body {
        padding: 10px;
    }

    .btn {
        padding: 10px 20px;
        background-color: #00A65A;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
    }

    .btn:hover {
        background-color: #007F45;
        color: #fff;
    }

    .btn:focus {
        outline: none;
    }
    </style>
</head>

<body>

    <?php
    include "config/fungsi_alert.php";
    $aksi = "modul/riwayat/aksi_hasil.php";
    switch ($_GET['act']) {
        // Tampil hasil
        default:
            $offset = $_GET['offset'];
            //jumlah data yang ditampilkan perpage
            $limit = 15;
            if (empty($offset)) {
                $offset = 0;
            }

            $sqlgjl = mysqli_query($conn, "SELECT * FROM gejala order by kode_gejala+0");
            while ($rgjl = mysqli_fetch_array($sqlgjl)) {
                $argjl[$rgjl['kode_gejala']] = $rgjl['nama_gejala'];
            }

            $sqlpkt = mysqli_query($conn, "SELECT * FROM penyakit order by kode_penyakit+0");
            while ($rpkt = mysqli_fetch_array($sqlpkt)) {
                $arpkt[$rpkt['kode_penyakit']] = $rpkt['nama_penyakit'];
                $ardpkt[$rpkt['kode_penyakit']] = $rpkt['det_penyakit'];
                $arspkt[$rpkt['kode_penyakit']] = $rpkt['srn_penyakit'];
            }

            $tampil = mysqli_query($conn, "SELECT * FROM hasil ORDER BY id_hasil");
            $baris = mysqli_num_rows($tampil);
            if ($baris > 0) {
                echo "<h2>Riwayat Konsultasi⏳</h2><hr>";
                echo "<div class='content'><table>
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Penyakit</th>
              <th>Nilai CF</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>";
                $hasil = mysqli_query($conn, "SELECT * FROM hasil ORDER BY id_hasil limit $offset,$limit");
                $no = 1;
                $no = 1 + $offset;
                $counter = 1;
                while ($r = mysqli_fetch_array($hasil)) {
                    if ($r['hasil_id'] > 0) {
                        $warna = ($counter % 2 == 0) ? "dark" : "light";
                        echo "<tr class='" . $warna . "'>
             <td align=center>$no</td>
             <td>$r[tanggal]</td>
             <td>" . $arpkt[$r['hasil_id']] . "</td>
             <td>$r[hasil_nilai]</td>
             <td align=center>
             <a type='button' class='btn' target='_blank' href=riwayat-detail/$r[id_hasil]><i class='fa-solid fa-eye'></i> Detail</a>
             </td></tr>";
                        $no++;
                        $counter++;
                    }
                }
                echo "</tbody></table>";

                ?>


    <div class="box-chart">
        <div class="box-chart-header">
            <i class="fa fa-pie-chart"></i>
            <h3 class="box-chart-title">Grafik</h3>
        </div>
        <div class="box-chart-body">
            <div id="donut-chart" class="chart" style="width:100%;height:250px;"></div>
            <hr>
            <div id="legend-container"></div>
        </div>
        <!-- /.box-body-->
    </div>
    </div>

    <?php
                echo "<div class='col-md-12'><div class='row'><div class=paging>";

                if ($offset != 0) {
                    $prevoffset = $offset - $limit;
                    echo "<span class=prevnext> <a href=index.php?module=riwayat&offset=$prevoffset>Back</a></span>";
                } else {
                    echo "<span class=disabled>Back</span>"; //cetak halaman tanpa link
                }
                //hitung jumlah halaman
                $halaman = intval($baris / $limit); //Pembulatan
    
                if ($baris % $limit) {
                    $halaman++;
                }
                for ($i = 1; $i <= $halaman; $i++) {
                    $newoffset = $limit * ($i - 1);
                    if ($offset != $newoffset) {
                        echo "<a href=index.php?module=riwayat&offset=$newoffset>$i</a>";
                        //cetak halaman
                    } else {
                        echo "<span class=current>" . $i . "</span>"; //cetak halaman tanpa link
                    }
                }

                //cek halaman akhir
                if (!(($offset / $limit) + 1 == $halaman) && $halaman != 1) {

                    //jika bukan halaman terakhir maka berikan next
                    $newoffset = $offset + $limit;
                    echo "<span class=prevnext><a href=index.php?module=riwayat&offset=$newoffset>Next</a>";
                } else {
                    echo "<span class=disabled>Next</span>"; //cetak halaman tanpa link
                }

                echo "</div></div></div>";
            } else {
                echo "<br><b>Data Kosong !</b>";
            }
    }
    ?>
    <script>
    $(function() {
        <?php
        $hasilg = mysqli_query($conn, "SELECT hasil_id, count(hasil_id) jlh_id FROM hasil group by hasil_id ORDER BY jlh_id desc");
        $arr = array(); // Inisialisasi array sebelum digunakan
        while ($rg = mysqli_fetch_array($hasilg)) {
            if ($rg['hasil_id'] > 0) {
                $arr[] = array('label' => '&nbsp;' . $arpkt[$rg['hasil_id']], 'data' => array(array('Penyakit ' . $rg['hasil_id'], $rg['jlh_id'])));
            }
        }
        ?>
        var donutData = <?php echo json_encode($arr); ?>;

        function legendFormatter(label, series) {
            return '<div class="text text-primary margin4">' + label + ' ' + Math.round(series.percent) +
                '%</div>';
        }

        $.plot('#donut-chart', donutData, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.3,
                    label: {
                        show: true,
                        radius: 2 / 3,
                        formatter: function(label, series) {
                            return '<div class="badge bg-navy color-pallete">' + Math.round(series
                                .percent) + '%</div>';
                        },
                        threshold: 0.01
                    }
                }
            },
            legend: {
                show: true,
                container: $("#legend-container"),
                labelFormatter: legendFormatter,
            }
        });
    });

    function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
            label +
            '<br>' +
            Math.round(series.percent) + '%</div>';
    }
    </script>


</body>

</html>