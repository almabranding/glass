<?php
class Form_Model extends Model {
    public function __construct() {
        parent::__construct();
    }  
    public function register() {
        $data=array(
            'name'      => $_POST['name'],
            'last'      => $_POST['last'],
            'email'     => $_POST['email'],
            'subject'   => $_POST['subject'],
            'message'   => $_POST['message']
        );
        $this->ValidarDatos($data['email']);
	$mail="contact@glass120ocean.com";
	$to = $mail;
	$subject = "User Register";
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: contact@glass120ocean.com" . "\r\n";
	$body = "";
        foreach($data as $key=>$value)
            $body.= $key.': '.$value.'<br/>';		
	mail($to, $subject, $body, $headers); 
        $this->db->insert('request', $data);
    }
    
    public function contact(){
        $data=array(
            'name'      => $_POST['name'],
            'email'     => $_POST['email'],
            'subject'   => $_POST['subject'],
            'message'   => $_POST['message']
        );
        $this->ValidarDatos($data['email']);
	$mail="contact@glass120ocean.com";
	$to = $mail;
	$subject = "User Contact";
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: contact@glass120ocean.com" . "\r\n";
	$body = "";
        foreach($data as $key=>$value)
            $body.= $key.': '.$value.'<br/>';		
	mail($to, $subject, $body, $headers);
    }
    public function ValidarDatos($campo){
	
	//Array con las posibles cabeceras a utilizar por un spammer
	$badHeads = array("Content-Type:",
	"MIME-Version:",
	"Content-Transfer-Encoding:",
	"Return-path:",
	"Subject:",
	"From:",
	"Envelope-to:",
	"To:",
	"bcc:",
	"cc:");
	
	//Comprobamos que entre los datos no se encuentre alguna de
	//las cadenas del array. Si se encuentra alguna cadena se
	//dirige a una página de Forbidden
	foreach($badHeads as $valor){	
		if(strpos(strtolower($campo), strtolower($valor)) !== false){
			header("HTTP/1.0 403 Forbidden");
			exit;
		}
	
	}
    }
    
}