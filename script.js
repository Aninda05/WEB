	function changeimage(){
			var image=document.getElementById("myImage");
			if (image.src.match("image/giphy-downsized.gif")) {
				image.src="image/giphy-downsized1.gif";
			}
			else if(image.src.match("image/giphy-downsized1.gif")){
				image.src="image/giphy-downsized2.gif";
			}
			else
			{
				image.src="image/giphy-downsized.gif";
			
			}
		}

			function myfunction(){
			var x,text1;
			x=document.getElementById("numb").value;
			if(isNaN(x)||x<1||x>10)
				text1="Not valid!";
			else
				text1="Input Ok";
			document.getElementById("ip").innerHTML=text1;
			}