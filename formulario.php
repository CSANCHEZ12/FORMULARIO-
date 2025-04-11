

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #000;
      padding: 10px;
      text-align: center;
    }
    th {
      background-color: #f4f4f4;
    }
  </style>
</head>
<body>

  <div class="contenedor">
    
    <div class="barra-superior-1">
      <input type="button" value="Cuenta" class="cuenta">
      <input type="button" value="Cerrar Sesion" class="cerrar-sesion">
    </div>
    

      <div class="barra-superior-2">
        <span class="material-icons">person_add</span>
        <span class="material-icons">signal_cellular_alt</span>
        <span class="material-icons">recent_actors</span>
        <span class="material-icons">account_box</span>
      </div>
      <div class="barra-lateral">
        <span class="material-icons">group</span>
        <span class="material-icons">menu</span>
        <span class="material-icons">assignment_add</span>
      </div>
    
      

      <div class="contenido-principal">
        <h1>FORMULARIO DE REGISTRO</h1>

        <form action="guardar.php" method="post" class="formulario">
          <input type="text" name="id_personas" id="id_personas" style="display:none;">
          <div class="form-group">
            <label for="tipo">Tipo:</label>
            <select name="tipo" id="tipo" required>
              <option disabled selected value="">--Seleccione--</option>
              <option value="cedula">Cedula</option>
              <option value="pasaporte">Pasaporte</option>
              <option value="cedula_de_extranjeria">Cedula de extranjeria</option>
            </select>
          </div>

          <div class="form-group">
            <label for="cedula">Cedula:</label>
            <input type="number" name="cedula" id="cedula" required pattern="[0-9]{12}">
          </div>

          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
          </div>

          <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" required>
          </div>

          <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" name="telefono" id="telefono" pattern="\d{10}" required>
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
          </div>

          <div class="form-group">
            <label for="cumple">Cumpleaños:</label>
            <input type="date" name="cumple" id="cumple" required>
          </div>

          <div class="form-group">
            <label for="estrato">Estrato:</label>
            <select name="estrato" id="estrato" required>
              <option disabled selected value="">--Seleccione--</option>
              <option value="estrato1">1</option>
              <option value="estrato2">2</option>
              <option value="estrato3">3</option>
              <option value="estrato4">4</option>
              <option value="estrato5">5</option>
              <option value="estrato6">6</option>
            </select>

          </div>
          <div class="form-group">
            <label for="barrio">Barrio:</label>
            <select name="barrio" id="barrio" required>
              <option disabled selected value="">--Seleccione--</option>
              <option value="opcion2">Barrio 1</option>
              <option value="opcion3">Barrio 2</option>
              <option value="opcion4">Barrio 3</option>
              <option value="opcion5">Barrio 4</option>
              <option value="opcion6">Barrio 5</option>
              <option value="opcion7">Barrio 6</option>
            </select>

          </div>
          <div class="form-group">
            <label for="sexo">Sexo:</label>
            <select name="sexo" id="sexo" required>
              <option disabled selected value="">--Seleccione--</option>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
            </select>
          </div>

          <div class="form-group">
            <label for="departamento">Departamento:</label>
            <select name="departamento" id="departamento" required>
            <option disabled selected value="">-- Seleccione --</option>
            <option value="amazonas">Amazonas</option>
            <option value="antioquia">Antioquia</option>
            <option value="arauca">Arauca</option>
            <option value="atlantico">Atlántico</option>
            <option value="bolivar">Bolívar</option>
            <option value="boyaca">Boyacá</option>
            <option value="caldas">Caldas</option>
            <option value="caqueta">Caquetá</option>
            <option value="casanare">Casanare</option>
            <option value="cauca">Cauca</option>
            <option value="cesar">Cesar</option>
            <option value="choco">Chocó</option>
            <option value="cordoba">Córdoba</option>
            <option value="cundinamarca">Cundinamarca</option>
            <option value="guainia">Guainía</option>
            <option value="guaviare">Guaviare</option>
            <option value="huila">Huila</option>
            <option value="la_guajira">La Guajira</option>
            <option value="magdalena">Magdalena</option>
            <option value="meta">Meta</option>
            <option value="narino">Nariño</option>
            <option value="norte_de_santander">Norte de Santander</option>
            <option value="putumayo">Putumayo</option>
            <option value="quindio">Quindío</option>
            <option value="risaralda">Risaralda</option>
            <option value="san_andres">San Andrés y Providencia</option>
            <option value="santander">Santander</option>
            <option value="sucre">Sucre</option>
            <option value="tolima">Tolima</option>
            <option value="valle_del_cauca">Valle del Cauca</option>
            <option value="vaupes">Vaupés</option>
            <option value="vichada">Vichada</option>
          </select>
          </div>

          <div class="form-group">
            <label for="municipio">Municipio:</label>
            <select name="municipio" id="municipio" required>
              <option disabled selected value="">-</option>
              <option value="Arauca">Arauca</option>
              <option value="Armenia">Armenia</option>
              <option value="Barranquilla">Barranquilla</option>
              <option value="Bogotá">Bogotá</option>
              <option value="Bucaramanga">Bucaramanga</option>
              <option value="Cali">Cali</option>
              <option value="Cartagena">Cartagena</option>
              <option value="Cúcuta">Cúcuta</option>
              <option value="Florencia">Florencia</option>
              <option value="Ibagué">Ibagué</option>
              <option value="Leticia">Leticia</option>
              <option value="Manizales">Manizales</option>
              <option value="Medellín">Medellín</option>
              <option value="Mitú">Mitú</option>
              <option value="Mocoa">Mocoa</option>
              <option value="Montería">Montería</option>
              <option value="Neiva">Neiva</option>
              <option value="Pasto">Pasto</option>
              <option value="Pereira">Pereira</option>
              <option value="Popayán">Popayán</option>
              <option value="Puerto Carreño">Puerto Carreño</option>
              <option value="Puerto Inírida">Puerto Inírida</option>
              <option value="Quibdó">Quibdó</option>
              <option value="Riohacha">Riohacha</option>
              <option value="San Andrés">San Andrés</option>
              <option value="San José del Guaviare">San José del Guaviare</option>
              <option value="Santa Marta">Santa Marta</option>
              <option value="Sincelejo">Sincelejo</option>
              <option value="Tunja">Tunja</option>
              <option value="Valledupar">Valledupar</option>
              <option value="Villavicencio">Villavicencio</option>
              <option value="Yopal">Yopal</option>
           </select>
            </select>
          </div>

          <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" required>
          </div>

          <div class="form-group">
            <label for="lider">Nombre del Lider:</label>
            <select name="lider" id="lider" required>
              <option disabled selected value="">--Seleccione--</option>
              <option value="Carlos Enrique Enciso">Carlos Enrique Enciso</option>
              <option value="Carlos Alberto Sanchez Casallas">Carlos Alberto Sanchez Casallas</option>
            </select>
          </div>

          <div class="form-group">
            <label for="sitio">Sitio:</label>
            <input type="text" name="sitio" id="sitio" required>
          </div>

          <div class="form-group">
            <label for="mesa">Mesa de votacion:</label>
            <input type="number" name="mesa" id="mesa" min="1" max="10" required>
          </div>

          <div class="form-group">
            <label for="tratamiento">Autorizo el tratamiento de mis datos personales:<input type="checkbox" name="tratamiento" id="tratamiento" required></label>
          </div>
          
          <div class="botones">
            <button class="boton1">Guardar</button>
            <button class="boton2">Cancelar</button>
          </div>
        </form>

        <?php
        
        require_once 'conexion.php';

        $sql = "SELECT * FROM persona";
        $resultado = $conn->query($sql);  

        if ($resultado) {
            echo '<div class="tabla">';
            echo '<h1 class="tablah1">INFORMACION DE REGISTROS</h1>';
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Id</th>';
            echo '<th>Tipo</th>';
            echo '<th>Cedula</th>';
            echo '<th>Nombre</th>';
            echo '<th>Apellido</th>';
            echo '<th>Telefono</th>';
            echo '<th>Email</th>';
            echo '<th>Cumpleaños</th>';
            echo '<th>Estrato</th>';
            echo '<th>Barrio</th>';
            echo '<th>Sexo</th>';
            echo '<th>Departamento</th>';
            echo '<th>Municipio</th>';
            echo '<th>Direccion</th>';
            echo '<th>Lider</th>';
            echo '<th>Sitio</th>';
            echo '<th>Mesa</th>';
            echo '<th>Tratamiento</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila['id_personas'] . "</td>";
                echo "<td>" . $fila['tipo'] . "</td>";
                echo "<td>" . $fila['cedula'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $fila['apellido'] . "</td>";
                echo "<td>" . $fila['telefono'] . "</td>";
                echo "<td>" . $fila['email'] . "</td>";
                echo "<td>" . $fila['cumple'] . "</td>";
                echo "<td>" . $fila['estrato'] . "</td>";
                echo "<td>" . $fila['barrio'] . "</td>";
                echo "<td>" . $fila['sexo'] . "</td>";
                echo "<td>" . $fila['departamento'] . "</td>";
                echo "<td>" . $fila['municipio'] . "</td>";
                echo "<td>" . $fila['direccion'] . "</td>";
                echo "<td>" . $fila['lider'] . "</td>";
                echo "<td>" . $fila['sitio'] . "</td>";
                echo "<td>" . $fila['mesa'] . "</td>";
                echo "<td>" . $fila['tratamiento'] . "</td>";
                echo "</tr>";
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        } else {
            echo "<tr><td>Error en la consulta</td></tr>";
        }
        $conn->close(); 
        ?>
      </div>
  </div>
</body>
</html>