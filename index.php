<?php 
    $vendite = [
        [
            "categoria" => "Elettronica", 
            "prodotto" => "TV 4K", 
            "importo" => 750
        ],
        [
            "categoria" => "Libri",
            "prodotto" => "PHP Avanzato", 
            "importo" => 30
        ],

        [
            "categoria" => "Elettronica", 
            "prodotto" => "Smartphone", 
            "importo" => 500
        ],
        [
            "categoria" => "Casa", 
            "prodotto" => "Set di pentole", 
            "importo" => 120
        ],
        [
            "categoria" => "Libri", 
            "prodotto" => "Guida a SQL", 
            "importo" => 25
        ]
    ];

    $report = [];

   function aggiungiReport($vendite){
        foreach($vendite as $transazione){
            //Crea riga della matrice $report
            $categoria = $transazione["categoria"];
            $prodotto = $transazione["prodotto"];
            $importo = $transazione["importo"];


            //Inizializza la colonna del report se non è presente il valore dentro.
            if(!isset($report[$categoria])){
                $report[$categoria] = [
                    "totale_vendite" => 0,
                    "numero_transazioni" => 0,
                    "importo_medio" => 0,
                    "prodotti" => []
                ];
            }

            //Aggiunge valore della colonna della matrice.
            $report[$categoria]["totale_vendite"] += $importo;
            $report[$categoria]["numero_transazioni"]++;
            $report[$categoria]["prodotti"][] = $prodotto;
        };

        foreach($report as $categoria => $dati){
            $report[$categoria]["importo_medio"] = $dati["totale_vendite"] / $dati["numero_transazioni"];
        }

        return $report;

    };

    $report = aggiungiReport($vendite);

    echo("<pre>");
        print_r($report);
    echo("</pre>") ;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Esercitazione PHP: Spesa</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>
</html>