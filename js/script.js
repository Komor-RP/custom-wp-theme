( function( $ ) {
var workBlocks = $("#projectSection .work");

$(workBlocks).mouseenter(function(){
  $(this).children().css("box-shadow", "3px 3px 7px #777");
});

$(workBlocks).mouseleave(function(){
  var currentWidth = parseFloat($(this).css("max-width"));
  if (currentWidth < 50) {
    $(this).children().css("box-shadow", "1px 1px 5px #bab8b8");
  }

});

$(workBlocks).click(function() {
  var currentWidth = parseFloat($(this).css("max-width"));
  if (currentWidth < 50) {
    $(this).addClass("col-lg-6");
    $(this).children().css("box-shadow", "3px 3px 7px #777");
    $(this).removeClass("col-lg-3");
    $(this).siblings().removeClass("col-lg-6");
    $(this).siblings().addClass("col-lg-3");
    $(this).siblings().children().css("box-shadow", "1px 1px 5px #bab8b8");
  }

  if (currentWidth > 40) {
    $(this).removeClass("col-lg-6");
    $(this).children().css("box-shadow", "1px 1px 5px #bab8b8");
    $(this).siblings().removeClass("col-lg-6");
    $(this).siblings().removeClass("col-lg-3");
  }

});


} )( jQuery );
