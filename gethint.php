<?php
    // Array com marcas
    $a[] = "Abarth";
    $a[] = "Alfa Romeo";
    $a[] = "Alpine";
    $a[] = "Aston Martin";
    $a[] = "Audi";
    $a[] = "Bentley";
    $a[] = "BMW";
    $a[] = "Citroen";
    $a[] = "Cupra";

    // Busca o parâmetro q da URL
    $q = $_REQUEST["q"];
    $hint = "";

    // Verifica se q é diferente de vazio
    if ($q !== "") {
        $q = strtolower($q);
        $len = strlen($q);

        foreach($a as $name) {
            if (stristr($q, substr($name, 0, $len))) {
                if ($hint === "") {
                    $hint = $name;
                } else {
                    $hint .= ", $name";
                }
            }
        }
    }
    // Output "sem sugestão" se nenhuma coincidência foi encontrada ou faz o output dos valores correctos
    echo $hint === "" ? "sem sugestão" : $hint; // ?: é condicional equivalente a if / else
?>