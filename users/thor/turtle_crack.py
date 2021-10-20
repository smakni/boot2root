from turtle import *

file = open("./turtle", "r")
color('red', 'yellow')
instructionValue = 0
base = 0
speed(10)
setheading(90)
penup()
goto(0, 0)
pendown()
for line in file:
	for split in line.split():
		if split.isdigit():
			instructionValue = split
	if line.startswith('Avance'):
				forward(int(instructionValue))
	elif line.startswith('Recule'):
				backward(int(instructionValue))
	elif line.startswith('Tourne gauche'):
				left(int(instructionValue))
	elif line.startswith('Tourne droite'):
				right(int(instructionValue))
	elif line == 'Can you digest the message? :)':
		break
	else:
		base += 100
		setheading(90)
		penup() # pen will be lifted
		goto(base, 0)
		forward(100)
		pendown()
file.close()
done()