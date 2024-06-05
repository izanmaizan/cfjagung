<style>
.carousel {
    position: relative;
    width: 90%;
    margin: auto;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.carousel-inner {
    display: flex;
    transition: transform 0.5s ease;
}

.carousel-item {
    min-width: 100%;
    transition: opacity 1s ease;
}

.carousel-item img {
    width: 100%;
    border-radius: 10px;
}

.carousel-control {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    color: #00A65A;
    cursor: pointer;
    user-select: none;
}

.carousel-control.left {
    left: 10px;
}

.carousel-control.right {
    right: 10px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 250px;
    padding: 30px;
    text-align: center;
    border-top: 8px solid #00A65A;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.card-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.card h3 {
    font-size: 3.5rem;
    margin: 0;
    font-weight: 700;
    color: #333;
}

.card p {
    font-size: 1.5rem;
    color: #777;
    margin: 10px 0;
}

.card-icon {
    font-size: 4rem;
    margin-top: 20px;
    color: #00A65A;
}

.card.yellow {
    background-color: #fff9e6;
    border-top-color: #f39c12;
}

.card.red {
    background-color: #ffe6e6;
    border-top-color: #e74c3c;
}

.card.blue {
    background-color: #e6f2ff;
    border-top-color: #3498db;
}

.card.green {
    background-color: #e6ffed;
    border-top-color: #2ecc71;
}
</style>
<title>Beranda - T-corn</title>

<div class="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="aset/banner/id.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="aset/banner/en.png" alt="Second slide">
        </div>
    </div>
    <!-- <a class="carousel-control left" onclick="prevSlide()">&#10094;</a>
    <a class="carousel-control right" onclick="nextSlide()">&#10095;</a> -->
</div>
<br>
<div class="row">
    <?php
    $htgejala = mysqli_query($conn, "SELECT count(*) as total from gejala");
    $dtgejala = mysqli_fetch_assoc($htgejala); ?>
    <div class="card yellow">
        <div class="card-inner">
            <h3> <?php echo $dtgejala["total"]; ?></h3>
            <p>Total Gejala</p>
            <div class="card-icon"><i class="fa-solid fa-clipboard-list"></i></div>
        </div>
    </div>
    <?php
    $htpenyakit = mysqli_query($conn, "SELECT count(*) as total from penyakit");
    $dtpenyakit = mysqli_fetch_assoc($htpenyakit); ?>
    <div class="card red">
        <div class="card-inner">
            <h3><?php echo $dtpenyakit["total"]; ?></h3>
            <p>Total Penyakit</p>
            <div class="card-icon"><i class="fa-solid fa-vial-virus"></i></div>
        </div>
    </div>
    <?php
    $htpengetahuan = mysqli_query($conn, "SELECT count(*) as total from basis_pengetahuan");
    $dtpengetahuan = mysqli_fetch_assoc($htpengetahuan); ?>
    <div class="card blue">
        <div class="card-inner">
            <h3><?php echo $dtpengetahuan["total"]; ?></h3>
            <p>Total Pengetahuan</p>
            <div class="card-icon"><i class="fa-solid fa-book-bookmark"></i></div>
        </div>
    </div>
    <?php
    $htadmin = mysqli_query($conn, "SELECT count(*) as total from admin");
    $dtadmin = mysqli_fetch_assoc($htadmin); ?>
    <div class="card green">
        <div class="card-inner">
            <h3><?php echo $dtadmin["total"]; ?></h3>
            <p>Total Admin Pakar</p>
            <div class="card-icon"><i class="fa-solid fa-user-doctor"></i></div>
        </div>
    </div>
</div>
<br>
<div></div>

<script>
let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.carousel-item');
    if (index >= slides.length) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = index;
    }
    slides.forEach((slide, idx) => {
        slide.style.display = (idx === currentSlide) ? 'block' : 'none';
    });
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentSlide);
    setInterval(nextSlide, 4000); // Change slide every 3 seconds
});
</script>