<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{

    public function setUp() : void{
        $this->poneys = new Poneys();
        $this->poneys->setCount(8);
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function testRemovePoneyFromField()
    {
        

        // Action
        $this->poneys->removePoneyFromField(3);

        // Assert
        $this->assertEquals(5, $this->poneys->getCount());

        // Assert 
        $this->expectException(Exception::class);

        //Action
        $this->poneys->removePoneyFromField(9);
 
    }

    public function tearDown() : void{
        unset($this->poneys );
        
    }
    
    

}
?>
