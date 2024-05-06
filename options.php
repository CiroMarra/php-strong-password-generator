<?php
    function generate_Password($length) {
        $text = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
        $text_length = strlen($text);
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $text[rand(0, $text_length - 1)];
        }
        return $password;
    }

    

  
    function text($text) {
        $password = '';
        if(isset($text)) {
            $password_length = $text;
            $password = generate_Password($password_length);
        }
        return $password;
    }

    $password_length = isset($_POST['length']) ? $_POST['length'] : '';
    $password = text($password_length);

        
