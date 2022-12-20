 alert('hello');
window.addEventListener('scroll',function(){
    var header=document.querySelector('.frontpage-section');
    console.log(window.innerHeight);
    header.classList.toggle("article-margin",window.scrollY>0);
})
jQuery(document).on('readystatechange', function(e) {
	console.log(document.readyState);
	if(document.readyState=="interactive")
	  {
	    var all = document.getElementsByTagName("*");
	    for (var i=0, max=all.length; i < max; i++) 
	    {
	      setElement(all[i]);
	    }
	  }
});

function checkElement(ele) {
  var allElements = document.getElementsByTagName("*");
  console.log(allElements);
  var totalEleCount = allElements.length;
  var perIncrement = 100 / allElements.length;

  if(jQuery(ele).on()) {
    var progWidth = perIncrement + Number(document.getElementById("progress-width").value);
    document.getElementById("progress-width").value = progWidth;
    var roundedProgNum = Math.round(progWidth);
    jQuery("#progress-percent-bar").animate({width:progWidth+"%"},2,function(){
    	jQuery("#progress-percent-number").text(roundedProgNum);
      if(document.getElementById("progress-percent-bar").style.width == "100%")
      {
        jQuery(".loading-screen").fadeOut("slow");
        jQuery("#progress-width").val('0');
      }			
    });
  } else {
    setElement(ele);
  }
}

function setElement(set_element)
{
  checkElement(set_element);
}