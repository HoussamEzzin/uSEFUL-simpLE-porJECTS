

result_file = open('result.txt', 'a')
questions_file = open('questions.txt', 'r')
keep_asking = True

result_file.write('categories:\n')
result_file.write('- Houssam\n')
result_file.write('conversations:\n')

for line in questions_file:
	line = line.strip()
	result_file.write('- - '+line+'\n')
	print(line+'\n')
	answer = input()
	result_file.write('  - '+answer+'\n')


	