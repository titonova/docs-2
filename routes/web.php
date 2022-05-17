<?php

use App\Http\Livewire\{Documentation, Home};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Home::class)->name('home');

Route::name('docs.')->prefix('docs')->group(function () {
    Route::get('/', Documentation\GetStarted::class)->name('index');
    Route::get('get-started', Documentation\GetStarted::class)->name('get-started');
    Route::get('css-utilities', Documentation\CssUtilities::class)->name('css-utilities');
    Route::get('troubleshooting', Documentation\Troubleshooting::class)->name('troubleshooting');
    Route::get('heroicons', Documentation\Heroicons::class)->name('heroicons');
    Route::get('notifications', Documentation\Notifications::class)->name('notifications');
    Route::get('hooks', Documentation\Hooks::class)->name('hooks');
    Route::get('inputs', Documentation\Inputs::class)->name('inputs');
    Route::get('errors', Documentation\Errors::class)->name('errors');
    Route::get('maskable-inputs', Documentation\MaskableInput::class)->name('maskable-inputs');
    Route::get('phone-input', Documentation\PhoneInput::class)->name('phone-input');
    Route::get('buttons', Documentation\Buttons::class)->name('buttons');
    Route::get('currency-input', Documentation\CurrencyInput::class)->name('currency-input');
    Route::get('dropdown', Documentation\Dropdown::class)->name('dropdown');
    Route::get('datetime-picker', Documentation\DatetimePicker::class)->name('datetime-picker');
    Route::get('time-picker', Documentation\TimePicker::class)->name('time-picker');
    Route::get('cards', Documentation\Cards::class)->name('cards');
    Route::get('native-select', Documentation\NativeSelect::class)->name('native-select');
    Route::get('select', Documentation\Select::class)->name('select');
    Route::get('toggle', Documentation\Toggle::class)->name('toggle');
    Route::get('checkbox', Documentation\Checkbox::class)->name('checkbox');
    Route::get('radio', Documentation\Radio::class)->name('radio');
    Route::get('modal', Documentation\Modal::class)->name('modal');
    Route::get('dialogs', Documentation\Dialogs::class)->name('dialogs');
    Route::get('textarea', Documentation\Textarea::class)->name('textarea');
    Route::get('changelog', Documentation\Changelog::class)->name('changelog');
    Route::get('colors', Documentation\Colors::class)->name('colors');
    Route::get('customization', Documentation\Customization::class)->name('customization');
    Route::get('contributing', Documentation\Contributing::class)->name('contributing');
    Route::get('livewire-usage', Documentation\LivewireUsage::class)->name('livewire-usage');
});
