//Mobile Menu
const hamMenu = document.getElementById("hamburgerContainer");
const navMenu = document.getElementById("navMenu");

hamMenu.addEventListener("click", () => {
	hamMenu.classList.toggle("active");
	navMenu.classList.toggle("active");
});

//Search Bar - Header - Navigation Panel
var searchBtn = document.querySelector(".searchButton");
searchBtn.click(function () {
	$(".searchBox").toggleClass("active");
	var searchActive = document.querySelector(".searchBox").classList.contains("active");
	if (searchActive) {
		searchBtn.innerHTML = '<img src="assets/cross.png" alt="Close Search" role="button">';
	} else {
		searchBtn.innerHTML = '<img src="assets/search.png" alt="Search" role="button">';
	}
});
