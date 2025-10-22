# Miniaplicació Exercici 5.1

## Descripció
Miniaplicació per interactar amb l'usuari mitjançant un formulari en una web.

## Funcionalitats
1. **Recollida de dades de l’usuari**:  
   El formulari demana:
   - Nom
   - Edat
   - Un número entre 1 i 10

2. **Validació de dades**:
   - Tots els camps són obligatoris.
   - El número introduït ha d’estar entre 1 i 10.

3. **Determinació de majoria d’edat**:
   - La funció `esMajorEdat($edat)` comprova si l’usuari és major d’edat i mostra un missatge corresponent.

4. **Generació de la taula de multiplicar**:
   - A partir del número introduït, es mostra la taula de multiplicar de l’1 al 10.

5. **Compte enrere**:
   - Mostra un compte enrere des del número introduït fins a 0.

6. **Gestió de notes**:
   - Crea un array de notes predefinit.
   - Mostra totes les notes en format llistat.
   - Calcula i mostra la mitjana de les notes amb la funció `mitjana($notes)`.

## Estructura
- **HTML**: Formulari i estructura de la pàgina.
- **PHP**: Tota la lògica de la aplicació

## Exemple d’ús
1. L’usuari omple el formulari amb nom, edat i un número del 1 al 10.
2. Si hi ha errors (camps buits o número fora de rang), es mostra un missatge d’error.
3. Si les dades són correctes, la pàgina mostra:
   - Salutació amb el nom i edat.
   - Missatge indicant si és major o menor d’edat.
   - Taula de multiplicar del número introduït.
   - Compte enrere des del número introduït.
   - Les notes definides i la seva mitjana.



