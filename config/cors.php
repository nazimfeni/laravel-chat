<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Define the routes that should allow CORS
    'allowed_methods' => ['*'], // Allow all HTTP methods (GET, POST, PUT, etc.)
    'allowed_origins' => ['http://localhost:5173'], // Replace with your frontend's URL
    'allowed_origins_patterns' => [], // You can use patterns if needed
    'allowed_headers' => ['*'], // Allow all headers
    'exposed_headers' => [], // Headers you want to expose
    'max_age' => 0,
    'supports_credentials' => true, // Allow cookies and credentials

];
