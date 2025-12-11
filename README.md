# Symfony PHPUnit Lernprojekt

Dieses Projekt wurde für eine Lernsession zu Unit-Tests mit PHPUnit erstellt.

## Projektstruktur

```
.
├── src/
│   └── Service/
│       ├── CalculatorService.php       # Einfache mathematische Operationen
│       ├── StringUtilsService.php      # String-Manipulationen
│       ├── ValidatorService.php        # Validierungslogik
│       ├── ArrayProcessorService.php   # Array-Operationen
│       └── NumberUtilsService.php      # Zahl-Operationen
├── tests/
│   └── Service/
│       ├── CalculatorServiceTest.php
│       ├── StringUtilsServiceTest.php
│       ├── ValidatorServiceTest.php
│       ├── ArrayProcessorServiceTest.php
│       └── NumberUtilsServiceTest.php
├── composer.json
└── phpunit.xml.dist
```

## Installation

1. Dependencies installieren:
```bash
composer install
```

## Verfügbare Services

### CalculatorService
Einfache mathematische Operationen:
- `add($a, $b)` - Addition
- `subtract($a, $b)` - Subtraktion
- `multiply($a, $b)` - Multiplikation
- `divide($a, $b)` - Division (wirft Exception bei Division durch 0)
- `power($base, $exponent)` - Potenz
- `average($numbers)` - Durchschnitt

### StringUtilsService
String-Manipulationen:
- `isPalindrome($text)` - Prüft ob ein String ein Palindrome ist
- `reverse($text)` - Kehrt einen String um
- `countWords($text)` - Zählt Wörter
- `toUpperCase($text)` - Konvertiert zu Großbuchstaben
- `toLowerCase($text)` - Konvertiert zu Kleinbuchstaben
- `removeSpaces($text)` - Entfernt Leerzeichen
- `startsWith($text, $prefix)` - Prüft Präfix
- `endsWith($text, $suffix)` - Prüft Suffix

### ValidatorService
Validierungslogik:
- `isValidEmail($email)` - E-Mail-Validierung
- `isStrongPassword($password)` - Passwortstärke-Prüfung
- `isValidPhoneNumber($phone)` - Telefonnummer-Validierung
- `isInRange($value, $min, $max)` - Bereichsprüfung
- `isNotEmpty($value)` - Leerstring-Prüfung

### ArrayProcessorService
Array-Operationen:
- `findMax($numbers)` - Maximum finden
- `findMin($numbers)` - Minimum finden
- `sortAscending($numbers)` - Aufsteigend sortieren
- `sortDescending($numbers)` - Absteigend sortieren
- `removeDuplicates($items)` - Duplikate entfernen
- `countOccurrences($items)` - Häufigkeit zählen
- `merge($array1, $array2)` - Arrays kombinieren
- `findCommon($array1, $array2)` - Gemeinsame Elemente finden
- `sum($numbers)` - Summe berechnen

### NumberUtilsService
Zahl-Operationen:
- `isEven($number)` - Gerade Zahl prüfen
- `isOdd($number)` - Ungerade Zahl prüfen
- `isPrime($number)` - Primzahl prüfen
- `factorial($number)` - Fakultät berechnen
- `fibonacci($n)` - Fibonacci-Zahl berechnen
- `round($number)` - Runden
- `absolute($number)` - Absoluter Wert

## Tests ausführen

```bash
# Alle Tests ausführen
vendor/bin/phpunit

# Spezifische Test-Klasse ausführen
vendor/bin/phpunit tests/Service/CalculatorServiceTest.php

# Mit Coverage
vendor/bin/phpunit --coverage-text
```

## Lernziele

In den Test-Dateien sind TODOs mit Vorschlägen für Test-Methoden enthalten. Gemeinsam können folgende Konzepte erlernt werden:

1. **Einfache Assertions**: `assertEquals()`, `assertTrue()`, `assertFalse()`
2. **Exception-Tests**: `expectException()`, `expectExceptionMessage()`
3. **Edge Cases**: Leere Arrays, Null-Werte, Grenzwerte
4. **Test-Organisation**: `setUp()`, `tearDown()`, Test-Daten
5. **Test-Namen**: Aussagekräftige Test-Methodennamen

## Beispiel-Test

```php
public function testAdd()
{
    $calculator = new CalculatorService();
    $result = $calculator->add(2, 3);
    $this->assertEquals(5, $result);
}
```

Viel Erfolg beim Lernen! 🚀

