@startuml
left to right direction
:Cliente: as CL
:Vendedor: as V

rectangle Supermercado {
    usecase "Registro de usuario" as UC1
    usecase "Iniciar sesión" as UC2
    usecase "Buscar productos" as UC3
    usecase "Añadir productos al carrito" as UC4
    usecase "Pagar los productos" as UC5
}

CL -- UC1
CL -- UC2
CL -- UC3
CL -- UC4
CL -- UC5
V -- UC5

@enduml

[Volver](Proyecto.md)