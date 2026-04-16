console.log("hello world")

document.getElementById("nama").placeholder = "michael";

fetch("https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.json")
.then(Response=>Response.json())
.then(data=>{
    data.Infogempa.gempa.forEach(itemGempa=>{
        document.getElementById("info-gempa").innerHTML +=`
        <div class="col-lg-6">
        <hr>
        ${itemGempa.Tanggal}
        <br>
        ${itemGempa.Wilayah}
        </div>
        `
    })
    
})