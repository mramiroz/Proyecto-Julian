@startuml
left to right direction
:Cliente: as CL

rectangle Supermercado {
    usecase "Buscar productos" as UC1
    usecase "Comprar productos" as UC2
}

CL -- UC1
CL -- UC2

@enduml