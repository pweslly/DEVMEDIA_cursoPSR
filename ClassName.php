<?php
/* As classes devem ser escritas formato StudlyCaps, ou seja
iniciar com letra maiúscula. */

namespace Vendor\Package;

class ClassName
{
   /* Uso de constante de classes deve ser inteiramente em letras maiusculas.
  separa por underscore _ */
  const VERSION = '1.0';
  const DATE_APPROVED = '2012-06-01';


  public function aVeryLongMethodName(
    classTypeHint $ar1,
    $arg2,
      array $arg3 = []
  ){
    //method body
  }

  /* Os metodos devem ser declarados em camelCase, ou seja, devem inic
  */
  public function fooBarBaz($arg1, $arg2, $arg3 = [])
    {
      // method body
    }
 
  
  
}

?>