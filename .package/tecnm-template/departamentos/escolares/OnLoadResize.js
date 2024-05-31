$(".collapse").on("click", function () {
    alert('You clicked the menu icon');
  });

function reajustarPdf() 
{
  if(screen.width <= 700)
  {
    document.getElementById("IMSS_Pasos").setAttribute("style", "min-width: 90%; height: 40%; margin-left: 6%;");
    document.getElementById("h5_Size").setAttribute("style", "font-size: 92%; color: white;");
    document.getElementById("titulo").setAttribute("style", "font-size: 250%");
    document.getElementById("seguro").setAttribute("style", "font-size: 120%; text-align: center; color: white; padding-top: 0.8%;");
    document.getElementById("imgTec").setAttribute("style", "float: left; display: block; width: 10%; height: 10%; margin: 0.5%;");
  }
}