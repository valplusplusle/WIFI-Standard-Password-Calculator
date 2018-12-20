# NOTE
THIS code is ONLY for self-protection! Use it to test if your Router is involved in this problem! Keep in mind to change your passwords!

# NEW
I translated the Code to easy PHP. Now you have a interface and it works on every System. But only for creating a password List! Feel free to translate it to other things Like apps etc.

# Standard-Password-Calculator

The standard password for the WiFi on a Speedport device is calculated. (on many other ISP too but this code is only to understand how the calculation works!) 
They used an calculation with the SSID the MAC-Adress and the serielnumber.
The calculation can be found here: https://www.zebradem.com/wiki/index.php?title=Router_Standardpassw%C3%B6rter

# Requiements

The code is wrote on a Linux bash so you have to use Linux to run the Code.
The code takes use of nmlci. A network managing tool. If you dont have it you need to install it.

# Where the magic happens

The code is very simple. Primary it just calculates the password out of MAC and SSID and 3 unknown numers 0-9.
The code generates every optional passwort with this 3 unkown numers X Y Z and wrote it in a file.
This is the generated passwordfile. It can be used from Programms like aircrack-ng because one of the passwords in this file is totaly shure the right password. (If it wasnt changed since the installing).
But the code also trys to find the right one by his own. It generates the right bash code to try a connection.

Looks like this: 

```
    nmcli -t 5 device wifi con WLAN-DBMP6D password SP-60DFC0190
```

It just takes the Information from the SSID and the MAC and the generated password and tries to connect. After 5sec of trying and not connecting it kills hisself and try the next password.

# Disclaimer

Only use this on your own network! Hack other networks is illegal!
