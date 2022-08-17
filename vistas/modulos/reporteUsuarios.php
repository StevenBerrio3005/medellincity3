<?php
	header("content-Type: application/xls");
	header("content-Disposition: attachment; filename= reporte_usuarios.xls");
?>
	<table class="" id="" border="1px">
            <thead class="table-dark">

                <th bgcolor="MediumSpringGreen" >id</th>
                <th bgcolor="MediumSpringGreen" >Usuario</th>
                <th bgcolor="MediumSpringGreen" >Contraseña</th>
                <th bgcolor="MediumSpringGreen" >Nombre</th>
                <th bgcolor="MediumSpringGreen" >Apellido</th>
                <th bgcolor="MediumSpringGreen" >Cedula</th>
                <th bgcolor="MediumSpringGreen" >Email</th>
                <th bgcolor="MediumSpringGreen" >Telefono</th>
                <th bgcolor="MediumSpringGreen" >id_tipo</th>

            </thead>
            <tbody>
                <?php
                $objCtrCtrUsuario = new ControllerUsuario();
                $listaDeUsuario = $objCtrCtrUsuario->ctrListarUsuario();
                foreach ($listaDeUsuario as $dato) {
                    echo "
                        <tr>
                             <td bgcolor='LightCyan' >" . $dato["id"] . "</td>
                             <td bgcolor='LightCyan' >" . $dato["user"] . "</td>
                             <td bgcolor='LightCyan' >" . $dato["password"] . "</td>
                             <td bgcolor='LightCyan' >" . $dato["nombres"] . "</td>
                             <td bgcolor='LightCyan' >" . $dato["apellidos"] . "</td>
                             <td bgcolor='LightCyan' >" . $dato["cedula"] . "</td>
                             <td bgcolor='LightCyan' >" . $dato["email"] . "</td>
                             <td bgcolor='LightCyan' >" . $dato["telefono"] . "</td>
                             <td bgcolor='LightCyan' >" . $dato["id_tipo"] . "</td>
                             

                                
                        </tr>
                    ";
                }
                ?>

            </tbody>

        </table>
