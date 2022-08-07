$(window).on('load resize',function(){
  //ウィンドウの高さを取得する
  var targetY = $(window).height();
  
  //スクロールをクリックするとウィンドウの高さ分、下にスクロールする
  $('.js-scroll a').on('click',function(){
    $("html, body").stop().animate({scrollTop: targetY}, 500, 'swing');
    return false;
  });
});
