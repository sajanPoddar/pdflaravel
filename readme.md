# Laravel FOR PDF dowloader
In first step we have to download laravel-dompdf plugin for generate pdf file from view blade file. So first run bellow command in your terminal:
### composer require barryvdh/laravel-dompdf
Now open config/app.php file and add service provider and aliase.


```
'providers' => [

	....

	Barryvdh\DomPDF\ServiceProvider::class,

],

'aliases' => [

	....

	'PDF' => Barryvdh\DomPDF\Facade::class,

],

```
