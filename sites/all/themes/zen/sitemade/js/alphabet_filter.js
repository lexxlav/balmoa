$(document).ready(function(){
	  $(".alphabet a").on('click', function(e){
	    e.preventDefault();
	    var t = $(this).html();
	    if(t=='Все') t = "";
	    $("#edit-name").val(t);
	    $("#edit-submit-brend-list-term").click();
	  });
});