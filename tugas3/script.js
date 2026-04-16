fetch("https://www.themealdb.com/api/json/v1/1/categories.php")
.then(response => response.json())
.then(data => {
    console.log(data);
    console.log(data.categories)

    data.categories.forEach(element => {
        document.getElementById("categories").innerHTML+= `
        
        <div class="col-lg-6 col-md-6 col-sm-12">
        <hr> 
        <h5 class="text-primary text-start">${element.idCategory}</h5>
        <br> 
        <img class="img-fluid rounded-5" onclick="listAllMeal('${element.strCategory}')" data-bs-toggle="modal" data-bs-target="#exampleModal" src="${element.strCategoryThumb}" alt=""> 
        <br>
        <br>
        <h5 class="text-primary">${element.strCategory}</h5>
        <br>
        <p class="flex-column" style="text-align: justify;">${element.strCategoryDescription} </p>
        
        </div>
        `
    });
})                                        
function listAllMeal(category){
    fetch("https://www.themealdb.com/api/json/v1/1/search.php?s="+category)
    .then(Response=>Response.json())
    .then(data=>{
        console.log(data.meals)
        document.getElementById("list-all-meal").innerHTML+=""

        data.meals.forEach(element=>{
            document.getElementById("list-all-meal").innerHTML+=`
            ${element.strMeal}<hr>`
        });
    })

}