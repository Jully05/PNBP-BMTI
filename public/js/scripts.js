document.addEventListener("DOMContentLoaded", function() {
    // Bagian Kalender (FullCalendar)
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: '',
            center: 'title',
            right: 'prev,next'
        },
        events: [
            {
                title: 'Disewa',
                start: '2024-09-25',
                end: '2024-09-25',
            },
            {
                title: 'Disewa Malam',
                start: '2024-09-26',
                end: '2024-09-26',
            },
            {
                title: 'Disewa Malam',
                start: '2024-09-28',
                end: '2024-09-28',
            },
            {
                title: 'Disewa Penuh Hari',
                start: '2024-09-30',
                end: '2024-09-30',
            },
            {
                title: 'Disewa',
                start: '2024-10-25',
                end: '2024-10-25',
            },
            {
                title: 'Disewa',
                start: '2024-10-15',
                end: '2024-10-15',
            },
        ],
        dateClick: function(info) {
            const event = calendar.getEvents().find(event => event.startStr === info.dateStr);
            if (event) {
                showTooltip(info.jsEvent.clientX, info.jsEvent.clientY, event.title);
            }
        }
    });

    calendar.render();

    // Menampilkan tooltip
    function showTooltip(x, y, text) {
        const tooltip = document.createElement('div');
        tooltip.className = 'absolute bg-gray-700 text-white text-sm rounded p-1';
        tooltip.innerText = text;
        document.body.appendChild(tooltip);
        
        tooltip.style.left = `${x}px`;
        tooltip.style.top = `${y - 30}px`;

        setTimeout(() => {
            tooltip.remove();
        }, 2000); // Tooltip hilang setelah 2 detik
    }

    // Bagian Galeri Gambar
    const mainImage = document.getElementById('mainImage');
    const smallImages = document.querySelectorAll('#smallImages img');
    const photoGallery = document.getElementById('smallImages');
    const scrollLeftBtn = document.querySelector('.scroll-left');
    const scrollRightBtn = document.querySelector('.scroll-right');
    
    let currentPosition = 0;
    const imageWidth = smallImages[0].offsetWidth + 16; // Lebar gambar termasuk margin
    let imagesPerPage = Math.floor(photoGallery.offsetWidth / imageWidth); // Jumlah gambar kecil berdasarkan ukuran layar
    const totalImages = smallImages.length;

    // Fungsi untuk scroll galeri
    function scrollGallery(direction) {
        const maxPosition = totalImages - imagesPerPage;
        currentPosition = Math.max(0, Math.min(maxPosition, currentPosition + direction));
        const offset = currentPosition * -imageWidth;
        photoGallery.style.transform = `translateX(${offset}px)`;
    }

    // Tombol scroll kiri
    scrollLeftBtn.addEventListener('click', function() {
        scrollGallery(-1);
    });

    // Tombol scroll kanan
    scrollRightBtn.addEventListener('click', function() {
        scrollGallery(1);
    });

    // Saat window di-resize, hitung ulang jumlah gambar per halaman
    window.addEventListener('resize', function() {
        imagesPerPage = Math.floor(photoGallery.offsetWidth / imageWidth);
        currentPosition = Math.min(currentPosition, totalImages - imagesPerPage);
        scrollGallery(0); // Update tampilan saat resize
    });

    // Update gambar utama saat klik gambar kecil
    smallImages.forEach(function(img) {
        img.addEventListener('click', function() {
            const newSrc = img.getAttribute('data-src');
            mainImage.setAttribute('src', newSrc);
        });
    });

    // Menampilkan pop-up saat mengarahkan kursor ke gambar
    smallImages.forEach(function(img) {
        img.addEventListener('mouseover', function() {
          const newSrc = img.getAttribute('data-src');
          mainImage.setAttribute('src', newSrc);
    
            // Menempatkan tooltip di atas gambar
            const rect = image.getBoundingClientRect();
            tooltip.style.left = `${rect.left + window.scrollX}px`;
            tooltip.style.top = `${rect.top + window.scrollY - 25}px`;
    
            // Menghapus tooltip saat kursor keluar
            image.addEventListener('mouseleave', function () {
                tooltip.remove();
            });
            
        });
    });
});
