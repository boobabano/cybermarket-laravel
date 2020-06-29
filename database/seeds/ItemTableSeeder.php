<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    
    
    
    public function run()
    {
        $item = new \App\Item([
            'imagePath'=>'images/pacificRim2.jpg',
            'title'=>'Pacific Rim Uprising',
            'videoPath' => 'https://www.youtube.com/embed/8BAhwgjMvnM',
            'description' => 'Sci-fi Movie',
            'synopsis' => " Pentecost, son of Stacker Pentecost, reunites with Mako Mori to lead a new generation of Jaeger pilots, including rival Lambert and 15-year-old hacker Amara, against a new Kaiju threat.",
            'director' => "Steven S. DeKnight",
            'writers' => "Steven S. DeKnight, Emily Carmichael",
            'stars' => "John Boyega, Scott Eastwood, Cailee Spaeny",
            'year' => "2018",
            'price'=> 6.99
        ]);
        $item->save();

        $item = new \App\Item([
            'imagePath'=> 'images/blackPanther.jpg',
            'title'=>'Black Panther',
            'videoPath' => 'https://www.youtube.com/embed/xjDjIWPwcPU',
            'description' => 'Action Movie',
            'synopsis' => "T'Challa, the King of Wakanda, rises to the throne in the isolated, technologically advanced African nation, but his claim is challenged by a vengeful outsider who was a childhood victim of T'Challa's father's mistake.",
            'director' => "Ryan Coogler",
            'writers' => "Ryan Coogler, Joe Robert Cole",
            'stars' => "Chadwick Boseman, Michael B. Jordan, Lupita Nyong'o ",
            'year' => "2018",
            'price'=> 12.99
        ]);
        $item->save();

        $item = new \App\Item([
            'imagePath'=> 'images/DoctorStrange.jpg',
            'title'=>'Doctor Strange',
            'videoPath' => 'https://www.youtube.com/embed/HSzx-zryEgM"',
            'description' => 'Sci-fi Movie',
            'synopsis' => "While on a journey of physical and spiritual healing, a brilliant neurosurgeon is drawn into the world of the mystic arts.",
            'director' => "Scott Derrickson",
            'writers' => "Jon Spaihts, Scott Derrickson",
            'stars' => "Benedict Cumberbatch, Chiwetel Ejiofor, Rachel McAdams",
            'year' => "2016",
            'price'=> 15.99
        ]);
        $item->save();

        $item = new \App\Item([
            'imagePath'=> 'images/AvengersInfinityWar.jpg',
            'title'=>'Avengers Infinity War' ,
            'videoPath' => 'https://www.youtube.com/embed/6ZfuNTqbHE8',
            'description' => 'Action Movie',
            'synopsis' => "The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.",
            'director' => "Anthony Russo, Joe Russo",
            'writers' => "Christopher Markus (screenplay by), Stephen McFeely (screenplay by)",
            'stars' => "Karen Gillan, Elizabeth Olsen, Josh Brolin, Robert Downey Jr, Chris Hemsworth, Mark Ruffalo, Scarlett Johansson, Don Cheadle, Benedict Cumberbatch, Tom Holland, Chadwick Boseman",
            'year' => "2018",
            'price'=> 11.99
        ]);
        $item->save();

        $item = new \App\Item([
            'imagePath'=> 'images/Avatar.jpg',
            'title'=>'Avatar',
            'videoPath' => 'https://www.youtube.com/embed/5PSNL1qE6VY',
            'description' => 'Sci-fi Movie',
            'synopsis' => "A paraplegic marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.",
            'director' => "James Cameron",
            'writers' => "James Cameron",
            'stars' => "Sam Worthington, Zoe Saldana, Sigourney Weaver",
            'year' => "2009",
            'price'=> 8.99
        ]);
        $item->save();

        $item = new \App\Item([
            'imagePath'=> 'images/IronMan3.jpg',
            'title'=>'Iron Man 3',
            'videoPath' => 'https://www.youtube.com/embed/YLorLVa95Xo',
            'description' => 'Sci-fi Movie',
            'synopsis' => "When Tony Stark's world is torn apart by a formidable terrorist called the Mandarin, he starts an odyssey of rebuilding and retribution.",
            'director' => "Shane Black",
            'writers' => "Drew Pearce (screenplay by), Shane Black (screenplay by)",
            'stars' => "Sam Robert Downey Jr, Guy Pearce, Gwyneth Paltrow",
            'year' => "2013",
            'price'=> 11.99
        ]);
        $item->save();

        $item = new \App\Item([
            'imagePath'=> 'images/KingArthur.jpg',
            'title'=>'King Arthur',
            'videoPath' => 'https://www.youtube.com/embed/jIM4-HLtUM0',
            'description' => 'Drama',
            'synopsis' => "Robbed of his birthright, Arthur comes up the hard way in the back alleys of the city. But once he pulls the sword from the stone, he is forced to acknowledge his true legacy - whether he likes it or not.",
            'director' => "Guy Ritchie",
            'writers' => "Joby Harold (screenplay by), Guy Ritchie (screenplay by)",
            'stars' => "Charlie Hunnam, Astrid Bergès-Frisbey, Jude Law",
            'year' => "2017",
            'price'=> 17.99
        ]);
        $item->save();

        $item = new \App\Item([
            'imagePath'=> 'images/SouthPaw.jpg',
            'title'=>'Southpaw',
            'videoPath' => 'https://www.youtube.com/embed/11tsR0kI1ZQ',
            'description' => 'Drama',
            'synopsis' => "A champion boxer fights to get his daughter back from child protective services as well as revive his professional career, after a fatal incident sends him on a rampant path of destruction.",
            'director' => "Antoine Fuqua",
            'writers' => "Kurt Sutter",
            'stars' => "Jake Gyllenhaal, Rachel McAdams, Oona Laurence",
            'year' => "2015",
            'price'=> 12.99
        ]);
        $item->save();

        $item = new \App\Item([
            'imagePath'=> 'images/PacificRim.jpg',
            'title'=>'Pacific Rim',
            'videoPath' => 'https://www.youtube.com/embed/5guMumPFBag',
            'description' => 'Sci-fi Movie',
            'synopsis' => "As a war between humankind and monstrous sea creatures wages on, a former pilot and a trainee are paired up to drive a seemingly obsolete special weapon in a desperate effort to save the world from the apocalypse.",
            'director' => "Guillermo del Toro",
            'writers' => "Travis Beacham (screenplay), Guillermo del Toro (screenplay)",
            'stars' => "Idris Elba, Charlie Hunnam, Rinko Kikuchi",
            'year' => "2013",
            'price'=> 6.99
        ]);
        $item->save();

        $item = new \App\Item([
            'imagePath'=> 'images/Hitman.jpg',
            'title'=>'Hitman',
            'videoPath' => 'https://www.youtube.com/embed/XJhNzHyq-IE',
            'description' => 'Action',
            'synopsis' => "A gun-for-hire known only as Agent 47 hired by a group known only as 'The Organization' is ensnared in a political conspiracy, which finds him pursued by both Interpol and the Russian military as he treks across Russia and Eastern Europe.",
            'director' => "Xavier Gens",
            'writers' => "Skip Woods",
            'stars' => "Timothy Olyphant, Dougray Scott, Olga Kurylenko",
            'year' => "2007",
            'price'=> 14.99
        ]);
        $item->save();

        $item = new \App\Item([
            'imagePath'=> 'images/antManTheWasp.jpg',
            'title'=>'Ant-Man And The Wasp',
            'videoPath' => 'https://www.youtube.com/embed/UUkn-enk2RU',
            'description' => 'Action',
            'synopsis' => "As Scott Lang balances being both a Super Hero and a father, Hope van Dyne and Dr. Hank Pym present an urgent new mission that finds the Ant-Man fighting alongside The Wasp to uncover secrets from their past.",
            'director' => "Peyton Reed",
            'writers' => "Chris McKenna, Erik Sommers ",
            'stars' => "Paul Rudd, Evangeline Lilly, Michael Peña",
            'year' => "2018",
            'price'=> 18.99
        ]);
        $item->save();

        $item = new \App\Item([
            'imagePath'=> 'images/missionImpossibleFallout.jpg',
            'title'=>'Mission Impossible Fallout',
            'videoPath' => 'https://www.youtube.com/embed/IgqlE-tbFs8',
            'description' => 'Action',
            'synopsis' => "Ethan Hunt and his IMF team, along with some familiar allies, race against time after a mission gone wrong.",
            'director' => "Christopher McQuarrie",
            'writers' => " Christopher McQuarrie, Bruce Geller (television series)",
            'stars' => "Tom Cruise, Vanessa Kirby, Rebecca Ferguson ",
            'year' => "2018",
            'price'=> 18.99
        ]);
        $item->save();
    }
}
