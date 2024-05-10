<?php
$module = $_GET['module'];
?>
<li><a <?php if ($module == "")
  echo 'class="active"'; ?> href="./"><i class="fa-solid fa-house-chimney"></i>
        <span>Beranda</span></a>
<li>
    <div class="container"></div>
    <?php
  if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    ?>
<li><a <?php if ($module == "admin")
    echo 'class="active"'; ?> href="admin"><i class="fa fa-user"></i>
        <span>Admin Pakar</span></a>
<li>
    <div class="container"></div>
<li><a <?php if ($module == "penyakit")
    echo 'class="active"'; ?> href="penyakit"><i class="fa-solid fa-wheat-awn-circle-exclamation"></i>
        <span>Penyakit</span></a>
<li>
    <div class="container"></div>
<li><a <?php if ($module == "gejala")
    echo 'class="active"'; ?> href="gejala"><i class="fa-solid fa-clipboard-list"></i>
        <span>Gejala - gejala</span></a>
<li>
    <div class="container"></div>
<li><a <?php if ($module == "pengetahuan")
    echo 'class="active"'; ?> href="pengetahuan"><i class="fa-solid fa-book-open"></i>
        <span>Basis Pengetahuan</span></a>
<li>
    <div class="container"></div>
<li><a <?php if ($module == "post")
    echo 'class="active"'; ?> href="post"><i class="fa fa-file-text"></i> <span>Posting
            Informasi</span></a>
<li>
    <div class="container"></div>
<li><a <?php if ($module == "password")
    echo 'class="active"'; ?> href="password"><i class="fa-solid fa-key"></i>
        <span>Ubah
            Password</span></a>
<li>
    <div class="container"></div>
    <?php
  } else {
    ?>
<li><a <?php if ($module == "diagnosa")
    echo 'class="active"'; ?> href="diagnosa"><i class="fa fa-search-plus"></i>
        <span>Identifikasi</span></a>
<li>
    <div class="container"></div>
<li><a <?php if ($module == "riwayat")
    echo 'class="active"'; ?> href="riwayat"><i class="fa fa-history"></i>
        <span>Riwayat</span></a>
<li>
    <div class="container"></div>
<li><a <?php if ($module == "keterangan")
    echo 'class="active"'; ?> href="keterangan"><i class="fa-solid fa-book"></i>
        <span>Informasi</span></a>
<li>
    <div class="container"></div>
    <?php
  }
  ?>
<li><a <?php if ($module == "tentang")
  echo 'class="active"'; ?> href="tentang"><i class="fa-solid fa-file-invoice"></i>
        <span>Tentang</span></a>
<li>
    <div class="container"></div>