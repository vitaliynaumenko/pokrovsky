import  AppHelper from './AppHelper';
import JqPlugins from './JqPlugins';
declare var jQuery:any;
declare let window:any;
import 'slick-carousel';


window.jQuery = jQuery;
window.$ = jQuery;

let appHelper = new AppHelper;
let plugins = new JqPlugins;

export default class App{

    constructor(){

        ($ =>{

            $(()=> {
                $('.apartments-slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    arrows: false,
                    fade: true,
                    asNavFor: '.slider-nav',
                });
                $('.slider-nav').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    asNavFor: '.apartments-slider',
                    dots: false,
                    centerMode: true,
                    focusOnSelect: true,
                    nextArrow: '<button id="next" type="button" class="next">' + '</button>',
                    prevArrow: '<button id="prev" type="button" class="prev">' + '</button>',

                });


                $('.tab-navigate__item').on('click', function () {
                    var index = $(this).index(),
                        tabsActive = $('.apartments__tab-content.active');
                    $('.tab-navigate__item').removeClass('active');
                    $(this).addClass('active');
                    tabsActive.removeClass('active');

                    console.log(index);
                    if(tabsActive.hasClass('active')){
                        $(this).removeClass('active');
                    }else {
                        $('.apartments__tab-content').eq(index).addClass('active');
                    }

                });

                setTimeout(() =>  {
                    $('body').removeClass('thank_form');
                    $('.system-mess').remove();
                },3000);
                appHelper.modal();


            });

        })(jQuery);

    }
}