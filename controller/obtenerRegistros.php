<?php
    require_once '../model/userModel.php';
    function obtenerRegistros(){
        $model = new UserModel();
        echo "<table border='2' >
                <thead>
                    <th>Nombre</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Opciones</th>
                </thead>
                <tbody>";
        foreach ($model->mostrarRegistros() as $row){
            echo "<tr>
                    <td>".$row['name']."</td>
                    <td>".$row['username']."</td>
                    <td>".$row['password']."</td>
                    <td>
                        <a href=''>Editar</a>
                        <a href='../controller/eliminarRegistro.php?userid=".$row['id']."'>Eliminar</a>
                    </td>
                  </tr>";
        }
        echo "</tbody>
            </table>";
    }
?>