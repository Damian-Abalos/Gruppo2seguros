<?php   
    //Capturo los datos enviados por POST desde el formulario
    $email               = $_REQUEST["email"]; 
    $nombreCompleto      = $_REQUEST["nombre"];
    $desdEmail           = 'gruppo2seguros@gmail.com'; 
    $miEmail             = 'grupo2seguros@gmail.com';
    $telAsegurado        = $_REQUEST["tel_asegurado"];
    $telTercero          = $_REQUEST["tel_tercero"];
    $descripcionSiniestro= $_REQUEST["descripcion_siniestro"];
    
    //Construyo el cuerpo del mensaje    
    $message            = "Nombre: " . $nombreCompleto . "\n";
    $message            = $message . "Email: " . $email . "\n";
    $message            = $message . "Telefeno del asegurado: " . $telAsegurado . "\n";
    $message            = $message . "Telefono del tercero: " . $telTercero . "\n";
    $message            = $message . "Descripcion del siniestro: " . $descripcionSiniestro . "\n";
   
   $testingName = "cedula frente asegurado";
    //Obtener datos del archivo subido 
    $file_tmp_name1      = $_FILES['cedula_frente_asegurado']['tmp_name'];
    $file_name1          = $_FILES['cedula_frente_asegurado']['name'];
    $file_size1          = $_FILES['cedula_frente_asegurado']['size'];
    $file_type1          = $_FILES['cedula_frente_asegurado']['type'];

    $file_tmp_name2      = $_FILES['cedula_dorso_asegurado']['tmp_name'];
    $file_name2          = $_FILES['cedula_dorso_asegurado']['name'];
    $file_size2          = $_FILES['cedula_dorso_asegurado']['size'];
    $file_type2          = $_FILES['cedula_dorso_asegurado']['type'];

    $file_tmp_name3      = $_FILES['registro_frente_asegurado']['tmp_name'];
    $file_name3          = $_FILES['registro_frente_asegurado']['name'];
    $file_size3          = $_FILES['registro_frente_asegurado']['size'];
    $file_type3          = $_FILES['registro_frente_asegurado']['type'];

    $file_tmp_name4      = $_FILES['registro_dorso_asegurado']['tmp_name'];
    $file_name4          = $_FILES['registro_dorso_asegurado']['name'];
    $file_size4          = $_FILES['registro_dorso_asegurado']['size'];
    $file_type4          = $_FILES['registro_dorso_asegurado']['type'];
    
    $file_tmp_name5      = $_FILES['dni_frente_asegurado']['tmp_name'];
    $file_name5          = $_FILES['dni_frente_asegurado']['name'];
    $file_size5          = $_FILES['dni_frente_asegurado']['size'];
    $file_type5          = $_FILES['dni_frente_asegurado']['type'];

    $file_tmp_name6      = $_FILES['dni_dorso_asegurado']['tmp_name'];
    $file_name6          = $_FILES['dni_dorso_asegurado']['name'];
    $file_size6          = $_FILES['dni_dorso_asegurado']['size'];
    $file_type6          = $_FILES['dni_dorso_asegurado']['type'];

    $file_tmp_name7      = $_FILES['seguro_frente_asegurado']['tmp_name'];
    $file_name7          = $_FILES['seguro_frente_asegurado']['name'];
    $file_size7          = $_FILES['seguro_frente_asegurado']['size'];
    $file_type7          = $_FILES['seguro_frente_asegurado']['type'];

    $file_tmp_name8      = $_FILES['seguro_dorso_asegurado']['tmp_name'];
    $file_name8          = $_FILES['seguro_dorso_asegurado']['name'];
    $file_size8          = $_FILES['seguro_dorso_asegurado']['size'];
    $file_type8          = $_FILES['seguro_dorso_asegurado']['type'];
    
    $file_tmp_name9      = $_FILES['cedula_frente_tercero']['tmp_name'];
    $file_name9          = $_FILES['cedula_frente_tercero']['name'];
    $file_size9          = $_FILES['cedula_frente_tercero']['size'];
    $file_type9         = $_FILES['cedula_frente_tercero']['type'];

    $file_tmp_name10      = $_FILES['cedula_dorso_tercero']['tmp_name'];
    $file_name10          = $_FILES['cedula_dorso_tercero']['name'];
    $file_size10          = $_FILES['cedula_dorso_tercero']['size'];
    $file_type10          = $_FILES['cedula_dorso_tercero']['type'];

    $file_tmp_name11      = $_FILES['registro_frente_tercero']['tmp_name'];
    $file_name11          = $_FILES['registro_frente_tercero']['name'];
    $file_size11          = $_FILES['registro_frente_tercero']['size'];
    $file_type11          = $_FILES['registro_frente_tercero']['type'];

    $file_tmp_name12      = $_FILES['registro_dorso_tercero']['tmp_name'];
    $file_name12          = $_FILES['registro_dorso_tercero']['name'];
    $file_size12          = $_FILES['registro_dorso_tercero']['size'];
    $file_type12          = $_FILES['registro_dorso_tercero']['type'];
    
    $file_tmp_name13      = $_FILES['dni_frente_tercero']['tmp_name'];
    $file_name13          = $_FILES['dni_frente_tercero']['name'];
    $file_size13          = $_FILES['dni_frente_tercero']['size'];
    $file_type13          = $_FILES['dni_frente_tercero']['type'];

    $file_tmp_name14      = $_FILES['dni_dorso_tercero']['tmp_name'];
    $file_name14          = $_FILES['dni_dorso_tercero']['name'];
    $file_size14          = $_FILES['dni_dorso_tercero']['size'];
    $file_type14          = $_FILES['dni_dorso_tercero']['type'];

    $file_tmp_name15      = $_FILES['seguro_frente_tercero']['tmp_name'];
    $file_name15          = $_FILES['seguro_frente_tercero']['name'];
    $file_size15          = $_FILES['seguro_frente_tercero']['size'];
    $file_type15          = $_FILES['seguro_frente_tercero']['type'];

    $file_tmp_name16      = $_FILES['seguro_dorso_tercero']['tmp_name'];
    $file_name16          = $_FILES['seguro_dorso_tercero']['name'];
    $file_size16          = $_FILES['seguro_dorso_tercero']['size'];
    $file_type16          = $_FILES['seguro_dorso_tercero']['type'];

      
    //Leer el archivo y codificar el contenido para armar el cuerpo del email
    
    $handle1              = fopen($file_tmp_name1, "r");
    $content1             = fread($handle1, $file_size1);
    fclose($handle1);
    $encoded_content1     = chunk_split(base64_encode($content1));
   
    $handle2              = fopen($file_tmp_name2, "r");
    $content2             = fread($handle2, $file_size2);
    fclose($handle2);
    $encoded_content2     = chunk_split(base64_encode($content2));
    
    $handle3              = fopen($file_tmp_name3, "r");
    $content3             = fread($handle3, $file_size3);
    fclose($handle3);
    $encoded_content3     = chunk_split(base64_encode($content3));
   
    $handle4              = fopen($file_tmp_name4, "r");
    $content4             = fread($handle4, $file_size4);
    fclose($handle4);
    $encoded_content4     = chunk_split(base64_encode($content4));    
    
    $handle5              = fopen($file_tmp_name5, "r");
    $content5             = fread($handle5, $file_size5);
    fclose($handle5);
    $encoded_content5     = chunk_split(base64_encode($content5));
   
    $handle6              = fopen($file_tmp_name6, "r");
    $content6             = fread($handle6, $file_size6);
    fclose($handle6);
    $encoded_content6     = chunk_split(base64_encode($content6));
    
    $handle7              = fopen($file_tmp_name7, "r");
    $content7             = fread($handle7, $file_size7);
    fclose($handle7);
    $encoded_content7     = chunk_split(base64_encode($content7));
   
    $handle8              = fopen($file_tmp_name8, "r");
    $content8             = fread($handle8, $file_size8);
    fclose($handle8);
    $encoded_content8     = chunk_split(base64_encode($content8));    
    
    $handle9              = fopen($file_tmp_name9, "r");
    $content9             = fread($handle9, $file_size9);
    fclose($handle9);
    $encoded_content9     = chunk_split(base64_encode($content9));
   
    $handle10              = fopen($file_tmp_name10, "r");
    $content10             = fread($handle10, $file_size10);
    fclose($handle10);
    $encoded_content10    = chunk_split(base64_encode($content10));
    
    $handle11             = fopen($file_tmp_name11, "r");
    $content11            = fread($handle11, $file_size11);
    fclose($handle11);
    $encoded_content11    = chunk_split(base64_encode($content11));
   
    $handle12             = fopen($file_tmp_name12, "r");
    $content12            = fread($handle12, $file_size12);
    fclose($handle12);
    $encoded_content12    = chunk_split(base64_encode($content12));    
    
    $handle13             = fopen($file_tmp_name13, "r");
    $content13            = fread($handle13, $file_size13);
    fclose($handle13);
    $encoded_content13    = chunk_split(base64_encode($content13));
   
    $handle14             = fopen($file_tmp_name14, "r");
    $content14            = fread($handle14, $file_size14);
    fclose($handle14);
    $encoded_content14    = chunk_split(base64_encode($content14));
    
    $handle15             = fopen($file_tmp_name15, "r");
    $content15            = fread($handle15, $file_size15);
    fclose($handle15);
    $encoded_content15    = chunk_split(base64_encode($content15));
   
    $handle16             = fopen($file_tmp_name16, "r");
    $content16            = fread($handle16, $file_size16);
    fclose($handle16);
    $encoded_content16    = chunk_split(base64_encode($content16)); 
    
    
    
    
    $boundary            = md5("pera");
  
    
    
    
    //Encabezados
    $headers             = "MIME-Version: 1.0\r\n"; 
    $headers            .= "From:".$email."\r\n"; 
    $headers            .= "Reply-To: ".$desdEmail."" . "\r\n";
    $headers            .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
           
    //Texto plano
    $body               = "--$boundary\r\n";
    $body               .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body               .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
    $body               .= chunk_split(base64_encode($message)); 
     
     
           
    //Adjunto
    
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type1; name=".$file_name1."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'cedula frente asegurado'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content1; 
       
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type2; name=".$file_name2."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'cedula dorso asegurado'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content2; 
    
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type3; name=".$file_name3."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'registro frente asegurado'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content3; 
       
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type4; name=".$file_name4."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'registro dorso asegurado'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content4; 
    
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type5; name=".$file_name5."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'dni frente asegurado'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content5; 
       
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type6; name=".$file_name6."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'dni dorso asegurado'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content6; 
    
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type7; name=".$file_name7."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'seguro frente asegurado'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content7; 
       
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type8; name=".$file_name8."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'seguro dorso asegurado'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content8;           
       
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type9; name=".$file_name9."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'cedula frente tercero'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content9; 
       
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type10; name=".$file_name10."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'cedula dorso tercero'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content10; 
    
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type11; name=".$file_name11."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'registro frente tercero'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content11; 
       
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type12; name=".$file_name12."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'registro dorso tercero'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content12; 
    
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type13; name=".$file_name13."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'dni frente tercero'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content13; 
       
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type14; name=".$file_name14."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'dni dorso tercero'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content14; 
    
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type15; name=".$file_name15."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'seguro frente tercero'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content15; 
       
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type16; name=".$file_name16."\r\n";
    $body               .="Content-Disposition: attachment; filename=".'seguro dorso tercero'."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content16;       
       
       
       
    $subject            = "Nuevo reporte";
    
    //Enviando el mail
    $sentMail = mail($miEmail, $subject, $body, $headers);
    if($sentMail){       
//        echo"<p style='color:green; text-align: center; margin-top: 100px;'>
//            Formulario enviado, revisar el Email.</center></p><a href="/">Volver</a>";
        header('Location:index.html');
    }else{
        echo "<h2>Se produjo un error y su pedido no pudo ser enviado</h2>";
    }  
?>