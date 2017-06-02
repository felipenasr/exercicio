<header>

	  <div class="ui sidebar inverted vertical menu resp-menu">
	    <a class="item">
	      1
	    </a>
	    <a class="item">
	      2
	    </a>
	    <a class="item">
	      3
	    </a>
	  </div>

	  
	  <div class="pusher">
		
		<a class="ui ignored label open-menu hbg-men">
			<img src="assets/hamburger-menu.png" alt="">
		</a>
	    
	  </div>
	

</header>



<script>

	$(document).on('click', '.open-menu', function(){
		$('.ui.sidebar').sidebar('toggle');
	});
</script>