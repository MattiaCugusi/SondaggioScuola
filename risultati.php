<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati</title>
</head>
<body>
    <?php
     $nome = $_GET["nome"];
     $cognome = $_GET["cognome"];
     $dataNascita = $_GET["dataNascita"];
     $ritorno = $_GET["ritorno"];
     $mezzo = $_GET["mezzo"];
     $corso1 = $_GET["corso1"];
     $corso2 = $_GET["corso2"];
     $corso3 = $_GET["corso3"];

     $ris1 = isset($corso1);
     $ris2 = isset($corso2);
     $ris3 = isset($corso3);

     echo "<table style='border: 1px solid black; border-collapse: collapse; text-align:center'>
             <tr>
               <th style='border: 1px solid black'>Nome</th>
               <th style='border: 1px solid black'>Cognome</th>
               <th style='border: 1px solid black'>Data di nascita</th>
               <th style='border: 1px solid black'>Orario arrivo a casa (giorno lungo)</th>
               <th style='border: 1px solid black'>Modalita' arrivo a scuola</th>
               <th style='border: 1px solid black'>Corsi pomeridiani<th>
            </tr>

            <tr>
              <td style='border: 1px solid black'>" . $nome . "</td>
              <td style='border: 1px solid black'>" . $cognome . "</td>
              <td style='border: 1px solid black'>" . $dataNascita . "</td>
              <td style='border: 1px solid black'>" . $ritorno . "</td>
              <td style='border: 1px solid black'>" . $mezzo . "</td>";

              $stringa = "";

              if ($ris1 == false && $ris2 == false && $ris3 == false){
                $stringa = "Nessuna Atività";
              }else if ($ris1 == true && $ris2 == false && $ris3 == false){
                $stringa = $corso1;
              }else if ($ris1 == false && $ris2 == true && $ris3 == false){
                $stringa = $corso2;
              }else if ($ris1 == true && $ris2 == false && $ris3 == true){
                $stringa = $corso3;
              }else if ($ris1 == true && $ris2 == true && $ris3 == false){
                $stringa = $corso1 . "," . $corso2;
              }else if ($ris1 == true && $ris2 == false && $ris3 == true){
                $stringa = $corso1 . "," . $corso3;
              }else if ($ris1 == false && $ris2 == true && $ris3 == true){
                $stringa = $corso2 . "," . $corso3;
              }else if ($ris1 == true && $ris2 == true && $ris3 == true){
                $stringa = $corso1 . "," . $corso2 . "," . $corso3;
              }else if ($ris1 == false && $ris2 == false && $ris3 == true){
                $stringa =  $corso3;
              }

              echo "<td style='border: 1px solid black'>" . $stringa . "</td>


            </table>";

               
     
     


    ?>
</body>
</html>