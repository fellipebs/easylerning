<?php
class Turma
{
  private $id;
  private $nome_turma;
  private $status;
  private $escola_id;
  private $professor_id;

  public function __construct($id = NULL, $nome_turma = NULL, $status = NULL, $escola_id = NULL, $professor_id = NULL)
  {
    $this->id = $id;
    $this->nome_turma = $nome_turma;
    $this->status = $status;
    $this->escola_id = $escola_id;
    $this->professor_id = $professor_id;
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
   * Get the value of nome_turma
   */
  public function getNome_turma()
  {
    return $this->nome_turma;
  }

  /**
   * Set the value of nome_turma
   *
   * @return  self
   */
  public function setNome_turma($nome_turma)
  {
    $this->nome_turma = $nome_turma;

    return $this;
  }

  /**
   * Get the value of status
   */
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * Set the value of status
   *
   * @return  self
   */
  public function setStatus($status)
  {
    $this->status = $status;

    return $this;
  }

  /**
   * Get the value of escola_id
   */
  public function getEscola_id()
  {
    return $this->escola_id;
  }

  /**
   * Set the value of escola_id
   *
   * @return  self
   */
  public function setEscola_id($escola_id)
  {
    $this->escola_id = $escola_id;

    return $this;
  }

  /**
   * Get the value of professor_id
   */
  public function getProfessor_id()
  {
    return $this->professor_id;
  }

  /**
   * Set the value of professor_id
   *
   * @return  self
   */
  public function setProfessor_id($professor_id)
  {
    $this->professor_id = $professor_id;

    return $this;
  }
}
