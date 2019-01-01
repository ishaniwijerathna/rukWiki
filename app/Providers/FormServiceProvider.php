<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('text', 'components.form.text',['name','value' => null, 'atributes' => []]);
        Form::component('textarea', 'components.form.textarea',['name','value' => null, 'atributes' => []]);
        Form::component('submit', 'components.form.submit',['value'=> 'submit' , 'atributes' => []]);
        Form::component('hidden', 'components.form.hidden',['name','value' => null, 'atributes' => []]);
        Form::component('file', 'components.form.file',['name', 'atributes' => []]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
