<?php
class Professor
{
  private $id;
  private $nome;
  private $status;
  private $escola_id;
  private $usuario_id;


  private $con;
  public function __construct($id = NULL, $nome = NULL, $status = NULL, $escola_id = NULL, $usuario_id = NULL)
  {
    $this->id = $id;
    $this->nome = $nome;
    $this->status = $status;
    $this->escola_id = $escola_id;
    $this->usuario_id = $usuario_id;
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
   * Get the value of nome
   */
  public function getNome()
  {
    return $this->nome;
  }

  /**
   * Set the value of nome
   *
   * @return  self
   */
  public function setNome($nome)
  {
    $this->nome = $nome;

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
   * Get the value of usuario_id
   */
  public function getUsuario_id()
  {
    return $this->usuario_id;
  }

  /**
   * Set the value of usuario_id
   *
   * @return  self
   */
  public function setUsuario_id($usuario_id)
  {
    $this->usuario_id = $usuario_id;

    return $this;
  }
}
