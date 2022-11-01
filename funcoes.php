<?php
namespace SRC;

class Funcoes
{
    public function SeculoAno(int $ano): int {        
        if ($ano % 100 == 0) {
            $seculo = $ano / 100;
            return $seculo;
        }
        else {
            $seculo = $ano / 100 + 1;
            return $seculo;
        }
    }

    public function PrimoAnterior(int $numero): int {
        
        for($i = $numero-1; $i >= 1; $i--)
        {   $dividor = 0;
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $dividor++;
                }
            }
            if ($dividor == 2) {
                return $i;
            }
        }

    }

    public function SegundoMaior(array $arr): int {

        $array = [];
        //percorre todas as arrays, e em cada um delas, pega cada valor e junta em uma sequência só
        foreach ($arr as $ordenado) {
            $array = array_merge($array, array_values($ordenado));
        }
        //ordenad de forma decrescente, para assim pegar o segundo valor, que seria o segundo maior da sequência - posição 1
        rsort($array);
        
        return $array[1];
    }
	

	public function SequenciaCrescente(array $array) {
    
        if(count($array) === 1) { //sequências com apenas um número
            return 'True';
        } else {
            $bool = 'False';
            
            for($i = 0; $i < count($array); $i++) {   
                $pos = $array;
                unset($pos[$i]); //retira um valor de dentro da array
                $pos = array_values($pos); //pega todos os valores dessa "nova" array
                $pos1 = $pos;
                sort($pos1); //ordena a nova array

                $teste = array_count_values($pos1);
                $duplicates = 0;
                foreach($teste as $key => $value){
                    if($value > 1){
                        $duplicates = 1;
                    }
                }
                
                    if($pos == $pos1) { //se a nova array for igual a "antiga"
                    $bool = 'True';
                        if($duplicates >= 1){
                            $bool = "False";
                        }
                    }
            } 
        }
    
        return $bool;
    }
}



$funcao = new Funcoes; 

echo "Teste da função SequenciaCrescente" . PHP_EOL;

echo($funcao->SequenciaCrescente([1, 3, 2, 1])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([1, 3, 2])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([1, 2, 1, 2])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([3, 6, 5, 8, 10, 20, 15])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([1, 1, 2, 3, 4, 4])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([1, 4, 10, 4, 2])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([10, 1, 2, 3, 4, 5])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([1, 1, 1, 2, 3])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([0, -2, 5, 6])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([40, 50, 60, 10, 20, 30])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([1, 1])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([1, 2, 5, 3, 5])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([1, 2, 5, 5, 5])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([1, 2, 3, 4, 3, 6])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([1, 2, 3, 4, 99, 5, 6])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([3, 5, 67, 98, 3])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([3, 3, 3, 3, 3, 5, 67, 98, 3])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([3, 5, 5, 5, 5, 67, 98, 3])) . PHP_EOL;;

echo($funcao->SequenciaCrescente([5, 67, 98, 3])) . PHP_EOL;;