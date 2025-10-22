# Funcions de comprovació de variables en PHP

| Funció        | Què comprova?                        | Exemple que retorna `true` |
|---------------|--------------------------------------|-----------------------------|
| `isset($x)`   | Si està definida i no és `null`      | `$x = 0;`                   |
| `empty($x)`   | Si és buida o **falsy**              | `$x = "";` o `$x = 0;`      |
| `is_null($x)` | Si és `null`                         | `$x = null;`                |
| `is_numeric($x)` | Si és un número o cadena numèrica | `$x = "123";`               |
| `is_string($x)`  | Si és un string                   | `$x = "Hola";`              |
| `is_int($x)`     | Si és un enter                    | `$x = 42;`                  |
