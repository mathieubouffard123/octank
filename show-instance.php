<?php

  #The URL root is the AWS meta data service URL where metadata
  # requests regarding the running instance can be made
  $urlRoot="http://169.254.169.254/latest/meta-data/";

  # Get the instance ID from meta-data and print to the screen
  $instance = file_get_contents($urlRoot . 'instance-id');
  $hostname = file_get_contents($urlRoot . 'hostname');
  $lifecycle = file_get_contents($urlRoot . 'instance-life-cycle');
  $instancetype = file_get_contents($urlRoot . 'instance-type');
  $ip = file_get_contents($urlRoot . 'local-ipv4');
  $mac = file_get_contents($urlRoot . 'mac');
  $secGroup = file_get_contents($urlRoot . 'network/interfaces/macs/' . $mac .'/security-groups');
  $subnet = file_get_contents($urlRoot . 'network/interfaces/macs/' . $mac .'/subnet-id');
  $vpc = file_get_contents($urlRoot . 'network/interfaces/macs/' . $mac .'/vpc-id');

  # Availability Zone
  $az = file_get_contents($urlRoot . 'placement/availability-zone');


$filename = "Userdata.txt";
$fp = fopen($filename, "r");

$content = fread($fp, filesize($filename));
$lines = explode("\n", $content);
fclose($fp);
print_r($lines);


?>

<center>This page was generated by instance <b><?= $instance ?></b> in Availability Zone <b><?= $az ?></b>.</center>
<br>
<center>Hostname is <b><?= $hostname ?></b></center>
<center>Lifeycle is <b><?= $lifecycle ?></b></center>
<center>Instance type is <b><?= $instancetype ?></b></center>
<center>IP Address is <b><?= $ip ?></b></center>
<center>MAC Address is <b><?= $mac ?></b></center>
<center>Security Group is <b><?= $secGroup ?></b></center>
<center>Subnet ID is <b><?= $subnet ?></b></center>
<center>VPC ID  is <b><?= $vpc ?></b></center>
<br>
<center>UserData<b><?= $theData ?></b></center>
<br>