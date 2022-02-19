


with open('test.txt','r') as file:
	i = 0
	for line in file:
		i += 1
		progress = int((i/6119)*100)
		print('progress : '+str(progress))
		if progress == 29:
			print(line)
			break

