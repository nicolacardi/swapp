<?include_once("database/databaseii.php");
	//unico parametro la prima data (quella del lunedi) della settimana in cui devo copiare la precedente
	$lunediPropaga= $_POST['lunediPropaga'];
    $classe= $_POST['classe'];
	$venerdiPropaga = date('Y-m-d',strtotime("+4 day", strtotime($lunediPropaga)));

    $sql = "SELECT ID_ora, ora_ora FROM tab_orario WHERE data_ora = ? AND classe_ora = ? AND epoca_ora = 1 ORDER BY ora_ora;";
    //metto in un array il numero progressivo dell'ora in cui trovo epoca al lunedi
    $stmt = mysqli_prepare($mysqli, $sql);
	mysqli_stmt_bind_param($stmt, "ss", $lunediPropaga, $classe);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_bind_result($stmt, $ID_ora, $ora_ora);

    $k = 0;
    $ora_oraA = array();
    $ora_ora_prec = 0;
	while (mysqli_stmt_fetch($stmt))
    {
        if ($ora_ora != $ora_ora_prec) {
            $ora_oraA[$k] = $ora_ora;
            $k++;
        }
        $ora_ora_prec = $ora_ora;

    }



    //a questo punto ho un array di solito di due elementi (in generale di k elementi) con scritto ad esempio $ora_oraA[0] = 1 (prima ora) e $ora_oraA[1] = 2 (seconda ora)
    //non importa, per il momento, quante materie sono state indicate in ciascuna di queste due ore

    //ora entro in ciascun giorno da martedì in avanti
    for ($giorno = 1; $giorno <= 4; $giorno++) {

        $giornoPropaga = date('Y-m-d',strtotime("+".$giorno." day", strtotime($lunediPropaga)));

        //cancello le materie nelle ore corrispondenti a quelle del lunedi (quindi non funziona bene se le epoche in altri giorni sono segnate in altre ore)

        for ($n = 0 ; $n < $k ; $n++) {
            $sql1 = "DELETE FROM tab_orario WHERE data_ora = ? AND classe_ora = ? AND ora_ora = ?;";
            $stmt1 = mysqli_prepare($mysqli, $sql1);
            mysqli_stmt_bind_param($stmt1, "ssi", $giornoPropaga, $classe, $ora_oraA[$n]);
            mysqli_stmt_execute($stmt1);
        

            //ora devo INSERIRE i corrispondenti (anche più di uno) della ora n-esima del lunedì
            $sql2 = "INSERT INTO tab_orario (data_ora, epoca_ora, ora_ora, codmat_ora, classe_ora, sezione_ora, ID_mae_ora, firma_mae_ora, 
                        IDfirmatutor_ora, assente_ora, supplente_ora, maestroreale_ora, secondomaestro_ora)
                        SELECT '".$giornoPropaga."', epoca_ora, ".$ora_oraA[$n].", codmat_ora, classe_ora, sezione_ora, ID_mae_ora, firma_mae_ora, 
                        IDfirmatutor_ora, assente_ora, supplente_ora, maestroreale_ora, secondomaestro_ora
                        FROM tab_orario
                        WHERE data_ora = '".$lunediPropaga."' AND classe_ora = '".$classe."' AND ora_ora  = ".$ora_oraA[$n].";
                    ";
            $stmt2 = mysqli_prepare($mysqli, $sql2);
            // mysqli_stmt_bind_param($stmt2, "ssi", $lunediPropaga, $classe, $ora_oraA[$i] );
            mysqli_stmt_execute($stmt2);
        }
    }




	$return['test'] = $sql2;
	echo json_encode($return);	
?>
