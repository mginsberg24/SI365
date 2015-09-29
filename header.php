<header>
	
	<script>
	$('.dropdown-toggle').dropdown();
	
	

	$(document).ready(function(){
    
    $('.link').click(function(event) {
        event.preventDefault();
 
        var full_url = this.href;
        
        var parts = full_url.split('#');
        var trgt = parts[1];

        var target_offset = $('#'+trgt).offset();
        var target_top = target_offset.top;

        $('html, body').animate({scrollTop:target_top}, 500);


    });
    
    $('nav#main a span').click(function(){
         $('nav#main a span').removeClass('active');
         $(this).addClass('active');
    });
    
});



$(document).scroll(function() {
  $('nav a[href="#'+$('section:hover').attr('id')+'"]').addClass('active').siblings('nav a').removeClass('active');
});

	</script>
	<div class="container-fluid">
		
		<div class="row full" >
			<div class="col-xs-4">
				<h1 class ="header">
				Welcome
				
				</h1>
			</div>
			<div class="col-xs-8 logos">
				<nav id = "nav main">
					<a href="https://twitter.com/"><img src="images/twitter.jpg"  alt="this links twitter"></a>
					<a href="https://www.facebook.com"><img src="images/facebook.jpg"  alt="this links to facebook"></a>
					<a href="https://www.linkedin.com/profile/view?id=176194910&trk=spm_pic"><img src="images/linkedin.jpg" alt="this links to linkedin"></a>
					
					<a href="#contact" class = "link">
						<span  id = "nav_section5"
						
					>Contact </span>|</a>
					<a href="#family"  class = "link">
						<span  id = "nav_section4"
						
					>Family </span>|</a>
					<a href="#past" class = "link">
						<span id = "nav_section3" 
						
					>Resume </span>|</a>
					<a href="#about" class = "link">
						<span id = "nav_section2" 
						
					>About </span>|</a>
					<a href ="#intro"   class = "link">
						<span id = "nav_section1">Home </span>|</a>
				</nav>
			</div>
		</div>
		<div class="mobile">
			<div class="dropdown">
				<a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
					<img class = "lines" src="images/lines2.jpg.png" alt="lines">
				</a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
					
					<li>
						<a href ="#intro"  id = "homelink" class = "link">
						<span>Home</span></a>
					</li>
					<li>
						<a href="#about" id = "aboutlink" class = "link">
						<span>About </span></a>
					</li>
					<li>
						<a href="#past" id = "pastlink" class = "link">
						<span>Resume </span></a>
					</li>
					<li>
						<a href="#family"  id = "familylink" class = "link">
						<span>Family </span></a>
					</li>
					<li>
						<a href="#contact" id = "contactlink" class = "link">
						<span>Contact </span></a>
						
					</li>
					
					
				</ul>
			</div>
		</div>
		
	</div>
	
</header>