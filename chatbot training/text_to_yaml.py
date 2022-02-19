from os import walk
from pathlib import Path
import re

f = []
for (dirpath, dirnames, filenames) in walk('C:/Users/msi/Desktop/chatbot training'):
    f.extend(filenames)
    break

for file in f :
	if re.search('.txt',file):
		p = Path(file)
		p.rename(p.with_suffix('.yml'))
