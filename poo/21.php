<?php
class Banner {
  private $ancho;
  private $alto;
  private $mensaje;
  private $imagen;
  private $colorTexto;
  private $colorFondo;

  public function __construct($an,$al,$men)
  {
    $this->ancho=$an;
    $this->alto=$al;
    $this->mensaje=$men;
    $this->imagen=imagecreate($this->ancho, $this->alto);
    $this->colorTexto=imagecolorallocate($this->imagen,255,255,0);
    $this->colorFondo=imagecolorallocate($this->imagen,255,0,0);
    
  }
  public function graficar()
  {
    imagefill($this->imagen,0,0,$this->colorFondo);
    imagestring($this->imagen, 4, 30, 25, $this->mensaje, $this->colorTexto);
    imagesetthickness($this->imagen, 5);
    imageline($this->imagen, 30, 45, 165, 45, $this->colorTexto);
    header( "Content-type: image/png" );
    imagepng($this->imagen);
    imagecolordeallocate($this->colorTexto);
    imagecolordeallocate($this->colorFondo);
  }
  public function __destruct()
  {
    imagedestroy($this->imagen);
  }

}

$baner1 = new Banner(628, 145,'Sistema de Ventas');
$baner1->graficar();


?>