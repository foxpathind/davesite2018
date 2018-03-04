    <!-- .off-canvas position-left -->
    <div class="off-canvas position-left nav medium-12 columns<?php if($site->showmenu() == '1'): ?> reveal-for-large<?php endif ?>" id="offCanvas" data-off-canvas>


		<div class="top">
			<br/>
        	<!-- Title/Logo -->
	        	<ul class="menu vertical title">
	        	<?php if($image = $site->image('logo.jpg')): ?>
		            <li class=""><a href="<?php echo $site->url() ?>"><?php echo thumb($site->image('logo.jpg'), array('width' => 100)) ?></a></li>
		          <?php else: ?>
		            <li><strong><a href="<?php echo $site->url() ?>"><?php echo $site->title() ?></a></strong></li>
		          <?php endif ?>
		        </ul>

			<br/>
          	<!-- Description -->
	        	<?php if(!$site->description()->empty()): ?>
	        	<ul class="menu vertical description">
	            	<li class="menu-text"><?php echo $site->description()->html() ?></li>
	        	</ul>
	        <br/>		
	       		<?php endif ?>
          	

          	<!-- LOGIN/LOGOUT Link cf 2017-Apr-30 -->

    		<?php if($user = $site->user()): ?>
      			<a href="<?php echo url('logout') ?>">LOGOUT</a>
      		<?php else: ?>
      			<a href="<?php echo url('login') ?>">LOGIN</a>
    		<?php endif ?>

			<!-- User Info cf 2017-Apr-30 -->

			<?php if($user = $site->user()): ?>
  				<div class="user">
   					<div class="user-name">
      					Hi <?php echo esc($user->firstName() . ' ' . $user->lastName()) ?>!<br />
      					Your Username is <?php echo ($user->username()) ?><br />
      					The page client is <?php echo ($page->client()) ?>
      					<?php if($user->username() == $page->client()): ?>
      						<br />User Client MATCH!
      					<?php else: ?>
      						<br />User Client NO MATCH!
  						<?php endif ?>
    				</div>
  				</div>
  			<?php else: ?>
  				<div class="user-name">
  					Welcome
				</div>	
  			<?php endif ?>

<br />
<p> PAGES LOAD HERE: </p>


			<!-- Pages -->
			<!-- CF menu dependent  here show everything if the user is an admin-->
		   <?php if($user = $site->user() and $user->hasRole('admin')): ?>
		    <!-- this code above -->
		        <?php $items = $pages->filter(function($selection) {
		        return $selection->template() != 'section'; })->visible();
		        if($items->count() > 0): ?>
	                <ul class="menu vertical pages">
	                  <?php foreach($items as $item): ?>
	                  <li><a<?php ecco($item->isOpen(), ' class="active"') ?> href="<?php if($item->template() == 'link'): ?><?php echo $item->link()->url() ?><?php else: ?><?php echo $item->url() ?><?php endif ?>"><?php echo html($item->title()) ?></a></li>
	                  <?php endforeach ?>
	                </ul>
	        	<?php endif ?>



	       <?php else: ?>
	        	<?php if($user = $site->user()): ?>
		        	 
						<?php $items = $pages->filter(function($selection) {
				        return $selection->template() != 'section'; })->visible();
				        if($items->count() > 0): ?>
			                <ul class="menu vertical pages">
			                  <?php foreach($items as $item): ?>
			                  	<?php if($user->username() == $item->client()): ?>
			                  		<li><a<?php ecco($item->isOpen(), ' class="active"') ?> href="<?php if($item->template() == 'link'): ?><?php echo $item->link()->url() ?><?php else: ?><?php echo $item->url() ?><?php endif ?>"><?php echo html($item->title()) ?></a></li>
			                  	<?php endif ?>
			                  <?php endforeach ?>
			                </ul>

		        	<?php endif ?>
	           	<?php endif ?>
			<!-- CF end if -->    
			<?php endif ?>
        	<br/>
<p> SECTIONS LOAD HERE: </p>
			<?php if($site->accordion() != '1'): ?>
		        <!-- Sections -->
		        <?php $items = $pages->filter(function($selection) {
		          return $selection->template() == 'section'; })->visible();
		          if($items->count() > 0): ?>
		            <?php foreach($items as $item): ?>
		            	
			                <ul class="menu vertical sections">
				                <li>
				                	<span class="menu-text section-title"><?php echo html($item->title()) ?></span>
							            <?php $children = $item->children()->visible();
							            if($children->count() > 0): ?>
						                <ul class="vertical menu">
							                <?php foreach($children as $child): ?>
							                    <li><a<?php ecco($child->isOpen(), ' class="active"') ?> href="<?php if($child->template() == 'link'): ?><?php echo $child->link()->url() ?><?php else: ?><?php echo $child->url() ?><?php endif ?>"><?php echo html($child->title()) ?></a>
							                    </li>
							                <?php endforeach ?>
							            </ul>    
					                <?php endif ?>
				                </li>
			                </ul>

			<br/>
		            <?php endforeach ?>
		        <?php endif ?>
		    <?php endif ?>

		    <?php if($site->accordion() == '1'): ?>
		        <!-- Accordion sections -->
			        <?php $items = $pages->filter(function($selection) {
			        return $selection->template() == 'section'; })->visible();
			        if($items->count() > 0): ?>
			            <?php foreach($items as $item): ?>
			            	<ul class="vertical menu accordion-sections" data-accordion-menu>
								<li>
									<a class="menu-text section-title" href="#"><?php echo html($item->title()) ?></a>
										<?php $children = $item->children()->visible();
										if($children->count() > 0): ?>
									    <ul class="vertical menu nested<?php ecco($item->isOpen(), ' is-active') ?>">
										    <?php foreach($children as $child): ?>
										    	<li><a<?php ecco($child->isOpen(), ' class="active"') ?> href="<?php echo $child->url() ?>"><?php echo html($child->title()) ?></a>
										    	</li>
										    <?php endforeach ?>
										    	<br/>
								    	</ul>
									<?php endif ?>
							  	</li>
							</ul>
			            <?php endforeach ?>
			        <?php endif ?>
			<br/>
		    <?php endif ?>
		</div>

		<div class="bottom">

	    <!-- Social -->
				<ul class="menu social">
					<?php if(!$site->socialtitle()->empty()): ?>
						<!-- <li class="menu-text social-title" style="display: block;">share</li> -->
					<?php endif ?>
						<li>
							<a href="http://www.facebook.com/sharer.php?u=<?php echo html($page->url()) ?>" target="_blank"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @your_account')?>" target="blank" title="Tweet this"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a>
						</li>
					<?php foreach(yaml($site->follow()) as $link): ?>
						<li>
							<a href="<?php echo url($link['followlink']) ?>" target="_blank"><?php echo $link['followpicto'] ?></a>
						</li>
					<?php endforeach ?>
				</ul>
	        	<br/>


	    <!-- Copyright -->
	        <ul class="menu vertical copyright">
	        	<li class="menu-text">
					<?php if(!$site->author()->empty()): ?><?php echo $site->author() ?><?php endif ?>
					<!--<a href="http://phtgrph.oliviergassies.fr/" target="blank">MADE WITH PHTGRPH</a> -->
				</li>
			</ul>
		</div>




      </div><!-- /.off-canvas position-left -->