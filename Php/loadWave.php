	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">

	google.load("wave", "1");

	function initialize() {
		var waveFrame = document.getElementById("waveframe");
		var embedOptions = { 
			target: waveFrame,
		}
		var wavePanel = new google.wave.WavePanel(embedOptions);
		wavePanel.loadWave("googlewave.com!w+QWrfswmLA")
	}
	google.setOnLoadCallback(initialize);

	</script>
