var educatorsSucceedContainer = Snap("#svgEducatorsSucceedContainer");

// LOAD LIST FOR MULTIPLE SVG FILES
var fragList = new Array, fragLoadedCount = 0;

	function loadMulti( list ) {
		var image, fragLoadedCount = 0, listLength = list.length;

		for( var count = 0; count < listLength; count++ ) {
			(function() {
				var whichEl = count;
				image = Snap.load( list[ whichEl ], function ( loadedFragment ) {
								fragLoadedCount++;
								fragList[ whichEl ] = loadedFragment;
								if( fragLoadedCount >= listLength ) {
									addLoadedFrags( fragList );
								}
        });
			}) ();
		}

	}

	function addLoadedFrags( list ) {
		for( var count = 0; count < list.length; count++ ) {
			educatorsSucceedContainer.append( fragList[ count ] );
		}
	}
	var myLoadList = [ "assets/images/otis-teq_educators-succeed_parent_child.svg", "assets/images/eyeballs.svg" ];
	loadMulti( myLoadList );

var firstBlob = educatorsSucceedContainer.path("M256.057,238.372c-2.368-2.397-1.673-4.518-3.137-6.513c-1.722-2.347-3.135-0.887-6.238-1.774 s-6.732-4.746-7.586-2.445s-0.808,5.328-5.463,8.653c-3.57,2.55-2.449,3.801-0.887,8.128c1.562,4.327-3.287,3.184,3.325,7.834 c6.613,4.65,5.072,1.845,10.62,2.882c7.116,1.33,0.821-2.193,8.003-1.108c0,0,4.01,1.077,6.429-1.774 c2.419-2.851-0.225-4.99-1.774-7.834C256.057,238.372,258.425,240.768,256.057,238.372z").attr({ class: "teal-fill", });
var coffeeSteamOne = educatorsSucceedContainer.path("M395.819,261.307c0,0,0.87-5.178-0.405-9.315s-1.916-7.731-0.405-11.34c1.511-3.608,5.287-7.488,2.835-10.53 c-2.452-3.041-9.02-6.283-8.505-10.125s4.779-5.462,8.1-6.885c3.32-1.423,13.053-5.527,2.025-8.91 c-11.028-3.383-18.908-6.776-18.224-8.505c0.683-1.728,7.331-3.804,9.72-4.05s4.05-0.405,4.05-0.405s-5.531,2.418-4.86,4.455 c0.671,2.037,18.293,6.839,21.869,8.91c3.576,2.07,5.83,5.381,0,7.29s-13.051,7.337-11.745,9.315s7.202,6.774,8.1,10.125 c0.897,3.351-3.42,9.322-4.05,11.745c-0.63,2.422,2.732,9.165,2.43,11.744c-0.302,2.579-0.405,6.48-0.405,6.48h-10.53V261.307z").attr({ class: "white-fill opacity-quarter coffee-steam-one", });
var coffeeSteamTwo = educatorsSucceedContainer.path("M395.819,261.307c0,0,0.465-3.153-0.81-7.29s-0.296-8.541,1.215-12.149s1.997-8.012-1.099-10.395 c-3.364-2.589-5.259-3.498-4.571-7.425c0.669-3.818,6.842-5.511,9.72-7.695c3.042-2.308,6.169-5.527-4.86-8.91 c-11.029-3.383-12.023-6.371-11.34-8.1s6.182-3.845,8.505-4.455c2.902-0.762,17.414-3.24,17.414-3.24s-15.656,6.467-14.984,8.505 s14.244,8.054,17.819,10.125c3.576,2.07,1.817,4.97-3.645,7.695c-5.489,2.739-8.596,6.932-7.29,8.91s5.963,6.375,6.885,9.72 c1.01,3.666-2.312,7.322-3.645,9.72c-1.216,2.187,1.112,6.735,0.81,9.315c-0.302,2.58,0.405,5.67,0.405,5.67h-10.529 L395.819,261.307L395.819,261.307z").attr({ class: "white-fill opacity-none coffee-steam-two", });
var coffeeSteamThree = educatorsSucceedContainer.path("M395.819,261.307c0,0-1.155-0.936-1.215-5.265c-0.072-5.229,0.575-6.426,2.025-10.125 c1.236-3.153,0.819-4.936-2.025-9.72c-2.169-3.649-3.928-2.958-3.24-6.885c0.669-3.818,4.007-5.106,6.885-7.29 c3.042-2.308,7.793-5.336-2.025-9.72c-10.533-4.703-12.167-7.113-10.935-8.505c2.129-2.403,21.703-7.882,25.514-11.34 c2.768-2.512,7.186,0.351,6.48,1.62c-0.707,1.269-21.085,8.833-20.654,10.935c0.68,3.318,7.764,6.029,11.34,8.1 c3.576,2.07,7.206,3.029,2.835,7.29c-5.213,5.081-8.12,7.105-8.505,10.125c-0.299,2.351,2.373,3.994,4.05,6.885 c1.909,3.29,2.548,4.892,1.215,7.29c-1.216,2.187-1.723,7.95-2.025,10.53c-0.302,2.579,0.81,6.075,0.81,6.075L395.819,261.307 L395.819,261.307z").attr({ class: "white-fill opacity-none coffee-steam-three", });

var steamOne = Snap.select('.coffee-steam-one');
var steamTwo = Snap.select('.coffee-steam-two');
var steamThree = Snap.select('.coffee-steam-three');
var steamOnePoints = steamOne.node.getAttribute('d');
var steamTwoPoints = steamTwo.node.getAttribute('d');
var steamThreePoints = steamThree.node.getAttribute('d');

var steamFrameStart = function() {
  steamOne.animate({ d: steamOnePoints }, 500, mina.linear, steamFrameOne);
}
var steamFrameOne = function() {
  steamOne.animate({ d: steamTwoPoints }, 500, mina.linear, steamFrameTwo);
}
var steamFrameTwo = function() {
  steamOne.animate({ d: steamThreePoints }, 500, mina.linear, steamFrameThree);
}
var steamFrameThree = function() {
  steamOne.animate({ d: steamTwoPoints }, 500, mina.linear, steamFrameStart);
}
steamFrameStart();


var rampUpContainer = Snap("#svgRampUpContainer");
var rampUp = Snap.load("assets/images/rampUp.svg",
  function (loadedFragment) {
    rampUpContainer.append(loadedFragment);
  });

var ourCoursesSupportContainer = Snap("#svgOurCoursesSupportContainer");
var ourCoursesSupport = Snap.load("assets/images/ourCoursesSupport.svg",
	function (loadedFragment) {
		ourCoursesSupportContainer.append(loadedFragment);
	});

var activitiesThatConnectContainer = Snap("#svgActivitiesThatConnectContainer");
var activitiesThatConnect = Snap.load("assets/images/activitiesThatConnect.svg",
	function (loadedFragment) {
		activitiesThatConnectContainer.append(loadedFragment);
	});

var letOtisBeContainer = Snap("#svgLetOtisBeContainer");

// LOAD LIST FOR MULTIPLE SVG FILES
var fragListLetOtis = new Array, fragLetOtisLoadedCount = 0;

	function loadLetOtisMulti( list ) {
		var image, fragLetOtisLoadedCount = 0, listLength = list.length;

		for( var count = 0; count < listLength; count++ ) {
			(function() {
				var whichEl = count;
				image = Snap.load( list[ whichEl ], function ( loadedFragment ) {
								fragLetOtisLoadedCount++;
								fragListLetOtis[ whichEl ] = loadedFragment;
								if( fragLetOtisLoadedCount >= listLength ) {
									addLoadedLetOtisFrags( fragListLetOtis );
								}
        });
			}) ();
		}

	}

	function addLoadedLetOtisFrags( list ) {
		for( var count = 0; count < list.length; count++ ) {
			letOtisBeContainer.append( fragListLetOtis[ count ] );
		}
	}
	var myLoadLetOtisList = [  "assets/images/superhero-sidekick-cape1.svg", "assets/images/superhero-sidekick.svg", "assets/images/karate-OTIS.svg" ];
	loadLetOtisMulti( myLoadLetOtisList );
var fourthBlob = letOtisBeContainer.path("M151.779,62.117c-34.688,14.518-42.08,23.458-77.864,45.785s-40.72,17.015-20.977,67.477 s93.779,134.903,144.371,181.311s74.036,52.816,95.013,49.612s75.27-46.01,132.031-157.819s33.316-137.83,12.339-147.917 s-166.037-63.57-186.052-63.57S186.466,47.598,151.779,62.117z").attr({ class: "blob pink-fill", });

$(document).ready( function() {

	window.addEventListener('scroll', function(e) {

		function isOnScreen(elem) {
			if( elem.length == 0 ) {
				return;
			}
			var $window = $(window)
			var viewport_top = $window.scrollTop()
			var viewport_height = $window.height()
			var viewport_bottom = viewport_top + viewport_height
			var $elem = $(elem)
			var top = $elem.offset().top
			var height = $elem.height()
			var bottom = top + height

		  return (top >= viewport_top && top < viewport_bottom) ||
			(bottom > viewport_top && bottom <= viewport_bottom) ||
			(height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
		}

    if( isOnScreen($("#powerToImpactContainer")) ) {
      $("#powerToImpactContainer .yellow-blob .blob").addClass("popin");
 		}
    if( isOnScreen($('#svgLetOtisBeContainer')) ) {
      $("#svgLetOtisBeContainer").addClass("visible");
 		}

		$('.fade-in-container').each( function(i) {
			if( isOnScreen($(this)) ) {
	      $(this).children(".fade-element.fade-down").addClass("animate");
				$(this).children(".fade-element.fade-up").addClass("animate");
	 		}
    });

	});
});
