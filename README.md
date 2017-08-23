Imgix
===

Simple little plugin which adds imgix support to your site.

1. Set up an account with [imgix](https://imgix.net)
1. Add `c::set('imgix.url', 'yourdomain.imgix.net');` to your `config.php`

Usage
---

Wrap any image url's you'd like to load via imgix

```php
<img src="<?php imgix( $image->url() ); ?>" alt="Example Document"/>
```
