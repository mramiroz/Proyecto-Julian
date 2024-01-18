@startuml
skinparam ConditionEndStyle hline
|Supermercado|
start
:Cliente pulsa tramitar pedido;
if (¿Tiene la sesión iniciada?) then (True) 
  else (False)
  :Pulsa crear cuenta;
  repeat :Rellenar datos de cuenta;
  repeat while (¿Datos de cuenta válidos?) is (False) not (True)
  :Crea la cuenta;
  endif
  :Mostrar resumen del pedido;
  repeat :Elegir método de pago;
  repeat while (¿Método de pago válido?) is (False) not (True)
  repeat :Confirmación y pago;
  repeat while (¿Transaccion válida?) is (False) not (True)
  |Supermercado|
  :Mostrar ticket;
  |Almacen|
  :Retirar producto;
  :Enviar producto;
stop
@enduml