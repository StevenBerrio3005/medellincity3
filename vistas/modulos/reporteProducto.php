
<?php
header("content-Type: application/xls");
header("content-Disposition: attachment; filename= reporte_productos.xls");
?>

<table class="" border="1px">
    <thead class="">

        <th bgcolor="MediumSpringGreen" >Codigo</th>
        <th bgcolor="MediumSpringGreen" >Nombre</th>
        <th bgcolor="MediumSpringGreen" >Talla</th>
        <th bgcolor="MediumSpringGreen" >Cantidad</th>
        <th bgcolor="MediumSpringGreen" >Descripcion</th>
        <th bgcolor="MediumSpringGreen" >Valor</th>
        <th bgcolor="MediumSpringGreen" >Imagen</th>
    </thead>
    <tbody>
        <?php
        $objCtrProdcuto = new ControladorProducto();
        $listaDeproductos = $objCtrProdcuto->ctrListarProductos();
        foreach ($listaDeproductos as $dato) {
            echo "
                <tr>
                    <td bgcolor='LightCyan' >" . $dato["id"] . "</td>
                    <td bgcolor='LightCyan' >" . $dato["nombre"] . "</td>
                    <td bgcolor='LightCyan' >" . $dato["talla"] . "</td>
                    <td bgcolor='LightCyan' >" . $dato["cantidad"] . "</td>
                    <td bgcolor='LightCyan' >" . $dato["descripcion"] . "</td>
                    <td bgcolor='LightCyan' >" . $dato["valor"] . "</td>
                    <td>
                        <img style='height: 100px; width: 100px' class='img-thumbnail' src='data:image/jpeg;base64," . base64_encode($dato["imagen"]) . "'/>
                    </td>
                </tr>
                ";
        }

        ?>

    </tbody>

</table>