<?php
require_once "../models/persona.model.php";
echo json_encode(Persona::eliminarDatos($_POST['id']));