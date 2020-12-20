


<?php
require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

try {
	// Enter the share name for your USB printer here
	$connector = new WindowsPrintConnector("EPSON-TM-T81-Receipt");
	$printer = new Printer($connector);

	/* Print a "Hello world" receipt" */
	$printer -> text("Hello World!\n");
	$printer -> cut();
	
	/* Close printer */
	$printer -> close();
} catch(Exception $e) {
	echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
}