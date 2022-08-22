<?php
// frase da censurare
$myPhrase = 'Figli di Gondor! Di Rohan! Fratelli miei! Vedo nei vostri occhi la stessa paura che potrebbe afferrare il mio cuore! Ci sarà un giorno, in cui il coraggio degli uomini cederà, in cui abbandoneremo gli amici e spezzeremo ogni legame di fratellanza, ma non è questo il giorno! Ci sarà l\'ora dei lupi e degli scudi frantumati quando l\'era degli uomini arriverà al crollo, ma non è questo il giorno! Quest\'oggi combattiamo! Per tutto ciò che ritenete caro su questa bella terra, v\'invito a resistere! Uomini dell\'Ovest!';
// sostituzione
$blip='***';
// parola a scelta da censurare
$badWord= $_GET['word'];

// frase post censura con sostituzione
$myCensoredPhrase = str_replace($badWord, $blip, $myPhrase)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAD WORDS</title>
</head>
<body>

<h1>
    My Favorite Quote:
</h1>
<p>
    <?php echo $myPhrase?>
</p>
<div>
<p>In questo paragrafo ci sono <?php echo strlen($myPhrase)?> brutte parole</p></div>

<h1>
    My Favorite Quote Censored:
</h1>
<p>
    <?php echo $myCensoredPhrase?>
</p>
<div>
<p>In questo paragrafo ci sono <?php echo strlen($myCensoredPhrase)?> brutte parole</p></div>
    
</body>
</html>