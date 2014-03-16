<script>
function new_mg() {
	var w = parseInt(document.getElementById("mg_width").value) || 20,
		h = parseInt(document.getElementById("mg_height").value) || 20;
	mg.set({width: w, height: h}).create().show();
	document.getElementById("mg_width").value = w;
	document.getElementById("mg_height").value = h;
	count();
}

function count() {
	$.get("stat/count.py", {
			r: Math.random()
		}, function (r) {
			r = r.replace(/[\r\n\s]/g, "");
			if (r.match(/^\d+$/))
				$("#count").html(r);
		});
}

function mark(h, ob) {
	mg.me.setMark(h, ob.checked);
}

var mg = new MG("mg");
new_mg();
</script>