# newDls
Simple package contain component to be used as a DLS for laravel projects.

## Install and Setup
- run `composer require alaa2/dls` to install tha package 
- Open `config/app.php` file, scroll down to `providers` array, add the following line of code in `Package Service Providers` section: <br/>
`\Alaa\Dls\Providers\ViewsProvider::class,`
```
 /*
         * Package Service Providers...
         */
        \Alaa\Dls\Providers\ViewsProvider::class,
```
- Publish views files
`php artisan vendor:publish --provider="Alaa\DLS\Providers\ViewsProvider" --tag="views"` <br/>
The view will be copied to `resources/views`
- Publish public files
`php artisan vendor:publish --provider="Alaa\DLS\Providers\ViewsProvider" --tag="public"` <br/>
This will update `public` folder.

## Using components
Check [example project](https://github.com/AlaaElden98/dls-example) to see how to use package's component.
Check the commit history and follow the steps to render your first component.
