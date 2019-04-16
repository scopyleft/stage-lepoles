<?php

//convertir un nombre romain en nombre arabe


function base($char)
{
    if($char === 'I')  return 1;
   
    elseif($char === 'V') return 5;

    elseif($char === 'X') return 10;
    elseif($char === 'L') return 50;
    elseif($char === 'C') return 100;
    elseif($char === 'D') return 500;
    elseif($char === 'M') return 1000;
}

function Convertir($nbreRomain)
{
    $resultat =array();
    $somme=0;
    $reference;
 
    if(strlen($nbreRomain)===1)
    {

        $somme=base($nbreRomain);
       return $somme;
    }
    elseif(strlen($nbreRomain)>1)
    {
        for($j=0; $j<strlen($nbreRomain); $j++ )
        {
            
            $resultat[]=base($nbreRomain[$j]);
         
        }
   
        $i=0;
       while(sizeof($resultat)!=0)
        {
            if(isset($resultat[$i+1])){
                if($resultat[$i] === $resultat[$i+1]) 
                {
                    $somme+=$resultat[$i]+$resultat[$i+1];
                    array_splice($resultat,0,2);
                 
                }
       
                elseif($resultat[$i] < $resultat[$i + 1]) 
                {
                   $somme+=$resultat[$i+1] - $resultat[$i];
                  array_splice($resultat,0,2);
                  
                }
       
                elseif($resultat[$i] > $resultat[$i+1]) 
                {
                   $somme+= $resultat[$i];
                   array_splice($resultat,0,1);
                  
                }
            }
            else{
                $somme+=$resultat[$i];
                $resultat=array();
            }
           
        }
        

      return $somme;
    }

      
      



}


?>