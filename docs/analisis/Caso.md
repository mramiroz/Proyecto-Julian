@startuml
left to right direction
:Cliente no Autentificado: as CLNA
:Cliente Autentificado: as CLA
:Administrador: as AD

rectangle Supermercado {
    usecase "Buscar productos" as UC1
    usecase "Comprar productos" as UC2
    usecase "Gestionar productos" as UC3
}

CLNA <|-- CLA
CLNA <|-- AD
CLNA -- UC1
CLA -- UC2
AD -- UC3

@enduml
