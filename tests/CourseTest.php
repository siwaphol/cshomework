<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CourseTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStoresCourseSuccessfully()
    {
        $course = factory(App\Course::class)->make();

        $this->post('/api/courses', [
            'code'=> $course->code,
            'name'=> $course->name,
            'details'=>$course->details
        ])->seeApiSuccess()
        ->seeJsonObject('post')
        ->seeJsonKeyValueString('code', $course->code)
        ->seeJsonKeyValueString('name', $course->name)
        ->seeJsonKeyValueString('details', $course->details);

        $this->seeInDatabase('courses', [
            'code'=> $course->code,
            'name'=> $course->name,
            'details'=>$course->details
        ]);
    }
}
