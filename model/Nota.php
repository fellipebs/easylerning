<?php
class Nota
{
  private $id;
  private $valor_atividade;
  private $nota;
  private $aluno_id;
  private $atividade_id;

  private $con;

  public function __construct($id = NULL, $valor_atividade = NULL, $nota = NULL, $aluno_id = NULL, $atividade_id = NULL)
  {
    $this->id = $id;
    $this->valor_atividade = $valor_atividade;
    $this->nota = $nota;
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
   * Get the value of valor_atividade
   */
  public function getValor_atividade()
  {
    return $this->valor_atividade;
  }

  /**
   * Set the value of valor_atividade
   *
   * @return  self
   */
  public function setValor_atividade($valor_atividade)
  {
    $this->valor_atividade = $valor_atividade;

    return $this;
  }

  /**
   * Get the value of nota
   */
  public function getNota()
  {
    return $this->nota;
  }

  /**
   * Set the value of nota
   *
   * @return  self
   */
  public function setNota($nota)
  {
    $this->nota = $nota;

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
  public function lancarNotas()
  {
    $dateNow = date('Y-m-d H:i');
    $sql = $this->con->prepare("SELECT * FROM nota WHERE aluno_id = ? and atividade_id = ?");
    $sql->execute(array($this->aluno_id, $this->atividade_id));
    $row = $sql->fetchObject();
    if ($sql->rowCount() == 0) {
      $sql = $this->con->prepare("INSERT INTO nota VALUES(null,?,?,?,?)");
      $sql->execute(array($this->valor_atividade, $this->nota, $this->aluno_id, $this->atividade_id));
    } elseif (intval($this->nota) > $row->nota) {
      $sql = $this->con->prepare("UPDATE  nota SET nota = ? WHERE aluno_id = ? and atividade_id = ?;");
      $sql->execute(array($this->nota, $this->aluno_id, $this->atividade_id));
    }
    $sql = $this->con->prepare("SELECT * FROM atividade_aluno WHERE aluno_id = ? and atividade_id = ?");
    $sql->execute(array($this->aluno_id, $this->atividade_id));
    if ($sql->rowCount() == 0) {
      $sql = $this->con->prepare("INSERT INTO atividade_aluno VALUES(null,'Corrigida - Com nota',?,?,?)");
      $sql->execute(array($dateNow, $this->aluno_id, $this->atividade_id));
    } else {
      $sql = $this->con->prepare("UPDATE atividade_aluno SET status = 'Corrigida - Com nota' where aluno_id = ? and atividade_id = ?");
      $sql->execute(array($this->aluno_id, $this->atividade_id));
    }
    $sql = $this->con->prepare("SELECT * FROM atividade_aluno WHERE aluno_id = ? and atividade_id = ?");
    $sql->execute(array($this->aluno_id, $this->atividade_id));
    if ($sql->rowCount() == 0) {
      $sql = $this->con->prepare("INSERT INTO atividade_aluno VALUES(null,'Corrigida - Com nota',?,?,?)");
      $sql->execute(array($dateNow, $this->aluno_id, $this->atividade_id));
    } else {
      $sql = $this->con->prepare("UPDATE atividade_aluno SET status = 'Corrigida - Com nota' where aluno_id = ? and atividade_id = ?");
      $sql->execute(array($this->aluno_id, $this->atividade_id));
    }
  }
}
