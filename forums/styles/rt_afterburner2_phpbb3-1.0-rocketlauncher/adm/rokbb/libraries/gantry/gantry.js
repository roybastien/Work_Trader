
var Gantry = {
	init: function() {
		if (document.id('gantry-mega-form')) document.id('gantry-mega-form').set('autocomplete', 'off');
		Gantry.cookie = Cookie.read('gantry-admin');
		Gantry.cleanance();
		Gantry.initTabs();
	},

	load: function() {
	},

	cleanance: function() {
		Gantry.tabs = [];
		Gantry.panels = [];
		var paneSlider = document.getElement('.pane-sliders') || document.getElement('#gantry-panel');
		var items = paneSlider.getChildren();
		var fieldsets = items.getElement('.panelform'),
			wrapper, container;

		Gantry.tabs = document.getElements('#gantry-tabs li');

		if (!wrapper) {
			wrapper = document.getElement('.gantry-wrapper');
		}

		if (!container) {
			container = document.getElement('#gantry-panel');
		}

		var innertabs = fieldsets.getElements('.inner-tabs ul li').flatten();
		var innerpanels = fieldsets.getElements('.inner-panels .inner-panel').flatten();
		innertabs = $$(innertabs); innerpanels = $$(innerpanels);
		innertabs.each(function(tab, i) {
			tab.addEvents({
				'mouseenter': function() {this.addClass('hover');},
				'mouseleave': function() {this.removeClass('hover');},
				'click': function() {
					$$(innerpanels).setStyle('position', 'absolute');
					innerpanels.fade('out');
					innerpanels[i].setStyles({'position': 'relative', 'float': 'left', 'top': 0, 'z-index': 5}).fade('in');
					//Gantry.container.tween('height', panel.retrieve('gantry:height'));
					innertabs.removeClass('active');
					this.addClass('active');
				}
			});
		});

		Gantry.panels = $$('.gantry-panel');
		Gantry.wrapper = wrapper;
		Gantry.container = container;
		Gantry.tabs = $$(Gantry.tabs);

	},

	initTabs: function() {
		var max = 0;
		Gantry.panels.setStyle('position', 'absolute');
		var pan = document.getElement('#gantry-panel .active-panel');
		(pan || Gantry.panels[0]).setStyle('position', 'relative');
		Gantry.panels.set('tween', {duration: 'short', onComplete: function() {
			if (!this.to[0].value) this.element.setStyle('display', 'none');
		}});

		Gantry.panels.each(function(panel, i) {
			var height = panel.retrieve('gantry:height');

			Gantry.tabs[i].addEvents({
				'mouseenter': function() {this.addClass('hover');},
				'mouseleave': function() {this.removeClass('hover');},
				'click': function() {
					Cookie.write('gantry-admin-tab', i);
					if (this.hasClass('active')) return;

					$$(Gantry.panels).removeClass('active-panel').setStyle('display', 'none');
					panel.addClass('active-panel');

					Gantry.panels.setStyle('position', 'absolute');
					Gantry.panels.setStyles({'visibility': 'hidden', 'opacity': 0, 'z-index': 5, 'display': 'none'});
					panel.set('morph', {duration: 330});
					panel.setStyles({'display': 'inline-block', 'visibility': 'visible', 'position': 'relative', 'top': -20, 'z-index': 15}).morph({'top': 0, 'opacity': 1});
					//Gantry.container.tween('height', panel.retrieve('gantry:height'));

					Gantry.tabs.removeClass('active');
					this.addClass('active');
				}
			});
		});
	}

};


window.addEvent('domready', Gantry.init);
//window.addEvent('load', Gantry.load);