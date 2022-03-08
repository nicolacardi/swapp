			
<?
$ID_mae = $_SESSION['ID_mae'];
$nome_mae = $_SESSION['nome_mae'];
$cognome_mae = $_SESSION['cognome_mae'];
?>
<div style="text-align: center; font-size: 14px; color: #3c3c3c;" >		
	<? if ($_SESSION ["role_usr"] > 1){
		echo ("(insegnante ".$nome_mae. " ". $cognome_mae).")";
	} else {?>
		<select name="selectmaestro"  style="margin-left: 0px"  id="selectmaestro" onchange="copyToHiddenAndSetSession();">
			
			<? $sql = "SELECT DISTINCT ID_mae, nome_mae, cognome_mae FROM tab_anagraficamaestri ORDER BY cognome_mae ASC ";
				$stmt = mysqli_prepare($mysqli, $sql);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_bind_result($stmt, $ID_maeSel, $nome_mae, $cognome_mae);
				while (mysqli_stmt_fetch($stmt)) {
				?>
				<option value="<?=$ID_maeSel?>" <? if ($ID_maeSel==$_SESSION['ID_mae_default']) {echo("selected");}?>><?=$cognome_mae." ".$nome_mae?></option><?
				}?>
		</select>
	<?}?>
	<input id="hidden_ID_mae" type="text" value ='<?=$ID_mae?>' hidden>
</div>

<script>

	function copyToHiddenAndSetSession () {
		//console.log ($('#selectmaestro').val());
		let ID_mae = $('#selectmaestro').val();
		$('#hidden_ID_mae').val(ID_mae);
		postData = { ID_mae : ID_mae };
		//console.log (postData);
		$.ajax({
			type: 'POST',
			url: "11qry_SetSessionID_mae.php",
			data: postData,
			dataType: 'json',
			success: function(data){
				//console.log (data.test);
				changedAnnoscolastico();
				//requery();
			}
		});
		
	}
</script>