#!/usr/bin/env python
import string
import sys
from BeautifulSoup import BeautifulSoup, NavigableString

#http://stackoverflow.com/questions/9044088/beautifulsoup-strip-specified-attributes-but-preserve-the-tag-and-its-contents
def surrounded_by_strings(tag):
    return (isinstance(tag.next_element, NavigableString)
            and isinstance(tag.previous_element, NavigableString))

def has_class_but_no_id(tag):
    return tag.has_key('class') and not tag.has_key('id')

def uppercase(str):
    return str.upper()

# remove tag completely
def remove_tags(soup, remove_tags):
  for tag in soup.findAll(True):
    if tag.name in remove_tags:
      tag.extract()
  return soup

# save soup html to file
def save_soup(file_path, soup):
  fname = file_path
  with open(fname, 'w') as outf:
    #outf.write('\n'.join(contents))
    outf.write(soup.prettify())

def strip_styles(soup):
      REMOVE_ATTRIBUTES = [
      'lang','language','onmouseover','onmouseout','script','style',
      'font','dir','face','size','color','style','class','width',
      'height','hspace','border','valign','align','background',
      'bgcolor','text','link','vlink','alink','cellpadding','cellspacing']
      for tag in soup.recursiveChildGenerator():
            try:
                  tag.attrs = [(key,value) for key,value in tag.attrs
                        if key not in REMOVE_ATTRIBUTES]
            except AttributeError: 
                  # 'NavigableString' object has no attribute 'attrs'
                  pass

def print_h1(soup):
    for tag in soup.findAll('h1'):
        print "parent: ",tag.parent.name
        
def print_ol(soup):
    for tag in soup.findAll('ol'):
        try:
            print "child: ",tag.descendent
        except AttributeError: 
            # AttributeError: 'NoneType' object has no attribute 'child'
            pass
        
        
doc = "html\LandingPageGuidelines.html"
output = "C:\Users\kbrammer\Documents\My_Workspace\Document_Toolchain\Landing_Pages\output.htm"
soup = BeautifulSoup(open(doc))
soup.childGenerator()
print_ol(soup)
#strip_styles(soup)
#strip_tags(soup, ['span'])
#remove_tags(soup, ['style','meta'])
#print soup.findAll("span")
#print soup.prettify()
#save_soup(output,soup)