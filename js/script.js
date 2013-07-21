//------------------------------------------------- GLOBALS

var global = {
	
	init: function() {
		
	}
};

//------------------------------------------------- RESPONSIVE FUNCTIONALITY

var res = {
	
	$body: $(document.body),

//--- Init responsive functions
	init: function() {
		// listeners for breakpoints should be defined before the respond() function is called
		res.testRespond();
		
		// set up responsive javascript
		res.setupRes();
	},
	
//--- Initialize and set up jRespond
	setupRes: function() {
		var jRes = jRespond([
				{
					label: 'small',
					enter: 0,
					exit: 640
				},{
					label: 'large',
					enter: 641,
					exit: 100000
				}
			]);
		
		// initialize breakpoint functions
		jRes.addFunc([
			{
				// apply/remove body classes and create events for enter- / exit- breakpoints
				// usage: res.$body.on('enter-[breakpoint]', function(e) { });
				breakpoint: '*',
				enter: function(bpContext) {
					res.$body
						.addClass('view-' + bpContext.entering)
						.trigger({
							type: 'enter-' + bpContext.entering,
							curBP: bpContext.entering,
							prevBP: bpContext.exiting
						});
					
				},
				exit: function(bpContext) {
					res.$body
						.removeClass('view-' + bpContext.exiting)
						.trigger({
							type: 'exit-' + bpContext.exiting,
							curBP: bpContext.entering,
							prevBP: bpContext.exiting
						});
				}
			}
		]);	
	},
	
//--- Sample function to demonstrate using breakpoint custom events
	testRespond: function() {
		res.$body.on('enter-small', function(e) {
			var isFirstLoad = !!e.prevBP === false;
			
			console.log('Initial pageload:', isFirstLoad, ' Entering:' + e.curBP, ' Leaving:', e.prevBP);
		});
		
		res.$body.on('enter-large', function(e) {
			var isFirstLoad = !!e.prevBP === false;
			
			console.log('Initial pageload:', isFirstLoad, ' Entering:' + e.curBP, ' Leaving:', e.prevBP);
		});
	}
};

//------------------------------------------------- DOCUMENT READY

global.init();

if (!$('html').hasClass('oldIE')) {	// remove this "if" wrapping statement if supporting responsive in older browsers, ie., with respond.js
	res.init();
}