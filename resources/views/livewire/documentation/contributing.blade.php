<div>
    <x-section.title title="Contribution Guide" />

    <p class="mt-5 mb-2 prose xl:max-w-3xl xl:mb-8 text-gray-500 dark:text-gray-400">
        You can contribute to the project by making a pull request on GitHub.
        <br /> This guide will help you get started with contributing to the project.
        <br /> I'm happy with your contribution.
    </p>

    <ul class="space-y-5 dark:text-gray-400">
        <li>
            <p>Create a new laravel project</p>
            <x-code
                language="shell"
                :line-numbers="false"
                contents="composer create-project laravel/laravel wireui"
            />
        </li>


        <li class="flex flex-col space-y-5">
            <a target="_blank" href="https://laravel-livewire.com/docs/2.x/installation">
                Install Livewire
            </a>

            <a target="_blank" href="https://tailwindcss.com/docs/guides/laravel">
                Install Tailwind CSS
            </a>
        </li>

        <li>
            <p>Clone the wireui into the root of the project</p>
            <x-code
                language="shell"
                :line-numbers="false"
                contents="git clone git@github.com:wireui/wireui.git"
            />
        </li>

        <li>
            <p>Add this code into the composer.json</p>
            <x-code language="json" :contents="$repository" />
        </li>

        <li>
            <p>Require WireUI</p>
            <x-code
                language="shell"
                :line-numbers="false"
                contents="composer require wireui/wireui"
            />
        </li>
    </ul>
</div>
