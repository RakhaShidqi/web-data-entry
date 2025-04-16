const btnAlert = document.querySelector("#btnAlert");

const btnAdd = document.querySelector("#btnAdd");
const actionAddBox = document.querySelector("#actionAddBox");

btnAlert.addEventListener("click", e => alert("This is Alert"));

btnAdd.addEventListener("click", e => {
    actionAddBox.classList.toggle("active");
});

// Nav Tabs
tabCust.addEventListener("click", e => {
    sectionCust.classList.toggle("active");
});
tabSubs.addEventListener("click", e => sectionCust.classList.toggle("active"));

console.log(navbar);
