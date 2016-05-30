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
    $this->imagen=imagecreate($this->ancho,$this->alto);
    $this->colorTexto=imagecolorallocate($this->imagen,255,255,0);
    $this->colorFondo=imagecolorallocate($this->imagen,255,0,0);
    imagefill($this->imagen,0,0,$this->colorFondo);
  }
  public function graficar()
  {
    imagestring ($this->imagen,50,50,10, $this->mensaje,$this->colorFuente);
    header ("Content-type: image/png");
    imagepng($this->imagen);
  }
  public function __destruct()
  {
    imagedestroy($this->imagen);
  }
}

$baner1=new Banner(428,45,'Sistema de Ventas por Mayor y Menor');
$baner1->graficar();
?> 