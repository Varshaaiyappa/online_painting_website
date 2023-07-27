//homepage
function redirect()
{
    window.location.href = "login.php";
    alert="please register "
}
function redirect1()
{
    window.location.href = "question.html";

}
function redirect2()
{
    window.location.href = "login.php";

}
function redirect3()
{
    window.location.href = "admin-login.php";

}

//notificationtoast
function launch_toast() {
  var x = document.getElementById("toast");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
}
//modal
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//product page
// let userBox = document.querySelector('.user-box1');

// document.querySelector('#user-btn2').onclick = () =>{
//    userBox.classList.toggle('active');
//    navbar.classList.remove('active');
// }

// let navbar = document.querySelector('.navbar4');

// document.querySelector('#menu-btn2').onclick = () =>{
//    navbar.classList.toggle('active');
//    userBox.classList.remove('active');
// }

// window.onscroll = () =>{
//    userBox.classList.remove('active');
//    navbar.classList.remove('active');

//    if(window.scrollY > 60){
//       document.querySelector('.header1 .header-2').classList.add('active');
//    }else{
//       document.querySelector('.header1 .header-2').classList.remove('active');
//    }
// }
let navbar = document.querySelector('.header .navbar');
let accountbox= document.querySelector('.header .user-box');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   accountbox.classList.remove('active');
}

document.querySelector('#user-btn').onclick = () =>{
   accountbox.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   accountbox.classList.remove('active');
}
jQuery(document).ready(function ($) {
	var feedbackSlider = $(".feedback-slider");
	feedbackSlider.owlCarousel({
		items: 1,
		nav: true,
		dots: true,
		autoplay: true,
		loop: true,
		mouseDrag: true,
		touchDrag: true,
		navText: [
			"<i class='fa fa-long-arrow-left'></i>",
			"<i class='fa fa-long-arrow-right'></i>"
		],
		responsive: {
			// breakpoint from 767 up
			767: {
				nav: true,
				dots: false
			}
		}
	});

	feedbackSlider.on("translate.owl.carousel", function () {
		$(".feedback-slider-item h3")
			.removeClass("animated fadeIn")
			.css("opacity", "0");
		$(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating")
			.removeClass("animated zoomIn")
			.css("opacity", "0");
	});

	feedbackSlider.on("translated.owl.carousel", function () {
		$(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
		$(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating")
			.addClass("animated zoomIn")
			.css("opacity", "1");
	});
	feedbackSlider.on("changed.owl.carousel", function (property) {
		var current = property.item.index;
		var prevThumb = $(property.target)
			.find(".owl-item")
			.eq(current)
			.prev()
			.find("img")
			.attr("src");
		var nextThumb = $(property.target)
			.find(".owl-item")
			.eq(current)
			.next()
			.find("img")
			.attr("src");
		var prevRating = $(property.target)
			.find(".owl-item")
			.eq(current)
			.prev()
			.find("span")
			.attr("data-rating");
		var nextRating = $(property.target)
			.find(".owl-item")
			.eq(current)
			.next()
			.find("span")
			.attr("data-rating");
		$(".thumb-prev").find("img").attr("src", prevThumb);
		$(".thumb-next").find("img").attr("src", nextThumb);
		$(".thumb-prev")
			.find("span")
			.next()
			.html(prevRating + '<i class="fa fa-star"></i>');
		$(".thumb-next")
			.find("span")
			.next()
			.html(nextRating + '<i class="fa fa-star"></i>');
	});
	$(".thumb-next").on("click", function () {
		feedbackSlider.trigger("next.owl.carousel", [300]);
		return false;
	});
	$(".thumb-prev").on("click", function () {
		feedbackSlider.trigger("prev.owl.carousel", [300]);
		return false;
	});
}); //end ready
