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