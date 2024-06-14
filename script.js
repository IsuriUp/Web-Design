alert("Welcome To Our Fashion Zara")

var myDate = new Date();
var hrs = myDate.getHours();

var greet;
	
if (hrs < 12)
	greet = 'Good Morning';
else if (hrs >= 12 && hrs <= 17)
	greet = 'Good Afternoon';
else if (hrs >= 17 && hrs <= 19)
	greet = 'Good Evening';
else if (hrs >=19 && hrs <=24)
	greet = 'Good Night';
	


document.getElementById('time').innerHTML = '<b>' + greet + '</b> and Welcome to Our Fashion Zara';
