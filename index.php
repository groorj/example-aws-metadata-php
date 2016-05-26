<?php
// Gustavo Aguiar - https://github.com/groorj/example-aws-metadata-php/

$instance_id		= file_get_contents("http://169.254.169.254/latest/meta-data/instance-id");
$instance_type		= file_get_contents("http://169.254.169.254/latest/meta-data/instance-type");
$public_ip		= file_get_contents("http://169.254.169.254/latest/meta-data/public-ipv4");
$public_hostname	= file_get_contents("http://169.254.169.254/latest/meta-data/public-hostname");
$internal_ip		= file_get_contents("http://169.254.169.254/latest/meta-data/local-ipv4");
$instance_az		= file_get_contents("http://169.254.169.254/latest/meta-data/placement/availability-zone");
$region			= substr($instance_az,0,-1);

echo "<html><head><title>PHP Application</title></head><body>";
echo "<b>This instance id:</b> $instance_id<br>";
echo "<b>This instance type:</b> $instance_type<br>";
echo "<b>This instance public IP:</b> $public_ip<br>";
echo "<b>This instance public hostname:</b> $public_hostname<br>";
echo "<b>This instance internal IP:</b> $internal_ip<br>";
echo "<b>This instance region:</b> $region<br>";
echo "<b>This instance availability zone:</b> $instance_az<br>";
echo "<br>Click <a href='phpinfo.php'>here<a/> for phpinfo.";
echo "</body></html>"

?>
