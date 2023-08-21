<?php

$idade = rand()&30;

if( $idade > 18){
    echo 'Older than 18';
  }  else {
    echo 'Younger than 18';
}

echo $idade;