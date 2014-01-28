<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Fitz music listing helper
 *
 * @category   Helpers
 * @author     Kevin Brammer
 * @copyright  (c) 2013-2014 Kevin Brammer
 */
class Fitz {

	protected $_uri = 'http://fitzlivemusic.com/shows.php';

	protected $_html;

	public $events = array();

	public function __construct()
	{
		// suppress strict errors
		libxml_use_internal_errors(true);
		
		$request = Request::factory($this->_uri);
		$response = $request->execute();
		
		// $html = file_get_contents(__DIR__.'\test.html');
		$this->_html = $response->body();

		// get DOM
		$dom = $this->getDOM($this->_html);

		// get event nodes
		$nodes = $this->getNodes($dom, '//td[@class = "stubwire_eventbox_middle"]');

		foreach($nodes as $event_node) {

			// Get event HTML
			$event_html = $dom->saveHtml($event_node);

			// Get dates
			$weekday  = $this->getHTMLXpath($event_html,'//div[@class = "stubwire_eventbox_eventdate"]/span[@class="weekday"]');
			$day      = $this->getHTMLXpath($event_html,'//div[@class = "stubwire_eventbox_eventdate"]/span[@class="day"]');
			$month    = $this->getHTMLXpath($event_html,'//div[@class = "stubwire_eventbox_eventdate"]/span[@class="month"]');
			$showtime = $this->getHTMLXpath($event_html,'//div[@class = "stubwire_eventbox_eventdate"]/span[@class="showtime"]');

			// Only add to events if we have an event...
			if($weekday.$day.$month.$showtime != '') 
			{
				$date = $weekday.', '.$day.', '.$month.', '.$showtime;

				// Add to event array
				$this->events[] = array(
					'date' => $date,
					'link_node' => $this->getHTMLXpath($event_html,'//div[@class = "stubwire_eventbox_eventname"]/a'),
				);
			}
		}
	}
	
	protected function getDOM($html)
	{
		$dom = new DOMDocument;
		$dom->loadHTML($html);
		return $dom;
	}

	protected function getNodes($dom, $xpath){
		$xpath_query = new DOMXPath($dom);
		$nodeList = $xpath_query->query($xpath);
		return $nodeList;
	}

	protected function getHTMLXpath($html, $xpath){
		
		$dom = new DOMDocument;
		$dom->loadHTML($html);

		$xpath_query = new DOMXPath($dom);
		$nodeList = $xpath_query->query($xpath);

		$result = "";

		foreach ($nodeList as $node) 
		{
			$result .= $dom->saveHtml($node);
		}

		return $result;
	}
}

/*
$dom = new DOMDocument;
$dom->loadHTML($html);
foreach ($dom->getElementsByTagName('a') as $node) {
    echo $dom->saveHtml($node), PHP_EOL;
}
The above would find and output the "outerHTML" of all A elements in the $html string.

To get all the text values of the node, you do

echo $node->nodeValue; 
To check if the href attribute exists you can do

echo $node->hasAttribute( 'href' );
To get the href attribute you'd do

echo $node->getAttribute( 'href' );
To change the href attribute you'd do

$node->setAttribute('href', 'something else');
To remove the href attribute you'd do

$node->removeAttribute('href'); 
You can also query for the href attribute directly with XPath

$dom = new DOMDocument;
$dom->loadHTML($html);
$xpath = new DOMXPath($dom);
$nodes = $xpath->query('//a/@href');
foreach($nodes as $href) {
    echo $href->nodeValue;                       // echo current attribute value
    $href->nodeValue = 'new value';              // set new attribute value
    $href->parentNode->removeAttribute('href');  // remove attribute
}
 */

// foreach($nodes as $node) {
// 	foreach($node->childNodes as $event) {
// 		// element nodes are 1, text nodes are 3
// 		if($event->nodeType === 1) {
// 			if($event->tagName !== 'hr') {
// 				print_r($event);
// 			}
// 			// $event_html = $dom->saveHtml($event);
// 			//  // echo HTML::chars($event_html).PHP_EOL;
// 			//  // echo '---------------------------'.PHP_EOL;
// 			// $weekday = getHTMLXpath($event_html,'//div[@class = "stubwire_eventbox_eventdate"]/span[@class="weekday"]');
// 			// $day = getHTMLXpath($event_html,'//div[@class = "stubwire_eventbox_eventdate"]/span[@class="day"]');
// 			// $month = getHTMLXpath($event_html,'//div[@class = "stubwire_eventbox_eventdate"]/span[@class="month"]');
// 			// $showtime = getHTMLXpath($event_html,'//div[@class = "stubwire_eventbox_eventdate"]/span[@class="showtime"]');

// 			// $date = $weekday.', '.$day.', '.$month.', '.$showtime; 
// 			// echo 'node type: '.$event->nodeType.PHP_EOL;
			
			
// 		}
		
// 	}
// }


// $event_nodes = $xpath->query('//td[@class = "stubwire_eventbox_middle"]');
// $event_nodes = getHTMLXpath($html, '//td[@class = "stubwire_eventbox_middle"]');
// echo getHTMLXpath($html, '//div[@class = "stubwire_eventbox_eventdate"]/span[@class="weekday"]');
// foreach($event_nodes as $event_node) {

	// print_r($event_node);
	// $event_dom = new DOMDocument;
	// $event_dom->loadHTML($dom->saveHtml($event_node));

	// $event_xpath = new DOMXPath($event_dom);

	// $weekday = $event_xpath->query('//div[@class = "stubwire_eventbox_eventdate"]/span[@class="weekday"]');
	// $day = $event_xpath->query('//div[@class = "stubwire_eventbox_eventdate"]/span[@class="day"]');
	// $month = $event_xpath->query('//div[@class = "stubwire_eventbox_eventdate"]/span[@class="month"]');
	// $showtime = $event_xpath->query('//div[@class = "stubwire_eventbox_eventdate"]/span[@class="showtime"]');
	
	/*echo $weekday->firstChild.PHP_EOL;
	echo $day->firstChild.PHP_EOL;
	echo $month->firstChild.PHP_EOL;
	echo $showtime->firstChild.PHP_EOL;*/
	// foreach($date_nodes as $date_node) {
		// echo 'Date: '.PHP_EOL;
		// echo HTML::chars($event_dom->saveHtml($date_node)).PHP_EOL;
	// }

	// $link_nodes = $event_xpath->query('//div[@class = "stubwire_eventbox_eventname"]/a');
	// foreach($link_nodes as $link_node) {
	// 	echo 'Event: '.PHP_EOL;
	// 	echo HTML::chars($event_dom->saveHtml($link_node)).PHP_EOL;
	// }
// }

/*

DOMElement Object
(
    [tagName] => td
    [schemaTypeInfo] => 
    [nodeName] => td
    [nodeValue] => Sat11Jan8:00PMINFO 
    A Midnight In Chicago, Dear You, Waterparks,  In Memory Of	
	[nodeType] => 1
    [parentNode] => (object value omitted)
    [childNodes] => (object value omitted)
    [firstChild] => (object value omitted)
    [lastChild] => (object value omitted)
    [previousSibling] => 
    [nextSibling] => (object value omitted)
    [attributes] => (object value omitted)
    [ownerDocument] => (object value omitted)
    [namespaceURI] => 
    [prefix] => 
    [localName] => td
    [baseURI] => 
    [textContent] => Sat11Jan8:00PMINFO 
    A Midnight In Chicago, Dear You, Waterparks,  In Memory Of	
)

 */