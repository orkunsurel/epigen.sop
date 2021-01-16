<?php
	
	$version = 0.2;
	
	$snp = $_GET["snp"];
	
	echo $snp;
	
	$id[] = $_GET["id[]"];
	
	if($snp != "") {
		if ($src1 == 1) {
			?>
			<script type="text/javascript">
				window.open( "https://www.snpedia.com/index.php/"+"<?php echo $snp ?>" );
			</script>
			<?php
		}
		if ($src2 == 1) {
			?>
			<script type="text/javascript">
				window.open( "http://www.epigenome.soton.ac.uk/hsm/result.php?searchTerm="+"<?php echo $snp ?>" );
			</script>
			<?php
		}
		if ($src3 == 1) {
			?>
			<script type="text/javascript">
				window.open( "http://www.ebi.ac.uk/gwas/search?query="+"<?php echo $snp ?>" );
			</script>
			<?php
		}
		if ($src4 == 1) {
			?>
			<script type="text/javascript">
				window.open( "https://www.ncbi.nlm.nih.gov/gap/phegeni?tab=2&rs="+"<?php echo $snp ?>" );
			</script>
			<?php
		}
		if ($src5 == 1) {
			?>
			<script type="text/javascript">
				window.open( "http://archive.broadinstitute.org/mammals/haploreg/detail_v4.php?query=&id="+"<?php echo $snp ?>" );
			</script>
			<?php
		}
		if ($src6 == 1) {
			?>
			<script type="text/javascript">
				window.open( " http://www.ensembl.org/Homo_sapiens/Variation/Explore?v="+"<?php echo $snp ?>" );
			</script>
			<?php
		}
	}
?>
<script type="text/javascript">
	//history.back();
	//window.open( "/", "_self" );
</script>