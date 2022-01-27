# WireUI - Docs

Page for [WireUI](https://github.com/wireui/wireui) documentation. 

Visit at: [https://livewire-wireui.com/](https://livewire-wireui.com/)

<br/>

## Contribute

Thank you for your interest in contributing! 😊

Please follow the steps below to run this project locally:

### Get started 🚀 

#### Requirements

-   PHP 7.4+
-   [Composer](https://getcomposer.org)
-   [Yarn](https://yarnpkg.com)
-   A valid [Torchlight](https://torchlight.dev) token (free for non-profit open-source projects).


#### Setup

**STEP 1:**

Fork this repository, click on "Fork" in this page.

<br/>

**STEP 2:**

Clone your forked repository, run the command:

```bash
git clone https://github.com/YOUR-USERNAME/docs wireui-docs && cd wireui-docs
```

<br/>

**STEP 3:**

WireUI Doc uses Torchlight to provide code highlighting.

Before continuing, you must register at [https://torchlight.dev](https://torchlight.dev) and get your access token.

The token will be required in the next step, and it should look like similar to:

 ```bash
 torch_EFhVTgSra9HioAxtsK3ljnsj45BHmf
 ```

<br/>

**STEP 4:** In your project folder, execute the `run.sh` script:

```bash
./run.sh
```

This script automate the process of installing dependencies and set up the `.env` file.

<br>

---

### Doc syntax 📝

The WireUI Doc provides some components to facilitate the writing experience.

You are welcome to explore the code in `resources/views/livewire/` folder to view real usage examples.

<br/>

#### Code snippets

Code snippets should always be included using the `<x-code>` tag.

The mandatory attributes are `language`, for the code language and the `code`, for the code itself.

For example:

```php
//...
<x-code language="bash" :code="<<<EOT
php artisan vendor:publish --tag='wireui.config'
php artisan vendor:publish --tag='wireui.resources'
php artisan vendor:publish --tag='wireui.lang'
EOT" />
```

A copy button is loaded by default, to suppress the button, add the attribute: `copy="false"`.

Likewise, line numbers are displayed by default. To remove the numbers, add the attribute: `lineNumber="false`.

```php
<x-code copy="false" lineNumbers="false" language="shell" :code="Command exit with error error code xyz...." />
```

<br/>

#### Text mark

When giving instructions or using technical words, highlight important information with the `<x-mark>` tag.

For example, when using:

```php
Run <x-mark>npm install<x-mark> to install all to install all dependencies.
```

The outcome is similar to:

Run `npm install` to install all to install all dependencies.

<br/>

#### Boxes

Sometimes it's crucial to highlight information such as a mandatory step or a compatibility issue. In these situations, situations, you should use the `<x-box attention>` tag, which will produce a yellow "attention" box.

For example:

```php
<x-box attention>If you are using FooJS 1.0, you must configure bar=null before update.</x-box>
```

In addition, if you need to provide a friendly message, a tip, or extra information, you should use of the `<x-box info>` tag, which produces a blue info box.

```php
<x-box info>Read more about supported formats <a href="#formats">here</a>.</x-box>
```

<br/>

---

WireUI Doc runs on  [Laravel](https://laravel.com) & [Livewire](https://laravel-livewire.com).
