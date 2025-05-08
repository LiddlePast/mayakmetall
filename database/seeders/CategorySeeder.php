<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Колонны', 'description' => 'Для равномерного распределения нагрузок при возведении гражданских, административных зданий', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Пространственные фермы', 'description' => 'Надежные, долговечные применимы для складов, ангаров, спортивных комплексов, промышленных и торговых павильонов', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Сварные балки', 'description' => 'Изготовляются в соответствии с чертежами КМ из низкоуглеродистой стали, имеющих высокое сопротивление ударным нагрузкам (вязкость металла)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Несущие опоры', 'description' => 'Для сооружения наружных стен, укладки крыши, возведения высотных многоэтажек', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Изготовление мостовых конструкций', 'description' => 'За короткий промежуток времени, можно смонтировать прочную конструкцию любой сложности и конфигурации с помощью этих элементов', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Опоры ЛЭП, мачты совещения и связи', 'description' => 'Изготавливаются из прокатной стали, элементы соединяются друг с другом при помощи сварки', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
