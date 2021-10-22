# Encuentra el bug en el sistema

### Tecnologías utilizadas
Para el desarrollo de esta prueba decidimos utilizar un grupo tecnologías bastante conocidas y fuertemente implementadas en la industria del desarrollo por su
gran funcionalidad, además de que gozan de una documentación completa apoyada por grandes comunidades de desarrolladores que facilitan su implementación
de estas herramientas las cuales voy a nombrar a continuación:

- [**Laravel 8:**](https://laravel.com/docs/8.x) Es un framework de PHP para desarrollo web el cual utilizamos para implementar el backend de la prueba, también nos suministró una estable compatibilidad con las demás herramientas.
- [**Laravel Breeze:**](https://laravel.com/docs/8.x/starter-kits#laravel-breeze) Utilizamos Laravel Breeze el cual es un pluguin para aplicaciones creadas con Laravel que incluye los componentes y las vistas necesarias para la autenticación de usuarios. Utiliza el motor Blade de Laravel para las vistas y Tailwind como framework CSS.
- [**Laravel Sail:**](https://laravel.com/docs/8.x/sail) Es una interfaz de línea de comandos liviana para Laravel que nos permite interactuar con el entorno de desarrollo de Docker creando un docker-compose con diversos contenedores seleccionables desde la línea de comandos. Acá también podemos exportar la configuración a archivos docker-file.
- [**Docker:**](https://docs.docker.com/) Es un sistema operativo que empaqueta software en "contenedores" el cual incluye en estos todo lo necesario para que dicho software se ejecute sin problema en cualquier entorno.
- [**Laravel-permission:**](https://spatie.be/docs/laravel-permission/v5/introduction) Este paquete nos permitió asociar a nuestros usuarios con roles y permisos en nuestra base de datos para después poder trabajar dentro de la página con estos roles a dependiendo de nuestras necesidades.
- [**Tailwindcss:**](https://tailwindcss.com/docs) Utilizamos Tailwindcss junto [Alpine.js](https://alpinejs.dev/start-here) para el diseño de formularios e interacción con el usuario.
- [**Laravel Echo:**](https://laravel.com/docs/8.x/broadcasting) Es una librería de JavaScript que sirve para conectarnos a un servidor de websocket (en este caso Pusher)  para implementar la interfaz del usuario de actualización en tiempo real. Íbamos a utilizar esta herramienta para la interfaz del juego, pero no la alcanzamos a implementar.


