<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tentang - T-corn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <style>
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
            padding-bottom: 5px;
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
            margin-top: 0;
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
            margin-top: 5px;
            position: relative;
            text-align: center;
        }

        .profile-pakar {
            top: -25px;
        }

        .profile-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            padding: 5px;
            text-align: center;
            width: 150px;
            height: 240px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .profile-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .profile-card img {
            width: 100%;
            border-radius: 10px 10px 0 10px;
        }

        .profile-card h2 {
            margin-top: 15px;
            margin-bottom: 5px;
            font-size: 1.8rem;
            color: #333;
            font-weight: 600;
        }

        .profile-card p {
            font-size: 1.2rem;
            color: #777;
        }

        .dosen-card {
            background-color: #00a65a;
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            max-width: 250px;
            color: #fff;
            text-align: center;
        }

        .dosen-card h2 {
            font-size: 2rem;
            font-weight: 600;
            margin: 0;
        }

        .dosen-card p {
            font-size: 1.2rem;
            margin: 5px 0 0;
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
            font-size: 1.8rem;
            color: #777;
            margin: 5px 0;
        }

        footer .link {
            color: #00a65a;
            text-decoration: none;
        }

        .linkedin {
            width: 40px;
            height: 40px;
            position: absolute;
            top: 120px;
            left: 40px;
        }

        .oversize {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="container">
        <article class="card">
            <header class="header">
                <img class="profile-img" src="aset/tentang/favicon.png" alt="Profile headshot">
                <h1 class="title">T-corn🌽</h1>
                <p class="description">
                    &nbsp; <span class="oversize">S</span>istem pakar yang mampu mengidentifikasi busuk tongkol pada
                    tanaman jagung
                    berdasarkan
                    pengetahuan
                    yang diberikan langsung dari pakar/ahlinya dan melalui studi literatur. Penelitian ini
                    menggunakan
                    metode perhitungan Certainty Factor (CF) dalam menghitung tingkat kepakaran. Data penelitian ini
                    terdiri dari data gejala dan data penyakit busuk tongkol, serta data aturan. Sistem pakar pada
                    organisasi ditujukan untuk penambahan value, peningkatan produktivitas serta area manajerial
                    yang
                    dapat mengambil kesimpulan dengan cepat.
                </p>
            </header>
            <br>
            <section class="profiles">
                <div class="profile">
                    <a href="https://www.linkedin.com/in/haurafarikhap/" target="_blank">
                        <div class="profile-card">
                            <div class="">
                                <img src="https://media.licdn.com/dms/image/D5603AQFVTQ4tcPJ9OA/profile-displayphoto-shrink_800_800/0/1713578172149?e=1723075200&v=beta&t=6Ore9UKJOylzNHRFBUGRdV2123HFovJ346tKLgoRBII"
                                    alt="Haura Farikha Prameshwari">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/8/81/LinkedIn_icon.svg"
                                    alt="linkedin" class="linkedin">
                            </div>
                            <h2>Haura Farikha Prameshwari</h2>
                            <p>Pengembang Aplikasi</p>
                        </div>
                    </a>
                </div>
                <div class="profile profile-pakar">
                    <a href="https://www.linkedin.com/in/ir-boy-buldansyah-2ba190256/" target="_blank">
                        <div class="profile-card">
                            <div class="">
                                <img src="https://media.licdn.com/dms/image/D5603AQHhh8p05kZjFQ/profile-displayphoto-shrink_800_800/0/1697597930697?e=1723075200&v=beta&t=M7QwyY6cdb8YtAugG-ktENwPaItSHuqIOIEEA3YtDFI"
                                    alt="Ir. Boy Buldansyah">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/8/81/LinkedIn_icon.svg"
                                    alt="linkedin" class="linkedin">
                            </div>
                            <h2>Ir. Boy Buldansyah</h2>
                            <p>Pakar Aplikasi</p>
                        </div>
                    </a>
                </div>
                <div class="profile">
                    <a href="https://www.linkedin.com/in/maizan-insani-akbar" target="_blank">
                        <div class="profile-card">
                            <div class="">
                                <img src="https://media.licdn.com/dms/image/D5603AQFsbQRxj6Koyg/profile-displayphoto-shrink_800_800/0/1704449524519?e=1723075200&v=beta&t=8Vu7AaH6Au4sAjG1rMOya0SbilgFgZPP2LTz7hG7Ruc"
                                    alt="Maizan Insani Akbar">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/8/81/LinkedIn_icon.svg"
                                    alt="linkedin" class="linkedin">
                            </div>
                            <h2>Maizan Insani Akbar</h2>
                            <p>Pengembang Aplikasi</p>
                        </div>
                    </a>
                </div>
            </section>
            <section class="profiles">
                <div class="profile">
                    <div class="dosen-card">
                        <h2>Eva Rianti</h2>
                        <p>Dosen Pembimbing</p>
                    </div>
                </div>
                <div class="profile">
                    <div class="dosen-card">
                        <h2>Firna Yenila</h2>
                        <p>Dosen Pembimbing</p>
                    </div>
                </div>
                <div class="profile">
                    <div class="dosen-card">
                        <h2>Hezy Kurnia</h2>
                        <p>Dosen Pembimbing</p>
                    </div>
                </div>
                <div class="profile">
                    <div class="dosen-card">
                        <h2>Sepsa Nur Rahman</h2>
                        <p>Dosen Pembimbing</p>
                    </div>
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