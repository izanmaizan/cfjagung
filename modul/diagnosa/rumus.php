<div class="container">
    <?php
    // Fungsi untuk menghitung Certainty Factor (CF) dari satu aturan
    function calculate_cf($mb, $md)
    {
        return $mb - $md;
    }

    // Fungsi untuk menggabungkan dua CF
    function combine_cf($cf1, $cf2)
    {
        if ($cf1 >= 0 && $cf2 >= 0) {
            return $cf1 + $cf2 * (1 - $cf1);
        } elseif ($cf1 < 0 && $cf2 < 0) {
            return $cf1 + $cf2 * (1 + $cf1);
        } else {
            return ($cf1 + $cf2) / (1 - min(abs($cf1), abs($cf2)));
        }
    }

    // Data MB dan MD untuk masing-masing aturan
    $mb_values = [];
    $md_values = [];

    // Koneksi ke database
    $conn = mysqli_connect("localhost", "username", "password", "database_name");

    // Cek koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Ambil data dari tabel basis_pengetahuan
    $sql = "SELECT kode_penyakit, kode_gejala, mb, md FROM basis_pengetahuan";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Memasukkan data dari hasil kueri ke dalam array
        while ($row = mysqli_fetch_assoc($result)) {
            $mb_values[] = $row["mb"];
            $md_values[] = $row["md"];
        }
    } else {
        echo "Tidak ada data ditemukan dalam tabel basis_pengetahuan";
    }

    // Hitung CF untuk setiap aturan
    $cf_values = [];
    echo "<h2>Langkah-langkah Penyelesaian:</h2>\n";
    echo "<h3>Hitung CF untuk setiap aturan:</h3>\n";
    foreach ($mb_values as $index => $mb) {
        $md = $md_values[$index];
        $cf = calculate_cf($mb, $md);
        $cf_values[] = $cf;
        echo "<div class='step'>\n";
        echo "<div class='formula'><b>Rumus:</b> CF = MB - MD</div>\n";
        echo "<p><b>CF" . ($index + 1) . ":</b> MB" . ($index + 1) . " = $mb, MD" . ($index + 1) . " = $md</p>\n";
        echo "<p>CF" . ($index + 1) . " = $mb - $md = $cf</p>\n";
        echo "</div>\n";
    }

    // Gabungkan CF dari beberapa aturan
    $combined_cf = $cf_values[0];
    echo "<h3>Kombinasikan CF dari beberapa aturan:</h3>\n";
    for ($i = 1; $i < count($cf_values); $i++) {
        $cf_before = $combined_cf;
        $combined_cf = combine_cf($combined_cf, $cf_values[$i]);
        echo "<div class='step'>\n";
        echo "<p><b>Kombinasikan CF" . $i . " dan CF" . ($i + 1) . ":</b></p>\n";
        if ($cf_before >= 0 && $cf_values[$i] >= 0) {
            echo "<div class='formula'><b>Rumus:</b> CF<sub>gabungan</sub> = CF1 + CF2 × (1 - CF1)</div>\n";
            echo "<p>CF<sub>gabungan</sub> = $cf_before + $cf_values[$i] × (1 - $cf_before)</p>\n";
            echo "<p>CF<sub>gabungan</sub> = $cf_before + $cf_values[$i] × " . (1 - $cf_before) . "</p>\n";
            echo "<p>CF<sub>gabungan</sub> = " . ($cf_before + $cf_values[$i] * (1 - $cf_before)) . "</p>\n";
        } elseif ($cf_before < 0 && $cf_values[$i] < 0) {
            echo "<div class='formula'><b>Rumus:</b> CF<sub>gabungan</sub> = CF1 + CF2 × (1 + CF1)</div>\n";
            echo "<p>CF<sub>gabungan</sub> = $cf_before + $cf_values[$i] × (1 + $cf_before)</p>\n";
            echo "<p>CF<sub>gabungan</sub> = $cf_before + $cf_values[$i] × " . (1 + $cf_before) . "</p>\n";
            echo "<p>CF<sub>gabungan</sub> = " . ($cf_before + $cf_values[$i] * (1 + $cf_before)) . "</p>\n";
        } else {
            echo "<div class='formula'><b>Rumus:</b> CF<sub>gabungan</sub> = (CF1 + CF2) / (1 - min(abs(CF1), abs(CF2)))</div>\n";
            echo "<p>CF<sub>gabungan</sub> = ($cf_before + $cf_values[$i]) / (1 - " . min(abs($cf_before), abs($cf_values[$i])) . ")</p>\n";
            echo "<p>CF<sub>gabungan</sub> = " . ($cf_before + $cf_values[$i]) . " / (1 - min(abs($cf_before), abs($cf_values[$i])))</p>\n";
            echo "<p>CF<sub>gabungan</sub> = " . ($cf_before + $cf_values[$i]) . " / (1 - min(abs($cf_before), abs($cf_values[$i])))</p>\n";

        }
        echo "</div>\n";
    }

    // Tampilkan hasil akhir
    echo "<div class='result'>\n";
    echo "<h2>Hasil</h2>\n";
    echo "<p>Dari contoh di atas, nilai Certainty Factor (CF) untuk hipotesis bahwa pasien menderita penyakit X berdasarkan gejala A, B, dan C adalah $combined_cf atau " . ($combined_cf * 100) . "%.</p>\n";
    echo "</div>\n";

    // Tutup koneksi database
    mysqli_close($conn);
    ?>
</div>
</body>

</html>