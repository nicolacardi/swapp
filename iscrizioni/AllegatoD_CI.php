<?
//***********************************DETTAGLIO CONTRIBUTI SCOLASTICI *********************************/

$pdf->AddPage();
$pdf->SetLink($link5);
$pdf->SetFont('TitilliumWeb-SemiBold','',16);
$pdf->Cell(0,8,utf8_decode("ALLEGATO D"), 0,1, 'C');
$pdf->SetFont('TitilliumWeb-SemiBold','',13);
$pdf->Cell(0,10,utf8_decode("CONTRIBUTI SCOLASTICI ANNO SCOLASTICO ".$_SESSION['annopreiscrizione_fam']), 0,1, 'C');

$fontsizedefault = 8;
$interlinea = 4;

// $testo= "ANNO SCOLASTICO ".$_SESSION['annopreiscrizione_fam'];
// $pdf->SetFont('TitilliumWeb-SemiBold','',$fontsizedefault);
// $testo = utf8_decode($testo);
// $pdf->MultiCell(0,$interlinea,$testo);

$testo= "QUOTA ASSOCIATIVA:";
$pdf->SetFont('TitilliumWeb-SemiBold','',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);

$testo= "Per essere soci della Associazione Pedagogica Aurora e' necessario versare ogni anno la quota associativa. Il pagamento della quota conferisce al socio il diritto di voto alle assemblee indette dai soci nonche' la possibilita' di essere presente all'interno della struttura per le varie attivita' di volontariato promosse. La quota da versare e' di Euro 10,00 per ogni socio";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln(2);

$testo="CONTRIBUTO DI GESTIONE:";
$pdf->SetFont('TitilliumWeb-SemiBold','',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);

$testo= "Il C.d.A. sulla base dei dati di bilancio preventivo dell'anno scolastico ".$_SESSION['annopreiscrizione_fam']." propone alle famiglie di scegliere consapevolmente la retta, in base alle proprie possibilita'. Partendo dalla retta base, che copre solo in parte i costi di gestione della scuola, si vuole offrire la possibilita', a chi piu' puo', di contribuire al funzionamento della scuola, sottoscrivendo la retta completa.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);

$pdf->SetFont($fontdefault,'',8);
$lcella = 40;
$hcella = 4;
$pdf->Cell(30,$hcella,"", 'R',0, 'C');
$pdf->Cell($lcella,$hcella,"Retta Completa", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"Retta Ridotta", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"Retta Minima", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"Retta Minima con piu' figli", 1,1, 'C');

$pdf->Cell(30,$hcella,"Materna", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"4.790,00", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"4.315,00", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"3.835,00", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"3.765,00", 1,1, 'C');

$pdf->Cell(30,$hcella,"Primaria", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"5.320,00", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"4.790,00", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"4.255,00", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"4.185,00", 1,1, 'C');

$pdf->Cell(30,$hcella,"Secondaria", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"5.680,00", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"5.110,00", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"4.540,00", 1,0, 'C');
$pdf->Cell($lcella,$hcella,"4.470,00", 1,1, 'C');
$pdf->Ln(2);
$testo="Per le famiglie con piu' figli frequentanti la Scuola Aurora, e' possibile prevedere la riduzione di Euro 70,00 sulla retta annuale minima, per ogni alunno iscritto.
La previsione della retta completa non cambia l'impostazione della struttura economica della scuola, che necessita sempre dell'aiuto e collaborazione dei genitori per trovare le possibilita' di risparmio e contenimento dei costi, al fine di consentire a tutte le famiglie che desiderano questa pedagogia per i loro figli, di potervi accedere, senza pregiudizio economico.
Gli importi sono stati calcolati tenendo conto dell'andamento degli ultimi 3 anni. Se dovessero intervenire condizioni tali da variare sostanzialmente le previsioni di bilancio, sara' premura del C.d.A. comunicare quanto prima eventuali cambiamenti.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln(2);

$testo= "POSSIBILITA' DI CONTRIBUIRE CON DONAZIONI:";
$pdf->SetFont('TitilliumWeb-SemiBold','',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);

$testo= "Le famiglie o le imprese che volessero contribuire a sostenere il progetto della Scuola Aurora, avendone la possibilita', oltre l'importo del contributo di gestione Minimo, possono prendere accordi con la segreteria o con il consiglio di amministrazione per definire le modalita' di donazione (deducibile ai fini fiscali).";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln(2);

$testo= "RICHIESTA DI RIDUZIONE DEL CONTRIBUTO DI GESTIONE AL FONDO SOLIDARIETA':";
$pdf->SetFont('TitilliumWeb-SemiBold','',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);

$testo= "Le famiglie che si trovano nelle condizioni di non poter affrontare per intero il contributo di gestione base, possono fare richiesta di riduzione al Fondo di Solidarieta'. Il fondo, in quanto dono del lavoro volontario dei genitori, va gestito e richiesto con particolare cautela e attenzione. In ogni caso e' da considerarsi come un aiuto temporaneo, riservato a chi ha piu' di un figlio che frequenta la scuola da piu' di un anno.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);

$testo= "La concessione del fondo e' subordinata alla richiesta da parte della famiglia del buono scuola (ove ne sussistano i requisiti) e della corresponsione dello stesso, nonche' alla regolarita' dei pagamenti secondo quanto sottoscritto.";
$pdf->SetFont('TitilliumWeb-SemiBold','',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln(2);

$testo= "QUOTA DI ISCRIZIONE ANNUA:";
$pdf->SetFont('TitilliumWeb-SemiBold','',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);

$testo= "La quota di iscrizione annua viene richiesta dalla scuola per essere poi versata in parte alla Federazione Italiana delle scuole Steiner Waldorf e in parte all'Associazione Veneto Steiner Waldorf.
Per l'anno ".$_SESSION['annopreiscrizione_fam']." la quota da versare prevista e' di Euro 100,00 per ogni alunno iscritto. In caso di ritiro, tale somma verra' comunque trattenuta a copertura delle spese di segreteria.
Accantonamento fondo progetti: E' richiesto un contributo di Euro 100,00 per famiglia da destinare al Progetto Scuola Nuova. Considerata l'attuale situazione, è lasciata alla facoltà della famiglia, la possibilità di versare o meno il contributo.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);

$testo= "PULIZIE:";
$pdf->SetFont('TitilliumWeb-SemiBold','',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);

$testo= "Le pulizie della scuola, intese come il prendersi cura degli spazi in cui vivono i bambini e i ragazzi per una considerevole parte della loro giornata, sono un'opportunita' che il genitore ha di vivere ancor piu' da vicino la condivisione con la scuola. Sono organizzati normalmente dei turni per suddividere all'interno della classe questo compito. Se la famiglia, per diversi motivi non riesce a partecipare, può decidere di affidarle ad altre persone del ''gruppo pulizie'' pagando il servizio (Euro 180,00 un figlio, Euro 210,00 più figli)";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);

$testo= "INTERVENTI DEDICATI:";
$pdf->SetFont('TitilliumWeb-SemiBold','',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);

$testo= "Gli insegnanti o le famiglie possono richiedere la consulenza dell'equipe medico-pedagogico della scuola. Le eventuali proposte di sostegno didattico, di interventi terapeutici e/o i programmi pedagogici individualizzati, transitori o continuativi, verranno attuati solo dopo l'avallo della famiglia, tramite sottoscrizione dell'apposito documento che riporti il piano di intervento proposto e gli impegni economici ad esso correlati.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln(2);

$testo= "SERVIZI COMPRESI NEL CONTRIBUTO DI GESTIONE:";
$pdf->SetFont('TitilliumWeb-SemiBold','',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);

$testo= "Il Contributo di Gestione annuo comprende il servizio mensa.
E' compresa inoltre una parte del materiale scolastico (lavoro del legno, lavoro manuale, pittura, ecc.) fornito dalla scuola.
Il materiale specifico (flauto, quaderni, matitoni, cerette, libri, ecc.) consegnato agli alunni verra' conteggiato individualmente e addebitato di volta in volta oppure entro la fine dell'anno scolastico.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln(2);

$testo= "CAUZIONE:";
$pdf->SetFont('TitilliumWeb-SemiBold','',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);

$testo= "Per ogni bambino iscritto per la prima volta alla scuola Aurora (materne o ciclo I-VIII), sara' richiesta una cauzione, a garanzia dei vari contributi finanziari. L'importo deve essere versato all'atto dell'iscrizione presso la segreteria (vedi regolamento inerente l'impegno economico). L'importo della cauzione per l'anno scolastico ".$_SESSION['annopreiscrizione_fam']." e' di 300,00 Euro per ogni alunno.
";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);


$pdf->AddPage();
$pdf->SetFont('TitilliumWeb-SemiBold','',16);
$pdf->Cell(0,10,"REGOLAMENTO INERENTE L'IMPEGNO ECONOMICO", 0,1, 'C');
$pdf->Ln(2);

$fontsizedefault = 10;
$interlinea = 4.7;
$dopoparagrafo = 4;

$testo= "Questo regolamento ha lo scopo di creare una premessa chiara e trasparente nei rapporti economico/finanziari tra genitori e scuola, al fine di favorire un clima di reciproca fiducia e collaborazione.";
$pdf->SetFont('TitilliumWeb-SemiBold','',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln($dopoparagrafo);

$testo= "1. Il contributo di gestione (retta annuale) rappresenta un impegno responsabile verso le necessità della scuola. Il suo ammontare annuale definito per alunno, viene determinato in fase di bilancio preventivo e successivamente confermato entro l'inizio effettivo dell'anno scolastico dal consiglio di amministrazione responsabile della gestione economica. La famiglia è invitata a scegliere consapevolmente la retta che può sostenere, tra la retta COMPLETA, RIDOTTA, MINIMA o MINIMA CON PIU' FIGLI.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln($dopoparagrafo);

$testo= "2. Le famiglie che non sono in grado di far fronte alla copertura del contributo economico, potranno rivolgersi al ''Fondo di Solidarietà Famiglie'' richiedendo in segreteria al momento dell'iscrizione, l'apposito modulo. La richiesta verrà vagliata attraverso un colloquio con il gruppo di gestione al fine di raccogliere parametri oggettivi utile a stilare una graduatoria di priorità. Al termine del giro di colloqui, il gruppo di gestione, in funzione delle richieste pervenute e del budget disponibile, darà una risposta nei termini fissati. Per queste famiglie il Modulo ''Impegno Economico'' deve essere comunque presentato e l'iscrizione verrà convalidata solo dopo aver raggiunto l'accordo economico.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln($dopoparagrafo);

$testo= "3. I versamenti del contributo di gestione devono avvenire regolarmente entro il giorno 05 del mese, preferibilmente per dieci mensilità (da settembre a giugno compresi), possibilmente con ordine permanente con bonifico bancario o postale.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln($dopoparagrafo);

$testo= "4. Chi lascia la scuola durante l'anno scolastico è tenuto a versare il contributo economico fino alla fine dell'anno in corso compreso di eventuale integrazione";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln($dopoparagrafo);

$testo= "5. Su eventuali contributi arretrati è facoltà dell'amministrazione esigere gli interessi equivalenti alle condizioni di mora previste per legge.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln($dopoparagrafo);

$testo= "6. Nel contributo di gestione non sono compresi i seguenti costi:
- Quota d'iscrizione e quota accantonamento fondo progetti (vedi modulo di iscrizione ed impegno economico) 
- Interventi di sostegno didattico, di pedagogia curativa, i percorsi pedagogici individualizzati e gli interventi terapeutici.
- Materiale scolastico individuale (da versare quando richiesto e comunque entro la fine dell'anno scolastico).
- Uscite didattiche, viaggi d'istruzione, gite, ecc.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln($dopoparagrafo);

$testo= "7. Al 31 Agosto ".$_SESSION['anno1']." si riterranno valide le conferme annuali d'iscrizione alla classe successiva, solo se saranno stati eseguiti integralmente: il pagamento del contributo di gestione dovuto per l'anno in corso ".(intval($_SESSION['anno1'])-1)."/".substr($_SESSION['anno1'],2).", il saldo delle spese del materiale, il saldo di eventuali contributi straordinari per il pareggio di bilancio.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln($dopoparagrafo);

$testo= "8. Entro il ".$scadiscrizionelett.$_SESSION['anno1']." deve essere versata la quota d'iscrizione facendo pervenire in segreteria il ''Modulo di Iscrizione - Impegno Finanziario'', debitamente compilato e firmato.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln($dopoparagrafo);

$testo= "9. Entro il 30/09 dovranno essere versati: la quota associativa (euro 10 a socio) l'eventuale quota per le pulizie";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln($dopoparagrafo);

$testo= "10. Entro il 31/10 dovrà essere versata la quota a fondo progetti di euro 100 a famiglia, in base alla scelta effettuata.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln($dopoparagrafo);

$testo= "11. Per ogni alunno iscritto per la prima volta (materne o ciclo 1a - 8a) è richiesta una cauzione, a garanzia dei vari contributi di gestione. L'importo deve essere versato alla prima iscrizione dell'alunno presso la scuola Aurora. Di questi importi verrà rilasciata dalla scuola regolare ricevuta di avvenuto versamento. Al momento dell'uscita dei figli dalla scuola la cauzione verrà restituita, previa verifica di eventuali sospesi economici, o potrà essere liberamente donata dalla famiglia alla scuola.";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln($dopoparagrafo);

$testo= "12. In caso di mancato rispetto degli accordi finanziari, esaurite le vie bonarie di soluzione, si procederà all'incasso per vie legali..";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo);
$pdf->Ln($dopoparagrafo);

$testo= "Il Consiglio di Amministrazione";
$pdf->SetFont($fontdefault,'',$fontsizedefault);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,$interlinea,$testo, 0, "R");
$pdf->Ln($dopoparagrafo);

?>
