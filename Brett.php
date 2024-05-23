<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-------------------->  
  <title>Chess Game Board</title>
  <style>
    /* Stil für das Schachbrett */
    .container {
      display: flex;
      justify-content: center; /* Horizontal zentrieren */
      align-items: center; /* Vertikal zentrieren */
      height: 100vh; /* 100% der Bildschirmhöhe nutzen */
    }

    .board {
      width: 400px; /* Breite des Schachbretts */
      border-collapse: collapse; /* Rand der Zellen zusammenführen */
    }

    .board td {
      width: 50px; /* Breite der Zellen */
      height: 50px; /* Höhe der Zellen */
      border: 1px solid black; /* Rahmen um die Zellen */
    }

    .white {
      background-color: #f0d9b5; /* Helle Zellen */
    }

    .black {
      background-color: #b58863; /* Dunkle Zellen */
    }
  </style>
</head>
<body>
  <div class="container">
    <table class="board">
      <!-- Erzeugung des Schachbretts in einer Schleife -->
      <!-- Die Schleife erzeugt 8 Zeilen -->
      <?php
        for ($row = 0; $row < 8; $row++) {
          echo "<tr>";
          // In jeder Zeile erzeugen wir 8 Zellen
          for ($col = 0; $col < 8; $col++) {
            // Berechnung der Klasse basierend auf der Position
            $class = ($row + $col) % 2 == 0 ? 'white' : 'black';
            //Erzeugung der Zelle mit der entsprechenden Klasse
            echo "<td class=\"$class\"></td>";
          }
          echo "</tr>";
        }
      ?>
    </table>
  </div>
</body>
</html>
