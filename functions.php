<?php

function showSection($id, $photo, $name, $title, $phrase, $content, $contentMobile, $item, $colLeft, $colRight, $itemHTML) {

?>

<section id="<?php echo $id; ?>" class="hidden-xs hidden-sm <?php echo $id; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<div class="video-still">
					<a href="#<?php echo $id; ?>Video" class="sublime">
						<img src="img/<?php echo $photo; ?>" id="<?php echo $id; ?>Photo" class="img-circle video-thumbnail <?php echo $id; ?>Photo" alt="#" />
					</a>
				</div>
			</div>
			<div class="col-md-10">
				<h1><?php echo $name; ?> <small><?php echo $title; ?></small></h1>
				<div class="row">
					<div class="<?php echo $colLeft; ?>">
							<p class="lead"><?php echo $phrase; ?></p>
							<div class="content">
								<?php echo $content; ?>
							</div>
					</div>
					<div class="<?php echo $colRight; ?>">
						<?php if ($item != ""): ?>
							<img src="img/<?php echo $item; ?>" alt="" id="<?php echo $id; ?>IG" class="ig">
						<?php endif; ?>
						<?php if ($itemHTML != ""): ?>
							<?php echo $itemHTML; ?>
						<?php endif; ?>		
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="<?php echo $id; ?>Mobile" class="visible-xs visible-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<a href="#<?php echo $id; ?>Video" class="sublime">
					<img src="img/<?php echo $photo; ?>" class="img-circle" width="150" alt="#" />
				</a>
				<h1><?php echo $name; ?><br><small><?php echo $title; ?></small></h1>
				<div class="row">
					<p class="lead"><?php echo $phrase; ?></p>
					<div class="content">
						<?php echo $contentMobile; ?>
						<?php if ($item != ""): ?>
							<img src="img/<?php echo $item; ?>" alt="" class="ig">
						<?php endif; ?>
						<?php if ($itemHTML != ""): ?>
							<?php echo $itemHTML; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
}
?>