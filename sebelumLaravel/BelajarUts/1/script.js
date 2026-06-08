fetch("https://restcountries.com/v3.1/all?fields=name,capital,currencies")
.then(Response=>Response.json())
.then(data=>{
    console.log(data)
    data.forEach(element => {
        document.getElementById("tes").innerHTML += `
        <div class="col-lg-6">
        <hr>
        <p>${element.name.common}</p>
        <p>${Object.values(element.currencies)[0].name}</p>
        <p>${element.capital}</p>
        </div>
        `
    });
})