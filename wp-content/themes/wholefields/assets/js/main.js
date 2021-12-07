$(document).ready(function() {
    // This will fire when document is ready:
    $(window).resize(function() {
        // This will fire each time the window is resized:
        if($(window).width() <= 1024) {
            $(".navbar-toggler").show();
            $("#wf-nav").hide();
            $("#wf-nav").addClass("display-as-mobile");

        } else {
            $('.navbar-toggler').hide();
            $("#wf-nav").show();
            $("#wf-nav").removeClass("display-as-mobile");

        }
    }).resize(); // This will simulate a resize to trigger the initial run.
    if(window.location.pathname === "/locations/"){
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const searchZip = urlParams.get('zip');
        $("#wpsl-search-input").val(searchZip);
    }
});

$(".navbar-toggler").on("click", function(){
    $("#wf-nav.display-as-mobile").toggle();
});

//FOR HOME PAGE MOBILE AND TABLET SLIDESHOW IN HERO INTRO 
$("#intro-slide-next").on("click", function(){
    let curSlide = $(".slide.active").data("index");
    let lastSlide = $(".slide").length;
    let nextSlide = (curSlide + 1) % lastSlide;
    $(".slide").removeClass("active");
    $(`.slide[data-index=${nextSlide}]`).addClass('active');
});
$("#intro-slide-prev").on("click", function(){
    let curSlide = $(".slide.active").data("index");
    let lastSlide = $(".slide").length;
    let nextSlide = (((curSlide - 1) % lastSlide) + lastSlide ) % lastSlide;
    $(".slide").removeClass("active");
    $(`.slide[data-index=${nextSlide}]`).addClass('active');
});

//FOR SEARCH ZIP CODE 
$("#search-zip").on("click", function(e){
    let zip = $("#enter-zip").val();
    window.location.href = `./locations?zip=${zip}`;
})