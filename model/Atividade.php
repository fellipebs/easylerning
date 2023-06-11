<?php
class Atividade
{
  private $id;
  private $nome;
  private $descricao;
  private $arquivo;
  private $imagem;
  private $professor_id;
  private $disciplina_id;

  private $con;

  public function __construct($id = NULL, $nome = NULL, $descricao = NULL, $arquivo = NULL, $imagem = NULL, $professor_id = NULL, $disciplina_id = NULL)
  {
    $this->id = $id;
    $this->nome = $nome;
    $this->descricao = $descricao;
    $this->arquivo = $arquivo;
    $this->imagem = $imagem;
    $this->professor_id = $professor_id;
    $this->disciplina_id = $disciplina_id;

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
   * Get the value of arquivo
   */
  public function getArquivo()
  {
    return $this->arquivo;
  }

  /**
   * Set the value of arquivo
   *
   * @return  self
   */
  public function setArquivo($arquivo)
  {
    $this->arquivo = $arquivo;

    return $this;
  }

  /**
   * Get the value of imagem
   */
  public function getImagem()
  {
    return $this->imagem;
  }

  /**
   * Set the value of imagem
   *
   * @return  self
   */
  public function setImagem($imagem)
  {
    $this->imagem = $imagem;

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

  /**
   * Get the value of disciplina_id
   */
  public function getDisciplina_id()
  {
    return $this->disciplina_id;
  }

  /**
   * Set the value of disciplina_id
   *
   * @return  self
   */
  public function setDisciplina_id($disciplina_id)
  {
    $this->disciplina_id = $disciplina_id;

    return $this;
  }
  public function salvarAtividade()
  {
    if (isset($_POST['codigo_js'])) {
      $arquivo = fopen('../atividades/' . $_SESSION['pasta'] . '/' . $_SESSION['usuario']->usuario . '_js.txt', 'w');
      if ($arquivo == false) die('Não foi possível criar o arquivo.');
      $_SESSION['codigo_js'] = $_POST['codigo_js'];
      fwrite($arquivo, $_SESSION['codigo_js']);
      fclose($arquivo);
    }
    if (isset($_POST['codigo_xml'])) {
      $arquivo = fopen('../atividades/' . $_SESSION['pasta'] . '/' . $_SESSION['usuario']->usuario . '_xml.txt', 'w');
      if ($arquivo == false) die('Não foi possível criar o arquivo.');
      $_SESSION['codigo_xml'] = $_POST['codigo_xml'];
      fwrite($arquivo, $_SESSION['codigo_xml']);
      fclose($arquivo);
    }

    
    header('Location:../atividades/' . $_SESSION['pasta'] . "/" . $_SESSION['arquivo_php']);
  }
}
