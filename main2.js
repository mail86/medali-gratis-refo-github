// Pilih semua elemen video
const videos = document.querySelectorAll('video');

// Tambahkan event listener untuk klik
videos.forEach(video => {
    video.addEventListener('click', () => {
        if (video.requestFullscreen) {
            video.requestFullscreen();
        } else if (video.webkitRequestFullscreen) { // Untuk Safari
            video.webkitRequestFullscreen();
        } else if (video.msRequestFullscreen) { // Untuk IE11
            video.msRequestFullscreen();
        }

        // Ketika keluar dari mode fullscreen, kembalikan ukuran video
        video.addEventListener('fullscreenchange', () => {
            if (!document.fullscreenElement) {
                video.style.width = "100%";
                video.style.height = "auto";
            }
        });
    });
});
