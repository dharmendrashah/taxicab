<?php
chmod("uploads/",0740);
   $target_dir = "uploads/";
   $target_file = $target_dir.basename($_FILES["filetoupload"] ["name"]);
   $uploadok = 1;
   $imagefiletype = $strolower(pathinfo($target_file,pathinfo_extension));
   //check image
   if(isset($_post["submit"]))
   {
       $check = getimagesize($_FILES["filetoupload"][
           "tmp_name"
       ]);
       
       if($check !== false) {
           echo "file is an image - " . $check["mime"]. ".";
           $uploadok = 1;
       }
       else {
           echo "file is not an image.";
           $uploadok = 0;
       }
   }
  //check file already exists
  if(file_exists($target_file))
   echo "image is already exists";
   $uploadok = 0;
   //check file size
   if($_FILES["filetoipload"]["size"]> 500000){
       echo "sorry image is too large.";
       $uploadok = 0;
   }
   //allow certain file format
   if($imagefiletype != "jpeg" && $imagefiletype != "png" && $imagefiletype != "jpeg" && $imagefiletype != "gif")
   {
       echo "sorry only jpg, jpeg, png and gif file formats are allowed";
       $uploadok = 0;
   }
   //check $uploadok = 0; by an error
   if ($uploadok == 0){
       echo "sorry your file is not uploaded";
   
   //try to upload file
   
}else
{
    if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file)) {
        echo "the file ".basename($_FILES[
            "filetoupload"
        ]["name"]). " has been uploaded.";
    }else {
        echo "Sorry, there was an error to upload image.";
    }
    
}
?>