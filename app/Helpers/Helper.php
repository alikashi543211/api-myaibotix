<?php

function sanitizeInputWithAllowedTags(array $input)
{
    // Define allowed HTML tags
    $allowedTags = '<p><b><u><i>';
    $editorsArray = editorsArray();
    $userInputs = $input;
    array_map(function ($value, $key) use ($allowedTags, $editorsArray, &$userInputs) {
        if (is_string($value) && !in_array($key, $editorsArray)) {
            // Strip unwanted HTML tags while allowing specific tags
            return strip_tags($userInputs[$key], $allowedTags);
        }
        return $userInputs[$key];
    }, $input, array_keys($input));

    return $userInputs;
}

function editorsArray()
{
    return [
        // 'full_description',
        // 'short_summary',
        // 'company_overview',
        // 'short_description',
        // 'long_description',
    ];
}
