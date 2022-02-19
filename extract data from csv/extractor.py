import csv
import unicodedata as ud
with open('lexique_data.csv', 'r',encoding='utf-8') as lexique_file:
	csv_reader = csv.reader(lexique_file)
	line_count = 0
	
	for row in csv_reader:
		row[0] = row[0].split(';')
		s = row[0][1]
		for c in s :
			print(f'{c} U+{ord(c):04X} {ud.name(c)}')