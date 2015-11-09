window.onload = function () {
	makePopupLinks();
}

function makePopupLinks () {
	var entries = document.getElementsByTagName('a');
	for (var i = 0; i < entries.length; i++) {
		if (entries[i].className.indexOf('new-window') > -1) {
			entries[i].onclick = function () {
				window.open(this.href);
				return false;
				}
			}
		}
}