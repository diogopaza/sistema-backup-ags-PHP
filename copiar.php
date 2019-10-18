<?php
    $init = microtime(true);
    echo("Meu diretorio " . dirname(__DIR__));
    $folder = "teste2";
    $file = @fopen("meu.txt","w");
    if ($file == false) die("Não foi possível criar o arquivo"); 
    try{
        if(!@opendir($folder)){
            throw new Exception("Não foi possível acessar a pasta ", 100);
        }
        $resFolder = opendir($folder);
        while($files = readdir($resFolder)){
            if($files == "." || $files == ".."){
                continue;
            }
            $result = "/home/zaptec/Documentos/teste/" .$folder."/".$files;
            echo("result " . $result . "<br>");
            if (is_dir("/home/zaptec/Documentos/" . $folder."/".$files)){
                echo("if do is_dir");
            }            
            /*if(is_dir($folder."/".$files){
                echo("arquivo existe");
            })*/
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
    //sleep(5);    
    echo (" demorei " . (microtime(true) - $init) .  " segundos para executar o programa");

?>