/* La comparacion new A() == new B() seguira siendo false. En JavaScript, 
cuando comparas dos objetos con el operador de igualdad (==), se comparan las 
referencias de objetos, no sus valores internos. Incluso si las funciones A y B 
devuelven el mismo valor con un metodo valueOf, seguiran siendo dos objetos diferentes 
y la comparacion sera falsa. */
  
  