<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductCategory extends Seeder
{
    protected function data(): array
    {

        $furniture = [
            "Living Room" => [
                "Sofa",
                "Recliner Chair",
                "Accent Chair",
                "Coffee Table",
                "Bookshelf",
                "TV Stand",
                "Nightstand",
                "Loveseat",
                "Sectional Sofa",
                "Bean Bag",
                "Console Table",
                "Ottoman",
                "Rocking Chair",
                "End Table",
                "Armchair",
                "Chaise Lounge",
                "Room Divider",
                "Storage Bench",
                "Ladder Shelf",
                "Lift Top Coffee Table",
                "Gaming Chair",
                "Lounge Chair"
            ],
            "Dining Room" => [
                "Dining Table",
                "Dining Set",
                "Dining Bench",
                "Bar Stool",
                "Sideboard",
                "Buffet Table",
                "Dining Buffet",
                "Dining Hutch",
                "Wine Rack",
                "High Chair"
            ],
            "Bedroom" => [
                "Bed Frame",
                "Wardrobe",
                "Chest of Drawers",
                "Dresser",
                "Nightstand",
                "Vanity Table",
                "Murphy Bed",
                "Bunk Bed",
                "Futon",
                "Toy Chest",
                "Changing Table",
                "Vanity Stool"
            ],
            "Office" => [
                "Office Chair",
                "Desk",
                "Standing Desk",
                "File Cabinet",
                "Swivel Chair",
                "Desk Chair",
                "Bookshelf",
                "Filing Cabinet"
            ],
            "Outdoor" => [
                "Patio Table",
                "Patio Chair",
                "Garden Bench",
                "Deck Chair",
                "Outdoor Sofa",
                "Outdoor Dining Set",
                "Outdoor Coffee Table",
                "Outdoor Lounge Chair",
                "Outdoor Swing",
                "Outdoor Bench",
                "Outdoor Bistro Set",
                "Outdoor Bar Table",
                "Outdoor Bar Stool",
                "Outdoor Loveseat",
                "Outdoor Ottoman"
            ],
            "Storage" => [
                "Shoe Rack",
                "Shoe Cabinet",
                "Cupboard",
                "Cabinet",
                "Entryway Table",
                "Hall Tree",
                "Curio Cabinet",
                "Corner Shelf",
                "Console Cabinet",
                "Wall Shelf",
                "Utility Cart",
                "Entry Bench",
                "Hall Bench"
            ],
            "Miscellaneous" => [
                "Bar Cart",
                "Plant Stand",
                "Hammock",
                "Massage Chair",
                "Mirror",
                "Room Screen",
                "Foldable Chair",
                "Kids Table"
            ]
        ];



        return $furniture;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category;
        $product = new Product;

        foreach($this->data() as $cat=>$prod)
        {
            $insert = \App\Models\Category::create([
                'name' => $cat,
                'image' => 'https://placehold.co/219x219?text='.urlencode($cat),
                'description' => 'Kategori ' . $cat,
            ]);
            echo "[CREATED] $cat ID ".$insert->id." \n";
           
            foreach($prod as $p)
            {

                $r = [true,false];
                $rx = $r[rand(0,1)];
                \App\Models\Product::create([
                    'category_id' => $insert->id,
                    'slug' => Str::slug($p),
                    'name' => $p,
                    'image' => 'https://placehold.co/600x400?text=No+image',
                    'content' => $p,
                    'price' => rand(0,40000000),
                    'views' => rand(0,100),
                    'best_seller' => $rx,
                    'active'=>true
                ]);
                echo "[PRODUCT] ".$p." CATEGORY " . $cat. " ( " .$insert->id." ) CREATED \n";
            }
        }
    }
}
