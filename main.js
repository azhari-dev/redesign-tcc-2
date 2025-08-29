const chevron_left = document.querySelector(".chevron.left")
const chevron_right = document.querySelector(".chevron.right")
const data_events = [
    {
        "judul": "event 1",
        "deskripsi": "deskripsi event 1"
    },
    {
        "judul": "event 2",
        "deskripsi": "deskripsi event 2"
    },
    {
        "judul": "event 3",
        "deskripsi": "deskripsi event 3"
    }
]

let pointer = 0

function change_event(pointer){
    let judul = data_events[pointer].judul
    let deskripsi = data_events[pointer].deskripsi

    document.getElementById('judul').innerHTML = judul
    document.getElementById('deskripsi').innerHTML = deskripsi
}

chevron_right.addEventListener("click", function() {
    console.log(data_events[0].judul)
    console.log(data_events[0].deskripsi)
    if (pointer === data_events.length-1) {
        pointer = 0
    } else {
        pointer += 1
    }
    // console.log(pointer)
    change_event(pointer)
    
})

chevron_left.addEventListener("click", function() {
    console.log("tai")
    // if (pointer > 0 && pointer < data_events.length){
    if (pointer === 0){
        pointer = data_events.length-1
    } else {
        pointer -= 1
    }
    // console.log(pointer)
    change_event(pointer)
})