<?php

use App\Theatre;
use App\Interfaces\TS;

class TheatreSeeder extends TS
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theatre::create([
            'name' => 'Театр оперы и балета',
            'desc' => 'Башкирский государственный театр оперы и балета принял первых зрителей 14 декабря 1938 года. Газиз Альмухаметов и Файзи Гаскаров — яркие представители первого поколения деятелей искусства <b>Башкортостана</b> направили студентов для обучения в национальных студиях при Ленинградском хореографическом училище и Московской консерватории. В годы войны в Уфу был эвакуирован Киевский академический театр оперы и балета им. Т.Шевченко. Плодотворное творческое содружество молодых башкирских и опытных украинских артистов способствовало формированию исполнительской культуры и художественного вкуса, эстетической позиции молодого музыкального театра.',
            'address' => 'Уфа, ул. Ленина, 5/1, корпус 1',
            'tel_num' => '+7 (347) 273-84-72'
        ]);

        Theatre::create([
            'name' => 'Русский драматический театр',
            'desc' => 'История развития просветительской, художественной, театральной культуры Уфы и бывшей Уфимской губернии, безусловно, накрепко связана с именами выдающихся деятелей российской истории, живописи, литературы и театра, такими, как Сергей Тимофеевич Аксаков,  который посвятил  большую часть своей жизни российской театральной критике, а также  Михаил Васильевич Нестеров, великий русский художник, живший в Уфе долгие годы и любивший ее всем своим сердцем, устраивавший не такие частые, но запоминающиеся домашние спектакли-мистерии с расписными декорациями, сделанными своей собственной рукой для семейного круга в традиционные российские праздники.',
            'address' => 'Уфа, пр.Октября, д.79',
            'tel_num' => '+7 (347) 233-00-73'
        ]);

    }
}
