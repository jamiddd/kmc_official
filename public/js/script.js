document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, {
        inDuration: 300,
        outDuration: 300
    });
});

$(document).ready(function(){
    var newsSection = $('.sticky-news');
    newsSection.addClass('weird');
});

$(document).ready(function(){
    $(".sticky-news").hover(function(){
        $(this).removeClass('weird');
    }, function(){
        $(this).addClass('weird');
    });
});

$(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
});

$(document).ready(function(){
    $('.tabs').tabs();
});

//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
var height =  window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

function scrollFunction() {
    if (document.body.scrollTop > height/2 || document.documentElement.scrollTop > height/2) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
