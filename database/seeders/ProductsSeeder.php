<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categoties=[
            "Телефоны и гаджеты",
            "Теле и аудио техника",
            "Ноутбуки и компьютеры",
            "Фото и видео техника",
            "Игры и развлечения",
            "Техника для дома",
            "Техника для кухни",
            "Встраиваемая техника",
            "Услуги по установке техники",
            "Посуда для кухни",
            "Красота и здоровье",
            "Строительство и ремонт",
            "Сад и огород",
            "Автотовары",
            "Спорт и увлечения",
            "Товары для детей",
            "Игрушки",
            "Дом, интерьер",
            "Текстиль",
            "Книги",
            "Товары для животных"
        ];
        $statuses=["В наличии","Под заказ","Заканчивается","Новинка","В пути","Ожидается","Нет в наличии","Снят с производства"];

        for($i=0;$i<50;$i++)
        {
            $product = new Products();
            $product->name="Product ".($i+1);

            $num=$i+1;
            $k=0;
            while($num>0){
                $num=intval($num/10);
                $k++;
            }
            $s="";
            for(;$k<6;$k++)
            $s=$s."0";
            $s=$s.$i;

            $product->article=$s;
            $product->category=$categoties[rand(0,count($categoties)-1)];
            $product->weight=rand(1, 100);
            $product->price=rand(1, 100)*100+90;
            $product->status=$statuses[rand(0,count($statuses)-1)];

            $product->save();
        }

    }
}
