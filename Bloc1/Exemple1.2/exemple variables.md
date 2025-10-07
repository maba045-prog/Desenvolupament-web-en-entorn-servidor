# Exemple de variables en PHP

Aquest exemple mostra diferents tipus de variables i com imprimir-les.

| Tipus de variable   | Exemple de declaració                         | Explicació / Notes                               |
|--------------------|-----------------------------------------------|-------------------------------------------------|
| String             | `$nom = "Anna";`                              | Cadena de text.                                 |
| Integer            | `$edat = 20;`                                 | Nombre enter.                                   |
| Float              | `$nota = 8.5;`                                | Nombre decimal.                                 |
| Boolean            | `$aprovat = true;`                            | `true` o `false`.                               |
| Array indexat      | `$alumnes = ["Anna","Marc"];`                 | Elements amb índex numèric (0,1,…).            |
| Array associatiu   | `$alumne = ["nom"=>"Anna","edat"=>20];`      | Cada element té una clau textual.              |

```php
<?php
$nom = "Anna";                 // String
$edat = 20;                    // Integer
$nota = 8.5;                   // Float
$aprovat = true;               // Boolean
$alumnes = ["Anna","Marc"];    // Array indexat
$alumne = ["nom"=>"Anna","edat"=>20]; // Array associatiu

echo "Nom: " . htmlspecialchars($alumne["nom"]) . "<br>";
echo "Edat: " . $alumne["edat"] . "<br>";

if ($aprovat) {
    echo "L'alumne ha aprovat.<br>";
}
?>
