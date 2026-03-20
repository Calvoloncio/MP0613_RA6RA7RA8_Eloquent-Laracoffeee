<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // for ($i = 1; $i <= 6; $i++) {
        //     Product::create([
        //         "product_name" => "Product $i",
        //         "orientation" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci porro debitis eius deserunt odio, repudiandae ad repellendus laboriosam nobis sed?",
        //         "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem temporibus, pariatur, tempore quia officiis at repudiandae dolore assumenda sunt fugiat alias illo nam minus autem dolor voluptate. Dignissimos eum natus ipsum optio neque numquam, voluptatem autem! Officiis, voluptas. Dolorum atque minima, aliquam facilis minus exercitationem aliquid doloremque vero, error qui consequatur quas tempore aspernatur asperiores cupiditate similique? Eius esse excepturi repellat deleniti, asperiores quas magni! Labore facere dicta expedita natus quisquam eaque, aspernatur minima quas nobis mollitia soluta sed id incidunt consequatur recusandae. Asperiores distinctio cum recusandae, odit earum quod vero similique assumenda? Autem perferendis ipsa accusamus id eaque. Sapiente!",
        //         "price" => rand(5000, 30000),
        //         "stock" => rand(10, 100),
        //         "discount" => 0.05,
        //         "image" => env("IMAGE_PRODUCT"),
        //     ]);
        // }
        // gaamRDJEO5xNbQMfgSXx91ZNIVYxid2S110yVkKg.jpg

        Product::create([
            "product_name" => "Toraja Coffee",
            "orientation" => "Premium Indonesian coffee from South Sulawesi, known for its rich and earthy flavor profile with a full body and low acidity.",
            "description" => "Toraja Coffee is sourced from the volcanic highlands of South Sulawesi, Indonesia. This specialty coffee is processed using the traditional wet-hulled method, resulting in a distinctive taste with earthy undertones, herbal notes, and a smooth, heavy body. The high altitude cultivation and unique processing technique create a coffee that stands out with its deep chocolate and spice notes. Perfect for those who prefer bold, complex flavors in their morning cup. Each bean is carefully selected to ensure the highest quality and consistent taste profile.",
            "price" => 5,
            "stock" => 120,
            "discount" => 5,
            "image" => "product/gaamRDJEO5xNbQMfgSXx91ZNIVYxid2S110yVkKg.jpg",
        ]);

        Product::create([
            "product_name" => "Arabica Coffee",
            "orientation" => "The world's most popular coffee variety, celebrated for its smooth, balanced taste with subtle fruity and floral notes.",
            "description" => "Arabica Coffee represents the finest coffee beans, accounting for over 60% of the world's coffee production. Grown at high altitudes in tropical regions, Arabica beans produce a smooth, complex flavor with lower caffeine content compared to other varieties. With delicate fruity undertones, subtle floral aromas, and a pleasant acidity, Arabica offers a sophisticated coffee experience. This versatile bean is perfect for filter coffee, espresso, and specialty brewing methods. Our premium Arabica selection is sourced from the best coffee estates worldwide, ensuring exceptional quality and a consistently excellent cup.",
            "price" => 4,
            "stock" => 60,
            "discount" => 0,
            "image" => "product/r8e0iS6hEBocNNBRkmTy5uL7BUf9IjNSQmZrgKJy.jpg",
        ]);

        Product::create([
            "product_name" => "Robusta Coffee",
            "orientation" => "Strong and bold coffee with higher caffeine content, delivering a powerful punch and intense flavor for coffee enthusiasts.",
            "description" => "Robusta Coffee is known for its strong, bold character and robust flavor profile with distinctive spicy and nutty notes. Containing nearly twice the caffeine of Arabica, Robusta is the preferred choice for those seeking an intense morning wake-up call. Grown in lower altitudes with excellent resistance to pests, Robusta beans develop a full body and create a thicker crema when used for espresso. With earthy undertones and a slightly bitter finish, this variety is commonly used in espresso blends and instant coffee production. Our premium Robusta selection offers authentic, powerful taste that coffee lovers crave.",
            "price" => 3,
            "stock" => 70,
            "discount" => 10,
            "image" => "product/Gy6UVqa000obrsMGJaRAzZ4hWEz5WGhu38QawLzC.jpg",
        ]);
    }
}
