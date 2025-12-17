import "./bootstrap";

function toggleMenu() {
    const menu = document.querySelector(".menu");
    menu.classList.toggle("show");
}



function carrosselClientes() {

    $('.main-home__clientes-container').slick({
        dots: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        speed: 200,
        autoplaySpeed: 2000,
        arrows: false,
        responsive: [
            {
              breakpoint: 991, 
              settings: {
                slidesToShow: 3
              }
            },
            {
                breakpoint: 900, 
                settings: {
                  slidesToShow: 2
                }
              },
              {
                breakpoint: 600, 
                settings: {
                  slidesToShow: 1
                }
              },
          ]
    });

}

function carrosselCases() {

    $('.main-home__cases-carrossel').slick({
        dots: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        speed: 200,
        autoplaySpeed: 200000,
        arrows: true,
        nextArrow: '<button class="main-home__cases-btn next"><svg xmlns="http://www.w3.org/2000/svg" width="41" height="28" viewBox="0 0 41 28" fill="none"><path d="M39.5 14H1.5M39.5 14L26.8333 1.33334M39.5 14L26.8333 26.6667" stroke="#D30094" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
        prevArrow: '<button class="main-home__cases-btn prev" ><svg xmlns="http://www.w3.org/2000/svg" width="41" height="28" viewBox="0 0 41 28" fill="none"><path d="M1.5 14H39.5M1.5 14L14.1667 1.33334M1.5 14L14.1667 26.6667" stroke="#D30094" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
        responsive: [
            {
              breakpoint: 991, 
              settings: {
                arrows: false
              }
            },
           
          ]
    });

}

function aparecerCard() {
  const paths = document.querySelectorAll('.main-home__metodologia-content svg path[class]');
  const cards = document.querySelectorAll('.metodologia-card');
  const ellipses = document.querySelectorAll('.main-home__metodologia-content svg ellipse[class]'); // Seleciona os ellipses com classes


  function showCard(className) {
    const card = document.querySelector(`.metodologia-card.${className}`);
    if (card) {
      card.style.display = 'flex';
    }
  }

  function hideCard(className) {
    const card = document.querySelector(`.metodologia-card.${className}`);
    if (card) {
      card.style.display = 'none';
    }
  }

 
  paths.forEach((path) => {
    path.addEventListener('mouseenter', () => {
      const className = path.getAttribute('class');
      showCard(className);
    });

    path.addEventListener('mouseleave', () => {
      const className = path.getAttribute('class');
      hideCard(className);
    });
  });


  ellipses.forEach((ellipse) => {
    ellipse.addEventListener('mouseenter', () => {
      const className = ellipse.getAttribute('class');
      showCard(className);
    });

    ellipse.addEventListener('mouseleave', () => {
      const className = ellipse.getAttribute('class');
      hideCard(className);
    });
  });
}

// function popupContact(){
//   const buttonPopup = document.querySelector(".popup_contact");
//   const popup = document.querySelector(".main-home__popup");
//   const closePopup = document.querySelector("#btn-close");
//   buttonPopup.addEventListener("click", () => {
//     popup.classList.toggle("active");
//     window.scrollTo({
//       top: 0, 
//       behavior: 'smooth' 
//     });
    
//   });
//   closePopup.addEventListener("click", () => {
//     popup.classList.toggle("active");
//   });
// }

function popupContact() {
  const buttonsPopup = document.querySelectorAll(".popup_contact");
  const popup = document.querySelector(".main-home__popup");
  const closePopup = document.querySelector("#btn-close");

  if (!popup) return; // segurança

  buttonsPopup.forEach(buttonPopup => {
    buttonPopup.addEventListener("click", () => {
      popup.classList.toggle("active");
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  });

  if (closePopup) {
    closePopup.addEventListener("click", () => {
      popup.classList.toggle("active");
    });
  }
}



function encolherDescricao(){
  const container = document.querySelectorAll('.main-home__faq-container ul li');
  container.forEach((descricao) => {
    const title = descricao.querySelector('div');
    title.addEventListener('click', () => {
      descricao.querySelector('p').classList.toggle('encolher');
    });
  });
}



if (!sessionStorage.getItem("reloaded")) {
    sessionStorage.setItem("reloaded", "true");
    // location.reload();  // ❌ REMOVIDO
}

document.addEventListener("DOMContentLoaded", function () {
  const video = document.querySelector(".video");

  if (!video) return; // segurança

  if ("IntersectionObserver" in window) {
      let observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
              if (entry.isIntersecting) {
                  video.setAttribute("src", video.dataset.src);
                  observer.disconnect();
              }
          });
      });
      observer.observe(video);
  }
});








carrosselClientes();
carrosselCases();
popupContact();
encolherDescricao();

if (window.innerWidth > 991) {
  aparecerCard();
}

