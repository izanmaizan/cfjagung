<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tentang - T-corn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <style>
    /* CSS */

    .container {
        width: 100%;
        max-width: 1200px;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
    }

    .header {
        padding-bottom: 20px;
        border-bottom: 1px solid #ddd;
    }

    .profile-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 20px;
    }

    .title {
        font-size: 5rem;
        font-weight: 700;
        color: #333;
    }

    .description {
        font-size: 1.4rem;
        color: #555;
        text-align: left;
        margin: 20px 0;
    }

    .profiles {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
    }

    .profile {
        position: relative;
    }

    .profile-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        width: 200px;
        height: 230px;
    }

    .profile-card img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    .profile-card h2 {
        margin-bottom: 5px;
        font-size: 1.4rem;
        color: #333;
        font-weight: 600;
    }

    .profile-card p {
        font-size: 1rem;
        color: #777;
    }

    .profile-btn {
        background-color: #00a65a;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        position: relative;
        font-size: 1rem;
    }

    .profile-btn:hover {
        background-color: #008f4e;
    }

    .profile-btn::after {
        content: attr(data-title);
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%) translateY(10px);
        background-color: #333;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        white-space: nowrap;
        font-size: 1rem;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1;
    }

    .profile-btn:hover::after {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(0);
    }

    .logos {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin: 20px 0;
    }

    .logos img {
        width: 200px;
    }

    footer h2 {
        font-size: 1.2rem;
        color: #777;
        margin: 5px 0;
    }

    footer .link {
        color: #00a65a;
        text-decoration: none;
    }
    </style>
</head>

<body>
    <div class="container">
        <article class="card">
            <header class="header">
                <img class="profile-img" src="aset/tentang/favicon.png" alt="Profile headshot">
                <h1 class="title">T-corn</h1>
                <p class="description">
                    Sistem pakar yang mampu mengidentifikasi busuk tongkol pada tanaman jagung berdasarkan pengetahuan
                    yang diberikan langsung dari pakar/ahlinya dan melalui studi literatur. Penelitian ini menggunakan
                    metode perhitungan Certainty Factor (CF) dalam menghitung tingkat kepakaran. Data penelitian ini
                    terdiri dari data gejala dan data penyakit busuk tongkol, serta data aturan. Sistem pakar pada
                    organisasi ditujukan untuk penambahan value, peningkatan produktivitas serta area manajerial yang
                    dapat mengambil kesimpulan dengan cepat.
                </p>
            </header>
            <section class="profiles">
                <div class="profile">
                    <div class="profile-card">
                        <img src="aset/tentang/developer2.jpg" alt="Haura Farikha Prameshwari">
                        <h2>Haura Farikha Prameshwari</h2>
                        <p>Pengembang Aplikasi</p>
                    </div>
                </div>
                <div class="profile">
                    <div class="profile-card">
                        <img src="aset/tentang/expert.jpg" alt="Ir. Boy Buldansyah">
                        <h2>Ir. Boy Buldansyah</h2>
                        <p>Pakar Aplikasi</p>
                    </div>
                </div>
                <div class="profile">
                    <div class="profile-card">
                        <img src="aset/tentang/developer1.jpg" alt="Maizan Insani Akbar">
                        <h2>Maizan Insani Akbar</h2>
                        <p>Pengembang Aplikasi</p>
                    </div>
                </div>
            </section>
            <section class="profiles">
                <div class="profile">
                    <button class="profile-btn" data-title="Dosen Pembimbing">Eva Rianti, S.Kom., M.Kom</button>
                </div>
                <div class="profile">
                    <button class="profile-btn" data-title="Dosen Pembimbing">Firna Yenila, S.Kom., M.Kom</button>
                </div>
                <div class="profile">
                    <button class="profile-btn" data-title="Dosen Pembimbing">Hezy Kurnia, S.Kom., M.Kom</button>
                </div>
                <div class="profile">
                    <button class="profile-btn" data-title="Dosen Pembimbing">Sepsa Nur Rahman, S.Kom., M.Kom</button>
                </div>
            </section>
            <footer>
                <div class="logos">
                    <a class="link dim light-silver"><img src="aset/tentang/tazargunamandiri.png"
                            alt="Tazarguna Mandiri" /></a>
                    <a class="link dim light-silver"><img src="aset/tentang/upiyptk.png" alt="UPI YPTK" /></a>
                </div>
                <h2>Sistem Pakar, Identifikasi Penyakit Busuk Tongkol pada Tanaman Jagung</h2>
                <h2>Copyright © 2024, <a class="link dim silver">Universitas Putra Indonesia YPTK "Padang"</a></h2>
            </footer>
        </article>
    </div>
</body>

</html>