<style>
  @font-face {font-family: Azonix; src: url("Azonix.otf");}
</style>
<font face="Azonix">
<body style="background:black">
<body text=white><?php
  $name=$_POST["name"];
  $level=file_get_contents("BlackieLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="background-color:silver;color:red;border-top-left-radius:17px; border-top-right-radius:5px" name="Blackie" type="submit" value="Blackie"><font face="Azonix">Blackie<br>'.$level.'</button></form>';
  $Blackie=$_POST["Blackie"];
  if ($Blackie=="Blackie"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button style="border-radius:10px" name="name" value="'.$name.'" type="submit"><font face="Azonix">Home</button>Blackie</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("BlackieStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("Blackiesold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="border-radius:10px" name="Blackieattack" type="submit" value="Blackie"><img src="https://cdn.discordapp.com/attachments/682517521739677698/682873875000066048/pixil-frame-0.png"></button></form>';
  }
  $name=$_POST["name"];
  $Blackieattack=$_POST["Blackieattack"];
  if($Blackieattack=="Blackie"){
    $Blackiesold=file_get_contents("Blackiesold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$Blackiesold*2){
      $Blackiedeadsold=file_get_contents("Blackiedeadsold.txt");
      $Blackiesol=@fopen("Blackiedeadsold.txt","w");
      fwrite($Blackiesol,$Blackiedeadsold+$Blackiesold);
      $Blackiesold=@fopen("Blackiesold.txt","w");
      fwrite($Blackiesold,0);
      $Blackieston=file_get_contents("BlackieStone");
      $Blackiestone=@fopen("BlackieStone","w");
      fwrite($Blackiestone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$Blackieston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $Blackieston=file_get_contents("BlackieStone.txt");
      $Blackiestone=@fopen("BlackieStone","w");
      fwrite($Blackiestone,$Blackieston+$userston);
    }
  }
?><body text=white><?php
  $name=$_POST["name"];
  $level=file_get_contents("JoshFoosLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="background-color:silver;color:red;border-top-left-radius:17px; border-top-right-radius:5px" name="JoshFoos" type="submit" value="JoshFoos"><font face="Azonix">JoshFoos<br>'.$level.'</button></form>';
  $JoshFoos=$_POST["JoshFoos"];
  if ($JoshFoos=="JoshFoos"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button style="border-radius:10px" name="name" value="'.$name.'" type="submit"><font face="Azonix">Home</button>JoshFoos</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("JoshFoosStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("JoshFoossold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="border-radius:10px" name="JoshFoosattack" type="submit" value="JoshFoos"><img src="https://cdn.discordapp.com/attachments/682517521739677698/682873875000066048/pixil-frame-0.png"></button></form>';
  }
  $name=$_POST["name"];
  $JoshFoosattack=$_POST["JoshFoosattack"];
  if($JoshFoosattack=="JoshFoos"){
    $JoshFoossold=file_get_contents("JoshFoossold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$JoshFoossold*2){
      $JoshFoosdeadsold=file_get_contents("JoshFoosdeadsold.txt");
      $JoshFoossol=@fopen("JoshFoosdeadsold.txt","w");
      fwrite($JoshFoossol,$JoshFoosdeadsold+$JoshFoossold);
      $JoshFoossold=@fopen("JoshFoossold.txt","w");
      fwrite($JoshFoossold,0);
      $JoshFoosston=file_get_contents("JoshFoosStone");
      $JoshFoosstone=@fopen("JoshFoosStone","w");
      fwrite($JoshFoosstone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$JoshFoosston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $JoshFoosston=file_get_contents("JoshFoosStone.txt");
      $JoshFoosstone=@fopen("JoshFoosStone","w");
      fwrite($JoshFoosstone,$JoshFoosston+$userston);
    }
  }
?><body text=white><?php
  $name=$_POST["name"];
  $level=file_get_contents("MyLoLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="background-color:silver;color:red;border-top-left-radius:17px; border-top-right-radius:5px" name="MyLo" type="submit" value="MyLo"><font face="Azonix">MyLo<br>'.$level.'</button></form>';
  $MyLo=$_POST["MyLo"];
  if ($MyLo=="MyLo"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button style="border-radius:10px" name="name" value="'.$name.'" type="submit"><font face="Azonix">Home</button>MyLo</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("MyLoStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("MyLosold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="border-radius:10px" name="MyLoattack" type="submit" value="MyLo"><img src="https://cdn.discordapp.com/attachments/682517521739677698/682873875000066048/pixil-frame-0.png"></button></form>';
  }
  $name=$_POST["name"];
  $MyLoattack=$_POST["MyLoattack"];
  if($MyLoattack=="MyLo"){
    $MyLosold=file_get_contents("MyLosold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$MyLosold*2){
      $MyLodeadsold=file_get_contents("MyLodeadsold.txt");
      $MyLosol=@fopen("MyLodeadsold.txt","w");
      fwrite($MyLosol,$MyLodeadsold+$MyLosold);
      $MyLosold=@fopen("MyLosold.txt","w");
      fwrite($MyLosold,0);
      $MyLoston=file_get_contents("MyLoStone");
      $MyLostone=@fopen("MyLoStone","w");
      fwrite($MyLostone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$MyLoston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $MyLoston=file_get_contents("MyLoStone.txt");
      $MyLostone=@fopen("MyLoStone","w");
      fwrite($MyLostone,$MyLoston+$userston);
    }
  }
?><body text=white><?php
  $name=$_POST["name"];
  $level=file_get_contents("CodyLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="background-color:silver;color:red;border-top-left-radius:17px; border-top-right-radius:5px" name="Cody" type="submit" value="Cody"><font face="Azonix">Cody<br>'.$level.'</button></form>';
  $Cody=$_POST["Cody"];
  if ($Cody=="Cody"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button style="border-radius:10px" name="name" value="'.$name.'" type="submit"><font face="Azonix">Home</button>Cody</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("CodyStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("Codysold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="border-radius:10px" name="Codyattack" type="submit" value="Cody"><img src="https://cdn.discordapp.com/attachments/682517521739677698/682873875000066048/pixil-frame-0.png"></button></form>';
  }
  $name=$_POST["name"];
  $Codyattack=$_POST["Codyattack"];
  if($Codyattack=="Cody"){
    $Codysold=file_get_contents("Codysold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$Codysold*2){
      $Codydeadsold=file_get_contents("Codydeadsold.txt");
      $Codysol=@fopen("Codydeadsold.txt","w");
      fwrite($Codysol,$Codydeadsold+$Codysold);
      $Codysold=@fopen("Codysold.txt","w");
      fwrite($Codysold,0);
      $Codyston=file_get_contents("CodyStone");
      $Codystone=@fopen("CodyStone","w");
      fwrite($Codystone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$Codyston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $Codyston=file_get_contents("CodyStone.txt");
      $Codystone=@fopen("CodyStone","w");
      fwrite($Codystone,$Codyston+$userston);
    }
  }
?><body text=white><?php
  $name=$_POST["name"];
  $level=file_get_contents("TiLuLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="background-color:silver;color:red;border-top-left-radius:17px; border-top-right-radius:5px" name="TiLu" type="submit" value="TiLu"><font face="Azonix">TiLu<br>'.$level.'</button></form>';
  $TiLu=$_POST["TiLu"];
  if ($TiLu=="TiLu"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button style="border-radius:10px" name="name" value="'.$name.'" type="submit"><font face="Azonix">Home</button>TiLu</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("TiLuStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("TiLusold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="border-radius:10px" name="TiLuattack" type="submit" value="TiLu"><img src="https://cdn.discordapp.com/attachments/682517521739677698/682873875000066048/pixil-frame-0.png"></button></form>';
  }
  $name=$_POST["name"];
  $TiLuattack=$_POST["TiLuattack"];
  if($TiLuattack=="TiLu"){
    $TiLusold=file_get_contents("TiLusold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$TiLusold*2){
      $TiLudeadsold=file_get_contents("TiLudeadsold.txt");
      $TiLusol=@fopen("TiLudeadsold.txt","w");
      fwrite($TiLusol,$TiLudeadsold+$TiLusold);
      $TiLusold=@fopen("TiLusold.txt","w");
      fwrite($TiLusold,0);
      $TiLuston=file_get_contents("TiLuStone");
      $TiLustone=@fopen("TiLuStone","w");
      fwrite($TiLustone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$TiLuston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $TiLuston=file_get_contents("TiLuStone.txt");
      $TiLustone=@fopen("TiLuStone","w");
      fwrite($TiLustone,$TiLuston+$userston);
    }
  }
?><body text=white><?php
  $name=$_POST["name"];
  $level=file_get_contents("DanitonLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="background-color:silver;color:red;border-top-left-radius:17px; border-top-right-radius:5px" name="Daniton" type="submit" value="Daniton"><font face="Azonix">Daniton<br>'.$level.'</button></form>';
  $Daniton=$_POST["Daniton"];
  if ($Daniton=="Daniton"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button style="border-radius:10px" name="name" value="'.$name.'" type="submit"><font face="Azonix">Home</button>Daniton</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("DanitonStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("Danitonsold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="border-radius:10px" name="Danitonattack" type="submit" value="Daniton"><img src="https://cdn.discordapp.com/attachments/682517521739677698/682873875000066048/pixil-frame-0.png"></button></form>';
  }
  $name=$_POST["name"];
  $Danitonattack=$_POST["Danitonattack"];
  if($Danitonattack=="Daniton"){
    $Danitonsold=file_get_contents("Danitonsold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$Danitonsold*2){
      $Danitondeadsold=file_get_contents("Danitondeadsold.txt");
      $Danitonsol=@fopen("Danitondeadsold.txt","w");
      fwrite($Danitonsol,$Danitondeadsold+$Danitonsold);
      $Danitonsold=@fopen("Danitonsold.txt","w");
      fwrite($Danitonsold,0);
      $Danitonston=file_get_contents("DanitonStone");
      $Danitonstone=@fopen("DanitonStone","w");
      fwrite($Danitonstone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$Danitonston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $Danitonston=file_get_contents("DanitonStone.txt");
      $Danitonstone=@fopen("DanitonStone","w");
      fwrite($Danitonstone,$Danitonston+$userston);
    }
  }
?><body text=white><?php
  $name=$_POST["name"];
  $level=file_get_contents("PimpLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="background-color:silver;color:red;border-top-left-radius:17px; border-top-right-radius:5px" name="Pimp" type="submit" value="Pimp"><font face="Azonix">Pimp<br>'.$level.'</button></form>';
  $Pimp=$_POST["Pimp"];
  if ($Pimp=="Pimp"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button style="border-radius:10px" name="name" value="'.$name.'" type="submit"><font face="Azonix">Home</button>Pimp</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("PimpStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("Pimpsold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="border-radius:10px" name="Pimpattack" type="submit" value="Pimp"><img src="https://cdn.discordapp.com/attachments/682517521739677698/682873875000066048/pixil-frame-0.png"></button></form>';
  }
  $name=$_POST["name"];
  $Pimpattack=$_POST["Pimpattack"];
  if($Pimpattack=="Pimp"){
    $Pimpsold=file_get_contents("Pimpsold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$Pimpsold*2){
      $Pimpdeadsold=file_get_contents("Pimpdeadsold.txt");
      $Pimpsol=@fopen("Pimpdeadsold.txt","w");
      fwrite($Pimpsol,$Pimpdeadsold+$Pimpsold);
      $Pimpsold=@fopen("Pimpsold.txt","w");
      fwrite($Pimpsold,0);
      $Pimpston=file_get_contents("PimpStone");
      $Pimpstone=@fopen("PimpStone","w");
      fwrite($Pimpstone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$Pimpston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $Pimpston=file_get_contents("PimpStone.txt");
      $Pimpstone=@fopen("PimpStone","w");
      fwrite($Pimpstone,$Pimpston+$userston);
    }
  }
?><body text=white><?php
  $name=$_POST["name"];
  $level=file_get_contents("BlakeyLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="background-color:silver;color:red;border-top-left-radius:17px; border-top-right-radius:5px" name="Blakey" type="submit" value="Blakey"><font face="Azonix">Blakey<br>'.$level.'</button></form>';
  $Blakey=$_POST["Blakey"];
  if ($Blakey=="Blakey"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button style="border-radius:10px" name="name" value="'.$name.'" type="submit"><font face="Azonix">Home</button>Blakey</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("BlakeyStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("Blakeysold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="border-radius:10px" name="Blakeyattack" type="submit" value="Blakey"><img src="https://cdn.discordapp.com/attachments/682517521739677698/682873875000066048/pixil-frame-0.png"></button></form>';
  }
  $name=$_POST["name"];
  $Blakeyattack=$_POST["Blakeyattack"];
  if($Blakeyattack=="Blakey"){
    $Blakeysold=file_get_contents("Blakeysold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$Blakeysold*2){
      $Blakeydeadsold=file_get_contents("Blakeydeadsold.txt");
      $Blakeysol=@fopen("Blakeydeadsold.txt","w");
      fwrite($Blakeysol,$Blakeydeadsold+$Blakeysold);
      $Blakeysold=@fopen("Blakeysold.txt","w");
      fwrite($Blakeysold,0);
      $Blakeyston=file_get_contents("BlakeyStone");
      $Blakeystone=@fopen("BlakeyStone","w");
      fwrite($Blakeystone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$Blakeyston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $Blakeyston=file_get_contents("BlakeyStone.txt");
      $Blakeystone=@fopen("BlakeyStone","w");
      fwrite($Blakeystone,$Blakeyston+$userston);
    }
  }
?><body text=white><?php
  $name=$_POST["name"];
  $level=file_get_contents("TTTTTTTLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="background-color:silver;color:red;border-top-left-radius:17px; border-top-right-radius:5px" name="TTTTTTT" type="submit" value="TTTTTTT"><font face="Azonix">TTTTTTT<br>'.$level.'</button></form>';
  $TTTTTTT=$_POST["TTTTTTT"];
  if ($TTTTTTT=="TTTTTTT"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button style="border-radius:10px" name="name" value="'.$name.'" type="submit"><font face="Azonix">Home</button>TTTTTTT</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("TTTTTTTStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("TTTTTTTsold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="border-radius:10px" name="TTTTTTTattack" type="submit" value="TTTTTTT"><img src="https://cdn.discordapp.com/attachments/682517521739677698/682873875000066048/pixil-frame-0.png"></button></form>';
  }
  $name=$_POST["name"];
  $TTTTTTTattack=$_POST["TTTTTTTattack"];
  if($TTTTTTTattack=="TTTTTTT"){
    $TTTTTTTsold=file_get_contents("TTTTTTTsold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$TTTTTTTsold*2){
      $TTTTTTTdeadsold=file_get_contents("TTTTTTTdeadsold.txt");
      $TTTTTTTsol=@fopen("TTTTTTTdeadsold.txt","w");
      fwrite($TTTTTTTsol,$TTTTTTTdeadsold+$TTTTTTTsold);
      $TTTTTTTsold=@fopen("TTTTTTTsold.txt","w");
      fwrite($TTTTTTTsold,0);
      $TTTTTTTston=file_get_contents("TTTTTTTStone");
      $TTTTTTTstone=@fopen("TTTTTTTStone","w");
      fwrite($TTTTTTTstone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$TTTTTTTston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $TTTTTTTston=file_get_contents("TTTTTTTStone.txt");
      $TTTTTTTstone=@fopen("TTTTTTTStone","w");
      fwrite($TTTTTTTstone,$TTTTTTTston+$userston);
    }
  }
?><body text=white><?php
  $name=$_POST["name"];
  $level=file_get_contents("shoobLevel");
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="background-color:silver;color:red;border-top-left-radius:17px; border-top-right-radius:5px" name="shoob" type="submit" value="shoob"><font face="Azonix">shoob<br>'.$level.'</button></form>';
  $shoob=$_POST["shoob"];
  if ($shoob=="shoob"){
    echo '<h1><div style="text-align:center"><form action="'.$name.'Menu.php"><button style="border-radius:10px" name="name" value="'.$name.'" type="submit"><font face="Azonix">Home</button>shoob</form></h1>';
    echo "<table style='width:100%'>";
    echo "<tr><td style='width:50%'><b>Level:</b>".$level."</td>";
    echo "<td style='width:50%'><b>Money:</b>".file_get_contents("shoobStone")."</td></tr></table>";
    echo "<div style='text-align:center'><b>Army:</b>".file_get_contents("shoobsold.txt")."</div>";
  echo '<form action="" method="post">
  <input name="name" value="'.$name.'" hidden><button style="border-radius:10px" name="shoobattack" type="submit" value="shoob"><img src="https://cdn.discordapp.com/attachments/682517521739677698/682873875000066048/pixil-frame-0.png"></button></form>';
  }
  $name=$_POST["name"];
  $shoobattack=$_POST["shoobattack"];
  if($shoobattack=="shoob"){
    $shoobsold=file_get_contents("shoobsold.txt");
    $usersold=file_get_contents($name."sold.txt");
    if($usersold>$shoobsold*2){
      $shoobdeadsold=file_get_contents("shoobdeadsold.txt");
      $shoobsol=@fopen("shoobdeadsold.txt","w");
      fwrite($shoobsol,$shoobdeadsold+$shoobsold);
      $shoobsold=@fopen("shoobsold.txt","w");
      fwrite($shoobsold,0);
      $shoobston=file_get_contents("shoobStone");
      $shoobstone=@fopen("shoobStone","w");
      fwrite($shoobstone,0);
      $userston=file_get_contents($name."Stone.txt");
      $userstone=@fopen($name."Stone","w");
      fwrite($userstone,$userston+$shoobston);
    }
    else{
      $userdeadsold=file_get_contents($name."deadsold.txt");
      $usersol=@fopen($name."deadsold.txt","w");
      fwrite($usersol,$userdeadsold+$usersold);
      $usersold=@fopen($name."sold.txt","w");
      fwrite($usersold,0);
      $userston=file_get_contents($user."Stone");
      $userstone=@fopen($user."Stone","w");
      fwrite($userstone,0);
      $shoobston=file_get_contents("shoobStone.txt");
      $shoobstone=@fopen("shoobStone","w");
      fwrite($shoobstone,$shoobston+$userston);
    }
  }
?>