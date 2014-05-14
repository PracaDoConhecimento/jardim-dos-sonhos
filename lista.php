<?php 
include_once('inc/mensagem.php');
include_once('inc/header.php'); 
?>
<script src="js/vendor/isotope.pkgd.min.js"></script>
<script src="js/vendor/masonry-horizontal.js"></script>

<div id="jardim">
<?php
$count = 0;
$mensagens = new Mensagem();
$listaDeMensagens = $mensagens->getListagem();

foreach ($listaDeMensagens as $mensagem):
?>
<div id="mensagem-<?php echo $count; ?>" class="mensagem item">
	<div class="conteudo">
		<h3>"<?php echo $mensagem['conteudo']; ?>"</h3>	
	</div>
	<div class="autor pull-right">
		<small><?php echo $mensagem['autor_nome']; ?></small>
	</div>
</div>
<?php	
	$count++;
endforeach;
?>
</div>


<script type="text/javascript">
	jQuery(document).ready(function($) {
		var $container = $('#jardim');
		// init
		$container.isotope({
		  	itemSelector: '.item',
		  	layoutMode: 'masonry',
			masonry: {
		      columnWidth: 300
		    },
		    cellsByRow: {
		      columnWidth: 220,
		      rowHeight: 220
		    },
		    masonryHorizontal: {
		      rowHeight: 100
		    },
		    cellsByColumn: {
		      columnWidth: 220,
		      rowHeight: 220
		    }
		});	

		 var isHorizontal = false;
	});
</script>


<?php include_once('inc/footer.php'); ?>