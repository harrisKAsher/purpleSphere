var running = 0;
var swimming = 0;
var biking = 0;
function Run_Display(){
    if (running === 0) {
        document.getElementById("runArrow").src="/web_sites/p2p/images/triangle_d.png";
        running++;
        document.getElementById('running').style.display = 'block';

    }
    else {
        document.getElementById("runArrow").src="/web_sites/p2p/images/triangle.png";
        running--;
        document.getElementById('running').style.display = 'none';
    }
}

function Swim_Display() {
    if (swimming === 0) {
        document.getElementById("swimArrow").src="/web_sites/p2p/images/triangle_d.png";
        swimming++;
        document.getElementById('swimming').style.display = 'block';
    }
    else {
        document.getElementById("swimArrow").src="/web_sites/p2p/images/triangle.png";
        swimming--;
        document.getElementById('swimming').style.display = 'none';
    }
}

function Bike_Display() {
    if (biking === 0) {
        document.getElementById("bikeArrow").src="/web_sites/p2p/images/triangle_d.png";
        biking++;
        document.getElementById('biking').style.display = 'block';
    }
    else {
        document.getElementById("bikeArrow").src="/web_sites/p2p/images/triangle.png";
        biking--;
        document.getElementById('biking').style.display = 'none';
    }
}

$( ".arrow" ).click(function() {
    if (  $( this ).css( "transform" ) == 'none' ){
        $(this).css("transform","rotate(90deg)");
    } else {
        $(this).css("transform","" );
    }
});
