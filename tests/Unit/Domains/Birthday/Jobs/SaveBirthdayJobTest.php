<?php

namespace Tests\Unit\Domains\Birthday\Jobs;

use Tests\TestCase;
use App\Models\User;
use App\Models\Birthday;
use App\Domains\Birthday\Jobs\SaveBirthdayJob;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SaveBirthdayJobTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_save_birthday_job()
    {
        $f = Fake::create();

        $name = $f->name;
        $date = $f->date;
        $description = $f->paragraph;

        $job = new SaveBirthdayJob($name, $date, $description);
        $link = $job->handle();

        $this->assertInstanceOf(Birthday::class, $link);
        $this->assertEquals($name, $birthday->name);
        $this->assertEquals($date, $birthday->date);
        $this->assertEquals($description, $birthday->description);
    }

    public function test_birthday_is_not_created_if_validation_fails()
    {
        $response = $this->actingAs(User::factory()->create())->post('/submit');

        $response->assertSessionHasErrors(['name', 'date', 'description']);
    }

    public function test_birthday_is_not_created_with_invalid_date()
    {
        $this->markTestIncomplete();
    }

    public function test_max_length_fails_when_too_long()
    {
        $this->markTestIncomplete();
    }

    public function test_max_length_succeeds_when_under_max()
    {
        $this->markTestIncomplete();
    }
}
