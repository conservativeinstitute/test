<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class Brands extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            DB::table('brands')->insert([
                [
                    'team_id' => 1,
                    'name' => 'CI',
                    'description' => 'Conservative Institute',
                ]
            ]);
        }
    }
