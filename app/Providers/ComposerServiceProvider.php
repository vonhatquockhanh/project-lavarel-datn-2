<?php

namespace App\Providers;

use App\Book;
use App\Category;

use App\Models\Sach;
use App\Models\LoaiSach;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * Load Categories in sidebar views
         */
        view()->composer('layouts.includes.side-bar', function ($view){

            // $categories = Category::with('books')->orderBy('name', 'asc')->get();
            // return $view->with('categories', $categories);

            $loaiSachs = LoaiSach::with('sachs')->orderBy('ten_loai_sach', 'asc')->get();

            return $view->with('loaiSachs', $loaiSachs);
        });

        /*
         * Load Recent books in  sidebar views
         */
        view()->composer('layouts.includes.side-bar', function ($view){
            $sachGanDay = Sach::latestFirst()->take(4)->get();
            return $view->with('sachGanDay', $sachGanDay);
        });


    }
}
