<?php
  if ($peticionAjax) {
    require_once "../modelos/usuarioModelo.php";
  } else {
    require_once "./modelos/usuarioModelo.php";
  }

  class usuarioControlador extends usuarioModelo{
    public function agregar_usuario_controlador(){
      
    }
  }
  