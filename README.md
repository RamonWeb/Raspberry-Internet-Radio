# Raspberry-Internet-Radio

.... In Arbeit... 
VERSION 0.9 Prototyp

https://github.com/RamonWeb/Raspberry-Internet-Radio/wiki

Hardware bei dem Prototyp:

-Raspberry Pi 4 mit 2 MB RAM (naja hab später noch mehr mit dem Radio vor…)
 Update:27.04.2020
 Nach einem Defekt am Raspberry Pi 4 habe ich jetzt einen Raspberry Zero WH eingebaut. (läuft und läuft...)
 
-DAC (Pi HAT) Pifi DAC+

-Stereo Verstärker und Lautsprecher (aus alten Aktivboxen mit Verstärker und Netzteil)

-das originale Netzteil des Pi und das 12V Netzteil der Aktivboxen hab ich im Gehäse mit untergebracht. (in der nächsten Version gibt es nur noch ein Netzteil und einen 5V Verstärker)

-einen kleinen Lüfter per 5V lass ich noch zwischen den Pi und dem HAT blasen. Sind Passivkühler auf dem Pi geklebt.

Der Pi läuft immer nur der Verstärker wird bei bedarf eingeschalten. So hab ich die Möglichkeit noch andere Sachen und Programme (Wetter und Temperatur) immer laufen zu lassen auch wenn keiner gerade Musik hört.

Software:
Steht das Grungsystem mit MPD kann man per SSH eigentlich alles schon machen und mit den Befehlen und eigenen Scripts loslegen.

Habe auch andere SYSTEME wie

https://github.com/project-owner/PeppyPlayers.doc/wiki
 
oder https://volumio.org ausprobiert. Sind ok… mir aber zu viel auf meinem Radio…

Daher hab ich eine einfache Lösung gesucht… und mir einfach den Webserver des Pi‘s mit einer einfachen Steuerung versehen.

In der Wiki ist alles noch einmahl ausführlich Beschrieben..

https://github.com/RamonWeb/Raspberry-Internet-Radio/wiki
