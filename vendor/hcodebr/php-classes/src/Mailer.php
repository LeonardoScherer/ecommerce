<?php 

namespace Hcode;
require 'vendor/autoload.php';

use Rain\Tpl;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer{

	const HOST ='smtp.gmail.com';
	const USERNAME = "#";//adicionar email
	const PASSWORD = "#"; // senha email
	const SECURE = 'TLS';
	const PORT = 587;
	const CHARSET = 'UTF-8';
	const NAME_FROM = "Score";

	private $mail;

	public function __construct($toAddress, $toName, $subject, $tplName, $data = [])
	{

		$config = array(
			"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views/email/",
			"cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
			"debug"         => false
		);
	
		Tpl::configure( $config );

		$tpl = new Tpl;

		foreach ($data as $key => $value) {
			$tpl->assign($key, $value);
		}

		$html = $tpl->draw($tplName, true);

		$this->mail = new PHPMailer(true);

		

			$this->mail->isSMTP();
			$this->mail->Host = self::HOST;
			$this->mail->SMTPAuth = true;
			$this->mail->Username = self::USERNAME;
			$this->mail->Password = self::PASSWORD;
			$this->mail->SMTPSecure = self::SECURE;
			$this->mail->Port = self::PORT;
			$this->mail->Charset = self::CHARSET;

			$this->mail->setFrom(Mailer::USERNAME, Mailer::NAME_FROM);

			$toAddress = is_array($toAddress) ? $toAddress : [$toAddress];
			foreach ($toAddress as $toAddress) {
				$this->mail->addAddress($toAddress, $toName);
			}

			$this->mail->isHTML($html);
			$this->mail->Subject = $subject;
			$this->mail->Body = $html;

			return $this->mail->send();
			
		
	}

	/*public function send($toAddress, $toName, $subject)
	{
		return $this->mail->send();
	}*/
	
}
	


?>