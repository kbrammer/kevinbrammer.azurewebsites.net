#!/usr/bin/env python
import urllib2, string, sys
import bleach, html5lib
from BeautifulSoup import BeautifulSoup, NavigableString

# BeautifulSoup: http://www.crummy.com/software/BeautifulSoup/bs4/doc/

# main
def main():
  # test word html
  #markup = markup_open("Checklist.htm")
  
  # test oo html

  markup = markup_open("C:\Users\kbrammer\Documents\My_Workspace\Document_Toolchain\Landing_Pages\LandingPageGuidelines.v7.htm")
  
  # clean, save and print html
  clean_soup(markup)
  
  # test Mozilla bleach?
  #clean_bleach(markup)

# https://github.com/jsocol/bleach/blob/master/docs/clean.rst
def clean_bleach(markup):
  unicode_string = bleach.clean(markup)
  print unicode_string
  
def clean_soup(markup):
  soup = strip_tags(markup, ['span','font'])
  soup = strip_tag_attributes(soup, ['style','class','link','vlink','lang','dir','type','align'])
  soup = remove_tags(soup, ['style','meta'])
  save_soup("converted.html",soup)
  print soup.prettify()
  
# get html from url
def markup_get(url):
  request = urllib2.Request(url)
  user_agent = 'Mozilla/5 (Solaris 10) Gecko'
  request.headers = { 'User-Agent' : user_agent }
  response = urllib2.urlopen(request)
  doc = response.read()
  return doc

# open html from file
def markup_open(file_path):
  doc = open(file_path)
  return doc

# save soup html to file
def save_soup(file_path, soup):
  fname = file_path
  with open(fname, 'w') as outf:
    #outf.write('\n'.join(contents))
    outf.write(soup.prettify())

# Recursively replace tags with their contents if they are of type NavigableString
# http://stackoverflow.com/questions/1765848/remove-a-tag-using-beautifulsoup-but-keep-its-contents
def strip_tags(html, invalid_tags):
  soup = BeautifulSoup(html)
  for tag in soup.findAll(True):
    if tag.name in invalid_tags:
      s = ""
      for c in tag.contents:
        if not isinstance(c, NavigableString):
            # You have to pass unicode strings on each call
            c = strip_tags(unicode(c), invalid_tags)
        s += unicode(c)
      tag.replaceWith(s)
  return soup

# remove attributes from tags
def strip_tag_attributes(soup, invalid_attributes):
  for tag in soup.findAll(True):
    for attribute in invalid_attributes:
      if tag.get(attribute):
        #print unicode(tag.attrs)
        del tag[attribute]
  return soup

# remove tag completely
def remove_tags(soup, remove_tags):
  for tag in soup.findAll(True):
    if tag.name in remove_tags:
      tag.extract()
  return soup

def format_doc(soup):
  # fix o&nbsp;&nbsp;&nbsp;
  # add stylesheet
  return soup

def temp():
  soup = BeautifulSoup(markup)
  for span in soup.findAll('span'):
    #span.decompose()
    #span.unwrap()
    print span.getText().encode("utf-8")
  for p in soup.findAll('span', attrs={'class':'entry-content'}):
    print p.getText().encode("utf-8")

# run main
if __name__=="__main__":
    main()