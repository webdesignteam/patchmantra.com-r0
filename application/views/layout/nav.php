<!-- Nav Menu  -->
<div class="row nav_menu">	
	<nav class="navbar navbar-expand-lg navbar-light light fixed-top">		
		<div class="container-fluid">	
			<a class="navbar-brand" href="<?php echo base_url();?>"><img class="patchmantra_logo" src="<?php echo base_url();?>assets/img/patch_mantra_logo.svg?Version=<?php echo Version; ?>" alt="patch_mantra_logo" ></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<label class="hamburger">
				<input type="checkbox">
				<svg viewBox="0 0 32 32">
					<path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
					<path class="line" d="M7 16 27 16"></path>
				</svg>
				</label>
			</button>		
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto scrollpy">					
					<li class="nav-item <?php if(!empty($active_item)){ if($active_item =="home"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>">Home</a>
					</li>
					<li class="nav-item <?php if(!empty($active_item)){ if($active_item =="aboutus"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>about-us">About Us</a>
					</li>
					<li class="nav-item <?php if(!empty($active_item)){ if($active_item =="why-patches"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>why-patches">Why Patches</a>
					</li>
					<li class="nav-item <?php if(!empty($active_item)){ if($active_item =="explore-our-patches"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>explore-our-patches">Explore Our Patches</a>
					</li>
					 <li class="nav-item <?php if(!empty($active_item)){ if($active_item =="mantrabot"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>mantrabot">MantraBot</a>
					</li>
					<li class="nav-item <?php if(!empty($active_item)){ if($active_item =="blogs"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>blog">Blog</a>
					</li>
					<li
						class="nav-item <?php if(!empty($active_item)){ if($active_item =="faqs"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>faqs">FAQ’s</a>
					</li>
					<li
						class="nav-item <?php if(!empty($active_item)){ if($active_item =="contactus"){ echo"active"; }} ?>">
						<a class="nav-link " name='link' href="<?php echo base_url();?>contact-us">Contact
							Us</a>
					</li>
				</ul>
			</div>
		</div>
		 <div class="chatboat_img_sec">
		    <a href="http://20.235.149.147:5081/" target="_blank">
		        <img loading="eager" src="<?php echo base_url();?>assets/img/chatboat_img.png?Version=<?php echo Version; ?>" alt="About Us">
		    </a>
		</div>
	</nav>
		
</div>