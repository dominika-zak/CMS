<?

ob_start();

try

{

    $db = new PDO('mysql:host=localhost;dbname=dominika-zak', 'i1759707_wp1', 'xxxxxxx');

 $db->exec("set names utf8");

}

catch (PDOException $e)

{

    print "Błąd połączenia z bazą!: " . $e->getMessage() . "<br/>";

    die();

} 
