<?php
session_start();

$title = "Beranda | Class Of Law - Website Hukum KUHP";
include "template/header.php"
?>
<body>
    <div class="container">
        <div class="gambar">
            <img src="img/gambar/Class Of Law.png" alt="Class Of Law" class="img_web">
        </div>
        <div class="isi">
            <div class="batas"></div>
            <div class="menu_tambahan">
                <div class="judul">
                    <h1>Menu Pilihan</h1>
                </div>
                <div class="btn_menu">
                    <button id="menu_alternatif">
                        <i class="fa-solid fa-book-bookmark"></i>
                        <p>Buku KUHP</p>
                    </button>
                    <button id="menu_alternatif">
                        <i class="fa-solid fa-puzzle-piece"></i>
                        <p>Kuis</p>
                    </button>
                    <button id="menu_alternatif">
                        <i class="fa-solid fa-comments"></i>
                        <p>Umpan Balik</p>
                    </button>
                </div>
            </div>
            <div class="batas"></div>
            <div class="hasil_quiz">
                
            </div>
        </div>
    </div>

    <?php include "template/footer.php"?>
</body>