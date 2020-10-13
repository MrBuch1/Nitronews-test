        //Int Validation//
        
        $int = 198;

        if (is_int($int)) {
            echo("Int - OK\n");
        }
        else {
            echo("Int - Not Int\n");
        }
        
        ////////////////////////////////////
        
        //Array Validation//
        
        $array = [ "nome" => "Pedro Luiz", "endereco" => "Av Taquara", "telefone" => "(51) 5151-51511" ];

        if (is_array($array) && array_key_exists('endereco', $array)) {
            echo("Array - OK\n");
        }
        else {
            echo("Array - Not Array\n");
        }
        
        ////////////////////////////////////
        
        //String Validation//

        $person = "Romarinho";

        if (is_string($person)) {
            echo("String - OK\n");
        }
        else {
            echo("String - Not String\n");
        }
