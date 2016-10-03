<?php
    
    use PHPUnit\Framework\TestCase;
    use UBC\LSIT\Resources\Metadata\Schemas\DC\Properties\Title;
    
    class TitleTest extends TestCase {
        
        public function testValid () {
            $property = new Title('Hello');
            $this->assertEquals('Hello', $property->getValue());
        }
        
    }
