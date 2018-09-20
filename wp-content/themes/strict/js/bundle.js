$j = jQuery.noConflict();
$j( document ).ready(function() {
      
 
    $j('.thumbnail').hover(
        function(){
            $j(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $j(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
	
	// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
//var img = document.getElementById('img1');
var img = document.getElementById('zoom1');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");


$j(".zoom").on("click", function(e) {
   var oID = $j(this).attr("id");
   modal.style.display = "block";
   modalImg.src = 'wp-content/themes/strict/img/item-'+oID+'.jpg';
   captionText.innerHTML = this.alt;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
});