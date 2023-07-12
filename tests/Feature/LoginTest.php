<?php


namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
   
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/criar/usuario');
 
        $response->assertStatus(200);
    }
    public function test_returns_a_successful_save(): void
    {
        
        $to_save=[
            'name'=>'Test',
            'age'=>33,
            'email'=> '10000@gmail.com',
        ];
        $response = $this->post('/salvar/usuario',[
            'name'=>'Test',
            'age'=>'33',
            'email'=> '10000@gmail.com',
            'password'=>'password'
        ]);
       
    

        $saved=User::where('email', $to_save['email'])->first()
        ->toArray();
        
      
        

        foreach ($to_save as $key => $value) {
            $this->assertArrayHasKey($key, $saved);
            $this->assertSame($value, $saved[$key]);
        }
        $delete = User::where('email', $to_save['email'])->delete();
        
}

}