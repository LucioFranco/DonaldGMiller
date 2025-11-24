<div align="center" style="padding-top:10px;">
<div id="wrapper">
	
	<!-- Slider -->
	<div class="slider-wrapper futurico-theme">

		<div id="slider" class="nivoSlider">

			<img src="test/img/2.png" alt="" title="#caption1">

			<img src="test/img/3.png" alt="">

			<img src="test/img/4.png" alt="" title="#caption3">

			<img src="test/img/5.png" alt="">
			
		</div>

		<div id="caption1" class="nivo-html-caption">
			<strong>New Project</strong> <span></span> <em>Some description here</em>.
		</div>

		<div id="caption3" class="nivo-html-caption">
			<strong>Image 3</strong> <span></span> <em>Some description here</em>.
		</div>

	</div>

</div>


	
<!-- jQuery & Nivo Slider -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script>
	$(window).load(function() {
		$('#slider').nivoSlider({
			effect: 'random',
			directionNavHide: false,
			pauseOnHover: true,
			captionOpacity: 1,
			prevText: '<',
			nextText: '>'
		});
	});
</script>
<br /><br />
</div>