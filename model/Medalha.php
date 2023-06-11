<?php
class Medalha
{
  private $id;
  private $nome_medalha;
  private $tipo;
  private $peso;
  private $aluno_id;
  private $atividade_id;
  private $con;

  public function __construct($id = NULL, $nome_medalha = NULL, $tipo = NULL, $peso = NULL, $aluno_id = NULL, $atividade_id = NULL)
  {
    $this->id = $id;
    $this->nome_medalha = $nome_medalha;
    $this->tipo = $tipo;
    $this->peso = $peso;
    $this->aluno_id = $aluno_id;
    $this->atividade_id = $atividade_id;

    $this->con =  new PDO(SERVIDOR, USUARIO, SENHA);
  }

  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of nome_medalha
   */
  public function getNome_medalha()
  {
    return $this->nome_medalha;
  }

  /**
   * Set the value of nome_medalha
   *
   * @return  self
   */
  public function setNome_medalha($nome_medalha)
  {
    $this->nome_medalha = $nome_medalha;

    return $this;
  }

  /**
   * Get the value of tipo
   */
  public function getTipo()
  {
    return $this->tipo;
  }

  /**
   * Set the value of tipo
   *
   * @return  self
   */
  public function setTipo($tipo)
  {
    $this->tipo = $tipo;

    return $this;
  }

  /**
   * Get the value of peso
   */
  public function getPeso()
  {
    return $this->peso;
  }

  /**
   * Set the value of peso
   *
   * @return  self
   */
  public function setPeso($peso)
  {
    $this->peso = $peso;

    return $this;
  }

  /**
   * Get the value of aluno_id
   */
  public function getAluno_id()
  {
    return $this->aluno_id;
  }

  /**
   * Set the value of aluno_id
   *
   * @return  self
   */
  public function setAluno_id($aluno_id)
  {
    $this->aluno_id = $aluno_id;

    return $this;
  }

  /**
   * Get the value of atividade_id
   */
  public function getAtividade_id()
  {
    return $this->atividade_id;
  }

  /**
   * Set the value of atividade_id
   *
   * @return  self
   */
  public function setAtividade_id($atividade_id)
  {
    $this->atividade_id = $atividade_id;

    return $this;
  }
  public function lancarMedalhas()
  {
    if ($this->nome_medalha == "ouro") {
      $this->tipo = 2;
      $this->peso = 3;
    } else if ($this->nome_medalha == "prata") {
      $this->tipo = 1;
      $this->peso = 2;
    } else if ($this->nome_medalha == "bronze") {
      $this->tipo = 0;
      $this->peso = 1;
    }
    $sql = $this->con->prepare('SELECT * FROM medalha WHERE  aluno_id = ? and atividade_id = ? ');
    $sql->execute(array($this->aluno_id, $this->atividade_id));
    if ($sql->rowCount() == 0) {
      $sql = $this->con->prepare('INSERT INTO medalha (id,nome_medalha,tipo,peso,aluno_id,atividade_id) VALUES(null,?,?,?,?,?)');
      $sql->execute(array($this->nome_medalha, $this->tipo, $this->peso, $this->aluno_id, $this->atividade_id));
    } else {
      if ($_SESSION['medalha'] == "ouro") {
        $sql = $this->con->prepare('UPDATE medalha SET nome_medalha = "Ouro",tipo = 2,peso = 3 WHERE aluno_id = ?  and atividade_id = ?');
        $sql->execute(array($this->aluno_id, $this->atividade_id));
      }
      if ($_SESSION['medalha'] == "prata") {
        $sql = $this->con->prepare('SELECT * FROM medalha WHERE tipo = 2 and aluno_id = ? and atividade_id = ? ');
        $sql->execute(array($this->aluno_id, $this->atividade_id));
        if ($sql->rowCount() == 0) {
          $sql = $this->con->prepare('UPDATE medalha SET nome_medalha = "Prata",tipo = 1,peso = 2 WHERE aluno_id = ?  and atividade_id = ?');
          $sql->execute(array($this->aluno_id, $this->atividade_id));
        }
      }
    }
  }
}
