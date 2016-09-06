<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeworkTest extends TestCase
{
    use DatabaseTransactions;

    public function testHomeworkApiGetAll()
    {

    }

    public function testHomeworkApiShow()
    {
        
    }

    public function testHomeworkApiStore()
    {
        //course_section_id
//        teacher_id
//        semester_id
//        homework_type_id
//        $semester = \App\Semester::create([
//            'semester'=>'1',
//            'year'=>'2557',
//            'in_use'=>1
//        ]);
//        $teacher =
//        $homework = factory(App\Homework::class)->make();
//
//        $this->post('/api/faculties', [
//            'id'=> $faculty->id,
//            'name_th'=> $faculty->name_th,
//            'name_en'=>$faculty->name_en
//        ])->seeApiSuccess()
//            ->seeJsonObject('faculty')
//            ->seeJson([
//                'id'=>$faculty->id
//            ])
//            ->seeJson([
//                'name_th'=>$faculty->name_th
//            ])
//            ->seeJson([
//                'name_en'=>$faculty->name_en
//            ]);
//
//        $this->seeInDatabase('faculties', [
//            'id'=> $faculty->id,
//            'name_th'=> $faculty->name_th,
//            'name_en'=>$faculty->name_en
//        ]);
    }

    public function testHomeworkApiUpdate()
    {
//        $faculty = factory(App\Faculty::class)->make();
//
//        $this->post('/api/faculties', [
//            'id'=> $faculty->id,
//            'name_th'=> $faculty->name_th,
//            'name_en'=>$faculty->name_en
//        ])->seeApiSuccess()
//            ->seeJsonObject('faculty')
//            ->seeJson([
//                'id'=>$faculty->id
//            ])
//            ->seeJson([
//                'name_th'=>$faculty->name_th
//            ])
//            ->seeJson([
//                'name_en'=>$faculty->name_en
//            ]);
//
//        $this->seeInDatabase('faculties', [
//            'id'=> $faculty->id,
//            'name_th'=> $faculty->name_th,
//            'name_en'=>$faculty->name_en
//        ]);
//
//        $content = $this->response->getContent();
//        $json = json_decode($content);
//        if (json_last_error() === JSON_ERROR_NONE) {
//            $content = $json->data->faculty;
//        }
//
//        $newValue = [
//            'id'=>99,
//            'name_th'=>'Nong',
//            'name_en'=>'asdf'
//        ];
//
//        $this->put('/api/faculties/' . $content->id, $newValue)
//            ->seeApiSuccess()
//            ->seeJsonObject('faculty')
//            ->seeJson($newValue);
    }
}
