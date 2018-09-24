//textarea


var textarea = document.getElementById("request_for_proposal-content-form-item-description");
if(textarea){
	textarea.value = 'I need a project… \n_ _ _ _ _ _ _ _ _ _\nName:\nE-mail:\nPhone:\nPosition:\nCompany:';
	// textarea.style.color = '#9b9b9b';
};


//map

function initMap() {
	var map;
	var myLatlng = (screen.width >= 600) ? new google.maps.LatLng(47.839015, 35.103589) : new google.maps.LatLng(47.839065, 35.101615);
	var zoom = (screen.width >= 600) ? 17 : 15;

	mapOptions = {
		center: myLatlng,
		zoom: zoom,
		scrollwheel: false,
	};
	map = new google.maps.Map(document.getElementById('map'), mapOptions);
	var image = 'img/onmap-icon.svg';

	var marker = new google.maps.Marker({
		position: {
			lat: 47.839065,
			lng: 35.101615
		},
		map: map,
		optimized: false,
		icon: image
	});
	marker.setMap(map);
};



// tabs


$( document ).ready(function() {
	
	$('.latest_works-tabs a').click(function(){

	    $(".latest_works-tabs a").removeClass("active-tab"); 
	    $(this).addClass("active-tab"); 
		var filter = $(this).attr('data-filter');
		filterList(filter);
		
		//News filter function
		function filterList(value) {
			var list = $(".latest_works-content .latest_works-content-item");
			$(list).fadeOut("fast");
			if (value == "All") {
				$(".latest_works-content").find("a").each(function (i) {
					$(this).delay(200).slideDown("fast");
				});
			} else {
				$(".latest_works-content").find("a[data-category*=" + value + "]").each(function (i) {
					$(this).delay(200).slideDown("fast");
				});
			}
		}
		return false;
	});
	
});


// input upload

$(document).ready( function() {
    $("#upload").change(function(){
         var filename = $(this).val().replace(/.*\\/, "");
         $("#request_for_proposal-name-upload").val(filename);
    });
});

// burger-menu

document.addEventListener("DOMContentLoaded", function(){
	var button = document.getElementById("burger");
	var navList = document.querySelector(".header-list");
	button.addEventListener('click', function(){
		navList.classList.toggle("active_burger")
	});
});

