function mailSomeone($toWho, $fromWho, $sysSubj, $sysMsg){
    $msgTemplate = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
        <html>
            <head>
                <title>'.$sysSubj.'</title>
                <style type="text/css">
                    body{background: #edebea;}
                    #wrapper{background:#fff;border:4px solid #ddd;}
                </style>
            </head>
            <body>
                <table width="650" border="0" bgcolor="#FFF" id="wrapper">
                    <tr>
                        <td align="center" valign="top">'.$sysMsg.'</td>
                    </tr>
                </table>
            </body>
        </html>';
        
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'Content-type: text/html; charset=us-ascii' . "\r\n";
    $headers .= 'From:' .$fromWho. "\r\n";
    $headers .= 'Reply-To: ' .$fromWho. "\r\n";
    $headers .= '1\r\nX-MSMail-Priority: High' . "\r\n";
    $headers .= 'X-Mailer: Monkey Tooth Productions Mail Controler v2.0' . "\r\n";
    mail($toWho, $sysSubj, $sysMsg, $headers);
}