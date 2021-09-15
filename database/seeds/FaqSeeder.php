<?php

use App\Model\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
            'unique_code' => uniqid().date('').time(),
            'question' => 'What is pexeer ?',
            'answer' => 'Aenean condimentum nibh vel enim sodales scelerisque. Mauris quisn pellentesque odio, in vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum accumsan nisl vulputate.',
            'author' => 1
            ]
        );
        Faq::create([
            'unique_code' => uniqid().date('').time(),
            'question' => 'How it works ?',
            'answer' => 'Aenean condimentum nibh vel enim sodales scelerisque. Mauris quisn pellentesque odio, in vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum accumsan nisl vulputate.',
            'author' => 1
            ]
        );
        Faq::create([
            'unique_code' => uniqid().date('').time(),
            'question' => 'What is the workflow ?',
            'answer' => 'Aenean condimentum nibh vel enim sodales scelerisque. Mauris quisn pellentesque odio, in vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum accumsan nisl vulputate.',
            'author' => 1
            ]
        );
        Faq::create([
            'unique_code' => uniqid().date('').time(),
            'question' => 'How i place a order ?',
            'answer' => 'Aenean condimentum nibh vel enim sodales scelerisque. Mauris quisn pellentesque odio, in vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum accumsan nisl vulputate.',
            'author' => 1
            ]
        );
        Faq::create([
            'unique_code' => uniqid().date('').time(),
            'question' => 'How i make a withdrawal ?',
            'answer' => 'Aenean condimentum nibh vel enim sodales scelerisque. Mauris quisn pellentesque odio, in vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum accumsan nisl vulputate.',
            'author' => 1
            ]
        );
        Faq::create([
            'unique_code' => uniqid().date('').time(),
            'question' => 'What about the deposit process ?',
            'answer' => 'Aenean condimentum nibh vel enim sodales scelerisque. Mauris quisn pellentesque odio, in vulputate turpis. Integer condimentum eni lorem pellentesque euismod. Nam rutrum accumsan nisl vulputate.',
            'author' => 1
            ]
        );
    }
}
