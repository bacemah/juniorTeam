const tabsContainer = document.querySelector(".categories__tab-container");
const tabsContent = document.querySelectorAll(".categories__content");
const tabs = document.querySelectorAll(".categories__tab");
const sections = document.querySelectorAll(".section");
const header = document.querySelector(".header");
const buttons1 = document.querySelectorAll(".btn1");
const test = document.querySelectorAll("div.category-btn");
const navBar = document.querySelector(".navigator");
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
  if (!entry.isIntersecting) navBar.classList.add("sticky");
  else navBar.classList.remove("sticky");
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
