/*问好随时间进行调整*/
var _time = new Date();
var time = parseInt(_time.getHours());
var _byid = document.getElementById("moment");
if (time > 0 && time <= 6) {
	var _morning = document.createTextNode("早上好~");
	var morning = _byid.appendChild(_morning);
} else if (time > 6 && time <= 11) {
	var _am = document.createTextNode("上午好~");
	var am = _byid.appendChild(_am);
} else if (time >= 12 && time <= 19) {
	var _pm = document.createTextNode("下午好~");
	var pm = _byid.appendChild(_pm);
} else if (time >= 20 && time < 24) {
	var _night = document.createTextNode("晚上好~");
	var night = _byid.appendChild(_night);
} else if (time = 0) {
    var _zero = document.createTextNode("0点了，要早点休息了");
	var zero = _byid.appendChild(_night);
}