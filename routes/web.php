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

Route::get('docs',                 Documentation\GetStarted::class)->name('docs');
Route::get('docs/get-started',     Documentation\GetStarted::class)->name('docs.get-started');
Route::get('docs/heroicons',       Documentation\Heroicons::class)->name('docs.heroicons');
Route::get('docs/notifications',   Documentation\Notifications::class)->name('docs.notifications');
Route::get('docs/hooks',           Documentation\Hooks::class)->name('docs.hooks');
Route::get('docs/inputs',          Documentation\Inputs::class)->name('docs.inputs');
Route::get('docs/errors',          Documentation\Errors::class)->name('docs.errors');
Route::get('docs/maskable-inputs', Documentation\MaskableInput::class)->name('docs.maskable-inputs');
Route::get('docs/phone-input',     Documentation\PhoneInput::class)->name('docs.phone-input');
Route::get('docs/buttons',         Documentation\Buttons::class)->name('docs.buttons');
Route::get('docs/currency-input',  Documentation\CurrencyInput::class)->name('docs.currency-input');
Route::get('docs/dropdown',        Documentation\Dropdown::class)->name('docs.dropdown');
Route::get('docs/datetime-picker', Documentation\DatetimePicker::class)->name('docs.datetime-picker');
Route::get('docs/time-picker',     Documentation\TimePicker::class)->name('docs.time-picker');
Route::get('docs/cards',           Documentation\Cards::class)->name('docs.cards');
Route::get('docs/native-select',   Documentation\NativeSelect::class)->name('docs.native-select');
Route::get('docs/select',          Documentation\Select::class)->name('docs.select');
Route::get('docs/toggle',          Documentation\Toggle::class)->name('docs.toggle');
Route::get('docs/checkbox',        Documentation\Checkbox::class)->name('docs.checkbox');
Route::get('docs/radio',           Documentation\Radio::class)->name('docs.radio');
Route::get('docs/modal',           Documentation\Modal::class)->name('docs.modal');
Route::get('docs/dialogs',         Documentation\Dialogs::class)->name('docs.dialogs');
Route::get('docs/textarea',        Documentation\Textarea::class)->name('docs.textarea');
Route::get('docs/changelog',       Documentation\Changelog::class)->name('docs.changelog');
Route::get('docs/colors',          Documentation\Colors::class)->name('docs.colors');
Route::get('docs/customization',   Documentation\Customization::class)->name('docs.customization');
