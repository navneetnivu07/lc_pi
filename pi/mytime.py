import RPi.GPIO as GPIO
import time
import requests

# Button Configurations
GPIO.setmode(GPIO.BOARD)

s1 = 7  

GPIO.setwarnings(False) # because I'm using the pins for other things too!

GPIO.setup(s1, GPIO.IN, pull_up_down=GPIO.PUD_DOWN)

while True:
	pinStatus =  GPIO.input(s1)
	payload = {'status': 'on'}
	r = requests.get('http://192.168.1.104/pi/ins.php', params=payload)
	print(r.status_code)
	time.sleep(10)
