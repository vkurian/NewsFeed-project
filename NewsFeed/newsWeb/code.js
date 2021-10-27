'let newsAPI= add you API here'
let testImage="logo.jpg";

let app = document.querySelector(".app"); 
let screen ={
    main:app.querySelector(".main-screen"),
    news:app.querySelector(".news-screen")
};

let catagories=["General","Business","Technology","Entertainment","Health","Science","Sports"];

for(let i=0;i<catagories.length;i++){
    let div = document.createElement("div");
    div.innerText = catagories[i];
    div.addEventListener("click",function(){
        screen.main.querySelector(".catagories .active").classList.remove("active");
        div.classList.add("active");
        fetchCatagoryNews(catagories[i]);
    });
    if( i == 0){
        div.classList.add("active");
        fetchCatagoryNews(catagories[i]);
    }
    screen.main.querySelector(".catagories").appendChild(div);
}

async function fetchCatagoryNews(catagory){
    screen.main.querySelector(".news-list").innerHTML ="";
    try{
        let res = await fetch(newsAPI + catagory.toLowerCase());
        let data = await res.json();
        let news = data.data;

        for(let i = 0;i<news.length;i++){
            let div = document.createElement("div");
            div.classList.add("item");
            div.addEventListener("click",function(){
                showFullNews(news[i]);
            });
            div.innerHTML= `
            <div class="thumbnail">
            <img src="${news[i].image || testImage}">
            </div> 
            <div class="details">
            <h2>${news[i].title}</h2>
            <p>${news[i].description}</p>
            </div> 
            `;
            screen.main.querySelector(".news-list").appendChild(div);
            }
        }
    catch(msg){}
}
function showFullNews(news){
    screen.main.classList.add("hidden");
    screen.news.classList.remove("hidden");

    screen.news.querySelector(".header .title").innerText=news.title;
    screen.news.querySelector(".header .back-btn").addEventListener("click",function(){
        screen.news.classList.add("hidden");
        scree.main.classList.remove("hidden");
    });

    screen.news.querySelector("#news-frame").src = news.url;

}