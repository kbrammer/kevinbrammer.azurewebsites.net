# Scraping HTML using Python and BeautifulSoup

A quick example using BeautifulSoup to grab content from web pages:


    #!/usr/bin/env python
    import urllib2
    import string
    import sys
    from BeautifulSoup import BeautifulSoup
    
    user_agent = 'Mozilla/5 (Solaris 10) Gecko'
    headers = { 'User-Agent' : user_agent }
    request = urllib2.Request("http://kevinbrammer.azurwebsites.net")
    response = urllib2.urlopen(request)
    the_page = response.read()
    soup = BeautifulSoup(the_page)
    
    for p in soup.findAll('div', attrs={'class':'entry-content'}):
          print p.getText().encode("utf-8")
