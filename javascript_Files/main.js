// toggle menu

let icon = document.querySelector(".icon");
let bars = document.querySelector(".fa-solid");
let nav = document.querySelector(".nav");

icon.onclick = () => {
  nav.classList.toggle("active");

  if (nav.classList.contains("active")) {
    bars.className = "fa-solid fa-xmark";
  } else {
    bars.className = "fa-solid fa-bars";
  }
  window.onscroll = () => {
    nav.classList.remove("active");
  };
};

window.onscroll = () => {
  let ourSkills = document.querySelector(".our-skills");
  let spans = document.querySelectorAll(".the-progress span");
  function skills() {
    if (window.scrollY >= ourSkills.offsetTop + 0) {
      spans.forEach((span) => (span.style.width = span.dataset.width));
      console.log("reached");
    } else {
      spans.forEach((span) => (span.style.width = "0"));
    }
  }
  skills();
};

// // Changing Image And Text in The About Section

// storing images and text in an array the contains objects inside

let about = [
  {
    image: "images/camAbout.png",
    text: " Hello there! I'm Lakhtyari Abderrazzak, a frontend developer with a passion for bringing creativity and dedication into everything I do. When I'm not immersed in the world of development, you'll find me indulging in a few of my favorite hobbies:",
  },
  {
    image: "images/soccer.png",
    text: "Maintaining a healthy body and mind is crucial to my routine. I love hitting the pavement for a jog, not just for the physical benefits but also for the mental clarity it provides. It's where I brainstorm ideas and find inspiration. Join me for a jog, and we can discuss anything from project innovations to the latest football scores.",
  },
  {
    image: "images/console.png",
    text: "You can often find me navigating virtual realms in the world of online gaming. As an avid gamer, I thrive in the digital landscapes where strategy meets teamwork, and victory is the sweet reward. Gaming isn't just a hobby for me; it's a dynamic playground that enhances my problem-solving skills and fosters a sense of camaraderie.",
  },
];
// query the elements thta we need to use
let aboutText = document.querySelector(".about-text");
let aboutImage = document.querySelector(".about-img");
let leftBtn = document.querySelector(".fa-chevron-left");
let rightBtn = document.querySelector(".fa-chevron-right");
// create a variable i to use it as 

let i = 0;
leftBtn.onclick = () => {
  left();
  opacity();
};
rightBtn.onclick = () => {
  right();
  opacity();
}
function left() {
  if (i > 0) {
    i--;
    aboutText.innerText = about[i].text;
    aboutImage.src = about[i].image;
  }
}
function right() {
  if (i <= 2) {
    i++;
    aboutText.innerText = about[i].text;
    aboutImage.src = about[i].image;
  }
  
}
function opacity(){
if(i == 0){
  leftBtn.style.opacity = ".5";
}else{
  leftBtn.style.opacity = "1";
}
if(i == 2){
    rightBtn.style.opacity = ".5";
  }else{
    rightBtn.style.opacity = "1";
}
}


// Changing the background Image of the landing page
let landingPage = document.querySelector("#home");
console.log(landingPage);

let landingImgs = [
  "landing.01.jpg",
  "landing.02.jpg",
  "landing.04.jpg",
  "landing.06.jpg",
  "landing.07.jpg",
  "landing.bg.jpg",
];

setInterval(() => {
  let randomBg = Math.floor(Math.random() * landingImgs.length);

  landingPage.style.backgroundImage = `url(images/${landingImgs[randomBg]})`;
}, 5000);
