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
        

        // Action
        $this->poneys->removePoneyFromField($a);

        // Assert
        $this->assertEquals($b, $this->poneys->getCount());
 
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function testAddPoneyFromField()
    {
        // Action
        $this->poneys->addPoneyFromField(3);

        // Assert
        $this->assertEquals(11, $this->poneys->getCount());
    }

    public function testPlaceDispo()
    {
        // Action
        $this->poneys->addPoneyFromField(8);

        // Assert
        $this->assertFalse($this->poneys->PlaceDispo());
    }

     public function testMock(){
        $stub=$this->createMock(Poneys::class);
        $stub->method("getNames")
        ->will($this->returnValue(["nom"]));

        $this->assertEquals(["nom"], $stub->getNames());
    }  


    public function tearDown() : void{
        unset($this->poneys );
        
    }
    
    

}
?>
