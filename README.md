# Simple-fingerprint-attendance
This repository aims to create a simple fingerprint attendance system.
This will guide you to make a simple fingerprint based attendance system using NodeMCU ESP-8266, fingerprint sensor(R305/307) and XAMPP.

Fingerprint sensor: I have used a R307 fingerprint module, it can also be interchanged with the R305 modiule. 
Why node MCU?  : I have tried to use ESP32 for this project but i have failed to do so. The hardware serial does not work for some reason, I tried to debug it but could not find a sollution.
XAMPP: XAMPP is used as a local server to store the data of the enrolled user.
PHP: PHP script is used in the project to get the data from the ESP 8266 and store in the SQL table.
