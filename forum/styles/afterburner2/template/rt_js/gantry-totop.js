/*!
 * @version   $Id: gantry-totop.js 8111 2013-03-07 16:54:05Z karol $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - ${copyright_year} RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

window.addEvent('domready', function() {
	var handle = document.getElements('.rt-totop');
	if (handle.length) {
		var scroller = new Fx.Scroll(window);
		handle.setStyle('outline', 'none').addEvent('click', function(e) {
			e.stop();
			scroller.toTop();
		});
	}
});