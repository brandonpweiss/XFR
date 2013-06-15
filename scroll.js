function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}
$("#aboutnav").click(function() {
   scrollToAnchor('about');
});

$("#layoutnav").click(function() {
   scrollToAnchor('layout');
});

$("#membershipnav").click(function() {
   scrollToAnchor('membership');
});



$("#connectnav").click(function() {
   scrollToAnchor('connect');
});

$("#topnav").click(function() {
   scrollToAnchor('top');
});

$("#recycleableB").click(function() {
   scrollToAnchor('recycleable');
});



