<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

/**
 * SitemapController
 *
 * Generates a dynamic XML sitemap served at /sitemap.xml.
 * Automatically sets lastmod to today's date so search engines
 * always receive an up-to-date sitemap.
 *
 * Route: GET /sitemap.xml → SitemapController@index (web.php)
 */
class SitemapController extends Controller
{
    /**
     * The list of all publicly indexable pages.
     * Add new pages here as the site grows.
     *
     * Keys:
     *   url        — absolute URL of the page
     *   changefreq — how often the content typically changes
     *   priority   — relative importance (0.1 – 1.0)
     */
    protected array $pages = [
        [
            'url'        => '/',
            'changefreq' => 'weekly',
            'priority'   => '1.0',
        ],
        [
            'url'        => '/about',
            'changefreq' => 'monthly',
            'priority'   => '0.8',
        ],
        [
            'url'        => '/become-a-partner',
            'changefreq' => 'monthly',
            'priority'   => '0.9',
        ],
        [
            'url'        => '/become-a-sponser',
            'changefreq' => 'monthly',
            'priority'   => '0.8',
        ],
        [
            'url'        => '/connecters-list',
            'changefreq' => 'weekly',
            'priority'   => '0.8',
        ],
        [
            'url'        => '/events',
            'changefreq' => 'weekly',
            'priority'   => '0.9',
        ],
        [
            'url'        => '/contact',
            'changefreq' => 'yearly',
            'priority'   => '0.6',
        ],
    ];

    /**
     * Generate and return the XML sitemap.
     */
    public function index(): Response
    {
        $baseUrl = rtrim(config('app.url'), '/');
        $today   = now()->toDateString(); // e.g. 2026-06-19

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

        foreach ($this->pages as $page) {
            $loc = $baseUrl . $page['url'];
            $xml .= '    <url>' . PHP_EOL;
            $xml .= '        <loc>' . htmlspecialchars($loc) . '</loc>' . PHP_EOL;
            $xml .= '        <lastmod>' . $today . '</lastmod>' . PHP_EOL;
            $xml .= '        <changefreq>' . $page['changefreq'] . '</changefreq>' . PHP_EOL;
            $xml .= '        <priority>' . $page['priority'] . '</priority>' . PHP_EOL;
            $xml .= '    </url>' . PHP_EOL;
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=utf-8')
            ->header('Cache-Control', 'public, max-age=86400'); // cache 24 hrs
    }
}
