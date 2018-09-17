// 解决引入多个jquery版本造成冲突的问题
var jQuery_3_2_1 = $.noConflict(true);

jQuery_3_2_1(function($){
    jQuery_3_2_1(".index_content").each(function(){
        // 选择class为postTitle下的h2标签，控制显示的长度是40个字符
        var maxwidth=120;
        if(jQuery_3_2_1(this).text().length>maxwidth){
            jQuery_3_2_1(this).text($(this).text().substring(0,maxwidth));
            jQuery_3_2_1(this).html($(this).html()+'…');
        }
    });
});

jQuery_3_2_1(function($){
      if ($(".news_lis").width() <= 767) {
          jQuery_3_2_1(".index_content").each(function(){
              // 选择class为postTitle下的h2标签，控制显示的长度是40个字符
              var maxwidth=22;
              if(jQuery_3_2_1(this).text().length>maxwidth){
                  jQuery_3_2_1(this).text(jQuery_3_2_1(this).text().substring(0,maxwidth));
                  jQuery_3_2_1(this).html(jQuery_3_2_1(this).html()+'…');
              }
          });
      }
});


// lazy load start
start();
$(window).on('scroll', function() {
    start();
})

function start() {
    $('body img').not('[data-isLoaded]').each(function() {
        var $node = $(this);
        if (isShow($node)) {
            loadImg($node);
        }
    })
}

function isShow($node) {
    return $node.offset().top <= $(window).height() + $(window).scrollTop();
}
function loadImg($img) {
    $img.attr('src', $img.attr('data-src'));
    $img.attr('data-isLoaded', 1);
}