<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi - T-corn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <style>
    /* CSS untuk modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        transition: all 0.3s;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-content.show {
        transform: scale(1.1);
    }
    </style> -->
</head>

<body>
    <h2 class='text text-primary'>Informasi Seputar Busuk Tongkol🌱</h2>
    <hr>
    <div class="row">

        <?php
        $hasil = mysqli_query($conn, "SELECT * FROM post ORDER BY kode_post");
        while ($r = mysqli_fetch_array($hasil)) {
            ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-aos="fade-right">
                <div class="card text-center">
                    <img class="card-img-top img-bordered-sm" src="<?php echo 'gambar/' . $r['gambar']; ?>" alt=""
                        width="100%" height="200">
                    <div class="card-block">
                        <h4 class="card-title">
                            <h3 class="bg-keterangan"><?php echo $r['nama_post']; ?></h3>
                            <a class="btn bg-maroon btn-flat margin"
                                onclick="openDetailModal('modal<?php echo $r['kode_post']; ?>')">
                                <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                                Detail
                            </a>
                            <a class="btn bg-olive btn-flat margin"
                                onclick="openSuggestionModal('modaltindakan<?php echo $r['kode_post']; ?>')">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                Saran
                            </a>
                    </div>
                </div>
                <hr>
            </div>

            <!-- Modal Detail -->
            <div id="modal<?php echo $r['kode_post']; ?>" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeDetailModal('modal<?php echo $r['kode_post']; ?>')">&times;</span>
                    <h4 class="modal-title text text-ket"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Detail Untuk
                        <?php echo $r['nama_post']; ?>
                    </h4>
                    <div class="modal-body" style="text-align: justify;text-justify: inter-word;">
                        <p><?php echo $r['det_post']; ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            onclick="closeDetailModal('modal<?php echo $r['kode_post']; ?>')">Close</button>
                    </div>
                </div>
            </div>

            <!-- Modal Saran -->
            <div id="modaltindakan<?php echo $r['kode_post']; ?>" class="modal">
                <div class="modal-content">
                    <span class="close"
                        onclick="closeSuggestionModal('modaltindakan<?php echo $r['kode_post']; ?>')">&times;</span>
                    <h4 class="modal-title text text-ket"><i class="fa fa-quote-right" aria-hidden="true"></i> Saran Untuk
                        <?php echo $r['nama_post']; ?>
                    </h4>
                    <div class="modal-body" style="text-align: justify;text-justify: inter-word;">
                        <p><?php echo $r['srn_post']; ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                            onclick="closeSuggestionModal('modaltindakan<?php echo $r['kode_post']; ?>')">Close</button>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>

    <script>
        // Fungsi untuk membuka modal detail
        function openDetailModal(modalId) {
            var modal = document.getElementById(modalId);
            var modalContent = modal.querySelector('.modal-content');
            modal.style.display = "block";
            setTimeout(function () {
                modalContent.classList.add('show');
            }, 10);
        }

        // Fungsi untuk menutup modal detail
        function closeDetailModal(modalId) {
            var modal = document.getElementById(modalId);
            var modalContent = modal.querySelector('.modal-content');
            modalContent.classList.remove('show');
            setTimeout(function () {
                modal.style.display = "none";
            }, 300); // Sesuaikan dengan durasi transisi CSS
        }

        // Fungsi untuk membuka modal saran
        function openSuggestionModal(modalId) {
            var modal = document.getElementById(modalId);
            var modalContent = modal.querySelector('.modal-content');
            modal.style.display = "block";
            setTimeout(function () {
                modalContent.classList.add('show');
            }, 10);
        }

        // Fungsi untuk menutup modal saran
        function closeSuggestionModal(modalId) {
            var modal = document.getElementById(modalId);
            var modalContent = modal.querySelector('.modal-content');
            modalContent.classList.remove('show');
            setTimeout(function () {
                modal.style.display = "none";
            }, 300); // Sesuaikan dengan durasi transisi CSS
        }

        // Menutup modal saat user mengklik di luar modal
        window.onclick = function (event) {
            var modals = document.querySelectorAll('.modal');
            modals.forEach(function (modal) {
                if (event.target == modal) {
                    closeDetailModal(modal.id);
                    closeSuggestionModal(modal.id);
                }
            });
        }
    </script>
</body>

</html>