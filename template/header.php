<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="stylesheet" href="style/home.css">
    <title><?= $title ?></title>
</head>
<body>
    <nav>
        <div class="kiri">
            <div class="logo">
                <a href="index.php" id="logo_link">
                    <img src="./img/logo/logo baru.png" alt="Class Of Law" id="logo_img">
                </a>
            </div>
            <div class="menu_list">
                <a href="index.php" id="menu">Beranda</a>
                <a href="#" id="menu">Perpustakaan</a>
                <a href="quiz.php" id="menu"  class="active">Kuis</a>
                <a href="#" id="menu">Umpan Balik</a>
            </div>
        </div>
        <div class="kanan">
            <div class="search">
                <input type="search" name="search" id="search_bar" placeholder="Cari" aria-label="Cari">
                <button id="btn_search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="account">
                <button onclick="accountDropdown()">
                <i class="fa-solid fa-circle-user" id="user_account"></i>
                </button>
                <div class="account_drop" id="accountDrop">
                <div class="username">
                    <h4>Username</h4>
                    <p>example@gmail.com</p>
                </div>
                <div class="avatar">
                    <i class="fa-solid fa-circle-user" id="user_account"></i>
                </div>
                </div>
            </div>
            <div class="other_menu">
                <button onclick="toggleDropdown()" class="dropbtn">
                <i class="fa-solid fa-ellipsis-vertical" id="menu_others"></i>
                </button>
                <div class="dropdown_menu" id="dropMenu">
                <div class="atas">
                    <a href="#" id="menu_lainnya"><i class="fa-solid fa-bell"></i> Notifikasi</a>
                    <a href="#" id="menu_lainnya"><i class="fa-solid fa-gear"></i> Pengaturan</a>
                </div>
                <div class="bawah">
                    <a href="#" id="logout_btn"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                </div>
                </div>
            </div>
        </div>
    </nav>