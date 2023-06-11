<?php
class Aluno
{
  private $id;
  private $nome;
  private $dt_nascimento;
  private $responsavel;
  private $status;
  private $turma_id;
  private $usuario_id;


  private $con;

  public function __construct($id = NULL, $nome = NULL, $dt_nascimento = NULL, $responsavel = NULL, $status = NULL, $turma_id = NULL, $usuario_id = NULL)
  {
    $this->id = $id;
    $this->nome = $nome;
    $this->dt_nascimento = $dt_nascimento;
    $this->responsavel = $responsavel;
    $this->status = $status;
    $this->turma_id = $turma_id;
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
   * Get the value of dt_nascimento
   */
  public function getDt_nascimento()
  {
    return $this->dt_nascimento;
  }

  /**
   * Set the value of dt_nascimento
   *
   * @return  self
   */
  public function setDt_nascimento($dt_nascimento)
  {
    $this->dt_nascimento = $dt_nascimento;

    return $this;
  }

  /**
   * Get the value of responsavel
   */
  public function getResponsavel()
  {
    return $this->responsavel;
  }

  /**
   * Set the value of responsavel
   *
   * @return  self
   */
  public function setResponsavel($responsavel)
  {
    $this->responsavel = $responsavel;

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
   * Get the value of turma_id
   */
  public function getTurma_id()
  {
    return $this->turma_id;
  }

  /**
   * Set the value of turma_id
   *
   * @return  self
   */
  public function setTurma_id($turma_id)
  {
    $this->turma_id = $turma_id;

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
  public function cadastraAluno(){
    
    $this->nome = $_POST['nome'];
    $this->dt_nascimento =  $_POST['dt_nascimento'];
    $this->responsavel = $_POST['responsavel'];
    $this->turma_id = $_POST['turma_id'];
    $this->usuario_id_aluno = $_POST['usuario_id_aluno'];
    $sql = $this->con->prepare("SELECT * FROM aluno WHERE turma_id = ? and usuario_id = ?;");
    $sql->execute( array($this->turma_id,$this->usuario_id));
    if($sql->rowCount() > 0){
      header("Location: ../educacional/cadastroAluno.php");
      $_SESSION['msg2'] = '<div class="alert alert-danger" role="alert">
      Erro, Aluno já cadastrado!
    </div>';
  
    }else{
      $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $this->con->prepare('INSERT INTO aluno (id, nome, dt_nascimento, responsavel, turma_id, usuario_id, status) VALUES (NULL, :nome, :dt_nascimento, :responsavel, :turma_id, :usuario_id, "1")');
      $stmt->execute(array(
                     ':nome' => $nome,
                     ':dt_nascimento' => $dt_nascimento,
                     ':responsavel' =>$responsavel,
                     ':turma_id' =>$turma_id,
                     ':usuario_id' =>$usuario_id
                     
  
                    
                  ));   
                  $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
                  Sucesso, Aluno inserido a turma!  
                  </div>';
                   
      }   
         $sql = $this->con->prepare("UPDATE usuarios inner join aluno on usuarios.id = :usuario_id  set usuarios.status = 1   WHERE usuarios.status = 0  ;");
         $sql->execute(array(
                        ':usuario_id' => $this->usuario_id
          )); 
   
  
  
            
            header("Location: ../educacional/cadastroAluno.php");
  
  }
  public function listarAlunos(){
    $sql = $this->con->prepare("SELECT id,nome,DATE_FORMAT(dt_nascimento,'%d/%m/%Y')as dt_nascimento,responsavel, usuario_id, status FROM aluno ORDER BY nome; ");
    $sql->execute();
    return $rows = $sql->fetchAll(PDO::FETCH_CLASS);
  }
  public function alunoId($usuario_id)
  {
    try {
      $sql = $this->con->prepare("SELECT id, nome, dt_nascimento, responsavel, status, turma_id, usuario_id FROM aluno where usuario_id = (?)");
      $sql->execute(array($usuario_id));
      $_SESSION['Aluno'] = $sql->fetchObject();
    } catch (Exception $exc) {
      echo $exc->getTraceAsString();
    }
  }
}
