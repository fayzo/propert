<?php 
 if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){
    header('Location: ../../404.html');
}
class Home extends Users {

     public function usersNameId($username)
    {
        $mysqli= $this->database;
        $query= $mysqli->query("SELECT user_id FROM users WHERE username= '$username'");
        $row= $query->fetch_array();
        return $row;
    }

        public function userData($user_id)
    {
        $mysqli= $this->database;
        $query= $mysqli->query("SELECT * FROM users WHERE user_id= '{$user_id}' ");
        $row= $query->fetch_array();
        return $row;
    }

    
    public function thumbnail( $img, $source, $dest, $maxw, $maxh ,$type ) {      
        $jpg = $img;
    
        if( $jpg ) {
            list( $width, $height  ) = getimagesize( $jpg ); //$type will return the type of the image
            // $source = imagecreatefromjpeg( $jpg );

            if ($type == 'image/gif')
            {
                // header ('Content-Type: image/gif');
                $source = imagecreatefromgif($jpg);
            }
            elseif ($type == 'image/jpeg')
            {
                // header ('Content-Type: image/jpeg');
                $source  = imagecreatefromjpeg($jpg);
            }
            elseif ($type == 'image/png')
            {
                // header ('Content-Type: image/png');
                $source = imagecreatefrompng($jpg);
            }
        
            if( $maxw >= $width && $maxh >= $height ) {
                $ratio = 1;
            }elseif( $width > $height ) {
                $ratio = $maxw / $width;
            }else {
                $ratio = $maxh / $height;
            }
    
            $thumb_width = round( $width * $ratio ); //get the smaller value from cal # floor()
            $thumb_height = round( $height * $ratio );
    
            $thumb = imagecreatetruecolor( $thumb_width, $thumb_height );
            imagecopyresampled( $thumb, $source, 0, 0, 0, 0, $thumb_width, $thumb_height, $width, $height );
    
            $path = $img;

            if ($type == 'image/gif')
                imagegif ( $thumb, $path, 75);
            elseif ($type == 'image/jpeg')
                imagejpeg ( $thumb, $path, 75);
            elseif ($type == 'image/png')
                imagepng ( $thumb, $path, 9);
        }
        imagedestroy( $thumb );
        imagedestroy( $source );
    }

    public function compress($source, $destination, $quality) {

        $info = getimagesize($source);
    
        if ($info['mime'] == 'image/jpeg') 
            $image = imagecreatefromjpeg($source);
    
        elseif ($info['mime'] == 'image/gif') 
            $image = imagecreatefromgif($source);
    
        elseif ($info['mime'] == 'image/png') 
            $image = imagecreatefrompng($source);
    
        imagejpeg($image, $destination, $quality);
    
        return $destination;
    }

    public function uploadSize($file)
    {
        foreach($file['name'] as $key => $value){
            $size  = $file['size'][$key];
            // $type  = $file['type'][$key];
            // $error = $file['error'][$key];
            $fileSize[] = $size;
        }
        # Build the values
        $fileSizex= implode("=", $fileSize);
        return  $fileSizex;
    }
    
    public function uploadHouseFile($file)
    {

        $insertValuesSQL ="";
        $targetDir = DOCUMENT_ROOT.'/uploads/house/';
        $allowTypes = array('jpg','png','jpeg','m4a','mp4','mp3', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt','docx', 'xlsx','xls','zip');
        
        foreach($file['name'] as $key => $value){
            // File upload path
            $fileName = basename($file['name'][$key]);
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $searching = " ";
            $replace = "_";
            $filenames = str_replace($searching,$replace, $fileExt[0]).strtolower(date('Y').'_'.rand(10,1000).".".$fileActualExt);

            //  $filenames = (strlen($fileName) > 10)? 
            //          strtolower(date('Y').'_'.rand(10,100).substr($fileName,0,4).".".$fileActualExt):
            //          strtolower(date('Y').'_'.rand(10,100).$fileName);

            $valued[] = $filenames;

            $targetFilePath = $targetDir . $filenames;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                $fileTmpName = $file["tmp_name"];
                  
                $dz= $this->thumbnail($fileTmpName[$key],$targetDir,$targetDir, 480, 400 , $file['type'][$key]);
                move_uploaded_file($fileTmpName[$key], $targetFilePath);
                // Var_dump($dz);
            }
        }
        
        # Build the values
        $filenamedb = implode("=", $valued);
        return  $filenamedb;

    }


    
    // public function uploadHouseFile($file)
    // {

    //     $insertValuesSQL ="";
    //     $targetDir = DOCUMENT_ROOT.'/uploads/house/';
    //     $allowTypes = array('jpg','png','jpeg','mp4','mp3', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt','docx', 'xlsx','xls','zip');
        
    //     foreach($file['name'] as $key => $value){
    //         // File upload path
    //         $fileName = basename($file['name'][$key]);
    //         $fileExt = explode('.', $fileName);
    //         $fileActualExt = strtolower(end($fileExt));

    //          $filenames = (strlen($fileName) > 10)? 
    //                  strtolower(date('Y').'_'.rand(10,1000).substr($fileName,0,4).".".$fileActualExt):
    //                  strtolower(date('Y').'_'.rand(10,1000).$fileName);

    //         $valued[] = $filenames;

    //         $targetFilePath = $targetDir . $filenames;
            
    //         // Check whether file type is valid
    //         $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    //         if(in_array($fileType, $allowTypes)){
    //             // Upload file to server
    //             $fileTmpName = $file["tmp_name"];
    //             move_uploaded_file($fileTmpName[$key], $targetFilePath);
    //         }
    //     }
        
    //     # Build the values
    //     $filenamedb = implode("=", $valued);
    //     return  $filenamedb;

    // }


    
}
$home= new Home();


?>