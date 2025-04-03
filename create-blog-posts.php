<?php
// WordPress REST API endpoint
$wp_api_url = 'https://your-site.com/wp-json/wp/v2';

// Authentication credentials
$username = 'your-username';
$password = 'your-application-password';
$auth = base64_encode($username . ':' . $password);

// Blog posts to create
$posts = [
    [
        'title' => 'Grass Valley Property Management Fees 2025: Local Market Guide',
        'content' => file_get_contents('blog-posts/grass-valley-property-management-fees-2025.php'),
        'meta_description' => 'Detailed guide to property management fees in Grass Valley, Nevada County for 2025. Compare local rates, understand fee structures, and learn about competitive pricing in the Grass Valley market.',
        'keywords' => 'grass valley management fees, grass valley property management costs, grass valley property management pricing, nevada county property management fees, grass valley property management rates',
        'status' => 'publish',
        'date' => '2024-04-06'
    ],
    [
        'title' => 'Grass Valley Property Management Services 2025: Complete Guide',
        'content' => file_get_contents('blog-posts/grass-valley-property-management-services-2025.php'),
        'meta_description' => 'Comprehensive guide to professional property management services in Grass Valley, Nevada County for 2025. Learn about tenant screening, maintenance, marketing, and local property management expertise.',
        'keywords' => 'grass valley property management services, grass valley property management company, grass valley property management solutions, nevada county property management services, grass valley property management expertise',
        'status' => 'publish',
        'date' => '2024-04-06'
    ]
    // Add more posts as needed
];

// Function to create a post
function create_post($post_data) {
    global $wp_api_url, $auth;
    
    // Prepare post data
    $data = [
        'title' => $post_data['title'],
        'content' => $post_data['content'],
        'status' => $post_data['status'],
        'date' => $post_data['date'],
        'categories' => [1], // Replace with your blog category ID
        'meta' => [
            '_yoast_wpseo_metadesc' => $post_data['meta_description'],
            '_yoast_wpseo_focuskw' => $post_data['keywords']
        ]
    ];
    
    // Make API request
    $response = wp_remote_post($wp_api_url . '/posts', [
        'headers' => [
            'Authorization' => 'Basic ' . $auth,
            'Content-Type' => 'application/json'
        ],
        'body' => json_encode($data)
    ]);
    
    if (is_wp_error($response)) {
        echo "Error creating post: " . $response->get_error_message() . "\n";
        return false;
    }
    
    $body = json_decode(wp_remote_retrieve_body($response), true);
    echo "Successfully created post: " . $body['title']['rendered'] . "\n";
    return $body['id'];
}

// Create all posts
foreach ($posts as $post) {
    create_post($post);
} 