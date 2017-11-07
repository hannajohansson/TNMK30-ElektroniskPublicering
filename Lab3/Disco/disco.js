var canvas = document.getElementById('rityta');
var image = document.getElementById('image');
var flipimage = document.getElementById('flipimage');
var knapp = false;
var ctx = canvas.getContext("2d");
var t = 0; 

//Pop-up window
window.alert("Varning för PARTYYYYYY!!!!");

function dance() 
{
	knapp = !knapp; 
}

function draw() {
	// clear the canvas
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	
	// Draw image
	if (knapp) 
	{
		ctx.drawImage(image,1000, 200 + Math.sin(t/10)*200);
		ctx.drawImage(flipimage,700, 200 + Math.cos(t/10)*200);
	}
	
	// Compute a new position for the square 
	var x = 300 + Math.cos(t/30)*200;
	var y = 300 + Math.sin(t/10)*100;
	// Draw a pink/purple filled square
	ctx.fillStyle = "#ff0156";
	ctx.strokeStyle = "#6600FF";
	ctx.fillRect(x, y, 200, 70);
	ctx.strokeRect(x, y, 200, 70);			

	// Compute a new position for the square 
	var x = 150 + Math.cos(t/8)*100;
	var y = 280 + Math.sin(t/10)*200;
	// Draw a blue/green filled square
	ctx.fillStyle = "#0099FF";
	ctx.strokeStyle = "#00FF00";
	ctx.fillRect(x, y, 75, 100); 
	ctx.strokeRect (x, y, 75, 100);
	
	// Compute a new position for the square 
	var y = 200 + Math.cos(t/30)*200;
	var x = 280 + Math.sin(t/10)*100;
	// Draw a purple filled square
	ctx.fillStyle = "#9900CC";
	ctx.fillRect(x, y, 75, 150); 
	
	// Compute a new position for the square		
	var x = 150 + Math.sin(t/15)*300;
	var y = 150 + Math.cos(t/5)*100;
	// Draw a red filled square
	ctx.fillStyle = "#FF0066";
	ctx.strokeStyle = "#00FFFF";
	ctx.lineWidth = 25;
	ctx.fillRect(x, y, 100, 70); 
	ctx.stroke();

	// Compute a new position for the square 
	var x = 500 + Math.cos(t/25)*300;
	var y = 320 + Math.sin(t/10)*100;
	// Draw a circle
	ctx.fillStyle = "#ff0247";
	ctx.strokeStyle = "#001234";
	ctx.lineWidth = 5;
	ctx.beginPath();
	ctx.arc(x,y,25*(Math.sin(t/20)+1),0,2*Math.PI);
	ctx.stroke();
	ctx.fill();
	
	//hysterisk boll
	var y = 200 + Math.cos(t/30)*20;
	var x = 320 + Math.sin(t/5)*150;
	//Rita den hysteriska bollen
	ctx.fillStyle = "#0000FF";
	ctx.strokeStyle = "#001234";
	ctx.lineWidth = 5;
	ctx.beginPath();
	ctx.arc(x,y,50*(Math.sin(t/20)+1),0,2*Math.PI);
	ctx.stroke();
	ctx.fill();
	
	// take a time step and call this function soon again
	t++;
	requestAnimationFrame(draw);		
}

draw();