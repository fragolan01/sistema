# sistema

## Estructura:
proyecto/
│
├── cronjobs/                  # Tareas programadas, fuera del MVC principal
│   └── backup.php
│   └── actualiza_datos.php
│
└── utilent/                   # Carpeta raíz del sistema MVC (PHP puro)
    ├── controllers/           # Controladores (1 por entidad/tablas)
    │   └── ProductosController.php
    │   └── ClientesController.php
    │   └── ...
    │
    ├── models/                # Modelos con lógica de acceso a datos
    │   └── Producto.php
    │   └── Cliente.php
    │   └── ...
    │
    ├── views/                 # Vistas divididas por entidad
    │   └── productos/
    │   │   └── listar.php
    │   │   └── editar.php
    │   └── clientes/
    │       └── listar.php
    │       └── editar.php
    │
    ├── core/                  # Clases de soporte: router, controlador base, etc.
    │   └── App.php            # Enrutador principal
    │   └── Controller.php     # Clase base para controladores
    │   └── Model.php          # Clase base para modelos
    │   └── Paginador.php      # Clase de paginación
    │
    ├── public/                # Raíz web (DocumentRoot del servidor)
    │   ├── index.php          # Punto de entrada de la app
    │   ├── assets/            # Recursos estáticos
    │   │   ├── css/
    │   │   │   └── bootstrap.min.css
    │   │   ├── js/
    │   │   │   └── bootstrap.min.js
    │   │   └── img/
    │   └── .htaccess          # Redirección a index.php (opcional)
    │
    ├── config/                # Configuración centralizada
    │   └── database.php       # Conexión a la base de datos
    │   └── rutas.php          # Definición de rutas (opcional)
    │
    ├── helpers/               # Funciones de utilidad (validaciones, helpers HTML)
    │   └── funciones.php
    │   └── sanitizar.php
    │
    └── .htaccess              # Reescritura desde Apache si lo deseas usar


## Esta estructura está inspirada en:

El patrón MVC clásico, pero sin frameworks, completamente PHP puro.
Buenas prácticas de organización como las de CodeIgniter o CakePHP 1.x, pero simplificadas.
Facilidad de despliegue en servidores compartidos o XAMPP sin necesidad de configuraciones complejas.
Separación de responsabilidades, lo cual facilita el mantenimiento y escalabilidad.