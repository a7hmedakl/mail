$(document).ready(function () {

    $('.wp1').waypoint(function () {
        $('.wp1').addClass(' animated fadeIn delay-05s');
    }, {
        offset: '75%'
    });

    $('.wp2').waypoint(function () {
        $('.wp2').addClass(' animated bounce');
    }, {
        offset: '75%'
    });

    $('.wp3').waypoint(function () {
        $('.wp4').addClass('animated fadeInUp');
    }, {
        offset: '75%'
    });

    $('.wp4').waypoint(function () {
        $('.wp4').addClass('animated fadeInRight');
    }, {
        offset: '75%'
    });

    $('.wp5').waypoint(function () {
        $('.wp4').addClass('animated fadeInleft');
    }, {
        offset: '75%'
    });

    $('.wp6').waypoint(function () {
        $('.wp6').addClass('animated fadeInDown');
    }, {
        offset: '75%'
    });

    var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 300,
        easingType: 'linear'
    };
    $().UItoTop({easingType: 'easeOutQuart'});

    $(".boot-tooltip a").tooltip({
    });
    

var cols = {},

		messageIsOpen = false;

	cols.showOverlay = function() {
		$('body').addClass('show-main-overlay');
	};
	cols.hideOverlay = function() {
		$('body').removeClass('show-main-overlay');
	};


	cols.showMessage = function() {
		$('body').addClass('show-message');
		messageIsOpen = true;
	};
	cols.hideMessage = function() {
		$('body').removeClass('show-message');
		$('#main .message-list li').removeClass('active');
		messageIsOpen = false;
	};


	cols.showSidebar = function() {
		$('body').addClass('show-sidebar');
	};
	cols.hideSidebar = function() {
		$('body').removeClass('show-sidebar');
	};


	// Show sidebar when trigger is clicked

	$('.trigger-toggle-sidebar').on('click', function() {
		cols.showSidebar();
		cols.showOverlay();
	});


	$('.trigger-message-close').on('click', function() {
		cols.hideMessage();
		cols.hideOverlay();
	});


	// When you click on a message, show it

	$('#main .message-list li').on('click', function(e) {
		var item = $(this),
			target = $(e.target);

		if(target.is('label')) {
			item.toggleClass('selected');
		} else {
			if(messageIsOpen && item.is('.active')) {
				cols.hideMessage();
				cols.hideOverlay();
			} else {
				if(messageIsOpen) {
					cols.hideMessage();
					item.addClass('active');
					setTimeout(function() {
						cols.showMessage();
					}, 300);
				} else {
					item.addClass('active');
					cols.showMessage();
				}
				cols.showOverlay();
			}
		}
	});


	// This will prevent click from triggering twice when clicking checkbox/label

	$('input[type=checkbox]').on('click', function(e) {
		e.stopImmediatePropagation();
	});



	// When you click the overlay, close everything

	$('#main > .overlay').on('click', function() {
		cols.hideOverlay();
		cols.hideMessage();
		cols.hideSidebar();
	});



	// Enable sexy scrollbars
	$('.nano').nanoScroller();



	// Disable links

	$('a').on('click', function(e) {
		e.preventDefault();
	});



	// Search box responsive stuff

	$('.search-box input').on('focus', function() {
		if($(window).width() <= 1360) {
			cols.hideMessage();
		}
	});


});

 var Sports = angular.module("Sports", []);
        Sports.controller("Sportscontroller", function($scope) {

            $scope.sports = [
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
                {
                    "reference": "GM/2016",
                    "name": "موضوع الرساله الجديده",
                    "from": "أحمد عقل",
                    "guide": "للتوقيع",
                    "date": "23/1/2016",
                    "case": "قيد الإجراء",
                },
            ]
        });

