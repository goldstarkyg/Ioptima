jQuery(document).ready(function(s){"use strict";var e=null;s(".wpb_edit_form_elements .4k_icon_field").each(function(){var e=s(this).attr("data-icon-css-path");0===s("[data-4k-icon-css-admin]").length&&(s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ba.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/bc.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/bk.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/br.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/business.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/cl.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/cn.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/creditcard.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ct.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/dr.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/draw.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ec.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ecommerce.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/el.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/elu.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/en.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/fa.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/file.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/foa.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/fo.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ft.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/games.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/gesture.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ic.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/im.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/imf.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ion.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/lis.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ln.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ls.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/lp.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ma.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/mi.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/mfg.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/mk.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/mm.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/mn.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/mo.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/moon.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/mp.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/mt.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ow.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/oi.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/payment.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/place.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/st.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/sw.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ty.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ty2.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/u8.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/u12.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/usa.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/wi.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/wl.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/ws.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/wb.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/zm.css" type="text/css" data-4k-icon-css-admin="1" />'),s("head").append('<link rel="stylesheet" href="'+e+'icons/css/zo.css" type="text/css" data-4k-icon-css-admin="1" />')),s(this).prev().html('<i class="'+s(this).val()+'"></i>')}).on("keyup",function(){s(this).prev().html('<i class="'+s(this).val()+'"></i>'),null!==e&&(clearTimeout(e),e=null);var t=s(this);e=setTimeout(function(){var e=t.parent().find(".fourk_select_window");e.html("").show(),s.each(all4kIcons,function(c){var n=new RegExp(t.val(),"i");-1!==t.val().indexOf("-")&&(n=new RegExp("^"+t.val(),"i")),all4kIcons[c].match(n)&&setTimeout(function(){s('<i class="'+all4kIcons[c]+'"></i>').prependTo(e)},10)})},500)}),s(".wpb_edit_form_elements .4k_icon_field ~ .fourk_select_window").on("click","i",function(){var e=s(this).parents(".fourk_select_window").parent().find("input");e.val(s(this).attr("class")).prev().html('<i class="'+e.val()+'"></i>')}),s(".wpb_edit_form_elements .4k_icon_filter").change(function(){var e=s(this).parent().find("input");""===s(this).val()||("all"===s(this).val()?e.val("").trigger("keyup"):e.val(s(this).val()).trigger("keyup"))})});