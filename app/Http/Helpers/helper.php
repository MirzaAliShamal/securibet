<?php

use App\Models\Setting;
use Illuminate\Support\Facades\DB;

function countries() {
    return DB::table('country')->orderBy('name', 'ASC')->get();
}

function setting($key) {
    $setting = Setting::pluck('value', 'name');
    return $setting[$key] ?? '';
}
