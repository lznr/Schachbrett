### Schachbrett mit HTML und PHP ###

Dieses Repository enthält einen einfachen Code, um ein Schachbrett auf einer Webseite anzuzeigen.

### Meta Tags ###
- meta charset="UTF-8": Legt den Zeichensatz der Webseite auf UTF-8 fest, um internationalisierte Zeichen korrekt darzustellen.
- meta name="viewport" content="width=device-width, initial-scale=1.0": Definiert die Breite der Webseite entsprechend der Gerätebreite und skaliert diese.

### CSS ###
Die Brett.php -Datei enthält CSS-Stile im <style> -Tag, um das Aussehen des Schachbretts anzupassen.

  - .container: Zentriert den Inhalt vertikal und horizontal auf der Webseite.
    
  - .board: Stildefinitionen für das Schachbrett.
    - width: 400px;: Setzt die Breite des Schachbretts auf 400 Pixel.
    - border-collapse: collapse;: Führt die Zellenränder des Schachbretts zusammen.
      
  - .board td: Stildefinitionen für die Zellen des Schachbretts.
    - width: 50px;: Setzt die Breite der Zellen auf 50 Pixel.
    - height: 50px;: Setzt die Höhe der Zellen auf 50 Pixel.
    - border: 1px solid black;: Setzt einen 1 Pixel dicken schwarzen Rahmen um jede Zelle.
      
  - .white und .black: Stildefinitionen für die Hintergrundfarben der weißen und schwarzen Zellen.
    - .white { background-color: #f0d9b5; }: Setzt die Hintergrundfarbe der weißen Zellen auf eine helle Cremefarbe.
    - .black { background-color: #b58863; }: Setzt die Hintergrundfarbe der schwarzen Zellen auf eine dunkle Braunfarbe.

### PHP Schleife Erklärung ###

Der PHP-Code innerhalb der Brett.php -Datei verwendet eine Schleife, um das Schachbrett dynamisch zu generieren.

Erklärung: 
- Die äußere Schleife (for ($row = 0; $row < 8; $row++)) läuft von 0 bis 7 (< 8), um 8 Zeilen für die Tabelle zu erstellen (<tr>).
- Die innere Schleife (for ($col = 0; $col < 8; $col++)) läuft ebenfalls von 0 bis 7 (< 8), um 8 Zellen (<td>) in jeder Zeile zu erzeugen.

Klassenberechnung:
- Für jede Zelle wird die Klasse ($class) basierend auf der Summe von $row und $col berechnet.
- ( $row + $col ) % 2 == 0 überprüft, ob die Summe von $row und $col gerade ist.
- Wenn die Summe gerade ist (% 2 == 0), wird die Klasse 'white' gesetzt, andernfalls 'black'.
