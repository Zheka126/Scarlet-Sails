var musbtn = document.querySelector('.music-button');
var rezbtn = document.querySelector('.rezumat');
var mus = document.querySelector('.firstAudio');
var modal = document.querySelector('.zatemnenie');
var close = document.querySelector('.close');

musbtn.onclick = function () {
  mus.play();
};

rezbtn.addEventListener("click", function (evt) {
  evt.preventDefault();
  modal.classList.add("modal-show");
});

close.addEventListener("click", function (evt) {
  evt.preventDefault();
  modal.classList.remove("modal-show");
});

modal.addEventListener("click", function (evt) {
  evt.preventDefault();
  modal.classList.remove("modal-show");
});

window.addEventListener("keydown", function (evt) {
  if (evt.keyCode === 27) {
    evt.preventDefault();

    if (modal.classList.contains("modal-show")) {
      modal.classList.remove("modal-show");
    }
  }
});