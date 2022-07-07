<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('vendors')->insert([
            [
            'username' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('12345'),
                "name" => "Burger Bener",
                "slug" => "burger-bener",
                "founder" => "Pak Budi",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus tempore praesentium voluptatibus cum quod cumque nostrum provident illo, possimus dicta! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae unde ullam modi quaerat eos dicta animi nihil possimus quidem itaque? Quas recusandae cupiditate tempore voluptate esse architecto ad impedit unde vitae totam! Dolorum rerum ab magnam nesciunt aperiam magni recusandae tenetur quia, nostrum nam necessitatibus illum omnis molestiae ipsa quod minima porro inventore mollitia temporibus fugit consectetur nihil. Facere quasi nulla deserunt dignissimos, alias maiores quidem, vero placeat ut nihil maxime suscipit hic rerum. Cum sapiente nesciunt quo necessitatibus ut soluta maxime enim dolor illo beatae, facilis omnis ipsa magni autem nihil, explicabo magnam et, commodi rerum aut. Et, explicabo!",
                "star" => 5
            ],
            [
                'username' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('12345'),
                "name" => "Pak Bas",
                "slug" => "pak-bas",
                "founder" => "Pak Baskara",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus tempore praesentium voluptatibus cum quod cumque nostrum provident illo, possimus dicta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ipsa quas itaque veritatis. Totam exercitationem laudantium porro ad a cumque commodi neque, vitae alias quos ipsum ex praesentium et excepturi earum sapiente, fugit architecto inventore debitis veniam dignissimos? Ad tenetur soluta earum. Delectus, magni! Id, modi tempore. Illum natus magni omnis doloribus, asperiores necessitatibus accusamus eos aperiam unde, quisquam consectetur atque iure distinctio ratione minus debitis! Illum sapiente incidunt non tempore itaque ut officiis tempora quo, voluptatum voluptas ullam aperiam eligendi quidem saepe a ipsa voluptate doloremque ratione id, odit reprehenderit facilis corrupti debitis. Consequuntur culpa placeat similique ipsum excepturi eligendi voluptates unde mollitia nihil ducimus nesciunt dicta, totam incidunt omnis fuga eaque eius quod. Praesentium suscipit quam asperiores ducimus vel, quas tenetur eaque dignissimos iure a? Vitae nulla alias qui asperiores earum. Doloribus eveniet fuga nesciunt amet magnam minus voluptates officia esse cum. Voluptatum, amet. Repellat, numquam fuga ut officiis aspernatur sapiente quasi id unde similique odio corporis. Qui cupiditate maxime eos! Quod nobis officia vel rerum? Mollitia, veritatis molestiae porro esse dolorum, rerum quam eos maiores reiciendis, hic necessitatibus? Dolor atque culpa, voluptates, obcaecati dolorem nostrum illum mollitia consequatur eaque ratione sit magni non officiis id cumque sapiente!",
                "star" => 3
            ],
            [
                'username' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('12345'),
                "name" => "Soto Seger",
                "slug" => "soto-seger",
                "founder" => "Bu Ruminem",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus tempore praesentium voluptatibus cum quod cumque nostrum provident illo, possimus dicta! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere blanditiis eos ducimus harum voluptatum impedit magnam veniam unde, sed laudantium minima, natus, odit neque explicabo corporis alias doloremque repellat itaque error est beatae commodi magni quae! Facere nostrum voluptates, facilis quis laudantium maiores excepturi voluptatum unde accusantium, culpa aliquid hic provident nisi cupiditate molestiae, quasi harum natus. Accusantium quod voluptatibus iusto asperiores sit velit exercitationem suscipit consequatur necessitatibus sapiente, deleniti mollitia officia sed officiis veniam nam vel ab quaerat nihil quia commodi! Veritatis assumenda obcaecati eum est temporibus nulla, saepe exercitationem beatae nesciunt repudiandae? Repudiandae, tenetur. Suscipit eaque ipsum atque numquam qui obcaecati itaque corporis porro iusto, nam non cupiditate accusamus necessitatibus minus unde officia facilis, libero earum ut inventore odio id placeat dicta. Minus dolores in ex odit aperiam hic nulla quaerat, totam exercitationem dignissimos, voluptatibus accusamus tempora cum beatae! Dolorum mollitia veritatis quae similique. Beatae deleniti veniam accusantium.",
                "star" => 4.5
            ],
            [
                'username' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('12345'),
                "name" => "Rawon Setan",
                "slug" => "rawon-setan",
                "founder" => "Pak Steven",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus tempore praesentium voluptatibus cum quod cumque nostrum provident illo, possimus dicta! 
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio ducimus cupiditate voluptatibus, incidunt, aliquid iure dolore doloremque doloribus ab fugit sapiente. Enim, esse architecto sunt distinctio perspiciatis aperiam aut et recusandae sapiente vero veritatis accusantium perferendis, ducimus delectus iusto quae! Voluptatem quis qui delectus dolorum, consectetur distinctio amet accusantium architecto autem! Ut ipsa, voluptate hic accusamus reprehenderit assumenda numquam dolorum pariatur suscipit quis quaerat rem dignissimos. Ab perspiciatis voluptatibus reiciendis repellat est ullam omnis deleniti nesciunt unde veritatis. Mollitia autem quis eligendi similique, quasi iste placeat commodi at vitae dolore quibusdam. Vel quo quisquam nulla iure impedit, enim quam perspiciatis natus, dignissimos nisi accusamus exercitationem, quibusdam saepe rem distinctio non ut alias cupiditate excepturi hic? Earum, beatae id debitis itaque perspiciatis totam excepturi quidem accusantium?",
                "star" => 4
            ] 
        ]);
    }
}
