<?php

	$english = array(
	
		/**
		 * Menu items and titles
		 */
	
			'messageboard:board' => "Message board",
			'messageboard:messageboard' => "message board",
			'messageboard:viewall' => "View all",
			'messageboard:postit' => "Post it",
			'messageboard:history' => "history",
			'messageboard:none' => "There is nothing on this message board yet",
			'messageboard:num_display' => "Number of messages to display",
			'messageboard:desc' => "This is a message board that you can put on your profile where other users can comment.",
	
			'messageboard:user' => "%s's message board",
			'messageboard:name' => "Name:",
			'messageboard:replyon' => "reply on",
			'messageboard:history' => "History",
			
         /**
	     * Message board widget river
	     **/
	        
	        'messageboard:river:annotate' => "%s has had a new comment posted on their message board.",
	        'messageboard:river:create' => "%s added the message board widget.",
	        'messageboard:river:update' => "%s updated their message board widget.",
	        'messageboard:river:noperformer' => "A new message",
			'messageboard:river:added' => "%s posted on",
			'messageboard:river:messageboard' => "message board",

			
		/**
		 * Status messages
		 */
	
			'messageboard:posted' => "You successfully posted on the message board.",
			'messageboard:deleted' => "You successfully deleted the message.",
	
		/**
		 * Email messages
		 */
	
			'messageboard:email:subject' => 'You have a new message board comment!',
			'messageboard:email:body' => "You have a new message board comment from %s. It reads:

			
%s


To view your message board comments, click here:

	%s

To view %s's profile, click here:

	%s

You cannot reply to this email.",
			'messageboard:email:body:anonymous' => "You have a new message board comment from %s. It reads:

			
%s


To view your message board comments, click here:

	%s

You cannot reply to this email.",
	
		/**
		 * Error messages
		 */
	
			'messageboard:blank' => "Sorry; you need to actually put something in the message area before we can save it.",
			'messageboard:noname' => "Sorry; you need to enter a name if you would like to leave a message.",
			'messageboard:notfound' => "Sorry; we could not find the specified item.",
			'messageboard:notdeleted' => "Sorry; we could not delete this message.",
			'messageboard:somethingwentwrong' => "Something went wrong when trying to save your message, make sure you actually wrote a message.",
	     
			'messageboard:failure' => "An unexpected error occurred when adding your message. Please try again.",
	
	);
					
	add_translation("en",$english);

?>