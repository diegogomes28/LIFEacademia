const swiper = new Swiper(".swiper", {
  direction: "horizontal",
  loop: true,

  pagination: {
    el: ".swiper-pagination",
    clickable: true, // Permite clicar nos pontos de paginação para navegar
  },
  autoplay: {
    delay: 2000,
  },
});
