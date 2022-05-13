
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body  style="width:100%; text-align:center;">
<h2>FORM LIEN HE</h2>

<form id="myInput" method="post">

    <label>Ho va Ten:</label><br>
    <input type="text" id="name" name="Name" placeholder="Nguyen Huu Nghia"><br><br>

    <label>Email:</label><br>
    <input type="text" id="email" name="Email" placeholder="creative.disaster99@gmail.com"><br><br>

    <label>So Dien Thoai:</label><br>
    <input type="text" id="phone" name="Phone" placeholder="0582516891"><br><br>

    <label>Noi Dung Lien He:</label><br>
    <textarea name="Message" rows="10" cols="20" placeholder="Viet noi dung vao day..."></textarea><br><br>

<?php
	if(isset($_POST['sub'])) {
		$conn = mysqli_connect('localhost','root','',"formlienhe");
		if (!$conn) {
			die('ket noi that bai: ' . mysqli_error($conn));
			exit();
		   }
		   echo 'Gui thong tin thanh cong<br>';
		
		$Name = "";
		$Email = "";
		$Phone = "";
		$Message = "";

		//Lấy giá trị POST từ form vừa submit
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if(isset($_POST["Name"])) { $Name = $_POST['Name']; }
			if(isset($_POST["Email"])) { $Email = $_POST['Email']; }
			if(isset($_POST["Phone"])) { $Phone = $_POST['Phone']; }
			if(isset($_POST["Message"])) { $Message = $_POST['Message']; }
		
		mysqli_select_db($conn,'formlienhe');	
		
		$sql = "INSERT INTO nguoidung (Name, Email, Phone, Message)
		VALUES ('$Name', '$Email', '$Phone', '$Message')";
		
		mysqli_query($conn, $sql);
			
		}
	
	}
?>
    <button id="submit" name="sub" onclick="connect()">Gui</button>
 
    <button id="clear" name="clear" onclick="document.getElementById('myInput').value = ''">Xoa</button>

</form> 

</body>
</html>