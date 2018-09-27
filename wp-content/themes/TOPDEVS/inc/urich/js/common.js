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
/*---------------PAGINATION FOR LATEST WORK-------------------------*/
//Temp arrays for use pagination
//Temp array of current filter
var tempArrayLatestWorks=[];
//TempAll array of all pagination elements
var tempAllArrayLatestWorks=jQuery(".latest_works-content").find("a");
if(tempArrayLatestWorks!=[]){tempArrayLatestWorks = tempAllArrayLatestWorks;}

// tabs
//var tempArrayLatestWorks =[];
//filter (All projects, Web, Mobile)
function filterList(value) {
	jQuery(document).ready(function ($) {

        var list = $(".latest_works-content .latest_works-content-item");
        var list_active;
        $(list).fadeOut("fast");
        if (value == "All") {
            $(".latest_works-content").find("a").each(function (i) {
                if (i >= 6) {
                    $(this).hide();
                }
                else {
                    $(this).delay(200).slideDown("fast");
                }
            });
            list_active =$(".latest_works-content").find("a");
        } else {
        	$(".latest_works-content").find("a[data-category*=" + value + "]").each(function (i) {
                if (i >= 6) {
                	$(this).hide();
                }
                else {
                	$(this).delay(200).slideDown("fast");
                }
            });
            list_active = $(".latest_works-content").find("a[data-category*=" + value + "]");
        }

        tempArrayLatestWorks=[];
	$.each(list_active, function (key, value) {
        tempArrayLatestWorks.push(value);
   		 });
        genetateListOfNumpaginationNew(tempArrayLatestWorks)
    })
}
//call at start filter
filterList('All');
//generate DOM elements of pagination list
function genetateListOfNumpaginationNew(arr) {
    jQuery(document).ready(function ($) {
        $('.latest_works-pagination-num-list').empty('li');
        if (arr.length) {
            var array_post_ids = Object.keys(arr);     //parse string to array
                console.log(array_post_ids); //for debug
            //method for generate correct chunks
            Array.prototype.chunk = function (n) {
                if (!this.length) {
                    return [];
                }
                return [this.slice(0, n)].concat(this.slice(n).chunk(n));
            };
            var converted_array = array_post_ids.chunk(6);
            converted_array.forEach(function (item, i, converted_array) {
                ++i;
                var liElement = document.createElement('li');    //generate Li element
                var aChildElement = document.createElement('a'); // generate A element
                if (i == 1) {
                    aChildElement.className = 'active-num';
                }   //set active
                aChildElement.innerHTML = i;                       //set Number of pagination on Front-End
                var attr = item.toString();                        //parse Array to string of numbers
                aChildElement.setAttribute('data', attr);         //setting numbers for response by AJAX
                aChildElement.className += " " + "latest_works-pagination-num-list-item-link";         //setting classes for a elements
                aChildElement.setAttribute('href', '#');
                aChildElement.setAttribute('id', 'link-id-'+i);
                liElement.setAttribute('class', 'latest_works-pagination-num-list-item');
                liElement.appendChild(aChildElement);            //create <li><a></li>
                $('ul.latest_works-pagination-num-list').append(liElement);           //create list in <ul><li><a></li></li></ul>
            })
        }
    })
}
//call at start generate list
genetateListOfNumpaginationNew(tempAllArrayLatestWorks);
// tabs
jQuery( document ).ready(function() {

	$('.latest_works-tabs a').click(function(){

	    $(".latest_works-tabs a").removeClass("active-tab");
	    $(this).addClass("active-tab");
		var filter = $(this).attr('data-filter');

		filterList(filter);


        return false;
    });
});
//Lef-right pagination
jQuery(document).ready(function ($) {
    $('#right-pagination, #left-pagination').css('cursor', 'pointer');

    $('#right-pagination').on('click', function () {
        var activeElement = $('.active-num');
        var tempPrev = activeElement.parent().next();
        tempPrev = tempPrev.find('.latest_works-pagination-num-list-item-link');
        $('.active-num').removeClass('.active-num');
        tempPrev.addClass('.active-num');
        tempPrev.click();

    });
    $('#left-pagination').on('click', function () {
        var activeElement = $('.active-num');
        var tempNext = activeElement.parent().prev();
        tempNext = tempNext.find('.latest_works-pagination-num-list-item-link');
        $('.active-num').removeClass('.active-num');
        tempNext.addClass('.active-num');
        tempNext.click();

    });
})
/*--------------------________________________------------------------*/

// input upload

jQuery(document).ready( function() {
    $("#upload").change(function(){
         var filename = $(this).val().replace(/.*\\/, "");
         $("#request_for_proposal-name-upload").val(filename);
    });
});
//newCALL UPDATE POST VIEW BY CLICK ON NUMBER
jQuery(document).ready(function ($) { // get arguments & call ajax method
    $('.latest_works ').on('click', '.latest_works-pagination-num-list-item-link', function (e) {
        e.preventDefault();
        //change active class
        $('.active-num').attr('class', 'latest_works-pagination-num-list-item-link');                  //set active class for current elements
        $(this).attr('class', 'latest_works-pagination-num-list-item-link active-num');
        //hide posts
        $(".latest_works-content a").hide();
        data = this.getAttribute('data');
        dataArr = data.split(',');
        //call posts by each cicle when keys elements == values in temp marray
        $.each(dataArr,function (key, val)  {
            var element = $('#works-content').find(tempArrayLatestWorks[val]);
            element.show();
        })
    })
});

// burger-menu

document.addEventListener("DOMContentLoaded", function(){
	var button = document.getElementById("burger");
	var navList = document.querySelector(".header-list");
	button.addEventListener('click', function(){
		navList.classList.toggle("active_burger")
	});
});

