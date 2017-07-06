<?php
  system("sudo killall python");
  $code = $_POST['code'];
  
  switch($code){
  case "right":
    system("sudo python /home/pi/hexapod/hexapod.py m r &");
    break;
  case "front":	
    system("sudo python /home/pi/hexapod/hexapod.py m f &");
    break;
  case "back":
    system("sudo python /home/pi/hexapod/hexapod.py m b &");
    break;
  case "left":
    system("sudo python /home/pi/hexapod/hexapod.py m l &");
    break;
  case "stop":
    system("sudo python /home/pi/hexapod/hexapod.py m s &");
    break;
  case "auto":
    system("sudo python /home/pi/hexapod/hexapod.py a &");
    break;
  default:
  }

?>
