<?php
use Datahihi1\TinyEnv\Validator;

if (!function_exists('validate_env')) {
    /**
     * Validate the environment variables using the provided rules.
     *
     * @param array<string, array<string>|string> $rules The validation rules.
     * @throws Exception If validation fails.
     */
    function validate_env(array $rules): void
    {
        Validator::validate($rules);
    }
}
