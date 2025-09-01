const chevron_left = document.querySelector(".chevron.left")
const chevron_right = document.querySelector(".chevron.right")
const data_events = [
    {
        "judul": "Pra Event",
        "deskripsi": "Webinar Karya Tulis Ilmiah merupakan rangkaian acara Trunojoyo Creative Competition 2025 yang diselenggarakan oleh UKM TRIPLE-C Universitas Trunojoyo Madura bekerja sama dengan KOPI ALINEA. Mengusung tema “The Architectonics of Scholarly Writing: Advanced Strategies for Precision, Persuasion, and Impact”, acara ini menghadirkan narasumber berpengalaman dari universitas internasional untuk membahas strategi menulis ilmiah yang presisi, persuasif, dan berdampak.",
        "gambar": "img/webinar.jpeg"
    },
    {
        "judul": "Main Event",
        "deskripsi": "Cooming Soon",
        "gambar": "img/talkshow.png"
        // "judul": "Main Acara",
        // "deskripsi": "Talkshow TCC 2025 merupakan salah satu rangkaian puncak Trunojoyo Creative Competition 2025 yang diselenggarakan secara offline oleh UKM TRIPLE-C Universitas Trunojoyo Madura. Acara ini akan menghadirkan narasumber dari berbagai bidang yang siap berbagi pengalaman, wawasan, serta inspirasi seputar inovasi, kreativitas, dan transformasi digital di era modern. Melalui sesi diskusi interaktif, peserta tidak hanya memperoleh pengetahuan baru tetapi juga kesempatan untuk berdialog langsung dengan para pembicara, sehingga dapat memperluas wawasan, membangun jejaring, dan menemukan motivasi baru. Talkshow ini terbuka untuk mahasiswa dan masyarakat umum yang ingin berkontribusi dalam membangun ekosistem kreatif dan inovatif, serta menjadi bagian dari generasi yang siap menghadapi tantangan masa depan."
        // "gambar": "assets/images/events/webinar.png"
    }
]

let pointer = 0

function change_event(pointer){
    let judul = data_events[pointer].judul
    let deskripsi = data_events[pointer].deskripsi
    let gambar = data_events[pointer].gambar

    document.getElementById('judul').innerHTML = judul
    document.getElementById('deskripsi').innerHTML = deskripsi
    document.getElementById('gambar').src = gambar
}

chevron_right.addEventListener("click", function() {
    if (pointer === data_events.length-1) {
        pointer = 0
    } else {
        pointer += 1
    }
    // console.log(pointer)
    change_event(pointer)
    
})

chevron_left.addEventListener("click", function() {
    // if (pointer > 0 && pointer < data_events.length){
    if (pointer === 0){
        pointer = data_events.length-1
    } else {
        pointer -= 1
    }
    // console.log(pointer)
    change_event(pointer)
})