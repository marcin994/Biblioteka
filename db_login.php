<?php

include("head.php");

mysql_connect("localhost","root","nasze_hasło") or die ("Nie można połaczyć z bazą danych");
mysql_select_db("nasza_baza") or die ("Nie mogę znaleźć odpowiedniej bazy danych");

?>