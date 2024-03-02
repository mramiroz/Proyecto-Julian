@startuml

entity "Producto" {
    +id: int
    img: string
    name: string
    desc: string
    importe: float
}

entity "Carrito" {
    +id: int
    gastos: float
    iva: float
    total: float
}

entity "Usuario"{
    +id: int
    tipo: string
    name: string
    email: string
}

Carrito -- Usuario : "1:1"
Carrito -- Producto : "N:1"

@enduml
<!-- @startuml
class Producto{
    +id: int
    name: string
    desc: string
    importe: float
}
class Carrito{
    +id: int
    productos: Producto[]
    total: float
}

class Usuario{
    +id: int
    carrito: Carrito
}

class Cliente{
    name: string
    email: string
    pass: string
}
Usuario--|>Cliente

@enduml -->
