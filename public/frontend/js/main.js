const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation1");

menuBtn.addEventListener("click", () => {
  menuBtn.classList.toggle("active");
  navigation.classList.toggle("active");
});

// animation window scroll
const header = document.querySelector('.header');

document.addEventListener('scroll',()=>{
  var scroll_position = window.scrollY;
  if(scroll_position > 10) {
      header.style.backgroundColor = '#f5f5f7';
      header.style.borderBottom = '#A2904E 2px solid'
      // header.style.fontColor = '#A2904E';
  } else {
      header.style.backgroundColor = 'transparent';
      header.style.borderBottom = 'none';
  }
});








// on Scroll animation

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);




