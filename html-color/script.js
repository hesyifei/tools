(function() {
 var Event = YAHOO.util.Event, picker, hexcolor;

 Event.onDOMReady(function() {
 picker = new YAHOO.widget.ColorPicker("container", {
 showhsvcontrols: true,
 showhexcontrols: true,
 showwebsafe: false });
			picker.skipAnim=true;	
			var onRgbChange = function(o) {				setTimeout ("document.getElementById('yui-picker-hex').select()", 50);			}
			picker.on("rgbChange", onRgbChange);
			Event.on("newcolor", "click", function(e) {
				hexcolor = cc(document.getElementById('startcolor').value);
				picker.setValue([HexToR(hexcolor), HexToG(hexcolor), HexToB(hexcolor)], false); 
			});
 });
})();