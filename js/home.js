$( document ).ready(function() {

	showAndHideItems(
		document.getElementsByClassName("quoteText"), 
		'quoteText', 
		0);

	showAndHideItems(
		document.getElementsByClassName("quoteAuthor"), 
		'quoteAuthor', 
		0);

});


/**

Function that takes an array of elements and runs an infinite
show and hide loop.

items:  the array of elements passed into the function
itemID: the individiual items to be called by html ID.
itemNumber: the 0 index item currently being focussed.
*/
function showAndHideItems(items, itemID, itemNumber){

	var numItems = items.length;	
	var currentItemNumber = 0;
	
	if(itemNumber < numItems){
		
		$('#'+itemID+'_'+itemNumber).show(1000).delay(2000).hide(1000);
		setTimeout(function() {	

			var nextItem = itemNumber + 1;
			showAndHideItems(items, itemID, nextItem);

		}, 5000);
	
	} else {
		var firstItem = 0;
		showAndHideItems(items, itemID, firstItem);
	}
	


}


