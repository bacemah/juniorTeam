const tabsContainer = document.querySelector(".categories__tab-container");
const tabsContent = document.querySelectorAll(".categories__content");
const tabs = document.querySelectorAll(".categories__tab");
const sections = document.querySelectorAll(".section");
const header = document.querySelector(".header");
const buttons1 = document.querySelectorAll(".btn1");
const test = document.querySelectorAll("div.category-btn");
const navBar = document.querySelector(".navigator");
const headerTitle = document.querySelector(".header__title");
const heartBtn = document.querySelector(".heart-btn");
const heartModal = document.querySelector(".heart-modal");
const overlay = document.querySelector(".overlay");
const modalCart = document.querySelector(".modal-cart");
const btnCloseModal = document.querySelector(".btn--close-modal");
const btnsOpenModal = document.querySelector(".btn--show-modal");
const qteForm = document.querySelector(".form-control");
const plusBtn = document.querySelector(".plusBtn");
const minusBtn = document.querySelector(".minusBtn");
let currentTab = 0;
const maxTab = tabs.length;
navBar.addEventListener("mouseover", function (e) {
  if (e.target.classList.contains("nav_link")) {
    const link = e.target;
    const sibling = link.closest(".navigator").querySelectorAll(".nav_link");
    const logo = link.closest(".navigator").querySelector("img");
    sibling.forEach((el) => {
      if (el != link) el.style.opacity = 0.5;
    });
    logo.style.opacity = 0.5;
  }
});
navBar.addEventListener("mouseout", function (e) {
  if (e.target.classList.contains("nav_link")) {
    const link = e.target;
    const sibling = link.closest(".navigator").querySelectorAll(".nav_link");
    const logo = link.closest(".navigator").querySelector(".logo");
    sibling.forEach((el) => {
      if (el != link) el.style.opacity = 1;
    });
    logo.style.opacity = 1;
  }
});
const navObs = function (entries) {
  const [entry] = entries;
  if (!entry.isIntersecting) {
    navBar.classList.add("sticky");
    navBar.style.height = "5rem";
    navBar.addEventListener("mouseover", () => (navBar.style.height = "8rem"));
    navBar.addEventListener("mouseout", () => (navBar.style.height = "5rem"));
  } else navBar.classList.remove("sticky");
};
const navObserver = new IntersectionObserver(navObs, {
  root: null,
  threshold: 0.15,
  rootMargin: "17%",
});
navObserver.observe(header);
const switchTab = function (nextTab) {
  tabs.forEach((t) => t.classList.remove("categories__tab--active"));
  tabsContent.forEach((c) => c.classList.remove("categories__content--active"));
  tabs[nextTab].classList.add("categories__tab--active");
  tabsContent[nextTab].classList.add("categories__content--active");
  AOS.refresh();
};
tabsContainer.addEventListener("click", function (e) {
  const clicked = e.target.closest(".categories__tab");
  if (!clicked) return;
  currentTab = Array.from(tabs).indexOf(clicked);
  switchTab(currentTab);
});
const tabInterval = setInterval(() => {
  currentTab = (currentTab + 1) % maxTab;
  switchTab(currentTab);
}, 6000);
tabsContainer.addEventListener("click", () => clearInterval(tabInterval));
const sectionObs = function (entries, observer) {
  const [entry] = entries;
  if (!entry.isIntersecting) return;
  /*if (entry.target.id === "section--3"){
    entry.target.classList.remove("section--hidden");

  }*/
  entry.target.classList.remove("section--hidden");
  console.log(entry.childNodes);
  observer.unobserve(entry.target);
};
sectionObs(sections);
const sectionObserver = new IntersectionObserver(sectionObs, {
  root: null,
  threshold: 0.15,
});
sections.forEach(function (section) {
  sectionObserver.observe(section);
  section.classList.add("section--hidden");
});
const btnObs = function (entries) {
  const [entry] = entries;
  if (!entry.isIntersecting) {
    //entry.target.classList?.remove("position-sticky");
    return;
  }
  console.log(entry);
  entry.target.classList.add("position-sticky");
};
btnObs(buttons1);
const buttonObserver = new IntersectionObserver(btnObs, {
  root: null,
  threshold: 0.5,
  rootMargin: "50%",
});
test.forEach(function (btn) {
  buttonObserver.observe(btn);
});
let currentBg = 0;
const nextBg = function () {
  headerTitle.style.backgroundImage = `url('img/header${currentBg + 1}.png')`;
  currentBg++;
};
const changeTiming = setInterval(function () {
  if (currentBg === 3) currentBg = 0;
  nextBg();
}, 5500);
const modalDisplay = function (e) {
  e.preventDefault();
  heartModal.classList.remove("hidden");
};
const modalClose = function (e) {
  e.preventDefault();
  heartModal.classList.add("hidden");
};
heartBtn.addEventListener("click", modalDisplay);
heartBtn.addEventListener("click", modalClose);
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && !heartModal.classList.contains("hidden")) {
    modalClose();
  }
});
const addElt = function () {
  let html = ` <li class="heart-modal" data-id=$id>
  <img class ="imgheart" src="img/Casual-outfit.jpg" width="60px">
  
  <div class="eltDetails">
     <h2>$eltdescription</h2>
     <div class="heart-details">
     <a href="#">details</a>  
     <i
  class="fa-solid fa-heart fa-2xl nav_link heart-btn"
  style="color: red"
></i
>
     </div>
  </div>
  </li>`;
  heartModal.insertAdjacentHtml("afterbegin", html);
};
const openModal = function (e) {
  e.preventDefault();
  modalCart.classList.remove("hidden");
  overlay.classList.remove("hidden");
};

const closeModal = function () {
  modalCart.classList.add("hidden");
  overlay.classList.add("hidden");
};
btnsOpenModal.addEventListener("click", openModal);
btnCloseModal.addEventListener("click", closeModal);
overlay.addEventListener("click", closeModal);

document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && !modalCart.classList.contains("hidden")) {
    closeModal();
  }
});
let qte = 1;
plusBtn.addEventListener("click", function () {
  qte++;
  qteForm.value = `${qte}`;
});
minusBtn.addEventListener("click", function () {
  if (qte > 1) {
    qte--;
    qteForm.value = `${qte}`;
  }
});
