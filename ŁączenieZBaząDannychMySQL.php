<?PHP
//phpinfo();

//znak konkatynacji(złączenia) - .
echo "Klasa 2E Łączenie z bazą dannych MySQL"."<br>","<br>";
//$nazwa - tworzenie zmiennej
$serwer = "localhost";
$uzytkownik = "root";
$haslo = "";
$baza = "przepisyPrzyklad";
$con= new mysqli($serwer, $uzytkownik, $haslo, $baza);

//albo
//$con= new mysqli("127.0.0.1:3306","root","","przepisyPrzykład");
$zapytanie="SELECT NazwaPrzepisu FROM przepisy ORDER BY NazwaPrzepisu DESC";
if($wynik=$con->query($zapytanie))
//fetch_array - tablica skojarzona z bazy danych
 WHILE($row=$wynik->fetch_array())
  echo $row["NazwaPrzepisu"]."<br>";
else
 echo $con->error." ".$con->error;
//zamknięcie połączenia z bazą
$con->close();

//znacznik końca pliku PHP
?>
