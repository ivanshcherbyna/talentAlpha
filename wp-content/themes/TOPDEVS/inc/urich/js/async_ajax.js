// Method for generate list for AJAX Handler on FrontEnd
jQuery(document).ready(function ($) {
    if ($('.all-numbers-posts').length) {
        var string_post_ids = $('.all-numbers-posts').val(); // Get all list posts by string
        // console.log(string_post_ids); //for debug
        var array_post_ids = string_post_ids.split(',');     //parse string to array
        //console.log(array_post_ids); //for debug
        Object.defineProperty(Array.prototype, 'chunk_inefficient', {
            value: function (chunkSize) {
                var array = this;
                return [].concat.apply([],
                    array.map(function (elem, i) {
                        return i % chunkSize ? [] : [array.slice(i, i + chunkSize)];
                    })
                );
            }
        }); //method for generate correct chunks
        converted_array = array_post_ids.chunk_inefficient(6); //split to 3 chunks array of pages
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
            // aChildElement.setAttribute('class', 'latest_works-pagination-num-list-item-link');         //setting classes for a elements
            aChildElement.className += " "+ "latest_works-pagination-num-list-item-link";         //setting classes for a elements
            aChildElement.setAttribute('href', '#');
            liElement.setAttribute('class','latest_works-pagination-num-list-item');
            liElement.appendChild(aChildElement);            //create <li><a></li>
            $('ul.latest_works-pagination-num-list').append(liElement);           //create list in <ul><li><a></li></li></ul>
        })
    }
})
//CALL UPDATE POST VIEW BY CLICK ON NUMBER
jQuery(document).ready(function ($) { // get arguments & call ajax method
    $('.latest_works-pagination-num-list-item-link').on('click', function (e) {
        e.preventDefault();
        $('.active-num').attr('class','latest_works-pagination-num-list-item-link');                  //set active class for current elements
        $(this).attr('class','latest_works-pagination-num-list-item-link active-num');

        var array_post_ids=$(this).attr('data');
        //    console.log(array_post_ids);          //for debug
        var currentNum = array_post_ids;
        // var url = $('.all-numbers-posts').attr('data');
        var url = $('.all-numbers-posts').attr('data');
        if(currentNum!==null && url!==null) {
            $('.latest_works-content.portfolio').animate({opacity: "0.2" }, 100, "linear");
            updateSlug(currentNum, url);                            //call AJAX method
        }
        else {
            console.log('Sorry... empty values!');
            return false;
        }
    })

});
//AJAX GET BY JQUERY
function updateSlug(currentNum, url) { // AJAX METHOD

    $.get(url + '?number_pagination=' + currentNum) // send request

        .done(function(data){
            // $(window).attr('location', url + '?number_pagination=' + currentNum); // reload all page with arguments
            var $data = $(data); // STRING CONVERT TO OBJECT for use to get new element
            //window.history.pushState('','',this.url); //generate new URL in widow browser
            //data - is string at first
            //$data - is object now to use
            $(document).find('.latest_works-content.portfolio').html($data.find('.latest_works-content.portfolio').html()).animate({opacity: "1" }, 100, "linear", function () {

            });

        }); // Appened new html from object .find().html intop old div

}

//Lef-right pagination
jQuery(document).ready(function($){
    $('#right-pagination, #left-pagination').css('cursor','pointer');

    $('#right-pagination').on('click',function (){
        var activeElement = $('.active-num');
        var tempPrev = activeElement.parent().next();
        tempPrev = tempPrev.find('.latest_works-pagination-num-list-item-link');
        $('.active-num').removeClass('.active-num');
        tempPrev.addClass('.active-num');
        tempPrev.click();


    });
    $('#left-pagination').on('click',function (){
        var activeElement = $('.active-num');
        var tempNext = activeElement.parent().prev();
        tempNext = tempNext.find('.latest_works-pagination-num-list-item-link');
        $('.active-num').removeClass('.active-num');
        tempNext.addClass('.active-num');
        tempNext.click();

    });
})
