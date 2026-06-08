let a = "5"
let b = 2

console.log(a+b)//52
a=9
console.log(a+b)//11

var c = 8
var d = 3
console.log(c+d)
var d = 9

let e = 11
function apakahganjil(e){
    if(e%2 == 0){
        console.log("Genap")
    } else{
        console.log("ganjil")
    }
}
console.log(apakahganjil(e))

const coba = 1
coba = 2````

console.log(coba)
// fetch("https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.json")
// .then(response=>response.json())
// .then(data=>{
//     data.Infogempa.gempa.forEach(itemGempa=>{
//         document.getElementById("info-gempa").innerHTML+=
//         `
//         <div class="col-lg-6">
//         <hr>
//         ${itemGempa.Tanggal}
//         <br>
//         ${itemGempa.Wilayah}
//         <br>
//         </div>
//         `
//     })
// })


fetch("https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.json")
.then(response=>response.json())
.then(data=>{
    data.Infogempa.gempa.forEach(itemGempa=>{
        document.getElementById("info-gempa").innerHTML+=
        `
        <div class="col-lg-6">
        <hr>
        ${itemGempa.Tanggal}
        <br>
        ${itemGempa.Wilayah}
        <br>
        </div>
        
        `
    })
})