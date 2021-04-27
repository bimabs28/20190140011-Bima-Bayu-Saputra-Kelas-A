document.getElementById("nama").innerHTML = 'Bimbay';

$("#nim").html('20190140004');

$(function(){
    console.log("hello");
})
$("#hide").on("click",function(){
    $("#nama").hide();
})
$("#show").on("click",function(){
    $("#nama").show();
})
$("#toggle").on("click",function(){
    $("#nama").toggle();
})
$("#fadeIn").on("click",function(){
    $("#tanggal").fadeIn();
})
$("#fadeOut").on("click",function(){
    $("#tanggal").fadeOut();
})
$("#fadeToggle").on("click",function(){
    $("#tanggal").fadeToggle();
})
$("#slideUp").on("click",function(){
    $("#img").slideUp();
})
$("#slideDown").on("click",function(){
    $("#img").slideDown();
})
$("#slideToggle").on("click",function(){
    $("#img").slideToggle();
})