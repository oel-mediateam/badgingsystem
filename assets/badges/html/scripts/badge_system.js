$(document).ready(function () {

	/* TEMP */
	/*
var badgeOn = false;
	var controlOn = false;

	$(".onOffToggle").on("click", function () {

		if (badgeOn) {
			$(this).html("On");
			$(".shadow").each(function () {
				$(this).fadeOut("fast");
			});
			badgeOn = false;
		} else {
			$(this).html("Off");
			$(".shadow").each(function () {
				$(this).fadeIn("fast");
			});

			badgeOn = true;
		}

		return false;
	});

	$(".controlOffToggle").on("click", function () {

		if (controlOn) {
			$(this).html("Hide Form");
			$(".controls").each(function () {
				$(this).fadeIn("fast");
			});

			controlOn = false;

		} else {
			$(this).html("Show Form");
			$(".controls").each(function () {
				$(this).fadeOut("fast");
			});

			controlOn = true;
		}

		return false;
	});
*/

	/* PERM */
	var mouseX;
	var phaseComplete = [];
	var smallBadgeTips = new Array();
	var mediumBadgeTips = new Array();
	var largeBadgeTips = new Array();

	// call ajax function
	loadXMLViaAjax();

	// get mouse x position for tooltip
	$(document).mousemove(function (evt) {
		mouseX = (evt.pageX - $(".phase").offset().left) + $(window).scrollLeft();
	});

	// activate badges by calling fade in and out function
	$(".controls .active_box input").on("click", function (e) {
		if (isChecked($(this))) {
			fadeInBadge(e);
		} else {
			fadeOutBadge(e);
		}
	});

	$(".controls .bonus_box input").on("click", function (e) {
		if (isChecked($(this))) {
			fadeInBadge(e, true);
		} else {
			fadeOutBadge(e, true);
		}
	});

	/* TOOLTIP */
	$(".badge").popover({
		animation: true,
		html: true,
		trigger: "hover",
		content: function () {

			var index;
			var title, img, desc;

			if ($(this).hasClass("gs")) {
				if (!$(this).prev().is(":visible")) {
					if ($(this).hasClass("small")) {
						index = $(this).index(".small.gs");
						title = smallBadgeTips[index].title;
						img = "<div class=\"" + $(this).attr("class") + "\"></div>";
						desc = smallBadgeTips[index].description;
					} else if ($(this).hasClass("medium")) {
						index = $(this).index(".medium.gs");
						title = mediumBadgeTips[index].title;
						img = "<div class=\"" + $(this).attr("class") + "\"></div>";
						desc = mediumBadgeTips[index].description;
					} else if ($(this).hasClass("large")) {
						index = $(this).index(".large.gs");
						title = largeBadgeTips[index].title;
						img = "<div class=\"" + $(this).attr("class") + "\"></div>";
						desc = largeBadgeTips[index].description;
					}
				}
			} else if ($(this).hasClass("shadow")) {

				if ($(this).hasClass("small")) {
					index = $(this).index(".small.shadow");
					title = smallBadgeTips[index].title;
					img = "<div class=\"" + $(this).attr("class") + "\"></div>";
					desc = smallBadgeTips[index].description;
				} else if ($(this).hasClass("medium")) {
					index = $(this).index(".medium.shadow");
					title = mediumBadgeTips[index].title;
					img = "<div class=\"" + $(this).attr("class") + "\"></div>";
					desc = mediumBadgeTips[index].description;
				} else if ($(this).hasClass("large")) {
					index = $(this).index(".large.shadow");
					title = largeBadgeTips[index].title;
					img = "<div class=\"" + $(this).attr("class") + "\"></div>";
					desc = largeBadgeTips[index].description;
				}

			}

			$("#tooltip .bdgTitle").html(title);
			$("#tooltip .bdgImg").html(img);
			if (!$(this).hasClass("large")) {
				if ($(this).hasClass("small")) {
					if ($("#tooltip .bdgTip").hasClass("not-large")) {
						$("#tooltip .bdgTip").removeClass("not-large");
					}
					$("#tooltip .bdgTip").html(desc).addClass("not-medium");
				} else {
					if ($("#tooltip .bdgTip").hasClass("not-medium")) {
						$("#tooltip .bdgTip").removeClass("not-medium");
					}
					$("#tooltip .bdgTip").html(desc).addClass("not-large");
				}
			} else {
				if ($("#tooltip .bdgTip").hasClass("not-large")) {
					$("#tooltip .bdgTip").removeClass("not-large");
				}
				if ($("#tooltip .bdgTip").hasClass("not-medium")) {
					$("#tooltip .bdgTip").removeClass("not-medium");
				}
				$("#tooltip .bdgTip").html(desc);
			}

			return ($("#tooltip").html());
		},
		placement: function () {

			if (mouseX > 450 && mouseX <= 900) {
				return ("left");
			}

			return ("right");

		}

	});

	/* SAVE BUTTON */
	$(".save").on("click", function () {

		var prev = null;
		var active = "";

		$("input[type=checkbox]").each(function () {

			if (isChecked($(this))) {

				if ($(this).attr("rel") === "bonus") {

					if (isChecked(prev)) {
						active += "1";
					} else {
						active += "0";
					}

				} else {
					active += "1";
				}
			} else {
				active += "0";
			}

			prev = $(this);

		});

		if ($.trim(active) === "" || $.trim(active).length <= 0 || Number($.trim(
			active)) === 0) {
			return false;
		} else {
			$("#activeCode").val(active);
			return true;
		}

	});


	/* FUNCTIONS */
	function isChecked(checkbox) {
		if ($(checkbox).is(":checked")) {
			return true;
		} else {
			return false;
		}
	}

	function fadeInBadge(badge, bonus) {

		var currentBadge = $(badge.currentTarget.parentNode.parentNode.parentNode).prev();

		if (typeof bonus === "undefined" || typeof bounus === null) {
			bonus = false;
		}

		if (bonus) {
			currentBadge.addClass("bonus");
		} else {
			currentBadge.fadeIn();
			currentBadge.addClass("active");
			checkAndUpdateBadges(badge);
		}

	}

	function fadeOutBadge(badge, bonus) {

		var currentBadge = $(badge.currentTarget.parentNode.parentNode.parentNode).prev();

		if (typeof bonus === "undefined" || typeof bounus === null) {
			bonus = false;
		}

		if (bonus) {
			currentBadge.removeClass("bonus");
		} else {
			currentBadge.fadeOut();
			currentBadge.removeClass("active");
			checkAndUpdateBadges(badge);
		}

	}

	function checkAndUpdateBadges(e) {

		var phase = $(e.currentTarget.parentNode.parentNode.parentNode.parentNode).attr(
			"class").split(" ", 1).toString();

		if (phase === "phase_one") {
			checkPhaseOne();
		} else if (phase === "phase_two") {

			checkPhaseTwo();

		} else if (phase === "phase_three") {

			checkPhaseThere();

		}

		updateProgressBar();

	}

	/* CHECK PHASE FUNCTIONS */
	function checkPhaseOne() {
		if ($("#one-two").is(":checked") && $("#one-three").is(":checked")) {
			$(".badge.medium.shadow.one-one").delay(250).fadeIn().addClass("active");
			phaseComplete[0] = true;
		} else {
			$(".badge.medium.shadow.one-one").fadeOut("fast").removeClass("active");
			phaseComplete[0] = false;
		}

		if ($("#two-two").is(":checked") && $("#two-three").is(":checked")) {
			$(".badge.medium.shadow.two-one").delay(250).fadeIn().addClass("active");
			phaseComplete[1] = true;
		} else {
			$(".badge.medium.shadow.two-one").fadeOut("fast").removeClass("active");
			phaseComplete[1] = false;
		}

		if ($("#three-two").is(":checked") &&
			$("#three-three").is(":checked") &&
			$("#three-four").is(":checked") &&
			$("#three-five").is(":checked")) {
			$(".badge.medium.shadow.three-one").delay(250).fadeIn().addClass("active");
			phaseComplete[2] = true;
		} else {
			$(".badge.medium.shadow.three-one").fadeOut("fast").removeClass("active");
			phaseComplete[2] = false;
		}

		if ($("#four-two").is(":checked") &&
			$("#four-three").is(":checked") &&
			$("#four-four").is(":checked") &&
			$("#four-five").is(":checked") &&
			$("#four-six").is(":checked")) {
			$(".badge.medium.shadow.four-one").delay(250).fadeIn().addClass("active");
			phaseComplete[3] = true;
		} else {
			$(".badge.medium.shadow.four-one").fadeOut("fast").removeClass("active");
			phaseComplete[3] = false;
		}

		if ($("#five-two").is(":checked") && $("#five-three").is(":checked")) {
			$(".badge.medium.shadow.five-one").delay(250).fadeIn().addClass("active");
			phaseComplete[4] = true;
		} else {
			$(".badge.medium.shadow.five-one").fadeOut("fast").removeClass("active");
			phaseComplete[4] = false;
		}

		if ($("#six-two").is(":checked") && $("#six-three").is(":checked")) {
			$(".badge.medium.shadow.six-one").delay(250).fadeIn().addClass("active");
			phaseComplete[5] = true;
		} else {
			$(".badge.medium.shadow.six-one").fadeOut("fast").removeClass("active");
			phaseComplete[5] = false;
		}

		if (phaseComplete[0] && phaseComplete[1] && phaseComplete[2] &&
			phaseComplete[3] &&
			phaseComplete[4] && phaseComplete[5]) {
			$(".badge.large.shadow.seven").delay(250).fadeIn().addClass("active");
		} else {
			$(".badge.large.shadow.seven").fadeOut("fast").removeClass("active");
		}

	}

	function checkPhaseTwo() {

		if ($("#eight-two").is(":checked") &&
			$("#eight-three").is(":checked") &&
			$("#eight-four").is(":checked") &&
			$("#eight-five").is(":checked")) {
			$(".badge.medium.shadow.eight-one").delay(250).fadeIn().addClass("active");
			phaseComplete[0] = true;
		} else {
			$(".badge.medium.shadow.eight-one").fadeOut("fast").removeClass("active");
			phaseComplete[0] = false;
		}

		if ($("#nine-two").is(":checked") &&
			$("#nine-three").is(":checked")) {
			$(".badge.medium.shadow.nine-one").delay(250).fadeIn().addClass("active");
			phaseComplete[1] = true;
		} else {
			$(".badge.medium.shadow.nine-one").fadeOut("fast").removeClass("active");
			phaseComplete[1] = false;
		}

		if ($("#ten-two").is(":checked") &&
			$("#ten-three").is(":checked")) {
			$(".badge.medium.shadow.ten-one").delay(250).fadeIn().addClass("active");
			phaseComplete[2] = true;
		} else {
			$(".badge.medium.shadow.ten-one").fadeOut("fast").removeClass("active");
			phaseComplete[2] = false;
		}

		if ($("#eleven-two").is(":checked") &&
			$("#eleven-three").is(":checked") &&
			$("#eleven-four").is(":checked") &&
			$("#eleven-five").is(":checked") &&
			$("#eleven-six").is(":checked")) {
			$(".badge.medium.shadow.eleven-one").delay(250).fadeIn().addClass("active");
			phaseComplete[3] = true;
		} else {
			$(".badge.medium.shadow.eleven-one").fadeOut("fast").removeClass("active");
			phaseComplete[3] = false;
		}

		if ($("#twelve").is(":checked")) {
			$(".badge.medium.shadow.twelve").delay(250).fadeIn().addClass("active");
			phaseComplete[4] = true;
		} else {
			$(".badge.medium.shadow.twelve").fadeOut("fast").removeClass("active");
			phaseComplete[4] = false;
		}

		if (phaseComplete[0] && phaseComplete[1] && phaseComplete[2] &&
			phaseComplete[3] &&
			phaseComplete[4]) {
			$(".badge.large.shadow.thirteen").delay(250).fadeIn().addClass("active");
		} else {
			$(".badge.large.shadow.thirteen").fadeOut("fast").removeClass("active");
		}

	}

	function checkPhaseThere() {

		if ($("#fourteen").is(":checked")) {
			$(".badge.medium.shadow.fourteen").delay(250).fadeIn().addClass("active");
			phaseComplete[0] = true;
		} else {
			$(".badge.large.shadow.fourteen").fadeOut("fast").removeClass("active");
			phaseComplete[0] = false;
		}

		if ($("#fifteen").is(":checked")) {
			$(".badge.medium.shadow.fifteen").delay(250).fadeIn().addClass("active");
			phaseComplete[1] = true;
		} else {
			$(".badge.large.shadow.fifteen").fadeOut("fast").removeClass("active");
			phaseComplete[1] = false;
		}

		if (phaseComplete[0] && phaseComplete[1]) {
			$(".badge.large.shadow.sixteen").delay(250).fadeIn().addClass("active");
		} else {
			$(".badge.large.shadow.sixteen").fadeOut("fast").removeClass("active");
		}

	}

	function updateProgressBar() {
		var progressFillBar = $(
			".badge_panel .progress_bar .bar .fill_container .fill");
		var numActive = $(".active").length;
		var numBadges = $(".badge.shadow").length;
		var percentage = Math.round((numActive / numBadges) * 100);
		progressFillBar.animate({
			width: percentage + "%"
		}, 500, "linear");
	}

	function loadXMLViaAjax() {
		// AJAX setup
		$.ajaxSetup({
			url: 'badges.xml',
			type: 'GET',
			dataType: 'xml',
			accepts: 'xml',
			content: 'xml',
			contentType: 'xml; charset="utf-8"',
			cache: false
		});

		// Encoding XML data
		$.ajax({
			encoding: 'UTF-8',
			beforeSend: function (xhr) {
				xhr.overrideMimeType("xml; charset=utf-8");
				xhr.setRequestHeader("Accept", "text/xml");
			},
			success: function (xml) {

				setupXML(xml);

			},
			error: function (xhr, exception) {
				displayError(xhr.status, exception);
			}
		});
	}

	// error handling function

	function displayError(status, exception) {

		var statusMsg, exceptionMsg; // hold status and error message

		// assign status
		if (status === 0) {
			statusMsg =
				'<strong>Error 0</strong> - Not connect. Please verify network.';
		} else if (status === 404) {
			statusMsg = '<strong>Error 404</strong> - Requested page not found.';
		} else if (status === 406) {
			statusMsg = '<strong>Error 406</strong> - Not acceptable error.';
		} else if (status === 500) {
			statusMsg = '<strong>Error 500</strong> - Internal Server Error.';
		} else {
			statusMsg = 'Unknow error';
		}

		// assign error
		if (exception === 'parsererror') {
			exceptionMsg = 'Requested XML parse failed.';
		} else if (exception === 'timeout') {
			exceptionMsg = 'Time out error.';
		} else if (exception === 'abort') {
			exceptionMsg = 'Ajax request aborted.';
		} else if (exception === "error") {
			exceptionMsg = 'HTTP / URL Error (most likely a 404 or 406).';
		} else {
			exceptionMsg = ('Uncaught Error.\n' + status.responseText);
		}

		$('#errorMsg').html('<p>' + statusMsg + '<br />' + exceptionMsg + '</p>');

	}

	function setupXML(xml) {

		var badge = $(xml).find('badge');

		badge.each(function () {
			var badge = new Object();

			badge.id = $(this).attr("id");
			badge.level = $(this).attr("level");
			badge.parentId = $(this).attr("parentId");
			badge.title = $(this).find("title").text();
			badge.description = $(this).find("description").text();

			if (badge.level === "s") {
				smallBadgeTips.push(badge);
			} else if (badge.level === "m") {
				mediumBadgeTips.push(badge);
			} else if (badge.level === "l") {
				largeBadgeTips.push(badge);
			}


		});

	}

});