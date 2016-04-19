# arduino-wifly-php-thingspeak

:bulb: A quick and dirty (?noobish) shortcut to update your ThingSpeak channel using Wifly + Arduino using HTTP requests
> thou shalt love thy duino neighbor as thyself
***

### Disclaimer

This code bit was written by me after spending fruitless hours attempting to get the Wifly Shield to work as a Client using the existing library and examples. I wouldn't recommend to use it unless you have already exhausted all other options.

It may be broken, have security gaps, or not work at all.
It involves an additional PHP layer, so don't expect it to be ultra-fast (I can update once per minute).
I am only a beginner in Arduino and C++ in general so there could definitely be a better solution.
It's in early stages of development, meaning "it works for me". You're free to share it, improve it, ask for pull requests.

I used Seeedstudio Wifi Shield 2.0 with RN171 Wireless Module - Firmware Version 4.0

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
* **I ended up using ThingSpeak for my project due to my personal preference**
* **Both scripts can be modified to suit other IOT platforms as well, with reference to their API**

### License

![MIT license](https://img.shields.io/npm/l/express.svg)
