@extends('layouts.landing')
@section('landing')
<div class="container mx-auto my-5 text-center">
    <!-- class description section -->
    <section class="flex-col md:flex-row items-center justify-between mb-10">
        <div>
            <div class="flex-col md:flex-row flex items-center justify-between">
                <img src="https://lwfiles.mycourse.app/6368e5089f20781a7e4f1805-public/2c162927114072f9ebbf04043a593fb9.png"
                    alt="Laravel Framework" class="mb-4 h-15">
                <h3 class="text-4xl p-1 text-center">Specializzazione Web Development </h3>

            </div>
            <div class="items-center flex gap-6 justify-end">
                <img class="h-10" src="{{ Vite::asset('./resources/img/PHP-logo.svg') }}" alt="PHP Logo">
                <img class="h-15" src="{{ Vite::asset('./resources/img/laravel-logo.svg') }}" alt="Laravel Logo">

            </div>
        </div>
        <hr>
        <div class="my-3">
            <h2 class="text-5xl">EX - {{env('APP_NAME')}}</h2>
            <h3 class="text-3xl">Nome repo: {{env('REPO_NAME')}}</h3>
        </div>
    </section>
    <!-- exercise description section -->

    <section class="flex-col items-center justify-center mb-10">
        <p>Oggi facciamo la nostra prima vera interazione con il database utilizzando Eloquent, l’ORM di Laravel!</p>
        <img src="{{ Vite::asset('./resources/img/screen.png')}}" alt="screenshot" class="w-250 mx-auto my-5">
        <h3 class="text-3xl py-3">SVOLGIMENTO</h3>
        <ol class="ex-list  text-left list-decimal list-inside max-w-lg mx-auto">
           
            <li >Create un nuovo progetto Laravel</li> 
            <li class="group-1">- Tramite phpMyAdmin o MySQL Workbench create un nuovo database laravel_model_controller 
            Importate nel vostro database la tabella movies in allegato
            inserite le vostre credenziali per il database nel file .env
                <span class="subtext-1"> questa versione di Laravel crea un database se non esiste, quindi a patto che le credenziali
                siano valide nel file .env, questo passaggio viene eseguito con il comando "php artisan migrate" oppure "php artisan
                migrate:fresh" per droppare e ri creare da zero il database</span>
            </li>
            <li>Create un model Movie.php col comando php artisan make:model Movie</li>
            <li>Create un controller che gestirà la rotta / col comando php artisan make:controller Guest/PageController</li>
            <li>All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che
            quindi li visualizzerà a schermo, tramite delle card.</li>
           
        </ol>
        <h4 class="text-3xl py-3">BONUS</h4>
        <p>
            Inventare una grafica a piacere per il sito e realizzarne il layout, aggiungendo lo stile con SASS.
        </p>
        <div>
        
            <a href="/home" class="mt-6 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Vai all'esercizio
            </a>
        </div>
    </section>

    @endsection