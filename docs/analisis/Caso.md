@startuml
left to right direction
:Cliente Autentificado: as CLA
:Cliente no Autentificado: as CLNA
:Administrador: as AD

rectangle Supermercado {
    usecase "Buscar productos" as UC1
    usecase "Inspeccionar producto" as UC2
    usecase "Comprar productos" as UC3
    usecase "Crear producto" as UC4
    usecase "Publicar productos" as UC5
    usecase "Ocultar productos" as UC6
    usecase "Cambiar información producto" as UC7
}

CLA -- UC1
CLA -- UC2
CLA -- UC3
CLNA -- UC1
CLNA -- UC2
AD -- UC4
AD -- UC5
AD -- UC6
AD -- UC7

@enduml
