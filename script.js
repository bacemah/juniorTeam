let scrollContainer=document.querySelectorAll(".gallery");
    
let prev=document.getElementById("prev");
let next=document.getElementById("next");
for (let i=0;i<scrollContainer.length;i++) {
scrollContainer[i].addEventListener("wheel",(evt)=>{
    evt.preventDefault();
    scrollContainer.scrollLeft+=evt.deltaY;

})};
for (let i=0;i<scrollContainer.length;i++) {
next.addEventListener("click",()=>{
    scrollContainer[i].scrollLeft+=1500;
    scrollContainer[i].style.scrollBehavior="smooth";
})};
for (let i=0;i<scrollContainer.length;i++) {
prev.addEventListener("click",()=>{
    scrollContainer[i].scrollLeft-=1500;
    scrollContainer[i].style.scrollBehavior="smooth";
})};
/*
let casual=document.getElementById("casual");

casual.addEventListener("click", function() {
    window.open('/main.html','_self');
});
let vintage=document.getElementById("vintage");

vintage.addEventListener("click", function() {
    window.open('/vin.html','_self');
});
let s90=document.getElementById("90's");

s90.addEventListener("click", function() {
    window.open('/ed.html','_self');
});
*/