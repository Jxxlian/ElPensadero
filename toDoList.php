    <div class="title_div">
        <h1 class="section-title">Lista de tareas</h1>
        <p> Despeja tu mente y anotá en esta lista todas las cosas que tengas pendientes a realizar.</p>
    </div>

    <div class="form_div">
        <form method="POST" action="index.php#toDoList">
        <?php if(ISSET($error)) {?>        
            <p> <?php echo $error; ?></p>
        <?php }?>
            <input type="text" name="task"  autocomplete="off">
            <button type="submit" name="submit" class="submit_btn">Agregar tarea</button>
        </form>
    </div>

    <div class="showTask">
        <table>
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Tárea pendiente</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

        <?php 
            $i = 1;
            while ($row = mysqli_fetch_array($showTasks)) { ?>        
                <tbody>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['task'] ?> </td>
                    <td><a href="index.php?dlt_task= <?php echo $row['id'];?>"> <button class="btn btn-danger">X</button> </a></td>
                </tbody>
            <?php $i++; } ?>

        </table> 
    </div>
</body>
</html>