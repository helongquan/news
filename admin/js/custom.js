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


jQuery_3_2_1(document).ready(function($){
jQuery_3_2_1('.scroll_top').click(function(){jQuery_3_2_1('html,body').animate({scrollTop: '0px'}, 800);});
jQuery_3_2_1('.haoyou').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#haoyou').offset().top}, 800);});
jQuery_3_2_1('.dashboard').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#dashboard').offset().top}, 800);});
jQuery_3_2_1('.order').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#order').offset().top}, 800);});
jQuery_3_2_1('.jifen').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#jifen').offset().top}, 800);});
jQuery_3_2_1('.fenxi').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#fenxi').offset().top}, 800);});
jQuery_3_2_1('.pinglun').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#pinglun').offset().top}, 800);});
jQuery_3_2_1('.setting').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#setting').offset().top}, 800);});
jQuery_3_2_1('.products').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#products').offset().top}, 800);});
jQuery_3_2_1('.fangweima').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#fangweima').offset().top}, 800);});
jQuery_3_2_1('.baogao').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#baogao').offset().top}, 800);});
jQuery_3_2_1('.gailan').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#gailan').offset().top}, 800);});
jQuery_3_2_1('.shoucang').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#shoucang').offset().top}, 800);});
jQuery_3_2_1('.xinwen').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#xinwen').offset().top}, 800);});
jQuery_3_2_1('.zhaohuimima').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#zhaohuimima').offset().top}, 800);});
jQuery_3_2_1('.wenzhangfenlei').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#wenzhangfenlei').offset().top}, 800);});
jQuery_3_2_1('.daochu').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#daochu').offset().top}, 800);});
jQuery_3_2_1('.scroll_bottom').click(function(){jQuery_3_2_1('html,body').animate({scrollTop:jQuery_3_2_1('#footer').offset().top}, 800);}); 
});

jQuery_3_2_1(".admin_scroll p").click(function(){
  jQuery_3_2_1(this).css("display","none").siblings().css("opacity","1").css("transition","1s ease").css("display","block");
});