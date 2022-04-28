<?php
//Funcão Século
//Elielder Oliveira

class seculoAno
{
    private $noVerificar;
    private $seculoRetorna;

        public function seculoAnoCalc($noVerificar)
    {
        $this->$noVerificar = $noVerificar;

        if(($noVerificar > 0) &  ($noVerificar < 101))
        {
            $seculoRetorna = 1;
        }
        else if($noVerificar > 101)
        {
            if((($noVerificar % 100) > 0) & (($noVerificar % 100) < 50))
            {
                $seculoRetorna = (round($noVerificar/100))+1;
            }
            else
            {
                $seculoRetorna = round($noVerificar/100);
            }
        }
        else
        {
            $seculoRetorna = 0;
        }

        return $seculoRetorna;
    }


}

$seculo = new seculoAno();
$anos = array(1905,1700);

$anosQuantos = count($anos);

for($i= 0; $i < $anosQuantos; $i++)
{
    echo "O Ano ". $anos[$i] ." está no século: ".$seculo->seculoAnoCalc($anos[$i])."\n\r";
}

/*
    Resultado em:
    http://codepad.org/2sobgEvs
*/
?>