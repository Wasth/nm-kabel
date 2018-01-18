// slider options
var slideIterator = 0;
var slideW = 867;
var slidingTime = 300;

$(document).ready(function () {
    runSlider();
});
function runSlider(){

    // prepare slider
    $(".slider-container .slide-block").css({'left':''+slideW+'px'});
    $(".slider-container .slide-block:eq("+slideIterator+")").animate({
        'left':'0px'
    },0);

    //left click
    $(".slider .left-arrow").click(function () {

        $(".slider-container .slide-block:eq("+slideIterator+")").animate({
            'left':'-'+slideW+'px'
        },slidingTime);
        $(".slider-container .slide-block:eq("+(slideIterator)+")").animate({
            'left':slideW+'px'
        },0);
        increaseIterator();
        $(".slider-container .slide-block:eq("+slideIterator+")").animate({
            'left':'0px'
        },slidingTime);

    });

    //right click
    $(".slider .right-arrow").click(function () {
        $(".slider-container .slide-block:eq("+(slideIterator)+")").animate({
            'left':slideW+'px'
        },slidingTime);
        decreaseIterator();
        $(".slider-container .slide-block:eq("+(slideIterator)+")").animate({
            'left':'-'+slideW+'px'
        },0);
        $(".slider-container .slide-block:eq("+slideIterator+")").animate({
            'left':'0px'
        },slidingTime);
    });
}
function increaseIterator(){
    slideIterator++;
    if(slideIterator === $(".slider-container .slide-block").length){
        slideIterator = 0;
    }
}
function decreaseIterator(){
    if(slideIterator === 0){
        slideIterator = $(".slider-container .slide-block").length - 1;
    }else {
        slideIterator--;
    }
}