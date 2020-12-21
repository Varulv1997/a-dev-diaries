<!-- Show each post on this page -->
<?php foreach ($content as $page): ?>

<article class="post">

	<!-- Show plugins, Hook: Post Begin -->
	<?php Theme::plugins('pageBegin') ?>
  
	<!-- Post's header -->
	<header>
		<div class="title">
			<h1><a href="<?php echo $page->permalink() ?>"><?php echo $page->title() ?></a></h1>
			<p><?php echo $page->description() ?></p>
		</div>
		<div class="meta">
	                <?php
	                	// Get the user who created the post.
	                	$User = $page->user();

	                	// Default author is the username.
	                	$author = $User->username();

	                	// If the user complete the first name or last name this will be the author.
						if( Text::isNotEmpty($User->firstName()) || Text::isNotEmpty($User->lastName()) ) {
							$author = $User->firstName().' '.$User->lastName();
						}
			?>
			<time class="published" datetime="<?php echo $page->date() ?>"><?php echo $page->date() ?></time>
		</div>
		<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(70655524, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/70655524" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	</header>

	<!-- Cover Image -->
	<?php
		if($page->coverImage()) {
			echo '<a href="'.$page->permalink().'" class="image featured"><img src="'.$page->coverImage().'" alt="Cover Image"></a>';
		}
	?>

	<!-- Post's content, the first part if has pagebrake -->
	<?php echo $page->contentBreak(); ?>
	
	<!-- Post's footer -->
	<footer>

		<!-- Read more button -->
	        <?php if($page->readMore()) { ?>
		<ul class="actions">
			<li><a href="<?php echo $page->permalink() ?>" class="button"><?php $L->p('Read more') ?></a></li>
		</ul>
		<?php } ?>

		<!-- Post's tags -->
		<ul class="stats">
		<?php
			$pageTags = $page->tags(true);

			foreach($pageTags as $tagKey=>$tagName) {
				echo '<li><a href="'.HTML_PATH_ROOT.$url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a></li>';
			}
		?>
		</ul>
	</footer>

	<!-- Plugins Post End -->
	<?php Theme::plugins('pageEnd') ?>

</article>

<?php endforeach; ?>

<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1): ?>
	<ul class="actions pagination">

	<!-- Show previus page link -->
	<?php if(Paginator::showPrev()) { ?>
		<li><a href="<?php echo Paginator::previousPageUrl() ?>" class="button big previous"><?php $L->p('Previous Page') ?></a></li>
    <?php } ?>

	<!-- Show next page link -->
	<?php if(Paginator::showNext()) { ?>
		<li><a href="<?php echo Paginator::nextPageUrl() ?>" class="button big next"><?php $L->p('Next Page') ?></a></li>
    <?php } ?>

	</ul>
<?php endif ?>
