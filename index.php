<?php
$feed = 'http://www.bbc.co.uk/bengali/index.xml';
$feed_to_array = (array) simplexml_load_file($feed);

?>
<?php require_once('header.php'); ?>
<div data-role="page" id="page1">
	<?php require_once('menu.php'); ?>
	<div data-role="header" data-theme="a" data-position="fixed" class="customhdr">
		<a href="#mypanel" class="panelicon ui-btn-hidden">&nbsp;</a>
		<h1 class="hdrtxt">Bangladesh Post</h1>	
			
	</div><!-- /header -->
	<div data-role="content" style="margin:0;padding:0" >
		<!--<img src="img/man.jpg" />-->
		<section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="img/man.jpg" />
				<p class="flex-caption">Captions and cupcakes. Winning combination.Captions and cupcakes. Winning combination.Captions and cupcakes. Winning combination.</p>
  	    		</li>
  	    		<li>
  	    	    <img src="images/kitchen_adventurer_lemon.jpg" />
				<p class="flex-caption">Captions and cupcakes.Captions and cupcakes. Winning combination.</p>
  	    		</li>
  	    		<li>
  	    	    <img src="images/kitchen_adventurer_donut.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="images/kitchen_adventurer_caramel.jpg" />
  	    		</li>
          </ul>
        </div>
      </section>
	</div>
	<div data-role="content" data-theme="d" class="mainbody" >	
		
		<ul data-role="listview" >
			<?php foreach($feed_to_array['entry'] as $v): ?>
			<li><a href="http://www.bbc.co.uk/bengali/news/2013/08/130826_sr_bd_saarc_judicial_conference.shtml" rel="external">
				<img src="img/album1.jpg">
				<h2><?php echo $v->title;?></h2>
				<p><?php echo $v->summary;?></p></a>
			</li>
			<?php endforeach; ?>
			
		</ul>
	</div>
	
	
	
	
</div>