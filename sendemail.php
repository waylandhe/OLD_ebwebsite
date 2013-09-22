Hi <?php echo htmlspecialchars($_POST['name']); ?>. <br />
You're phone number is <?php echo htmlspecialchars($_POST['phone_number']); ?> <br />
You replied with: <?php echo  htmlspecialchars($_POST['attending']); ?> <br />

<?php/* mail("&#098;&#114;&#105;&#097;&#110;&#104;&#101;&#050;&#054;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;", 
"BEEP BOOP BEEP Message Incoming: elaineandbrian2013.com/wedding.html BEEP BOOP BEEP", 
"Come on ladies, come on ladies, 1 pound fish\nHave, have a look, 1 pound fish\nHave, have a look, 1 pound fish\nVery very good, 1 pound fish\nVery very cheap, 1 pound fish\n6 for 5 pounds, or 1 pound each\n6 for 5 pounds, or 1 pound each\nVery very good and very very cheap\nOne pound fiiiiissshhhhh\n");*/?>

<?php mail(
	"&#098;&#114;&#105;&#097;&#110;&#104;&#101;&#050;&#054;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;", 
	//"viperboy0612@yahoo.com",
	"USER REGISTERED FOR WEDDING",
	"NAME: " . $_POST['name'] . "\n" .
	"PHONE NUMBER: " . $_POST['phone_number'] . "\n" .
	"ATTENDING: " . $_POST['attending']); ?>
