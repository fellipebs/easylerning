<?php
class Notificacao
{
  private $id;
  private $descricao;
  private $aluno_id;
  private $data;
  private $id_enviou;

  private $con;

  public function __construct($id = NULL, $descricao = NULL, $aluno_id = NULL, $data = NULL, $id_enviou = NULL)
  {
    $this->id = $id;
    $this->descricao = $descricao;
    $this->aluno_id = $aluno_id;
    $this->data = $data;
    $this->id_enviou = $id_enviou;
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
   * Get the value of descricao
   */
  public function getDescricao()
  {
    return $this->descricao;
  }

  /**
   * Set the value of descricao
   *
   * @return  self
   */
  public function setDescricao($descricao)
  {
    $this->descricao = $descricao;

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
   * Get the value of data
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * Set the value of data
   *
   * @return  self
   */
  public function setData($data)
  {
    $this->data = $data;

    return $this;
  }

  /**
   * Get the value of id_enviou
   */
  public function getId_enviou()
  {
    return $this->id_enviou;
  }

  /**
   * Set the value of id_enviou
   *
   * @return  self
   */
  public function setId_enviou($id_enviou)
  {
    $this->id_enviou = $id_enviou;

    return $this;
  }
}
