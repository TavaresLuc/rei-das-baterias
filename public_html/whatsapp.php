  <?php
// Fix Api Whatsapp on Desktops
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
// check if is a mobile
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{
  header('Location: https://api.whatsapp.com/send?phone=5583998488282&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20as%20baterias%20que%20voc%C3%AAs%20possuem.');
  //OR
  echo "<script>window.location='https://api.whatsapp.com/send?phone=5583998488282&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20as%20baterias%20que%20voc%C3%AAs%20possuem.'</script>";
}
// all others
else {
  header('Location: https://api.whatsapp.com/send?phone=5583998488282&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20as%20baterias%20que%20voc%C3%AAs%20possuem.');
  //OR
  echo "<script>window.location='https://api.whatsapp.com/send?phone=5583998488282&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20as%20baterias%20que%20voc%C3%AAs%20possuem.'</script>";
}
?>