var  mn = $(".main-nav");
	tp = $(".top"),
    mns = "main-nav-scrolled",
    tps = "top-scrolled",
    hdr = $('header').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
    mn.addClass(mns);
    tp.addClass(tps);
  } else {
    mn.removeClass(mns);
    tp.removeClass(tps);
  }
});