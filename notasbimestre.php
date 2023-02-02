<?php


$notas=[
'ana' => 7,
'nicolas' => 9,
'pedro' => 5,
'carlos' => 4,

];

$notas2=[
    'ana' => 7,
    'nicolas' => 9,
    
    
    
];
// array_diff compara OS VALORES do 1 array com os dos outros, se for diferente ele mostra

//var_dump(array_diff($notas,$notas2));

//mesma coisa que o anterior , porém ele leva em consideração o INDICADOR e não mais o valor

//var_dump(array_diff_key($notas,$notas2));


// esse faz a mesma coisa que os outros, porém os parametros dele é tanto o VALOR quanto o INDICADOR    

//var_dump(array_diff_assoc($notas,$notas2));

$alunosfaltaprova = array_diff_key($notas,$notas2);
//array_keys pega somente os INDICADORES do array
 $nomeAluno=array_keys($alunosfaltaprova);
//array_value pega somente os VALORES do array
 $notaAluno=array_values($alunosfaltaprova);

//array_combine junta os array, 1 como indicador e 2 como valor,precisam ter o MESMO TAMANHO
 var_dump(array_combine($nomeAluno,$notaAluno));

 //array_flip invente as indicadores com os valores
 //var_dump(array_flip($notas));

