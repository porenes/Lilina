<?php

require_once 'HTMLPurifier/AttrDef/LengthTest.php';
require_once 'HTMLPurifier/AttrDef/Length.php';

class HTMLPurifier_AttrDef_MultiLengthTest extends HTMLPurifier_AttrDef_LengthTest
{
    
    function setup() {
        $this->def = new HTMLPurifier_AttrDef_MultiLength();
    }
    
    function test() {
        
        // length check
        parent::test();
        
        $this->assertDef('*');
        $this->assertDef('1*');
        $this->assertDef('56*');
        
        $this->assertDef('**', false); // plain old bad
        
        $this->assertDef('5.4*', '5*'); // no decimals
        $this->assertDef('-3*', false); // no negatives
        
    }
    
}

?>