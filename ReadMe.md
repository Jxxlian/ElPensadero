# El Pensadero - Web para estudiante

## Información general
En este proyecto desarrolé una onepage utilizando  HTML, CSS, Javascript, Bootstrap, PHP y Mysql. También hice uso de 'fullcalendar' y 'clockpicker' como repositorios externos. Las burbujas animadas solo es código HTML/CSS.

Las secciones de la web están compuestas por:
### Pomodoro
Aquí desarrollé un temporizador que permita contabilizar 25 minutos de trabajo y 5 de break, habíendo en el 4to ciclo una pausa de descanso mayor.
### Calendario
En esta sección utilicé 'fullcalendar' y algo de lógica propia a través de JS para poder crear un calendario al cual se le pueda agregar eventos, modificarlos y eliminarlos. La persistencia de esta información está ligada a una base de datos en Mysql.
### Lista de tareas
Consta de un código sencillo: es un formulario y utilizando PHP establezco la lógica necesaria para que el usuario pueda agregar o quitar tareas a una lista de pendientes. La persistencia de esta información está ligada a una base de datos en Mysql.
### Playlist
Es un código de youtube embebido en nuestra web.

## Explicación de mi lógica
- En el archivo 'event.php' y 'toDoList_logic.php' se encuentran los métodos que utilizo para hacer solicitudes a la BD. Casi toda la lógica ligada a Mysql usada en este proyecto intenté unificarla en estos archivo.

## Variables de entorno
Para que el proyecto funcione correctamente es necesario conectarlo a variables de entorno de Mysql ya que utiliza base de dato para el calendario y la lista de tareas (to do list).

 ## Test App
 [Vercel Test](https://pildora-gamma-flax.vercel.app/) FALTA PONER EL LINK AL REPOSITORIO SUBIDO

 ## Vista previa al proyecto
![Funcionamiento de la web](./public/images/Pildora[ScreenRecorder].gif) FALTA HACER UN GIF QUE MUESTRE LA WEB