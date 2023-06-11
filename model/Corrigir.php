<?php
class Corrigir
{
  private $termos;
  private $usuario;

  private $numTermos;
   /**
   * Get the value of termos
   */ 
  public function getTermos()
  {
    return $this->termos;
  }

  /**
   * Set the value of termos
   *
   * @return  self
   */ 
  public function setTermos($termos)
  {
    $this->termos = $termos;

    return $this;
  }
  /**
   * Get the value of usuario
   */
  
  public function getUsuario()
  {
    return $this->usuario;
  }

  /**
   * Set the value of usuario
   *
   * @return  self
   */
  public function setUsuario($usuario)
  {
    $this->usuario = $usuario;

    return $this;
  }
  public function corrigirAtividade()
  {
    $numTermos = count($this->termos);
    switch($numTermos){
      case 2:
            if (strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' .$this->usuario . "_js.txt"), $this->termos[0]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' .$this->usuario . "_js.txt"), $this->termos[1]) !== false) {
              $_SESSION['resposta'] =  $_SESSION['respostas'][0];
              $_SESSION['demoImage'] = $_SESSION['demoImages'][0];
              $_SESSION['notaAtividade'] = 10;
              $_SESSION['medalha'] = "ouro";
            } else if (strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' .$this->usuario . "_js.txt"), $this->termos[0]) == false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' .$this->usuario . "_js.txt"), $this->termos[1]) !== false) {
                $_SESSION['resposta'] =  $_SESSION['respostas'][1];
                $_SESSION['demoImage'] = $_SESSION['demoImages'][1];
                $_SESSION['notaAtividade'] = 8;
            } else if (strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' .$this->usuario . "_js.txt"), $this->termos[0]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' .$this->usuario . "_js.txt"), $this->termos[1]) === false) {
                $_SESSION['resposta'] =  $_SESSION['respostas'][2];
                $_SESSION['demoImage'] = $_SESSION['demoImages'][2];
                $_SESSION['notaAtividade'] = 7;
            } else {
                $_SESSION['resposta'] =  $_SESSION['respostas'][3];
                $_SESSION['demoImage'] = $_SESSION['demoImages'][3];
                $_SESSION['notaAtividade'] = 0;
            }
          break;
      case 3:
            if (strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[0]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[1]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[2]) !== false) {
              $_SESSION['resposta'] = $_SESSION['respostas'][0];
              $_SESSION['demoImage'] = $_SESSION['demoImages'][0];
              $_SESSION['notaAtividade'] = 10;
              $_SESSION['medalha'] = "ouro";
            } else if (strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[0]) == false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[1]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[2]) !== false) {
              $_SESSION['resposta'] = $_SESSION['respostas'][1];
              $_SESSION['demoImage'] = $_SESSION['demoImages'][1];
              $_SESSION['notaAtividade'] = 8;
            } else if (strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[0]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[1]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[2]) == false) {
              $_SESSION['resposta'] = $_SESSION['respostas'][2];
              $_SESSION['demoImage'] = $_SESSION['demoImages'][2];
              $_SESSION['notaAtividade'] = 7;
            } else if (strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[0]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[1]) == false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[2]) !== false) {
              $_SESSION['resposta'] = $_SESSION['respostas'][3];
              $_SESSION['demoImage'] = $_SESSION['demoImages'][3];
              $_SESSION['notaAtividade'] = 8;
            } else if (strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[0]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[1]) == false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[2]) == false) {
              $_SESSION['resposta'] = $_SESSION['respostas'][4];
              $_SESSION['demoImage'] = $_SESSION['demoImages'][4];
              $_SESSION['notaAtividade'] = 6;
            } else if (strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[0]) == false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[1]) == false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $this->termos[2]) !== false) {
              $_SESSION['resposta'] = $_SESSION['respostas'][5];
              $_SESSION['demoImage'] = $_SESSION['demoImages'][5];
              $_SESSION['notaAtividade'] = 6;
            } else {
              $_SESSION['resposta'] = $_SESSION['respostas'][6];
              $_SESSION['demoImage'] = $_SESSION['demoImages'][4];
              $_SESSION['notaAtividade'] = 0;
            }
          break;
      case 4:
          if (strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' .$this->usuario . "_js.txt"), $_SESSION['termos'][0]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' .$this->usuario . "_js.txt"), $_SESSION['termos'][1]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' .$this->usuario . "_js.txt"), $_SESSION['termos'][2]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' .$this->usuario . "_js.txt"), $_SESSION['termos'][3]) !== false) {
            $_SESSION['resposta'] = $_SESSION['respostas'][0];
            $_SESSION['demoImage'] = $_SESSION['demoImages'][0];
            $_SESSION['notaAtividade'] = 10;
            $_SESSION['medalha'] = "ouro";
          }
          break;
      case 6:
        if (strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $termo[0]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $termo[1]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $termo[2]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $termo[3]) !== false) {
          $_SESSION['resposta'] = $_SESSION['respostas'][0];
          $_SESSION['demoImage'] = $_SESSION['demoImages'][0];
          $_SESSION['notaAtividade'] = 10;
          $_SESSION['medalha'] = "ouro";
        } else if (strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $termo[0]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $termo[2]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $termo[4]) !== false) {
            $_SESSION['resposta'] = $_SESSION['respostas'][1];
            $_SESSION['demoImage'] = $_SESSION['demoImages'][1];
            $_SESSION['notaAtividade'] = 10;
            $_SESSION['medalha'] = "prata";
        } elseif (strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $termo[5]) !== false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $termo[2]) === false and strpos(file_get_contents('../atividades/' . $_SESSION['pasta'] . '/' . $this->usuario . "_js.txt"), $termo[4]) === false) {
            $_SESSION['resposta'] = $_SESSION['respostas'][2];
            $_SESSION['demoImage'] = $_SESSION['demoImages'][2];
            $_SESSION['notaAtividade'] = 6;
        } else {
            $_SESSION['resposta'] = $_SESSION['respostas'][3];
            $_SESSION['demoImage'] = $_SESSION['demoImages'][2];
            $_SESSION['notaAtividade'] = 0;
        }
          break;
    }
  }

 
}
