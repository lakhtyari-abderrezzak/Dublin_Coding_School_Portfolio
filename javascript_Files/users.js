let table = document.querySelector(".table");

console.log(table);

// Creat an Array with Source of the Images 

let imagesArr = [
    "data_table.jpg",
    "data-table1.jpg",
    "data-table2.jpg"
]

setInterval(()=>{

    let randomNum = Math.floor(Math.random()* imagesArr.length);

    table.style.backgroundImage = `url(./images/${imagesArr[randomNum]})`;

console.log("working");

},6000)