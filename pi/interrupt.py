import RPi.GPIO as GPIO
import time
import threading
import requests

GPIO.setmode(GPIO.BOARD)

GPIO.setup(7, GPIO.IN, pull_up_down=GPIO.PUD_DOWN)

def handle(pin):
	print "pin : " + str(pin)
	pinStatus =  GPIO.input(pin)
	payload = {'status': pinStatus,'time':'time'}
	print "Data " + str(payload)
	r = requests.get('http://192.168.1.102/pi/ins.php', params=payload)

GPIO.add_event_detect(7, GPIO.BOTH, handle, bouncetime=50)

while True:
	time.sleep(1e6)
