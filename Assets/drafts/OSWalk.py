'''
Created on Nov 4, 2012

@author: KBrammer
'''

import os

# visit all the directories in a directory tree
restFiles = [os.path.join(d[0], f) for d in os.walk(".")
    # find all the files that end in .java and contain the word PythonInterpreter:
    for f in d[2] if f.endswith(".java") and
"PythonInterpreter" in open(os.path.join(d[0], f)).read()]

for r in restFiles:
    print(r)
