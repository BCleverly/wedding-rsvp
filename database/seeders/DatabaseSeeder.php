<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Actions\Jetstream\AddTeamMember;
use App\Models\Team;
use Illuminate\Database\Seeder;
use Laravel\Jetstream\Jetstream;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

        $team = Team::factory()->create([
            'name' => 'Test team',
            'personal_team' => false
        ]);

         $user = \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
             'current_team_id' => $team->id
         ]);

         $team->update(['user_id' => $user->id]);

        $partner = \App\Models\User::factory()->create([
            'name' => 'Test partner',
            'email' => 'test-partner@example.com',
            'current_team_id' => $team->id
        ]);

        $team->users()->attach(
            $partner,
            ['role' => 'editor']
        );
    }
}
