<!DOCTYPE html> 
<html> 
<head> 
	<meta charset="utf-8" />
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="jquery.mobile-1.3.2.min.css" />
	<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css" />
	<script src="jquery-1.9.1.min.js"></script>
	<script src="jquery.mobile-1.3.2.min.js"></script>
	<script defer src="jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
		 directionNav: false,    
        start: function(slider){
         }
      });
    });
  </script>
</head> 
<body>
