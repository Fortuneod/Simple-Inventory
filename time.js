function Time() {
	var date = new Date();
	
	var year = date.getYear();
	
	if(year<2000) {year = year + 1900;}
	
	document.getElementById('year').innerHTML=year;

setTimeout(Time, 1000);
}
window.onload=function() {Time();}


