<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function testRemovePoneyFromField()
    {
        // Setup
        $poneys = new Poneys();

        // Action
        $poneys->removePoneyFromField(3);

        // Assert
        $this->assertEquals(5, $poneys->getCount());

        // Assert 
        $this->expectException(Exception::class);

        //Action
        $poneys->removePoneyFromField(9);
 
    }

    public function PoneyProvider(){
        return [
            [2,6],
            [8,0],
            [4,4]
        ];
    }

/**
     * Undocumented function
     *
     * @dataProvider PoneyProvider
     */
    
    public function testRemovePoneyFromFieldPoneyProvider($a,$b)
    {
        // Setup
        $poneys = new Poneys();

        // Action
        $poneys->removePoneyFromField($a);

        // Assert
        $this->assertEquals($b, $poneys->getCount());
 
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function testAddPoneyFromField()
    {
        // Setup
        $poneys = new Poneys();

        // Action
        $poneys->addPoneyFromField(3);

        // Assert
        $this->assertEquals(11, $poneys->getCount());
    }
}
?>
