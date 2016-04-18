# arduino-wifly-php-thingspeak

:bulb: A quick and dirty (?noobish) shortcut to update your ThingSpeak channel using Wifly + Arduino using HTTP requests
> thou shalt love thy duino neighbor as thyself
***

### Requirements

1. Seeedstudio [Wifly Library](https://github.com/Seeed-Studio/WiFi_Shield) for Arduino 
2. A web host with PHP support
3. Lack of patience/grit/time etc

### Notes

* This particular example transmits data from two sensors: 
    1. DHT11 (Temperature, Humidity)
    2. Dust Density (Sharp Optical Dust Sensor - GP2Y1010AU0F) 
* transitCarriots.php creates a JSON object and POST to Carriots
* transitThingSpeak.php create a simple POST request to ThingSPeak
* **I ended using ThingSpeak for my project due to my personal preference but both should work just fine**
* **Both scripts can be modified to suit other IOT platforms as well, with reference to their API**

### License

![MIT license](https://img.shields.io/npm/l/express.svg)
