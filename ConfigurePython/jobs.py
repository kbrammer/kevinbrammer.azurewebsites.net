from urllib2 import Request, urlopen, URLError
from urllib import urlencode
from xml.dom.minidom import parse
import pprint
# http://www.indeed.com/jobs?q=Web+Developer&l=Houston%2C+TX&sort=date
# http://api.indeed.com/ads/apisearch?
# publisher=4521745223245302
# &q=java
# &l=austin%2C+tx
# &sort=
# &radius=
# &st=
# &jt=
# &start=
# &limit=
# &fromage=
# &filter=
# &latlong=1
# &co=us
# &chnl=
# &userip=1.2.3.4
# &useragent=Mozilla/%2F4.0%28Firefox%29
# &v=2

# http://api.indeed.com/ads/apisearch?publisher=4521745223245302&q=Web+Developer&l=Houston%2C+TX&sort=date

class Job:
    """A simple job result class"""
    jobtitle = ""
    company = ""
    city = ""
    state = ""
    country = ""
    formattedLocation = ""
    source = ""
    date = ""
    snippet = ""
    url = ""
    onmousedown = ""
    jobkey = ""
    sponsored = ""
    expired = ""
    formattedLocationFull = ""
    formattedRelativeTime = ""

def getHTML(req):
    try:
        response = urlopen(req)
        rc = ""
    except URLError, e:
        if hasattr(e, 'reason'):
            rc = 'We failed to reach a server.'
            rc = rc + 'Reason: ', e.reason
        elif hasattr(e, 'code'):
            rc = 'The server couldn\'t fulfill the request.'
            rc = rc + 'Error code: ', e.code
        return rc
    else:     
        for line in response:
            if 'jobtitle' in line or 'snippet' in line:
                rc = rc + line
        return rc
        
def getText(nodelist):
    rc = ""
    for node in nodelist:
        if node.nodeType == node.TEXT_NODE:
            rc = rc + node.data
    return rc

def getXML(req):
    dom = parse(urlopen(req))
    rc = ""
    jobs = []

    for result in dom.getElementsByTagName('result'):

        # Build Object
        job = Job()
        job.jobtitle = result.getElementsByTagName('jobtitle')[0].firstChild.nodeValue
        job.company = result.getElementsByTagName('company')[0].firstChild.nodeValue
        job.city = result.getElementsByTagName('city')[0].firstChild.nodeValue
        job.state = result.getElementsByTagName('state')[0].firstChild.nodeValue
        job.country = result.getElementsByTagName('country')[0].firstChild.nodeValue
        job.formattedLocation = result.getElementsByTagName('formattedLocation')[0].firstChild.nodeValue
        job.source = result.getElementsByTagName('source')[0].firstChild.nodeValue
        job.date = result.getElementsByTagName('date')[0].firstChild.nodeValue
        job.snippet = result.getElementsByTagName('snippet')[0].firstChild.nodeValue
        job.url = result.getElementsByTagName('url')[0].firstChild.nodeValue
        job.onmousedown = result.getElementsByTagName('onmousedown')[0].firstChild.nodeValue
        job.jobkey = result.getElementsByTagName('jobkey')[0].firstChild.nodeValue
        job.sponsored = result.getElementsByTagName('sponsored')[0].firstChild.nodeValue
        job.expired = result.getElementsByTagName('expired')[0].firstChild.nodeValue
        job.formattedLocationFull = result.getElementsByTagName('formattedLocationFull')[0].firstChild.nodeValue
        job.formattedRelativeTime = result.getElementsByTagName('formattedRelativeTime')[0].firstChild.nodeValue
        
        # Append object to list
        jobs.append(job)
            
    return jobs

# Build query string
params = urlencode({
    'publisher': 4521745223245302, 
    'q': '.NET', 
    'l': 'Houston, TX', 
    'radius': '25',
    'sort': 'date', 
    'v': 2
})

# Build request object
req = Request('http://api.indeed.com/ads/apisearch?%s' % params)

# Parse XML response
jobs = getXML(req)

# Display results
for job in jobs:
    if job.expired is not False:
        print job.date.encode('utf-8')
        print job.jobtitle.encode('utf-8')
        print job.company.encode('utf-8')
        print job.url.encode('utf-8')
        print job.snippet.encode('utf-8')
        print ''

# Python has a strong set of introspection features.
# type()
# dir() pprint.pprint(dir(result))
# id()
# getattr()
# hasattr()
# globals()
# locals()
# callable()
# type() and dir() are particularly useful for inspecting the type of an object and its set of attributes, respectively.