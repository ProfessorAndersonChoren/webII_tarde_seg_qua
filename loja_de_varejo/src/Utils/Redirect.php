<?php

namespace APP\Utils;

class Redirect
{
    public static function redirect(
        string|array $message,
        string $type = 'success',
        string $url = '../View/message.php'
    ) {
        session_start();
        if (is_array($message)) {
            // TODO Implementar o tratamento de coleções
        }else{
            if($type == 'success'){
                $_SESSION['msg_success'] = $message;
            }else{
                $_SESSION['msg_error'] = $message;
            }
        }
    }
}
