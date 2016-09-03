<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CourseTest extends TestCase
{
    use DatabaseTransactions;

    public function testStoresCourseSuccessfully()
    {
        $course = factory(App\Course::class)->make();

        $this->post('/api/courses', [
            'code'=> $course->code,
            'name'=> $course->name,
            'details'=>$course->details
        ])->seeApiSuccess()
        ->seeJsonObject('course')
        ->seeJson([
            'code'=>$course->code
        ])
        ->seeJson([
            'name'=>$course->name
        ])
        ->seeJson([
            'details'=>$course->details
        ]);

        $this->seeInDatabase('courses', [
            'code'=> $course->code,
            'name'=> $course->name,
            'details'=>$course->details
        ]);

        $content = $this->response->getContent();
        $json = json_decode($content);
        if (json_last_error() === JSON_ERROR_NONE) {
            $content = $json->data->course;
        }

        $newValue = [
            'code'=>'123123',
            'name'=>'Nong',
            'details'=>'asdfdf'
        ];

        $this->put('/api/courses/' . $content->id, $newValue)
            ->seeApiSuccess()
            ->seeJsonObject('course')
            ->seeJson($newValue);
    }

    public function testGetAndShowCourse()
    {
        $courseMock = factory(App\Course::class)->make();

        $course = \App\Course::create($courseMock->toArray());

        $this->get('/api/courses')
        ->seeApiSuccess()
            ->seeJsonArray('courses');

        $this->get('/api/courses/' . $course->id)
            ->seeApiSuccess()
            ->seeJsonObject('course')
            ->seeJson($courseMock->toArray());
    }
}
