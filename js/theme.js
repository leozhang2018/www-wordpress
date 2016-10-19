$(window).bind("scroll", function () {
	scroll_actions();
});
function scroll_actions(){
	$(window).scrollTop() >= 100 && !$('#products-sub-menu').hasClass("show") ? $('#products-sub-menu').addClass("show") : $(window).scrollTop() <= 100 && $('#products-sub-menu').hasClass("show") && $('#products-sub-menu').removeClass("show");
}

jQuery(document).ready(function($){

    $('nav#top-menu ul li ul').wrapInner('<div class="center center-sub-menu"></div>');
    //$('nav#top-menu').find('.sub-menu').parent('li').addClass('triangle');
    $("ul.menu > li").hover(function(){
        $(this).find('.sub-menu').parent('li').addClass('triangle');
    }, function() {
        $(this).find('.sub-menu').parent('li').removeClass('triangle');
    });
    // select-products
    $(".all-products").click(function() {
        var X = $(this).attr('id');
        if (X == 'products-active') {
            $(".all-products-sub").slideUp(300);
            $(this).attr('id', 'products-remove');
        } else {
            $(".all-products-sub").slideDown(300);
            $(this).attr('id', 'products-active');
        }
    });
    $(".all-products-sub").mouseup(function() { return false });
    $(".all-products").mouseup(function() { return false });
    $(document).mouseup(function() {
        $(".all-products-sub").slideUp(300);
        $(".all-products").attr('id', '');
    });

});


// about who
var TabbedContent = {
    init: function() {
        $(".tabs-team-item").mouseover(function() {

            var background = $(this).parent().find(".tabs-moving-bg");

            $(background).stop().animate({
                left: $(this).position()['left']
            }, {
                duration: 400
            });
            TabbedContent.slideContent($(this));
        });
    },
    slideContent: function(obj) {
        var margin = $(obj).parent().parent().find(".tabs-content").width();
        margin = margin * ($(obj).prevAll().size() - 1);
        margin = margin * -1;
        $(obj).parent().parent().find(".tabs-content-slider").stop().animate({
            marginLeft: margin + "px"
        }, {
            duration: 400
        });
    }
}
$(document).ready(function() {
    TabbedContent.init();
});


// products page accordion
 $(function() {
        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;
            var links = this.el.find('.link');
            links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
        }
        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
                $this = $(this),
                $next = $this.next();
                $next.slideToggle();
                $this.parent().toggleClass('open');
            if (!e.data.multiple) {
                $el.find('.accordion-content').not($next).slideUp().parent().removeClass('open');
            };
        }
        var accordion = new Accordion($('.accordion'), false);
    });

