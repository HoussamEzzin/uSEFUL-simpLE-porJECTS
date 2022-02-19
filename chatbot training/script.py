import json
import re
# yaml_file.write('categories:\n')
# yaml_file.write('- Custom\n')
# yaml_file.write('conversations:\n')
#re.sub('[^A-Za-z0-9]+', '', line)
train_file = open('train.json')





data = json.loads(train_file.read())



train_data_path = 'train.txt'
train_data = open(train_data_path,'a')
train_data.write('categories:\n')
train_data.write('- Custom1\n')
train_data.write('conversations:\n')
file_number = 1
max_line_count = 6000


for i in range(len(data['data'])):
	progress = int((i/len(data['data']))*100)
	print('Progress : '+str(progress)+'%')
	
	line_count = 0
	for line in open(train_data_path,'r'):
		line_count += 1

	if line_count >= max_line_count :
		
		file_number += 1
		train_data_path = 'train' + str(file_number) +'.txt'
		train_data = open(train_data_path, 'a')
		train_data.write('categories:\n')
		custom = '- Custom' + str(file_number)
		train_data.write(custom + '\n')
		train_data.write('conversations:\n')


	for qas in data['data'][i]['paragraphs'][0]['qas']:
		q = re.sub('["*,?:()`-]+', '', qas['question'])
		q = re.sub("[']+", '', q)
		q = re.sub("[!.]+", '', q)
		q = q.replace('[', '')
		q = q.replace(']', '')
		if re.search('^[0-9]+$', q):
			q += ' it is'
		if isinstance(q,list):
			print(q)
		train_data.write('- - '+ q.strip()+'\n')
		for answer in qas['answers']:
			a = re.sub('["*,?:()`-]+', '', answer['text'])
			a = re.sub("[']+", '', a)
			a = re.sub("[!.]+", '', a)
			a = a.replace('[', '')
			a = a.replace(']', '')
			if a == 'CANNOTANSWER':
				a = "I don't Know !"
			if re.search('^[0-9]+$', a):
				a += ' it is'
			if isinstance(a,list):
				print(a)

			check_for_single_words = a.split(' ')
			if len(check_for_single_words) < 2 :
				a += ' or whatever'

			train_data.write('  - '+a.strip()+'\n')


# for i in range(3000):
# 	for qas in data['data'][i]['paragraphs'][0]['qas']:
# 		q = re.sub('["*,?:()`]+', '', qas['question'])
# 		q = re.sub("[']+", '', q)
# 		q = re.sub("[!.]+", '', q)
# 		q = q.replace('[', '')
# 		q = q.replace(']', '')
# 		if re.search('^[0-9]+$', q):
# 			q += ' it is'
# 		if isinstance(q,list):
# 			print(q)
# 		trainingdata2.write('- - '+ q.strip()+'\n')
# 		for answer in qas['answers']:
# 			a = re.sub('["*,?:()`]+', '', answer['text'])
# 			a = re.sub("[']+", '', a)
# 			a = re.sub("[!.]+", '', a)
# 			a = a.replace('[', '')
# 			a = a.replace(']', '')
# 			if a == 'CANNOTANSWER':
# 				a = "I don't Know !"
# 			if re.search('^[0-9]+$', a):
# 				a += ' it is'
# 			if isinstance(a,list):
# 				print(a)

# 			trainingdata2.write('  - '+a.strip()+'\n')


# trainingdata3 = open('trainingdata3.txt', 'a')

# trainingdata3.write('categories:\n')
# trainingdata3.write('- Custom3\n')
# trainingdata3.write('conversations:\n')
	
# for i in range(3001,6000):
# 	for qas in data['data'][i]['paragraphs'][0]['qas']:
# 		q = re.sub('["*,?:()`]+', '', qas['question'])
# 		q = re.sub("[']+", '', q)
# 		q = re.sub("[!.]+", '', q)
# 		q = q.replace('[', '')
# 		q = q.replace(']', '')
# 		if re.search('^[0-9]+$', q):
# 			q += ' it is'
# 		if isinstance(q,list):
# 			print(q)
# 		trainingdata3.write('- - '+ q.strip()+'\n')
# 		for answer in qas['answers']:
# 			a = re.sub('["*,?:()`]+', '', answer['text'])
# 			a = re.sub("[']+", '', a)
# 			a = re.sub("[!.]+", '', a)
# 			a = a.replace('[', '')
# 			a = a.replace(']', '')
# 			if a == 'CANNOTANSWER':
# 				a = "I don't Know !"
# 			if re.search('^[0-9]+$', a):
# 				a += ' it is'
# 			if isinstance(a,list):
# 				print(a)

# 			trainingdata3.write('  - '+a.strip()+'\n')

# trainingdata4 = open('trainingdata4.txt', 'a')

# trainingdata4.write('categories:\n')
# trainingdata4.write('- Custom4\n')
# trainingdata4.write('conversations:\n')

# for i in range(6001,9000):
# 	for qas in data['data'][i]['paragraphs'][0]['qas']:
# 		q = re.sub('["*,?:()`]+', '', qas['question'])
# 		q = re.sub("[']+", '', q)
# 		q = re.sub("[!.]+", '', q)
# 		q = q.replace('[', '')
# 		q = q.replace(']', '')
# 		if re.search('^[0-9]+$', q):
# 			q += ' it is'
# 		if isinstance(q,list):
# 			print(q)
# 		trainingdata4.write('- - '+ q.strip()+'\n')
# 		for answer in qas['answers']:
# 			a = re.sub('["*,?:()`]+', '', answer['text'])
# 			a = re.sub("[']+", '', a)
# 			a = re.sub("[!.]+", '', a)
# 			a = a.replace('[', '')
# 			a = a.replace(']', '')
# 			if a == 'CANNOTANSWER':
# 				a = "I don't Know !"
# 			if re.search('^[0-9]+$', a):
# 				a += ' it is'
# 			if isinstance(a,list):
# 				print(a)

# 			trainingdata4.write('  - '+a.strip()+'\n')



# trainingdata5 = open('trainingdata5.txt', 'a')

# trainingdata5.write('categories:\n')
# trainingdata5.write('- Custom5\n')
# trainingdata5.write('conversations:\n')

# for i in range(6001,9000):
# 	for qas in data['data'][i]['paragraphs'][0]['qas']:
# 		q = re.sub('["*,?:()`]+', '', qas['question'])
# 		q = re.sub("[']+", '', q)
# 		q = re.sub("[!.]+", '', q)
# 		q = q.replace('[', '')
# 		q = q.replace(']', '')
# 		if re.search('^[0-9]+$', q):
# 			q += ' it is'
# 		if isinstance(q,list):
# 			print(q)
# 		trainingdata5.write('- - '+ q.strip()+'\n')
# 		for answer in qas['answers']:
# 			a = re.sub('["*,?:()`]+', '', answer['text'])
# 			a = re.sub("[']+", '', a)
# 			a = re.sub("[!.]+", '', a)
# 			a = a.replace('[', '')
# 			a = a.replace(']', '')
# 			if a == 'CANNOTANSWER':
# 				a = "I don't Know !"
# 			if re.search('^[0-9]+$', a):
# 				a += ' it is'
# 			if isinstance(a,list):
# 				print(a)

# 			trainingdata5.write('  - '+a.strip()+'\n')

# trainingdata6 = open('trainingdata6.txt', 'a')

# trainingdata6.write('categories:\n')
# trainingdata6.write('- Custom6\n')
# trainingdata6.write('conversations:\n')

# for i in range(9001,11567):
# 	for qas in data['data'][i]['paragraphs'][0]['qas']:
# 		q = re.sub('["*,?:()`]+', '', qas['question'])
# 		q = re.sub("[']+", '', q)
# 		q = re.sub("[!.]+", '', q)
# 		q = q.replace('[', '')
# 		q = q.replace(']', '')
# 		if re.search('^[0-9]+$', q):
# 			q += ' it is'
# 		if isinstance(q,list):
# 			print(q)
# 		trainingdata6.write('- - '+ q.strip()+'\n')
# 		for answer in qas['answers']:
# 			a = re.sub('["*,?:()`]+', '', answer['text'])
# 			a = re.sub("[']+", '', a)
# 			a = re.sub("[!.]+", '', a)
# 			a = a.replace('[', '')
# 			a = a.replace(']', '')
# 			if a == 'CANNOTANSWER':
# 				a = "I don't Know !"
# 			if re.search('^[0-9]+$', a):
# 				a += ' it is'
# 			if isinstance(a,list):
# 				print(a)

# 			trainingdata6.write('  - '+a.strip()+'\n')

