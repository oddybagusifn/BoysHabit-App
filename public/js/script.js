let body = document.body;
let cartBtn = document.getElementById('cartButton');
let overlay = document.getElementById('overlay');
let cartObj = document.getElementById('cartView');
let closeCart = document.getElementById('closeCart');

// Fungsi untuk membuka cart
cartBtn.addEventListener('click', function() {
    body.style.overflow = 'hidden'; // Mencegah scroll
    overlay.style.display = 'flex'; // Menampilkan overlay
    cartObj.style.transform = 'translateX(0)';
    cartObj.style.right = '0' // Menampilkan cart
});

// Fungsi untuk menutup cart
function closeCartFunction() {
    body.style.overflow = 'auto'; // Mengembalikan scroll
    cartObj.style.transform = 'translateX(100%)'; // Menggeser cart keluar layar

    // Sembunyikan overlay setelah animasi selesai
    setTimeout(() => {
        overlay.style.display = 'none';
    }, 300); // Sesuaikan dengan durasi transisi
}

// Event listener untuk menutup cart saat overlay diklik
overlay.addEventListener('click', function(event) {
    // Pastikan hanya area overlay yang memicu penutupan
    if (event.target === overlay) {
        closeCartFunction();
    }
});

// Event listener untuk menutup cart saat tombol close diklik
closeCart.addEventListener('click', closeCartFunction);
