<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class bookingsTest extends TestCase
{

    /** @test */
    public function booking_can_be_created()
    {
        $table = $this->create('App\Table');
        $booking = $this->create('App\Booking', ['name' => 'sf', 'table_id' => $table->id]);
        $this->assertEquals('sf', $booking->name);
        $this->assertEquals($table->id, $booking->table_id);
    }


        /** @test */
        public function a_visitor_can_book_an_existing_table(){
            
            //a tables exists
            $table = $this->create('App\Table');
            //visitor fills the form and picks a table to book 

            $booking = $this->make('App\Booking', ['name' => 'sf', 'table_id' => $table->id]);

            $response = $this->post('/newBooking' , $booking->toArray())->assertStatus(202);

        
            //a booking gets created
            $this->assertDatabaseHas('bookings', ['table_id' => $table->id]);
        }
    
    }