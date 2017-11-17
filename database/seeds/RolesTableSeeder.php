<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = Role::create([
            'name' => 'Professor',
            'slug' => 'professor',
            'permissions' => [
                'create-post' => true,
                'update-post' => true,
                'publish-post' => true,
                'delete-post' => true,
            ]
        ]);
        $editor = Role::create([
            'name' => 'Aluno',
            'slug' => 'Aluno',
            'permissions' => [
                
            ]
        ]);
    }
}
