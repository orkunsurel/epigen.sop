<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sopSNP</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <table align="right">
    	<tr>
        	<td align="right"><input name="about" type="button" class="btn" value="HAKKIMIZDA" onclick="notYet()"></td>
            <td align="right"><input name="help" type="button" class="btn" value="YARDIM" onclick="notYet()"></td>
            <td align="right"><input name="stats" type="button" class="btn" value="İSTATİSTİKLER" onclick="notYet()"></td>
            <td align="right"><input name="singin" type="button" class="btn" value="OTURUM AÇ" onclick="notYet()"></td>
        </tr>
    </table>
	<br/>
	<br/>
	<br/>
	<br/>
    <div align="center">
		<img id="imglogo" src="img/index.png" width="30%"/>
	</div>
    
	<form action="tara2.php" name="form1" method="GET">
		
		<br/>
		<br/>
		
		<table border="0" width="100%">
			<tr>
				<td width="25%"></td>
				<td><input type="text" width="50%" name="snp" placeholder="Search..." align="center" style="text-transform:lowercase"/></td>
				<td width="25%"></td>
			</tr>
		</table>
		<br/>
        <table border="0" width="100%">
			<tr>
				<td width="25%"></td>
				<td align="right">
                    <input type="button" class="btn" value="HEPSİNİ KALDIR" onClick="UnSelectAll()" />
                    <input type="button" class="btn" value="HEPSİNİ SEÇ" onClick="selectAll()" />
                </td>
				<td width="25%"></td>
			</tr>
		</table>
        <div>
        	<?php include("searchList.php"); ?>
        </div>
        
        </form>
		
        <br/>
		<br/>
		<br/>
        <div align="center" id="footer">
        	<br/>Bu web sayfası deneme amaçlı yayınlanmış olup henüz geliştirme aşamasındadır. Tespit ettiğiniz hataları geliştiriciye bildirebilirsiniz.
            <br/>Web sayfası sonuçları göstermek için yeni sekmeler yarattığından birçok web browser tarafından engellenmektedir. Bu sorunu çözmek için gerekli yöntemler <a href="/epigen/snptara/files/PopUpAnlatim.rar">burada</a> resimlerle anlatılmıştır.
            <table width="100%">
            	<tr>
                	<td width="20%" align="left">Version:1.1</td>
                    <td width="60%" align="center">&copy;&nbsp;&nbsp;BY SUREL&nbsp;&nbsp;(orkunsurel@gmail.com / mtd3053@gmail.com)</td>
                    <td width="20%" align="right"><a href="">Bilgi Toplumu Hizmetleri</a></td>
                </tr>
            </table>
        </div>
	
	<script>
		function notYet() {
			alert("Üzgünüm henüz aktif değil..");
		}
	</script>
    
    <script type="text/javascript">
		function selectAll() {
			var items = document.getElementsByName('id[]');
			for (var i = 0; i < items.length; i++) {
				if (items[i].type == 'checkbox')
					items[i].checked = true;
			}
		}
	
		function UnSelectAll() {
			var items = document.getElementsByName('id[]');
			for (var i = 0; i < items.length; i++) {
				if (items[i].type == 'checkbox')
					items[i].checked = false;
			}
		}			
	</script>
    
</body>
<?php include("dataReport.php"); ?>
</html>