<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class Users extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            DB::table('users')->insert([
                [
                    'name' => 'test',
                    'email' => 'test@test.local',
                    'password' => bcrypt('test'),
                    'current_team_id' => 1
                ]
            ]);
        }
    }
