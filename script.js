const tabsContainer = document.querySelector(".categories__tab-container");
const tabsContent = document.querySelectorAll(".categories__content");
const tabs = document.querySelectorAll(".categories__tab");
const sections = document.querySelectorAll(".section");
const header = document.querySelector(".header");
const buttons1 = document.querySelectorAll(".btn1");
const test = document.querySelectorAll("div.category-btn");
let currentTab = 0;
const maxTab = tabs.length;

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
  entry.target.classList.remove("section--hidden");
  observer.unobserve(entry.target);
};
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
  threshold: 0.3,
});
test.forEach(function (btn) {
  buttonObserver.observe(btn);
});
