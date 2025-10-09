// const chevron_left = document.querySelector(".chevron.left")
// const chevron_right = document.querySelector(".chevron.right")
// const data_events = [
//     {
//         "judul": "Pra Event",
//         "deskripsi": "Webinar Karya Tulis Ilmiah merupakan rangkaian acara Trunojoyo Creative Competition 2025 yang diselenggarakan oleh UKM TRIPLE-C Universitas Trunojoyo Madura bekerja sama dengan KOPI ALINEA. Mengusung tema “The Architectonics of Scholarly Writing: Advanced Strategies for Precision, Persuasion, and Impact”, acara ini menghadirkan narasumber berpengalaman dari universitas internasional untuk membahas strategi menulis ilmiah yang presisi, persuasif, dan berdampak.",
//         "gambar": "img/webinar.webp",
//         "daftar": "https://bit.ly/Pendaftaran_Webinar_TCC2025"
//     },
//     {
//         "judul": "Main Event",
//         "deskripsi": "Cooming Soon",
//         "gambar": "img/talkshow.webp",
//         "daftar": "#"
//         // "judul": "Main Acara",
//         // "deskripsi": "Talkshow TCC 2025 merupakan salah satu rangkaian puncak Trunojoyo Creative Competition 2025 yang diselenggarakan secara offline oleh UKM TRIPLE-C Universitas Trunojoyo Madura. Acara ini akan menghadirkan narasumber dari berbagai bidang yang siap berbagi pengalaman, wawasan, serta inspirasi seputar inovasi, kreativitas, dan transformasi digital di era modern. Melalui sesi diskusi interaktif, peserta tidak hanya memperoleh pengetahuan baru tetapi juga kesempatan untuk berdialog langsung dengan para pembicara, sehingga dapat memperluas wawasan, membangun jejaring, dan menemukan motivasi baru. Talkshow ini terbuka untuk mahasiswa dan masyarakat umum yang ingin berkontribusi dalam membangun ekosistem kreatif dan inovatif, serta menjadi bagian dari generasi yang siap menghadapi tantangan masa depan."
//         // "gambar": "assets/images/events/webinar.png"
//         // "daftar": "https://bit.ly/Pendaftaran_Talkshow_TCC2025"
//     }
// ]

// let pointer = 0

// function change_event(pointer){
//     let judul = data_events[pointer].judul
//     let deskripsi = data_events[pointer].deskripsi
//     let gambar = data_events[pointer].gambar
//     let daftar = data_events[pointer].daftar

//     document.getElementById('judul').innerHTML = judul
//     document.getElementById('deskripsi').innerHTML = deskripsi
//     document.getElementById('gambar').src = gambar
//     document.getElementById('daftar').href = daftar
// }

// chevron_right.addEventListener("click", function() {
//     if (pointer === data_events.length-1) {
//         pointer = 0
//     } else {
//         pointer += 1
//     }
//     // console.log(pointer)
//     change_event(pointer)
    
// })

// chevron_left.addEventListener("click", function() {
//     // if (pointer > 0 && pointer < data_events.length){
//     if (pointer === 0){
//         pointer = data_events.length-1
//     } else {
//         pointer -= 1
//     }
//     // console.log(pointer)
//     change_event(pointer)
// })

// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
// 
mobileMenuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});
// 
// Event Carousel
const eventData = [
    {
        title: "Pra Event",
        description: "Webinar Karya Tulis Ilmiah merupakan rangkaian acara Trunojoyo Creative Competition 2025 yang diselenggarakan oleh UKM TRIPLE-C Universitas Trunojoyo Madura bekerja sama dengan KOPI ALINEA. Mengusung tema \"The Architectonics of Scholarly Writing: Advanced Strategies for Precision, Persuasion, and Impact\", acara ini menghadirkan narasumber berpengalaman dari universitas internasional untuk membahas strategi menulis ilmiah yang presisi, persuasif, dan berdampak.",
        image: "img/webinar.webp",
        registerUrl: "https://docs.google.com/forms/d/e/1FAIpQLScC0VT0cZVY6yMqOsxlCXpzDFkGHcPSBhbdgNZ56OsmoF_UOw/viewform"
    },
    {
        title: "Main Event",
        description: "Coming Soon - Main event TCC 2025 akan segera hadir dengan berbagai kegiatan menarik dan kompetitif.",
        image: "img/talkshow.jpg",
        registerUrl: "https://docs.google.com/forms/d/e/1FAIpQLSfO3a-u4wpOnjbA_o7AIg0D2mz0SjgVwfW09y8HC7GPP5fP7A/viewform"
    }
];
// 
let currentEventIndex = 0;
// 
const eventTitle = document.getElementById('event-title');
const eventDescription = document.getElementById('event-description');
const eventImage = document.getElementById('event-image');
const eventRegister = document.getElementById('event-register');
const prevEventBtn = document.getElementById('prev-event');
const nextEventBtn = document.getElementById('next-event');
// 
function updateEvent(index) {
    const event = eventData[index];
    eventTitle.textContent = event.title;
    eventDescription.textContent = event.description;
    eventImage.src = event.image;
    eventRegister.href = event.registerUrl;
}
// 
nextEventBtn.addEventListener('click', () => {
    currentEventIndex = (currentEventIndex + 1) % eventData.length;
    updateEvent(currentEventIndex);
});
// 
prevEventBtn.addEventListener('click', () => {
    currentEventIndex = (currentEventIndex - 1 + eventData.length) % eventData.length;
    updateEvent(currentEventIndex);
});
// 
// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
            // Close mobile menu if open
            mobileMenu.classList.add('hidden');
        }
    });
});