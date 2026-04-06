// output console
console.log("Pesan ini tampil di console browser")

// output
// alert("selamat datang")

// output innerHTML
document.getElementById("nama").innerHTML="Nama saya Michael"

// variabel
let pesan = "Belajar Javascript menyenangkan"
document.getElementById("pesan").innerHTML=pesan

// array
let kompetensi =["Fullstack", "Project Manager", "UI/UX"]
// document.getElementById("kompetensi").innerHTML=kompetensi[2]

// perulangan
kompetensi.forEach(element => {
    // cara pertama
    // document.getElementById("kompetensi").innerHTML+=`<li>${element}</li>`
    // cara kedua
    document.getElementById("kompetensi").innerHTML += "<li>"+element+"</li>"
});