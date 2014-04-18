		// ===========  INSTAGRAM   =========== //
		
		$(window).load(function() {
		
			$('#loading-image').hide(); // hide loading screen
		
			 $("img.instagram-image").each(function(i) {
			   $(this).delay(500*i).fadeIn();
			 });
			 
		});


		$(function(){
		  var
		    insta_container = $(".instagram")
		  , insta_next_url
		  
		  insta_container.instagram({
		      hash: 'myworkspace'
		    , clientId : '6e94fdbeefdb4988a1c53145102f4606'
		    , show : 21
		    , image_size : 'low_resolution'
		    , onComplete : function (photos, data) {
		      insta_next_url = data.pagination.next_url
		    }
		  })
		
		  $('.load-more').on("click", function(){
		    var 
		      button = $(this)
		    , text = button.text()
	
		    if (button.text() != 'Loading...'){
		      button.text('Loading...')
		      insta_container.instagram({
		          next_url : insta_next_url
		        , image_size : 'low_resolution'
		        , show : 12
		        , onComplete : function(photos, data) {
		          insta_next_url = data.pagination.next_url
		          button.text(text)
		          
		          $("img.instagram-image").fadeIn(); // display the hidden photos
		        }
		      }) 
		    }     
		  })

	
	
		//	Center Images on Load
		var imageHeight, wrapperHeight, overlap, container = $('.image-wrap');  
		
		   function centerImage() {
		       imageHeight = container.find('img').height();
		       wrapperHeight = container.height();
		       overlap = (wrapperHeight - imageHeight) / 2.8;
		       container.find('img').css('margin-top', overlap);
		   }
		    
		   $(window).on("load resize", centerImage);
		   
	}); // End it all
	
	
	