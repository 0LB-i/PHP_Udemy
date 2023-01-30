<?php


#Operador AND: &&
#Operador OR: ||
#Operador NOR: !

echo 'AND && <br>';

if(5 > 10 && 10 > 5){ //false e true
    echo "Entrou no if 1 <br>";
}

if(50 > 10 && 10 > 5){ //true e true
    echo "Entrou no if 2 <br>";
}

if(5 > 10 && 10 > 50){ //false e false
    echo "Entrou no if 3 <br>";
}

echo 'OR || <br>';

if(5 > 10 || 10 > 50){ //false e false
    echo "Entrou no if 4 <br>";
}


if(5 > 10 || 10 < 50){ //false e true
    echo "Entrou no if 5 <br>";
}


if(5 < 10 || 10 < 50){ //true e true
    echo "Entrou no if 6 <br>";
}

echo "NOT ! <br>";

if(5 > 2){ //true
    echo "Entrou no if 7 <br>";
}

if(!(5 > 2)){ //false
    echo "Entrou no if 8 <br>";
}