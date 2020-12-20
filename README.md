# pos-printer
Point of sales thermal printer code error fixing. Now this code is copmpatible with php 8.


socket server implemented.


port : 6441

need to share the printer. also need to setup printer shared name.

Example : 
test.php you can change printer shared name "$connector = new WindowsPrintConnector("EPSON-TM-T81-Receipt");"


smb://localhost/my_printer_name
print /D:"\\%COMPUTERNAME%\EPSON-TM-T81-Receipt" "Hello"



Lib
composer require hoa/websocket





I tested with EPSON-TM-T81-Receipt
