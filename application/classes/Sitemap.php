<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Sitemap helper
 *
 * @category   Helpers
 * @author     Kevin Brammer
 * @copyright  (c) 2013-2014 Kevin Brammer
 */
class Sitemap {

	/**
	* Return XML sitemap using sitemaps.org protocol 0.9
	* 
	* @param   array   $items      items to add to the feed
	* @param   string  $encoding   define which encoding to use
	* @return  string
	*/
	public static function create($items, $encoding = 'UTF-8')
	{
		/*
		http://www.sitemaps.org/protocol.html

		<?xml version="1.0" encoding="UTF-8"?>
		<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
		   <url>
		      <loc>http://www.example.com/</loc>
		      <lastmod>2005-01-01</lastmod>
		      <changefreq>monthly</changefreq>
		      <priority>0.8</priority>
		   </url>
		</urlset>
		*/

		// Define default xml document
		$sitemap = '<?xml version="1.0" encoding="'.$encoding.'"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>';
		$sitemap = simplexml_load_string($sitemap);

		foreach($items as $item)
		{
			// Add URL element
			// $url = $sitemap->urlset->addChild('url');
			$url = $sitemap->addChild('url');

			// Add URL child elements
			$url->addChild('loc',        Arr::get($item, 'loc',        URL::base()   ) ); // not sure why we'd need a default here but good enough for now
			$url->addChild('lastmod',    Arr::get($item, 'lastmod',    date('Y-m-d') ) ); // today's date probably isn't the best default to use
			$url->addChild('changefreq', Arr::get($item, 'changefreq', 'monthly'     ) );
			$url->addChild('priority',   Arr::get($item, 'priority',   '0.8'         ) );

		}

		if (function_exists('dom_import_simplexml'))
		{
			// Convert the feed object to a DOM object
			$sitemap = dom_import_simplexml($sitemap)->ownerDocument;

			// DOM generates more readable XML
			$sitemap->formatOutput = TRUE;

			// Export the document as XML
			$sitemap = $sitemap->saveXML();
		}
		else
		{
			// Export the document as XML
			$sitemap = $sitemap->asXML();
		}

		return $sitemap;
	}

}