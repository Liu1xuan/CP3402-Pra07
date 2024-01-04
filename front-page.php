<?php get_header();
    
    $quotes = [
        'The only way to do great work is to love what you do. - Steve Jobs',
        'Life is what happens when you’re busy making other plans. - John Lennon',
        'The purpose of our lives is to be happy. - Dalai Lama',
        'Get busy living or get busy dying. - Stephen King',
        'You only live once, but if you do it right, once is enough. - Mae West'
    ];

    // Selecting a random quote
    $selected_quote = $quotes[array_rand($quotes)];

    // Echoing the selected quote directly
    echo '<div class="inspirational-quote">';
    echo '<h1>Inspirational Quote of the Day</h1>';
    echo '<p>' . $selected_quote . '</p>';

    if (strlen($selected_quote) > 50) {
        echo '<p>This quote is quite insightful and lengthy!</p>';
    } else {
        echo '<p>This quote is short but sweet!</p>';
    }

    echo '<p>This is an example of using arrays and if/else statements to generate dynamic content in PHP.</p>';
    echo '</div>';

get_footer();?>

Test

    <div class="container">
        <div class="row">
            <div class="col">
                Left Side
            </div>

            <div class="col">
                Right Side
            </div>
        </div>
        
    </div>


