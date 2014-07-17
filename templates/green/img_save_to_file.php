<?php
/*
*	!!! THIS IS JUST AN EXAMPLE !!!, PLEASE USE ImageMagick or some other quality image processing libraries
*/
    $imagePath = "temp/";

	$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
	$temp = explode(".", $_FILES["img"]["name"]);
	$extension = end($temp);

	if ( in_array($extension, $allowedExts))
	  {
	  if ($_FILES["img"]["error"] > 0)
		{
			 $response = array(
				"status" => 'error',
				"message" => 'ERROR Return Code: '. $_FILES["img"]["error"],
			);
			echo "Return Code: " . $_FILES["img"]["error"] . "<br>";
		}
	  else
		{
			
		  $filename = $_FILES["img"]["tmp_name"];
          $newName = "";
          $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';

          for ($i = 0; $i < 5; $i++)
              $newName  .= $chars[mt_rand(0, 36)];
            $newName .= $_FILES["img"]["name"];
		  list($width, $height) = getimagesize( $filename );

		  //move_uploaded_file($filename,  '../../'.$imagePath . $_FILES["img"]["name"]);
            move_uploaded_file($filename,  '../../'.$imagePath . $newName);

		  $response = array(
			"status" => 'success',
			//"url" => $imagePath.$_FILES["img"]["name"],
            "url" => $imagePath.$newName,
			"width" => $width,
			"height" => $height
		  );
		  
		}
	  }
	else
	  {
	   $response = array(
			"status" => 'error',
			"message" => 'something went wrong',
		);
	  }
	  
	  print json_encode($response);

?>
