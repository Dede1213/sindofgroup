<?php
/**
 * Created by PhpStorm.
 * User: Dede Irawan,S.kom
 * Date: 24/12/2016
 * Time: 21.42
 */

function kirim_email($email,$subject,$message){

    #Gmail Configuration
    #Email : info.mitrareseller@gmail.com
    #Pass : info2016
    #Port : 465
    #host : ssl://smtp.gmail.com
    #from & smtp user harus sama
    #setting  Allow less secure apps: ON pada akun

    #Mitrareseller.com Configuration
    #Email : info@mitrareseller.com
    #Pass : info2016
    #Port : 465
    #host : ssl://guwosari.idwebhost.com
    #from & smtp user harus sama
    #setting  Allow less secure apps: ON pada akun

    $header = "Kpd Yth,<br>Rekan Mitrareseller.com.<br><br>";
    $footer = "<br><br>Regards,<br><img src='http://mitrareseller.com/assets/corporate/img/logos/logo-corp-red.png'>";
    $message_fix = $header.$message.$footer;

    $config_email = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://guwosari.idwebhost.com',
        'smtp_port' => 465,
        'smtp_user' => 'info@mitrareseller.com',
        'smtp_pass' => 'info2016',
        'mailtype' => 'html',
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
    );

    $ci = &get_instance();
    $ci->load->library('email', $config_email);
    $ci->email->set_newline("\r\n");
    $ci->email->from('info@mitrareseller.com');
    $ci->email->to($email);
    $ci->email->subject($subject);
    $ci->email->message($message_fix);

    if ($ci->email->send()) {
        return true;
    } else {
        return false;
//        echo 'E-Mail Gagal Dikirim'.show_error($this->email->print_debugger());
    }

}