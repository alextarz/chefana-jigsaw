---
permalink: robots.txt
---
User-agent: *
@if($page->robotsblock)
Disallow: /
@else
Allow: /

Sitemap: {{ $page->baseUrl }}/sitemap.xml
@endif