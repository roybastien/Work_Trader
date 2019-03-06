
<?php
class RokColorChooser {
	function newRainbow($name)
	{
		return "
		window.addEvent('domready', function() {
			var input = document.id('".$name."');
			var r_".$name." = new MooRainbow('myRainbow_".$name."_input', {
				id: 'myRainbow_".$name."',
				startColor: document.id('".$name."').get('value').hexToRgb(true) || [255, 255, 255],
				imgPath: 'rokbb/libraries/gantry/images/',
				transparent: false,
				onChange: function(color) {
				if (color == 'transparent') {
						input.getNext().getFirst().addClass('overlay-transparent').setStyle('background-color', 'transparent');
						input.value = 'transparent';
					}
					else {
						input.getNext().getFirst().removeClass('overlay-transparent').setStyle('background-color', color.hex);
						input.value = color.hex;
					}

					if (this.visible) this.okButton.focus();


					document.id('preset_style').selectedIndex = document.id('preset_style').getChildren().length - 1;
					input.getNext().getFirst().setStyle('background-color', color.hex);
					input.value = color.hex;
				}
			});
			r_".$name.".okButton.setStyle('outline', 'none');
			document.id('myRainbow_".$name."_input').addEvent('click', function() {
				r_".$name.".okButton.focus();
			});
			input.addEvent('keyup', function(e) {
				if (e) e.stop();
				if ((this.value.length == 4 || this.value.length == 7) && this.value[0] == '#') {
					var rgb = new Color(this.value);
					var hex = this.value;
					var hsb = rgb.rgbToHsb();
					var color = {
						'hex': hex,
						'rgb': rgb,
						'hsb': hsb
					}
					r_".$name.".fireEvent('onChange', color);
					r_".$name.".manualSet(color.rgb);
				};
			}).addEvent('set', function(value) {
				this.value = value;
				this.fireEvent('keyup');
			});
			input.getNext().getFirst().setStyle('background-color', r_".$name.".sets.hex);
			rainbowLoad('myRainbow_".$name."');
		});\n";
	}
}

?>
