$(document).ready(function(){function s(e){return $(e).is(":checked")?!0:!1}function o(e,t){var n=$(e.currentTarget.parentNode.parentNode.parentNode).prev();if(typeof t=="undefined"||typeof bounus===null)t=!1;if(t)n.addClass("bonus");else{n.fadeIn();n.addClass("active");a(e)}}function u(e,t){var n=$(e.currentTarget.parentNode.parentNode.parentNode).prev();if(typeof t=="undefined"||typeof bounus===null)t=!1;if(t)n.removeClass("bonus");else{n.fadeOut();n.removeClass("active");a(e)}}function a(e){var t=$(e.currentTarget.parentNode.parentNode.parentNode.parentNode).attr("class").split(" ",1).toString();t==="phase_one"?f():t==="phase_two"?l():t==="phase_three"&&c();h()}function f(){if($("#one-two").is(":checked")&&$("#one-three").is(":checked")){$(".badge.medium.shadow.one-one").delay(250).fadeIn().addClass("active");t[0]=!0}else{$(".badge.medium.shadow.one-one").fadeOut("fast").removeClass("active");t[0]=!1}if($("#two-two").is(":checked")&&$("#two-three").is(":checked")){$(".badge.medium.shadow.two-one").delay(250).fadeIn().addClass("active");t[1]=!0}else{$(".badge.medium.shadow.two-one").fadeOut("fast").removeClass("active");t[1]=!1}if($("#three-two").is(":checked")&&$("#three-three").is(":checked")&&$("#three-four").is(":checked")&&$("#three-five").is(":checked")){$(".badge.medium.shadow.three-one").delay(250).fadeIn().addClass("active");t[2]=!0}else{$(".badge.medium.shadow.three-one").fadeOut("fast").removeClass("active");t[2]=!1}if($("#four-two").is(":checked")&&$("#four-three").is(":checked")&&$("#four-four").is(":checked")&&$("#four-five").is(":checked")&&$("#four-six").is(":checked")){$(".badge.medium.shadow.four-one").delay(250).fadeIn().addClass("active");t[3]=!0}else{$(".badge.medium.shadow.four-one").fadeOut("fast").removeClass("active");t[3]=!1}if($("#five-two").is(":checked")&&$("#five-three").is(":checked")){$(".badge.medium.shadow.five-one").delay(250).fadeIn().addClass("active");t[4]=!0}else{$(".badge.medium.shadow.five-one").fadeOut("fast").removeClass("active");t[4]=!1}if($("#six-two").is(":checked")&&$("#six-three").is(":checked")){$(".badge.medium.shadow.six-one").delay(250).fadeIn().addClass("active");t[5]=!0}else{$(".badge.medium.shadow.six-one").fadeOut("fast").removeClass("active");t[5]=!1}t[0]&&t[1]&&t[2]&&t[3]&&t[4]&&t[5]?$(".badge.large.shadow.seven").delay(250).fadeIn().addClass("active"):$(".badge.large.shadow.seven").fadeOut("fast").removeClass("active")}function l(){if($("#eight-two").is(":checked")&&$("#eight-three").is(":checked")&&$("#eight-four").is(":checked")&&$("#eight-five").is(":checked")){$(".badge.medium.shadow.eight-one").delay(250).fadeIn().addClass("active");t[0]=!0}else{$(".badge.medium.shadow.eight-one").fadeOut("fast").removeClass("active");t[0]=!1}if($("#nine-two").is(":checked")&&$("#nine-three").is(":checked")){$(".badge.medium.shadow.nine-one").delay(250).fadeIn().addClass("active");t[1]=!0}else{$(".badge.medium.shadow.nine-one").fadeOut("fast").removeClass("active");t[1]=!1}if($("#ten-two").is(":checked")&&$("#ten-three").is(":checked")){$(".badge.medium.shadow.ten-one").delay(250).fadeIn().addClass("active");t[2]=!0}else{$(".badge.medium.shadow.ten-one").fadeOut("fast").removeClass("active");t[2]=!1}if($("#eleven-two").is(":checked")&&$("#eleven-three").is(":checked")&&$("#eleven-four").is(":checked")&&$("#eleven-five").is(":checked")&&$("#eleven-six").is(":checked")){$(".badge.medium.shadow.eleven-one").delay(250).fadeIn().addClass("active");t[3]=!0}else{$(".badge.medium.shadow.eleven-one").fadeOut("fast").removeClass("active");t[3]=!1}if($("#twelve").is(":checked")){$(".badge.medium.shadow.twelve").delay(250).fadeIn().addClass("active");t[4]=!0}else{$(".badge.medium.shadow.twelve").fadeOut("fast").removeClass("active");t[4]=!1}t[0]&&t[1]&&t[2]&&t[3]&&t[4]?$(".badge.large.shadow.thirteen").delay(250).fadeIn().addClass("active"):$(".badge.large.shadow.thirteen").fadeOut("fast").removeClass("active")}function c(){if($("#fourteen").is(":checked")){$(".badge.medium.shadow.fourteen").delay(250).fadeIn().addClass("active");t[0]=!0}else{$(".badge.large.shadow.fourteen").fadeOut("fast").removeClass("active");t[0]=!1}if($("#fifteen").is(":checked")){$(".badge.medium.shadow.fifteen").delay(250).fadeIn().addClass("active");t[1]=!0}else{$(".badge.large.shadow.fifteen").fadeOut("fast").removeClass("active");t[1]=!1}t[0]&&t[1]?$(".badge.large.shadow.sixteen").delay(250).fadeIn().addClass("active"):$(".badge.large.shadow.sixteen").fadeOut("fast").removeClass("active")}function h(){var e=$(".badge_panel .progress_bar .bar .fill_container .fill"),t=$(".active").length,n=$(".badge.shadow").length,r=Math.round(t/n*100);e.animate({width:r+"%"},500,"linear")}function p(){$.ajaxSetup({url:"badges.xml",type:"GET",dataType:"xml",accepts:"xml",content:"xml",contentType:'xml; charset="utf-8"',cache:!1});$.ajax({encoding:"UTF-8",beforeSend:function(e){e.overrideMimeType("xml; charset=utf-8");e.setRequestHeader("Accept","text/xml")},success:function(e){v(e)},error:function(e,t){d(e.status,t)}})}function d(e,t){var n,r;e===0?n="<strong>Error 0</strong> - Not connect. Please verify network.":e===404?n="<strong>Error 404</strong> - Requested page not found.":e===406?n="<strong>Error 406</strong> - Not acceptable error.":e===500?n="<strong>Error 500</strong> - Internal Server Error.":n="Unknow error";t==="parsererror"?r="Requested XML parse failed.":t==="timeout"?r="Time out error.":t==="abort"?r="Ajax request aborted.":t==="error"?r="HTTP / URL Error (most likely a 404 or 406).":r="Uncaught Error.\n"+e.responseText;$("#errorMsg").html("<p>"+n+"<br />"+r+"</p>")}function v(e){var t=$(e).find("badge");t.each(function(){var e=new Object;e.id=$(this).attr("id");e.level=$(this).attr("level");e.parentId=$(this).attr("parentId");e.title=$(this).find("title").text();e.description=$(this).find("description").text();e.level==="s"?n.push(e):e.level==="m"?r.push(e):e.level==="l"&&i.push(e)})}var e,t=[],n=new Array,r=new Array,i=new Array;p();$(document).mousemove(function(t){e=t.pageX-$(".phase").offset().left+$(window).scrollLeft()});$(".controls .active_box input").on("click",function(e){s($(this))?o(e):u(e)});$(".controls .bonus_box input").on("click",function(e){s($(this))?o(e,!0):u(e,!0)});$(".badge").popover({animation:!0,html:!0,trigger:"hover",content:function(){var e,t,s,o;if($(this).hasClass("gs")){if(!$(this).prev().is(":visible"))if($(this).hasClass("small")){e=$(this).index(".small.gs");t=n[e].title;s='<div class="'+$(this).attr("class")+'"></div>';o=n[e].description}else if($(this).hasClass("medium")){e=$(this).index(".medium.gs");t=r[e].title;s='<div class="'+$(this).attr("class")+'"></div>';o=r[e].description}else if($(this).hasClass("large")){e=$(this).index(".large.gs");t=i[e].title;s='<div class="'+$(this).attr("class")+'"></div>';o=i[e].description}}else if($(this).hasClass("shadow"))if($(this).hasClass("small")){e=$(this).index(".small.shadow");t=n[e].title;s='<div class="'+$(this).attr("class")+'"></div>';o=n[e].description}else if($(this).hasClass("medium")){e=$(this).index(".medium.shadow");t=r[e].title;s='<div class="'+$(this).attr("class")+'"></div>';o=r[e].description}else if($(this).hasClass("large")){e=$(this).index(".large.shadow");t=i[e].title;s='<div class="'+$(this).attr("class")+'"></div>';o=i[e].description}$("#tooltip .bdgTitle").html(t);$("#tooltip .bdgImg").html(s);if(!$(this).hasClass("large"))if($(this).hasClass("small")){$("#tooltip .bdgTip").hasClass("not-large")&&$("#tooltip .bdgTip").removeClass("not-large");$("#tooltip .bdgTip").html(o).addClass("not-medium")}else{$("#tooltip .bdgTip").hasClass("not-medium")&&$("#tooltip .bdgTip").removeClass("not-medium");$("#tooltip .bdgTip").html(o).addClass("not-large")}else{$("#tooltip .bdgTip").hasClass("not-large")&&$("#tooltip .bdgTip").removeClass("not-large");$("#tooltip .bdgTip").hasClass("not-medium")&&$("#tooltip .bdgTip").removeClass("not-medium");$("#tooltip .bdgTip").html(o)}return $("#tooltip").html()},placement:function(){return e>450&&e<=900?"left":"right"}});$(".save").on("click",function(){var e=null,t="";$("input[type=checkbox]").each(function(){s($(this))?$(this).attr("rel")==="bonus"?s(e)?t+="1":t+="0":t+="1":t+="0";e=$(this)});if($.trim(t)===""||$.trim(t).length<=0||Number($.trim(t))===0)return!1;$("#activeCode").val(t);return!0})});