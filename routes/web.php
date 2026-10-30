<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware(['throttle:10,1'])
    ->name('contact.store');

Route::get('/impressum', function () {
    return view('legal.impressum');
})->name('legal.impressum');

Route::get('/datenschutz', function () {
    return view('legal.datenschutz');
})->name('legal.datenschutz');

// Dynamic XML Sitemap for SEO
Route::get('/sitemap.xml', function () {
    $baseUrl = config('app.url', url('/'));
    $urls = [
        ['loc' => $baseUrl, 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => $baseUrl . '/product', 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['loc' => $baseUrl . '/about', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => $baseUrl . '/contact', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['loc' => $baseUrl . '/impressum', 'priority' => '0.3', 'changefreq' => 'yearly'],
        ['loc' => $baseUrl . '/datenschutz', 'priority' => '0.3', 'changefreq' => 'yearly'],
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ($urls as $url) {
        $xml .= "  <url>\n";
        $xml .= "    <loc>" . htmlspecialchars($url['loc']) . "</loc>\n";
        $xml .= "    <lastmod>" . date('Y-m-d') . "</lastmod>\n";
        $xml .= "    <changefreq>" . $url['changefreq'] . "</changefreq>\n";
        $xml .= "    <priority>" . $url['priority'] . "</priority>\n";
        $xml .= "  </url>\n";
    }
    $xml .= '</urlset>';

    return Response::make($xml, 200, ['Content-Type' => 'application/xml']);
})->name('sitemap');
