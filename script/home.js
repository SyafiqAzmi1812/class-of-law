function accountDropdown() {
    let accountDrop = document.getElementById("accountDrop");
    let dropMenu = document.getElementById("dropMenu");

    // Tutup menu lainnya kalau account dibuka
    dropMenu.classList.remove("show");

    // Toggle account dropdown
    accountDrop.classList.toggle("show");
}

function toggleDropdown() {
    let dropMenu = document.getElementById("dropMenu");
    let accountDrop = document.getElementById("accountDrop");

    // Tutup account kalau menu lainnya dibuka
    accountDrop.classList.remove("show");

    // Toggle menu lainnya
    dropMenu.classList.toggle("show");
}

// Tutup semua dropdown ketika klik di luar
window.onclick = function(event) {
    if (!event.target.closest('.account') && !event.target.closest('.other_menu')) {
        document.getElementById("accountDrop").classList.remove("show");
        document.getElementById("dropMenu").classList.remove("show");
    }
};