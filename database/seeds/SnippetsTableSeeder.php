<?php

use Illuminate\Database\Seeder;

use App\Models\Snippet;

class SnippetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Snippet::insert([
            [
                'slug' => 'example',
                'snippet' => 
                '```php
<?php

$hello = \'bouh\';
```'
            ]
        ]);
    }
}
