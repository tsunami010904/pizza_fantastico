<?php


abstract class AbstractRepository {

    protected $csvFile = 'csv/mySlider.csv';
    
    public function getCsvFile() {
        return $this->csvFile;
    }

    public function setCsvFile($csvFile) {
        $this->csvFile = $csvFile;
    }

    public function readCsvFile(): array
    {
        $fileContent = file_get_contents($this->getCsvFile());
        $fileRows = explode(PHP_EOL, $fileContent);
        $arrayElement = [];

        foreach ($fileRows as $fileRow) {
            if (empty($fileRow)) {
                continue;
            }
            $arrayElement[] = str_getcsv ( $fileRow, "\t");
        }
        return $arrayElement;
    }
}


class SliderRepository extends AbstractRepository {

}


/*
Was macht readCsvFile()?

Die gesamte Datei csv-Datei wird in einen String gelesen, welcher in $fileContent gespeichert wird.
Mit explode wird der große String in $fileContent nach Zeilen getrennt, die jeweils als ein Array-Element in $fileRows gespeichert werden.
Ein Array namens $arrayElement wird definiert.
Mit der foreach-Schleife betrachtet man das Array $fileRows. Da bei jedem Durchgang ein Array-Element behandelt wird, wird bei jedem Durchgang eine Zeile behandelt.
Mit dem if sorgt man dafür, dass Leerzeilen nicht behandelt werden.
$arrayElement[] fügt dem Array $arrayElement an letzter Stelle ein neues Element hinzu.
str_getcsv() teilt die mit Tabulatoren getrennten values der Zeile in Array-Elemente eines Arrays. Dieses Array wird als neues Elements des Arrays $slider hinzugefügt. Daher handelt es sich bei $arrayElement um ein zweidimensionales Array.
Durch das return wird beim Funktionsaufruf das fertige Array ausgegeben :)
*/