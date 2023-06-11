<?php
class Escola
{
  private $id;
  private $nome;
  private $cnpj;
  private $endereco;
  private $status;
  private $usuario_id;

  private $con;

  public function __construct($id = NULL, $nome = NULL, $cnpj = NULL, $endereco = NULL, $status = NULL, $usuario_id = NULL)
  {
    $this->id = $id;
    $this->nome = $nome;
    $this->cnpj = $cnpj;
    $this->endereco = $endereco;
    $this->status = $status;
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
   * Get the value of cnpj
   */
  public function getCnpj()
  {
    return $this->cnpj;
  }

  /**
   * Set the value of cnpj
   *
   * @return  self
   */
  public function setCnpj($cnpj)
  {
    $this->cnpj = $cnpj;

    return $this;
  }

  /**
   * Get the value of endereco
   */
  public function getEndereco()
  {
    return $this->endereco;
  }

  /**
   * Set the value of endereco
   *
   * @return  self
   */
  public function setEndereco($endereco)
  {
    $this->endereco = $endereco;

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
