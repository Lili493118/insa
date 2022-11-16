<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count = 8;

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->count;
    }

     /**
     * set le nombre de poneys
     *
     * @return void
     */
    public function setCount($number): void
    {
        $this->count=$number;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if($this->count-$number <0){
            throw new Exception('Nombre de poney negatif');
        }
        else{
          $this->count -= $number;  
        }
        
    }

    /**
     * Ajout un poney du champ
     *
     * @param int $number Nombre de poneys à ajouter
     *
     * @return void
     */
    public function addPoneyFromField(int $number): void
    {
        $this->count += $number;
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {
        return [];
    }

    /**
     * Verifie s'il reste de la place dans le champ
     *
     * @return bool
     */
    public function PlaceDispo(): bool
    {
        return $this->count <15;
    }
}
?>
