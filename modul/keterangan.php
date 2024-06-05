<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi - T-corn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* CSS untuk modal */
        .modal-content-ket {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            border-radius: 10px;
            width: 80%;
            max-width: 500px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            /* Tambahkan transition untuk efek animasi */
            transition: transform 0.3s ease, opacity 0.3s ease;
            transform: translateY(-50px);
            opacity: 0;
        }

        .modal-content-ket.show {
            /* Atur transform kembali ke nilai semula */
            transform: translateY(0);
            opacity: 1;
        }

        /* Container for the card */
        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        /* Styling for the card */
        .custom-card {
            display: flex;
            border: 1px solid #e1e1e1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
            max-width: 600px;
        }

        .custom-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Styling for the card image */
        .custom-card .card-img-top {
            border-right: 1px solid #e1e1e1;
            transition: transform 0.3s ease;
        }

        .custom-card .card-img-top:hover {
            transform: scale(1.05);
        }

        /* Styling for the card content */
        .custom-card .card-block {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-grow: 1;
        }

        .custom-card .card-title {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: #333;
            padding: 10px;
            border-radius: 5px;
            background-color: #ECF0F5;
            font-weight: bold;
        }

        /* Styling for the buttons */
        .card-buttons {
            display: flex;
            justify-content: flex-start;
            gap: 10px;
            margin-top: auto;
        }

        .custom-btn {
            background-color: #00A65A;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease, transform 0.3s ease;
            cursor: pointer;
        }

        .custom-btn:hover {
            background-color: #008D4C;
            transform: scale(1.05);
            color: #fff;
        }
    </style>
</head>

<body>
    <h2 class='text text-bold'>Informasi Seputar Busuk Tongkol🌱</h2>
    <hr>
    <div class="row">

        <?php
        $hasil = mysqli_query($conn, "SELECT * FROM post ORDER BY kode_post");
        while ($r = mysqli_fetch_array($hasil)) {
            ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-aos="fade-right">
                <div class="custom-card text-center">
                    <img class="card-img-top" src="<?php echo 'gambar/' . $r['gambar']; ?>" alt="" width="200" height="200">
                    <div class="card-block">
                        <h3 class="card-title"><?php echo $r['nama_post']; ?></h3>
                        <div class="card-buttons">
                            <a class="custom-btn" onclick="openDetailModal('modal<?php echo $r['kode_post']; ?>')">
                                <i class="fa-regular fa-folder-open"></i>
                                Detail
                            </a>
                            <a class="custom-btn"
                                onclick="openSuggestionModal('modaltindakan<?php echo $r['kode_post']; ?>')">
                                <i class="fa-solid fa-paste"></i>
                                Saran
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Detail -->
            <div id="modal<?php echo $r['kode_post']; ?>" class="modal">
                <div class="modal-content-ket">
                    <span class="close" onclick="closeDetailModal('modal<?php echo $r['kode_post']; ?>')">&times;</span>
                    <h4 class="modal-title text"><i class="fa-regular fa-folder-open"></i> Detail Untuk
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
                <div class="modal-content-ket">
                    <span class="close"
                        onclick="closeSuggestionModal('modaltindakan<?php echo $r['kode_post']; ?>')">&times;</span>
                    <h4 class="modal-title text"><i class="fa-solid fa-paste"></i> Saran Untuk
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
            var modalContent = modal.querySelector('.modal-content-ket');
            modal.style.display = "block";
            setTimeout(function () {
                modalContent.classList.add('show');
            }, 10);
        }

        // Fungsi untuk menutup modal detail
        function closeDetailModal(modalId) {
            var modal = document.getElementById(modalId);
            var modalContent = modal.querySelector('.modal-content-ket');
            modalContent.classList.remove('show');
            setTimeout(function () {
                modal.style.display = "none";
            }, 300); // Sesuaikan dengan durasi transisi CSS
        }

        // Fungsi untuk membuka modal saran
        function openSuggestionModal(modalId) {
            var modal = document.getElementById(modalId);
            var modalContent = modal.querySelector('.modal-content-ket');
            modal.style.display = "block";
            setTimeout(function () {
                modalContent.classList.add('show');
            }, 10);
        }

        // Fungsi untuk menutup modal saran
        function closeSuggestionModal(modalId) {
            var modal = document.getElementById(modalId);
            var modalContent = modal.querySelector('.modal-content-ket');
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