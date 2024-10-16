`use strict`;

document.addEventListener("DOMContentLoaded", function () {
  const buyBtns = document.querySelectorAll(`.bookButton`);
  const buyButtonHero = document.querySelector(`.buyButton`);
  const modalOrder = document.querySelector(`.modalContainer`);
  const modalBtnClose = document.querySelector(".modalCloseButton");
  const formModal = document.querySelector(`.modalForm`);
  const modalContainerGreen = document.querySelector(`.modalContainerSuccess`);
  const modalBtnCloseGreen = document.querySelector(
    ".modalContainerSuccess .modalCloseButton"
  );

  buyBtns.forEach((btn) => {
    btn.addEventListener(`click`, (event) => {
      modalOrder.classList.add(`isOpen`);
    });
  });

  buyButtonHero.addEventListener("click", (event) => {
    modalOrder.classList.add(`isOpen`);
  });

  if (modalBtnClose) {
    modalBtnClose.addEventListener(`click`, (event) => {
      modalOrder.classList.remove(`isOpen`);
    });
  }

  formModal.addEventListener(`submit`, (event) => {
    event.preventDefault();
    const userName = document.getElementById("modalUserName").value.trim();
    const userPhone = document.getElementById("modalUserPhone").value.trim();
    const userEmail = document.getElementById("modalUserEmail").value.trim();
    const userComment = document
      .getElementById("modalUserComment")
      .value.trim();

    if (!userName || !userPhone || !userEmail || !userComment) {
      alert("Заповніть всі поля, будь ласка.");
    } else {
      formModal.reset();
      modalOrder.classList.remove(`isOpen`);
      modalContainerGreen.classList.add(`isOpen`);
    }
  });

  modalBtnCloseGreen.addEventListener(`click`, () => {
    modalContainerGreen.classList.remove(`isOpen`);
  });

  if (!localStorage.getItem("cookiesAccepted")) {
    document.getElementById("cookieNotice").style.display = "block";
  }
  document
    .getElementById("acceptCookies")
    .addEventListener("click", function () {
      localStorage.setItem("cookiesAccepted", true);
      document.getElementById("cookieNotice").style.display = "none";
    });
});
