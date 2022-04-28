<?php

namespace Database\Seeders;

use App\Models\Survey;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Psy\Util\Json;

class AllData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mytime = Carbon::now();//$mytime->toDateTimeString()
        Db::table('users')->insert([
           'id'=>1,
           'name'=>'Beka',
            'email'=>'admin@mail.ru',
            'email_verified_at'=>null,
            'password'=>'$2y$10$oY7ESwOn5asKQktvUGilXunxCd9DFKndJ8Ppcf3ty2dsdt4ipsz4a',
            'remember_token'=>'aeCS4G5UOdFjBGgVd0Td4pqpkYZ5Y9LrnjHE8nnB0M4DzxMc4UC0HoX3OjPA',
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>null
        ]);

        Db::table('surveys')->insert([
            'id'=>1,
            'user_id'=>1,
            'image'=>'images/mcq.png',
            'title'=>'MCQ',
            'slug'=>'MCQ',
            'status'=>1,
            'description'=>null,
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>$mytime->toDateTimeString(),
            'expire_date'=>null
        ]);
        //01d56a0f-63f2-41e8-aaab-3b5214b3f506
        Db::table('survey_questions')->insert([
           'id'=>1,
            'type'=>'radio',
            'question'=>'Отметьте, пожалуйста, основную сферу деятельности в которой Вы осуществляете предпринимательскую деятельность?',
            'description'=>null,
            'data'=>json_encode(['options'=>[
                ['uuid'=>Str::uuid(),
                    'text'=>'Услуги'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Промышленность'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Торговля'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Сельское хозяйство'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Иное']
            ]], JSON_UNESCAPED_UNICODE),

            'survey_id'=>1,
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>$mytime->toDateTimeString()
        ]);

        Db::table('survey_questions')->insert([
            'id'=>2,
            'type'=>'radio',
            'question'=>'В течение какого периода времени Вы осуществляете предпринимательскую деятельность?',
            'description'=>null,
            'data'=>json_encode(['options'=>[
                ['uuid'=>Str::uuid(),
                    'text'=>'Более 5 лет'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Менее 1 года'],
                ['uuid'=>Str::uuid(),
                    'text'=>'От 1 года до 5 лет'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Затрудняюсь ответить']
            ]], JSON_UNESCAPED_UNICODE),

            'survey_id'=>1,
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>$mytime->toDateTimeString()
        ]);

        Db::table('survey_questions')->insert([
            'id'=>3,
            'type'=>'radio',
            'question'=>'В каких мерах поддержки со стороны государства, по Вашему мнению, наиболее нуждается бизнес?',
            'description'=>null,
            'data'=>json_encode(['options'=>[
                ['uuid'=>Str::uuid(),
                    'text'=>'Обучение персонала'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Имущественная поддержка (льготная аренда, выкуп в рассрочку, безвозмездноепользование и т.д.)'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Информационно-маркетинговая поддержка'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Финансовая поддержка (льготные кредиты, субсидии и т.д.)'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Правовая поддержка'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Иное']

            ]], JSON_UNESCAPED_UNICODE),

            'survey_id'=>1,
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>$mytime->toDateTimeString()
        ]);


        Db::table('survey_questions')->insert([
            'id'=>4,
            'type'=>'radio',
            'question'=>'. Обращались ли Вы ранее за получением имущественной поддержки, оказываемой органами государственной власти и местного самоуправления?',
            'description'=>null,
            'data'=>json_encode(['options'=>[
                ['uuid'=>Str::uuid(),
                    'text'=>'Нет'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Да']
            ]], JSON_UNESCAPED_UNICODE),

            'survey_id'=>1,
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>$mytime->toDateTimeString()
        ]);
        Db::table('survey_questions')->insert([
            'id'=>5,
            'type'=>'radio',
            'question'=>'Если Вы обращались за получением государственной имущественной поддержки, укажите какие проблемы возникли при этом? ',
            'description'=>null,
            'data'=>json_encode(['options'=>[
                ['uuid'=>Str::uuid(),
                    'text'=>'Большое количество требуемых документов необходимых для получения поддержки не ясность порядка, который необходимо соблюсти при получении поддержки'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Длительные сроки получения поддержки'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Отсутствие информации о порядке получения поддержки'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Не возникало проблем при получении поддержки'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Иное']

            ]], JSON_UNESCAPED_UNICODE),

            'survey_id'=>1,
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>$mytime->toDateTimeString()
        ]);
        Db::table('survey_questions')->insert([
            'id'=>6,
            'type'=>'radio',
            'question'=>'Доступна ли для Вас информация о предоставляемых мерах имущественной поддержки органами государственной власти и местного самоуправления? ',
            'description'=>null,
            'data'=>json_encode(['options'=>[
                ['uuid'=>Str::uuid(),
                    'text'=>'Нет'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Да'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Иное']
            ]], JSON_UNESCAPED_UNICODE),

            'survey_id'=>1,
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>$mytime->toDateTimeString()
        ]);
        Db::table('survey_questions')->insert([
            'id'=>7,
            'type'=>'radio',
            'question'=>'Что, по Вашему мнению, может способствовать информированности субъектов МСП о предоставляемой органами власти имущественной поддержке?',
            'description'=>null,
            'data'=>json_encode(['options'=>[
                ['uuid'=>Str::uuid(),
                    'text'=>'Размещение информации на сайтах государственных органов власти и местного самоуправления'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Через организации, образующие инфраструктуру поддержки субъектов малого и среднего предпринимательства'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Информационные брошюры, размещение информации в социальных сетях'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Проведение круглых столов с участием государственных органов власти, местного самоуправления и бизнеса по вопросам имущественной поддержки'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Размещение информации на информационных стендах органов власти, в МФЦ СМИ (в т. ч. периодические печатные издания, телевидение)']

            ]], JSON_UNESCAPED_UNICODE),

            'survey_id'=>1,
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>$mytime->toDateTimeString()
        ]);
        Db::table('survey_questions')->insert([
            'id'=>8,
            'type'=>'radio',
            'question'=>'.Остались ли Вы удовлетворены результатами обращения за получением имущественной поддержки?',
            'description'=>null,
            'data'=>json_encode(['options'=>[
                ['uuid'=>Str::uuid(),
                    'text'=>'Нет'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Да'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Иное']
            ]], JSON_UNESCAPED_UNICODE),

            'survey_id'=>1,
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>$mytime->toDateTimeString()
        ]);
        Db::table('survey_questions')->insert([
            'id'=>9,
            'type'=>'radio',
            'question'=>'На каком виде права у Вас находится имущество (движимое и недвижимое имущество, в т. ч. земельные участки), которое Вы используете для осуществление своей деятельности?',
            'description'=>null,
            'data'=>json_encode(['options'=>[
                ['uuid'=>Str::uuid(),
                    'text'=>'На праве собственности'],
                ['uuid'=>Str::uuid(),
                    'text'=>'На праве аренды'],
                ['uuid'=>Str::uuid(),
                    'text'=>'На ином виде права'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Не использую имущество'],
            ]], JSON_UNESCAPED_UNICODE),

            'survey_id'=>1,
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>$mytime->toDateTimeString()
        ]);
        Db::table('survey_questions')->insert([
            'id'=>10,
            'type'=>'radio',
            'question'=>'С какими сложностями Вы сталкиваетесь при использовании имущества для ведения бизнеса?',
            'description'=>null,
            'data'=>json_encode(['options'=>[
                ['uuid'=>Str::uuid(),
                    'text'=>'Высокий уровень затрат на текущее содержание имущества (коммунальные расходы, ремонт и иные платежи)'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Высокий размер налога на имущество'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Высокий размер арендной платы'],

            ]], JSON_UNESCAPED_UNICODE),

            'survey_id'=>1,
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>$mytime->toDateTimeString()
        ]);
        Db::table('survey_questions')->insert([
            'id'=>11,
            'type'=>'radio',
            'question'=>'Какое имущество Вы бы хотели получить для ведения или расширения бизнеса?',
            'description'=>null,
            'data'=>json_encode(['options'=>[
                ['uuid'=>Str::uuid(),
                    'text'=>'Движимое имущество (машины, оборудование и прочее)'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Производственные здания, помещения'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Земельные участки'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Коворкинги, лофты'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Иное']
            ]], JSON_UNESCAPED_UNICODE),

            'survey_id'=>1,
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>$mytime->toDateTimeString()
        ]);
        Db::table('survey_questions')->insert([
            'id'=>12,
            'type'=>'radio',
            'question'=>'Хотели бы Вы получить в аренду государственное или муниципальное имущество, требующее реконструкции (за счет арендатора), для дальнейшего его использования (после завершения реконструкции) на льготных основаниях (ставка 1 тенге)?',
            'description'=>null,
            'data'=>json_encode(['options'=>[
                ['uuid'=>Str::uuid(),
                    'text'=>'Нет'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Да'],
                ['uuid'=>Str::uuid(),
                    'text'=>'Иное']
            ]], JSON_UNESCAPED_UNICODE),

            'survey_id'=>1,
            'created_at'=>$mytime->toDateTimeString(),
            'updated_at'=>$mytime->toDateTimeString()
        ]);

        //{\"uuid\":\"\",\"text\":\"\"},
    }
}
