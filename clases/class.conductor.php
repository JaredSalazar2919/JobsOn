<?php
class conductor
{
    protected $id;
    protected $user;
    protected $email;
    protected $password;
    protected $name;
    protected $licencia;
    protected $ine;
    protected $foto;
    protected $nacimiento;
    protected $ingreso;
    protected $completados;
    protected $cancelados;
    protected $estatus;
    protected $opt1;
    protected $opt2;

    public function __construct($id,$user,$email,$password,$name,$licencia,$ine,$foto,$nacimiento,$ingreso,$completados,$cancelados,$estatus,$opt1,$opt2){
        $this->id = $id;
        $this->user = $user;
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->licencia = $licencia;
        $this->ine = $ine;
        $this->foto = $foto;
        $this->nacimiento = $nacimiento;
        $this->ingreso = $ingreso;
        $this->completados = $completados;
        $this->cancelados = $cancelados;
        $this->estatus = $estatus;
        $this->opt1 = $opt1;
        $this->opt2 = $opt2;
    }
}
