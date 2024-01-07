//Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener("click", function (e) {
		e.preventDefault();

		document.querySelector(this.getAttribute("href")).scrollIntoView({
			behavior: "smooth",
		});
	});
});

///////Product Pages
$("#productTabs").tabs({
	active: 0,
});

//Product Pages - Product images
function product(num) {
	$("#productTabs").tabs("option", "active", num);
}
//Product Pages - Benifits and consideration
$(".productAccordion").accordion({
	header: "h3",
	collapsible: true,
	active: true,
	icons: {header: "ui-icon-plus", activeHeader: "ui-icon-minus"},
	heightStyle: "content",
});

//General Product Information Accordion - Headings
$("#generalProductInfo").accordion({
	collapsible: true,
	active: 1,
	heightStyle: "content",
});

//General Product Information Accordion - How to Apply - Exisiting and New Customers
$("#customerRel").accordion({
	collapsible: true,
	active: false,
	heightStyle: "content",
});

//Footer Site Links
$(".accordionNav").accordion({
	header: "h3",
	collapsible: true,
	active: false,
	heightStyle: "content",
});
