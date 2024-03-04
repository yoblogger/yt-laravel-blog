/*
Author       : Dreamguys
Template Name: Doccure - Bootstrap Template
Version      : 1.3
*/


    // Circle Progress Bar
    
    function animateElements() {
        $('.circle-bar1').each(function () {
            var elementPos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            var percent = $(this).find('.circle-graph1').attr('data-percent');
            var animate = $(this).data('animate');
            if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                $(this).data('animate', true);
                $(this).find('.circle-graph1').circleProgress({
                    value: percent / 100,
                    size : 400,
                    thickness: 30,
                    fill: {
                        color: '#da3f81'
                    }
                });
            }
        });
        $('.circle-bar2').each(function () {
            var elementPos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            var percent = $(this).find('.circle-graph2').attr('data-percent');
            var animate = $(this).data('animate');
            if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                $(this).data('animate', true);
                $(this).find('.circle-graph2').circleProgress({
                    value: percent / 100,
                    size : 400,
                    thickness: 30,
                    fill: {
                        color: '#68dda9'
                    }
                });
            }
        });
        $('.circle-bar3').each(function () {
            var elementPos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            var percent = $(this).find('.circle-graph3').attr('data-percent');
            var animate = $(this).data('animate');
            if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                $(this).data('animate', true);
                $(this).find('.circle-graph3').circleProgress({
                    value: percent / 100,
                    size : 400,
                    thickness: 30,
                    fill: {
                        color: '#1b5a90'
                    }
                });
            }
        });
    }   
    
    if($('.circle-bar').length > 0) {
        animateElements();
    }
    $(window).scroll(animateElements);