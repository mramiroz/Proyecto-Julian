@startuml
left to right direction
:Cliente: as CL
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

CL -- UC1
CL -- UC2
CL -- UC3
AD -- UC4
AD -- UC5
AD -- UC6
AD -- UC7

@enduml