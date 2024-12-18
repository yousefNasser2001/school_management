<?php

use Carbon\Translator;
use Illuminate\Console\Application;
use Illuminate\Http\JsonResponse;


if (!function_exists('translate')) {
    function translate($key): array|string|Translator|Application|null
    {
        return __($key);
    }
}
if (!function_exists('handleErrors')) {
    function handleErrors($validator): JsonResponse
    {
        return response()->json([
            'message' => $validator->errors()->first(),
            'errors' => $validator->errors()
        ], 422);
    }
}
