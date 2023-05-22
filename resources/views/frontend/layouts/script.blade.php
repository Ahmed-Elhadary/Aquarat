<!-- Vendor -->
		<script src="{{  asset('assets/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')  }}"></script>
		<script src="{{ asset('assets/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/lazysizes/lazysizes.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/isotope/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/vide/jquery.vide.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/vivus/vivus.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{  asset('assets/js/theme.js') }}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('assets/js/view.contact.js') }}"></script>

		<!-- Demo -->
		<script src="{{ asset('assets/js/demo-church.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{  asset('assets/js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('assets/js/theme.init.js')  }}"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				html: "<strong>Porto Church</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
				icon: {
					image: "img/demos/church/others/pin.png",
					iconsize: [28, 35],
					iconanchor: [28, 35]
				}
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 14
			};

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

			// Custom Init Map
			var initMapAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').animate({
					height: 350
				}, 300, function(){
					setTimeout(function(){
						$('.custom-view-our-location').animate({
							bottom: '-160px'
						}, 300);
					}, 1000);

					var map = $('#googlemaps').gMap(mapSettings),
						mapRef = $('#googlemaps').data('gMap.reference');

					// Styles from https://snazzymaps.com/
					var styles = [{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"simplified"},{"color":"#e94f3f"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"on"},{"gamma":"0.50"},{"hue":"#ff4a00"},{"lightness":"-79"},{"saturation":"-86"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"hue":"#ff1700"}]},{"featureType":"landscape.natural.landcover","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"poi","elementType":"all","stylers":[{"color":"#e74231"},{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#4d6447"},{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"color":"#f0ce41"},{"visibility":"off"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"color":"#363f42"}]},{"featureType":"road","elementType":"all","stylers":[{"color":"#231f20"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#6c5e53"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#313639"},{"visibility":"off"}]},{"featureType":"transit","elementType":"labels.text","stylers":[{"hue":"#ff0000"}]},{"featureType":"transit","elementType":"labels.text.fill","stylers":[{"visibility":"simplified"},{"hue":"#ff0000"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#0e171d"}]}];

					var styledMap = new google.maps.StyledMapType(styles, {
						name: 'Styled Map'
					});

					mapRef.mapTypes.set('map_style', styledMap);
					mapRef.setMapTypeId('map_style');
				});
			}

		</script>

	</body>

