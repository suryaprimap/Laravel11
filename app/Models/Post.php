<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
    {
        public static function all()
        {
            return [
                [
                    'id' => 1,
                    'slug' => 'Kiryu-Chan',
                    'title' => 'Kiryu-Chan',
                    'author' => 'Majima Goro',
                    'body' => 'Kiryu has an extremely muscular build, seemingly the result of getting into constant street fights,
                    as well as various other activities found in his daily routine, rather than any concentrated effort to achieve his physique.
                    His upper body has more mass than his lower body, which can most likely be attributed to frequent use of his fists and heavy weapons.'
                ],

                [
                    'id' => 2,
                    'slug' => 'Saejima-aniki',
                    'title' => 'Saejima-aniki',
                    'author' => 'Majima Goro',
                    'body' => 'Saejima is tall and powerfully built. He has an immense size and his brute strength that actually surpasses even Kiryu.
                    He uses his size to his advantage in combat, often charging and overpowering his opponents with brute force.
                    On April 21, Saejima parked outside of the ramen shop, waiting for Majima. With the Ueno Seiwa Clan arriving before Majima did, Saejima took all six handguns,
                    entered the ramen shop, and gunned down every member of the Ueno Seiwa Clan inside. By 6:05 P.M, Saejima had turned himself in to the police,
                    though he remained silent throughout the entirety of the interrogation.'
                ]
            ];
        }

        public static function find($slug): array
        {
            $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

            if(! $post) {
                abort(404);
            }

            return $post;
        }

    }
