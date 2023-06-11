<?php
class Usuarios
{
  private $id;
  private $usuario;
  private $email;
  private $login;
  private $senha;
  private $foto;
  private $status;

  private $con;

  public function __construct($id = NULL, $usuario = NULL, $email = NULL, $login = NULL, $senha = NULL, $foto = NULL, $status = NULL)
  {
    $this->id = $id;
    $this->usuario = $usuario;
    $this->email = $email;
    $this->login = $login;
    $this->senha = $senha;
    $this->foto = $foto;
    $this->status = $status;

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

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of login
   */
  public function getLogin()
  {
    return $this->login;
  }

  /**
   * Set the value of login
   *
   * @return  self
   */
  public function setLogin($login)
  {
    $this->login = $login;

    return $this;
  }

  /**
   * Get the value of senha
   */
  public function getSenha()
  {
    return $this->senha;
  }

  /**
   * Set the value of senha
   *
   * @return  self
   */
  public function setSenha($senha)
  {
    $this->senha = $senha;

    return $this;
  }

  /**
   * Get the value of foto
   */
  public function getFoto()
  {
    return $this->foto;
  }

  /**
   * Set the value of foto
   *
   * @return  self
   */
  public function setFoto($foto)
  {
    $this->foto = $foto;

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
}
