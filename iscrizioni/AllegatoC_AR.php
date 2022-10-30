<?
//REGOLAMENTO PEDIATRICO ************************************************************************************************************************************
$pdf->AddPage();
$pdf->SetLink($link4);
$pdf->SetFont('TitilliumWeb-SemiBold','',16);
$pdf->Cell(0,10,utf8_decode("ALLEGATO C"), 0,1, 'C');
$pdf->SetFont('TitilliumWeb-SemiBold','',14);
$pdf->Cell(0,10,utf8_decode("NORME IGIENICO SANITARIE"), 0,1, 'C');

$testo= "Lo scopo di questo documento è quello di fornire alle famiglie indicazioni omogenee riguardanti la tutela del ragazzo e della collettività. Questo obiettivo può essere perseguito solo attraverso la reciproca collaborazione e la partecipazione del personale, del medico curante e dei genitori. 
La ".$nomecittascuola." vuole tutelare la salute di tutti i propri alunni nella piena libertà del pensiero di tutti. 
A tal fine dovranno essere scrupolosamente osservati, per tutti i frequentanti, gli adempimenti di seguito riportati.";
$pdf->SetFont($fontdefault,'',10);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,5,$testo);

$pdf->SetFont('TitilliumWeb-SemiBold','',10);
$pdf->Cell(0,10,utf8_decode("1) AMMISSIONE"), 0,1, 'J');
$testo= "Affinché i ragazzi possano essere ammessi alla frequenza le famiglie dovranno: 
- fornire i nominativi ed i recapiti delle persone che potranno essere contattate in caso di necessità ed urgenza; 
- presentare il certificato medico del medico specialista relativo ad eventuali allergie, intolleranze e/o necessità di cure e/o diete particolari; 
- impegnarsi a segnalare con tempestività alla segreteria eventuali malattie del ragazzo potenzialmente trasmissibili; 
- rilasciare il consenso al trattamento dei dai personali ai sensi del D.Lgs 196/2003.
";
$pdf->SetFont($fontdefault,'',10);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,5,$testo);

$testo= "Con il verificarsi di particolari situazioni epidemiologiche, quale misura di prevenzione, si potrà richiedere il temporaneo allontanamento degli alunni al fine di prevenire l'insorgere di epidemie.";
$pdf->SetFont('TitilliumWeb-SemiBold','',10);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,5,$testo);

$pdf->SetFont('TitilliumWeb-SemiBold','',10);
$pdf->Cell(0,10,utf8_decode("2) ALLERGIE ED INTOLLERANZE"), 0,1, 'J');
$testo= "Se il ragazzo presenta allergie ed intolleranze dovrà essere tempestivamente presentata la certificazione del medico di fiducia con le specifiche indicazioni.";
$pdf->SetFont($fontdefault,'',10);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,5,$testo);

$pdf->SetFont('TitilliumWeb-SemiBold','',10);
$pdf->Cell(0,10,utf8_decode("3) FARMACI"), 0,1, 'J');
$testo= "Il personale della Scuola non può somministrare farmaci agli alunni durante le ore di frequenza scolastica.
Nel caso di alunni con patologie particolari, possono essere somministrati solamente farmaci indispensabili o salva vita, su prescrizione del medico curante, con l'indicazione della posologia, della modalità di somministrazione e della corretta conservazione del farmaco e con delega del genitore (vedi modulo Delega alla somministrazione di farmaci, in segreteria).
";
$pdf->SetFont($fontdefault,'',10);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,5,$testo);

$pdf->SetFont('TitilliumWeb-SemiBold','',10);
$pdf->Cell(0,10,utf8_decode("4) ALLONTANAMENTI CAUTELATIVI DEL RAGAZZO DALLA FREQUENZA"), 0,1, 'J');
$testo= "Il ragazzo non deve partecipare alle lezioni quando presenta sintomi di malattia acuta in atto: febbre, vomito, diarrea, manifestazioni cutanee contagiose, congiuntiviti, affaticamento, pianto persistente, tosse continua, dolore addominale persistente.
Qualora insorga una malattia acuta o si verifichi un trauma durante l'attività educativa il responsabile avvisa il genitore o l'adulto di riferimento delegato, affinché provveda obbligatoriamente al rientro in famiglia o al trasporto presso strutture sanitarie. 
In situazioni gravi si provvederà ad attivare il Servizio di Emergenza 118. 
In attesa di allontanamento sarà tenuto separato, in luogo confortevole e non a diretto contatto con i compagni. I genitori sono tenuti a consultare il medico curante per verificare se la patologia da cui è affetto il ragazzo è compatibile con la frequenza del servizio. 

";
$pdf->SetFont($fontdefault,'',10);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,5,$testo);

$pdf->SetFont('TitilliumWeb-SemiBold','',10);
$pdf->Cell(0,10,utf8_decode("5) SOSPENSIONE DALLA FREQUENZA"), 0,1, 'J');
$testo= "Non possono frequentare: 
- i ragazzi affetti da malattie infettive e trasmissibili ad altri; 
- i ragazzi in cui la malattia richiede cure che il personale non è in grado di fornire senza compromettere la salute e la sicurezza di altri alunni.";
$pdf->SetFont($fontdefault,'',10);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,5,$testo);


$pdf->SetFont('TitilliumWeb-SemiBold','',10);
$pdf->Cell(0,10,utf8_decode("6)	ASSENZA PER MALATTIA E RIAMMISSIONE ALLA FREQUENZA "), 0,1, 'J');
$testo= "I genitori devono comunicare tempestivamente il motivo dell'assenza del/la proprio/a figlio/a, quando possa trattarsi di malattia infettiva diffusa, al fine di consentire l'attuazione di opportune misure profilattiche agli altri utenti della struttura. 
L'assenza per malattia, anche di durata superiore a cinque giorni consecutivi non necessita di certificato medico, tuttavia si raccomanda ai genitori di dichiarare, nella giustificazione di rientro, di essersi attenuti a quanto prescritto dal medico di famiglia e alle prescrizioni vigenti emanate in materia di prevenzione contagio covid.
Quando l'assenza non sia dovuta a malattia del ragazzo, ma ad altri motivi, i genitori devono preventivamente avvertire il personale di segreteria.
I ragazzi che sono stati allontanati dal servizio per sospetta malattia, se assenti fino a 5 giorni, sono riammessi su autodichiarazione del genitore che attesti di essersi attenuto alle indicazioni del medico curante. Le riammissioni avverranno quando saranno decadute le condizioni che ne hanno provocato l'allontanamento, cioè quando il ragazzo sarà definitivamente guarito (almeno un giorno senza manifestare i sintomi della malattia sopraggiunta). In particolare, dovranno essere rispettate le seguenti misure di profilassi:";
$pdf->SetFont($fontdefault,'',10);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,5,$testo);

$pdf->Ln(5);

$pdf->SetFont($fontdefault,'',11);
$pdf->SetWidths(array(120,70));
$pdf->Row(array("ALLONTANAMENTI CAUTELATIVI DEL RAGAZZO DALLA FREQUENZA", "PERIODO MINIMO DI ALLONTANAMENTO"));
$pdf->Row(array("Febbre","Fino a definitiva scomparsa, con riammissione dopo almeno 24 ore di sfebbramento" ));
$pdf->Row(array("Diarrea","Fino 24 ore dall'ultima scarica e riammissione a guarigione clinica" ));
$pdf->Row(array("Vomito","Fino 24 ore dall'ultimo episodio di vomito"));
$pdf->Row(array("Congiuntivite, in caso di secrezione purulenta","Sino a 24 ore dall'inizio della terapia"));
$pdf->Row(array("Influenza","Fino a guarigione clinica"));
$pdf->Row(array("Malattie infettive","Fino a guarigione clinica"));
$pdf->Row(array("Pediculosi in presenza di pidocchi o lendini","Fino al giorno successivo al trattamento: Il ragazzo verra' riammesso solo se privo di lendini"));


$testo= "Il ragazzo che si ripresenti al servizio con gli stessi sintomi o non rispettando il periodo minimo di profilassi indicato non potrà essere accettato, salvo certificato medico che ne attesti la mancanza di pericolo di contagio.

Per ulteriori e diverse infezioni si fa riferimento a quanto indicato nel Manuale per la prevenzione delle malattie infettive nelle comunità infantili e scolastiche della Regione Veneto.
Per la pediculosi a quanto indicato nel Manuale La pediculosi del capo della Regione Veneto.";
$pdf->SetFont($fontdefault,'',10);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,5,$testo);

$pdf->Ln(5);
$testo= "E' compito dei genitori attenersi scrupolosamente alle suddette norme come dovere e rispetto per il proprio figlio e per l'intera comunità educativa.";
$pdf->SetFont('TitilliumWeb-SemiBold','',10);
$testo = utf8_decode($testo);
$pdf->MultiCell(0,5,$testo);

?>