<?php
 
   
function makeIt($s)
{
    $s = substr($s, 0, 49);
    $s = strtolower($s);
    $s = preg_replace('/[^a-z]/i','',$s);

    
    $n = strlen($s);
    for($i=0;$i<$n/2;$i++)
    {
        if($s[$i]== $s[$n-$i-1])
            continue;
  
        if($s[$i]<$s[$n-$i-1])
            $s[$n-$i-1]= $s[$i] ;
        else
            $s[$i]= $s[$n-$i-1] ;
    }
    echo $s. " <br> ";
}
 
makeIt("abc");
makeIt("abcde");
makeIt("abba");
makeIt("a");
makeIt("aa");
makeIt("za");
makeIt("bbbbbaaaaa");
makeIt("qwerty");
makeIt("qkjhsqaeraklsdjfiopqwe");
makeIt("ikpzxcwerkwer");