<?php

use App\Models\Snippet;
use Illuminate\Database\Seeder;

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
                'slug'    => 'example',
                'snippet' => '```php
<?php

$hello = \'bouh\';
```',
            ],
        ]);
    }
}
