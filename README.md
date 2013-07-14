InfoBubble

==========

This is a Google provided lib, which allows to create custom InfoWindows.


It is pretty much same to original, which you can find here:

http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobubble/examples/example.html?


Original Javascript file can be found here:

http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobubble/src/infobubble.js


If you want to use it, it is under same license as original (just to take care of formalities).


All changes are marked:

jp[start] added/changed code here jp[end]

NOTE: 5 new elements on the bottom.

  	infoBubble2 = new InfoBubble({
		    map: map,
		    content: '<div class="phoneytext">some content stuff goes here</div>',
		    position: new google.maps.LatLng(-35, 151),
		    shadowStyle: 1,
		    padding: 0,
		    backgroundColor: 'rgb(57,57,57)',
		    borderRadius: 4,
		    arrowSize: 10,
		    borderWidth: 1,
		    borderColor: '#2c2c2c',
		    disableAutoPan: false,
		    hideCloseButton: false,
		    arrowPosition: 30,
		    backgroundClassName: 'phoney',
		    arrowStyle: 2
		    ,closeSrc: 'img/closeH.png'
		    ,closeHeight: 28
		    ,closeWidth: 28
		    ,closeTop: 6 //this + border width
		    ,closeRight: 6 //this + border width
		});



Pure CSS supoport:
------------------------
Provided code does not allow for :hover changes to closing image, as it is based on originally used &lt;IMG&gt; tag.
I did not want to mess too much with original concept (API should not allow too much of custom injections in general),
so I just extended &lt;IMG&gt; capacity.

If you want to add custom class and change closing element from &lt;IMG&gt; to e.g. &lt;DIV&gt; do some thing like this:

1. line 221 - find:
var close = this.close_ = document.createElement('IMG');

change to:

var close = this.close_ = document.createElement('DIV');

add immediately after: 

close.className = 'yourCustomClass';

You may remove, or keep close.style['xxx'] elements - best remove them and add css code to class.

Remove: (line 45)
  this.closeSrc = opt_options.closeSrc; 
  this.closeHeight = opt_options.closeHeight;
  this.closeWidth = opt_options.closeWidth;
  this.closeTop = opt_options.closeTop;
  this.closeRight = opt_options.closeRight;

You also must remove and deal with top/right values around line 1785.

Note: right value is dynamic, reacting to scroller.




