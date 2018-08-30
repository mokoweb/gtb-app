
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" cellspacing="15">
  <tr>
    <td colspan="4"><h2 align="center">Innovative Banking Products</h2>
      <p align="center">Tailored to your lifestyle, designed for your&nbsp;<br />
    personal and business needs.</p></td>
  </tr>
 <form id="form1" name="form1" method="post" action="http://localhost/news/index.php/update">
  <tr>
  <?php //get_images
  
   foreach($results as $image): ?>
   
    <td><img src="http://localhost/news/assets/img/<?php echo $image['image_id_ext']; ?>.jpg" width="260" height="169" /> </td>
    <?php endforeach; ?>
  </tr>
  <tr>
  <?php  foreach($results as $head): ?>
    <td>
      <label>

      <input name="heading_<?php echo  $head['innovative_section_id'];?>" type="text" value="<?php echo $head['heading']; ?>" />
      </label>
    </td>
	<?php endforeach; ?>
  </tr>
  <tr>
   
     <?php  foreach($results as  $paragraph):?>
	  <td>
	  
      <textarea name="body_<?php echo  $paragraph['innovative_section_id'];?>" cols="40" rows="10"><?php echo $paragraph['body']; ?></textarea>
    </td>
	<?php endforeach; ?>
	</tr>
	
  <tr>
    <td colspan="4">
      <label></label>
      <input type="submit" name="Submit" value="Update" />
    </form>    </td>
  </tr>
</table>
</body>
</html>
