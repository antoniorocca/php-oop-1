<?php
/** class Utente
 * @author Antonio anto@gmail.com
 * @copyright 2021 Antonio
 */

class Utente {
    public $nome;
    public $cognome;
    public $mail;
    public $città;

    function __construct(string $nome, string $cognome, string $mail, string $città) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->mail = $mail;
        $this->città = $città;
    }
}

$utente1 = new Utente('Mario', 'Rossi', 'mario.rossi@live.it', 'Milano');
$utente2 = new Utente('Paolo', 'Verdi', 'p.verdi@libero.it', 'Roma');
$utente3 = new Utente('Andrea', 'Bianchi', 'andre.bianchi@gmail.it', 'Como');

$utenti = [$utente1, $utente2, $utente3];

?>

<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP-OOP-1</title>
     <style>
          .utente {
              width: 220px;
              height: 120px;
              line-height: 1.4rem;
           }
     </style>
 </head>
 <body>
     <?php
         foreach ($utenti as $utente) { ?>
         <div class="utente">
             <span><strong>Nome: </strong> <?php echo $utente->nome ?></span><br>
             <span><strong>Cognome: </strong><?php echo $utente->cognome ?></span><br>
             <span><strong>E-mail: </strong><?php echo $utente->mail ?></span><br>
             <span><strong>Città: </strong><?php echo $utente->città ?></span>
         </div>           
       <?php }?>
 </body>
</html>