var imageName=new Array(5);
     imageName[0]='<img src="/web_sites/p2p/images/images/s_skyline.jpg" class="images" alt="San Francisco Skyline"><br><span class="bold">San Francisco Skyline</span>';
     imageName[1]='<img src="/web_sites/p2p/images/images/s_golden-gate.jpg" class="images" alt="Golden Gate Bridge at Dusk"><br><span class="bold">Golden Gate Bridge at Dusk</span>';
     imageName[2]='<img src="/web_sites/p2p/images/images/s_golden-gate-cloud.jpg" class="images" alt="Golden Gate Bridge on a Cloudy Day"><br><span class="bold">Golden Gate Bridge on a Cloudy Day</span>';   
     imageName[3]='<img src="/web_sites/p2p/images/images/s_alcatraz_Wide.jpg" class="images" alt="A View of the Bay with Alcatraz"><br><span class="bold">A View of the Bay with Alcatraz</span>';
     imageName[4]='<img src="/web_sites/p2p/images/images/s_alcatraz.jpg" class="images" alt="Alcatraz Island"><br><span class="bold">Alcatraz Island</span>';
	 imageName[5]='<img src="/web_sites/p2p/images/images/s_bay-bridge.jpg" class="images" alt="Bay Bridge"><br><span class="bold">Bay Bridge</span>'; 

for (i = 0; i <= 0; i++) {

    var whichImage1=get_randomImageNum();
    var whichImage2=get_randomImageNum();
    
    if (whichImage1 == whichImage2) {
        i--
    }
    else {
        var images = imageName[whichImage1] + '<br><br>' + imageName[whichImage2];
    }
}          
  document.getElementById("random_image").innerHTML = images; 

function get_randomImageNum()
{
    var ranImageNum= Math.floor(Math.random()*6);
    return ranImageNum;
}

            
     
         
            
                   
         
         

         

         
         