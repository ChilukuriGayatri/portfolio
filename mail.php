<?php
if(isset($_POST['send']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to='chilukurigayatri979@gmail.com';
$message="Name:".$name."\n"."Subject:".$subject."\n". "message: "."\n\n".$message;
$headers="From:".$email;

if(empty($name) || empty($email))
{
?>
<p class='alert alert-danger'>
	<?php echo "All input fields are required!" ?>
</p>
<?php
}
else
{
if(mail($to,$subject,$message,$headers))
{
echo "<h2>Sent Successfully! </h2>";
}
else
{
echo "Opps! Something went wrong!";
}
}
}
?>
