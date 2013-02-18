#!/usr/bin/env python

# Run asciidoc
import os
import sys


#---------------------------------------------------------------------------
# build html
#---------------------------------------------------------------------------

#print 'Number of arguments:', len(sys.argv), 'arguments.'
#print 'Argument List:', str(sys.argv)

# httpie?
# xml? http://www.tutorialspoint.com/python/python_xml_processing.htm

print "Building HTML file for ", sys.argv[1]
os.system("C:/Users/kbrammer/Documents/My_Workspace/Lennar_Documentation/bin/asciidoc/asciidoc.py -b html5 -a icons -a toc2 -a numbered " + sys.argv[1])

# build pdf
# os.system("..\asciidoc\a2x.py -fpdf --no-xmllint -v \"../../Landing_Pages/landing_page_process.asciidoc\"")