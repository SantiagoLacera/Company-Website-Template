 // This jQuery function verifies that the HTML document has loaded
 $(document).ready(function()
 {  
   // TODO Create a var called usedArray of type Array with declared size 76 for the used bingo 
   //      numbers when generating the card
   
   
   /* The baseArray provides the base multiplier value for each column based on
		B = 1 - 15
		I = 16 - 30
		N = 31 - 45
		G = 46 - 60
		O = 61 - 75
   */
   var baseArray = new Array(0,0,0,0,0,1,1,1,1,1,2,2,2,2,3,3,3,3,3,4,4,4,4,4);
   
   // TODO Create a global var called number and initialize it to 0


   // TODO Create a global var called base and initialize it to 0
   
   
   // TODO call function init()
   
   
	// TODO Declare function init()
	// it is the main function of the JavaScript and jQuery that manages
	// the bingo card creation and updating during play
	
	{
		 // TODO Write a for loop that loops 24 times and calls function fillCard() 
		 //      passing the counter var as an argument

	
	
	}
	  	 
	// TODO Declare function fillCard(i), it receives with one parameter
	//      This function fills the bingo card

	{
		 // TODO update global variable base and set it equal to the element in
		 //      array baseArray using the passed in parameter i as the index multiplied
		 //      by the value 15

		 
		 // TODO update global variable number and set it equal to the value of 
		 //      global variable base added to a randomly selected number in the 
		 //      range of 1 - 15
	
		 
		// TODO Write an if condition that checks if the randomly generated number 
		//      has not been used  

		{
			// the jQuery updates the HTML tag element with id "cell#"
			// where the # is the random number!
			$('#cell' + i).html(number);
			
			// TODO update the used number array setting the location in the array
			//      to true to indicate that the value has been used
			

			
			// set the background and text color for new game
			var id = "cell" + i;
			document.getElementById(id).style.backgroundColor = "#eee";
			document.getElementById(id).style.color = "#333";			
		}
		// TODO Write the else leg of the above if condition 

		{
			// TODO using recursion call this function again
			
			
		}
	 }
	 
	// TODO Declare function resetUsedNumbersArray()
	//      This function resets the used number array for a new card

	{
		 // TODO Write a for loop that loops for the length of the array of used 
		 //      numbers and set the value of each array element to false  

		 
	}
	 
	 // This jQuery function responds to an HTML tag element with id = newCard being clicked
	 $('#newCard').click(function()
	 {
		// TODO Call function resetUsedNumberArray to reset the used numbers
	
	
		// TODO call function init to generate a new bingo card
	
	 });
	 
	 // This jQuery function toggles the backgroundColor and text color 
	 // based on what is it currently set to
	 $('td').click(function()
	 {
		var toggle = this.style;
		toggle.backgroundColor = toggle.backgroundColor? "":"#333";
		toggle.color = toggle.color? "":"#fff";
	 });
 });