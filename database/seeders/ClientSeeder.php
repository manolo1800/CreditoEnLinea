<?php

namespace Database\Seeders;

use App\Models\Clients;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $client= new Clients();
        $client->Name = "Linus Torvalds";
        $client->Email= "LinusTorvalds@gmail.com";
        $client->Password="12345";
        $client->save();

        $client3= new Clients();
        $client3->Name = "Alan Turing";
        $client3->Email= "AlanTuring@gmail.com";
        $client3->Password="12345";
        $client3->save();

        $client4=new Clients();
        $client4->Name = "von Neumann";
        $client4->Email= "vonNeumann@gmail.com";
        $client4->Password="12345";
        $client4->save();

        $client5=new Clients();
        $client5->Name = "Grace Murray";
        $client5->Email= "GraceMurray@gmail.com";
        $client5->Password="12345";
        $client5->save();

        $client6=new Clients();
        $client6->Name = "Bill Gates";
        $client6->Email= "BillGates@gmail.com";
        $client6->Password="12345";
        $client6->save();

        $client7=new Clients();
        $client7->Name = "Steve Jobs";
        $client7->Email= "SteveJobs@gmail.com";
        $client7->Password="12345";
        $client7->save();

        $client8=new Clients();
        $client8->Name = "Larry Page";
        $client8->Email= "LarryPage@gmail.com";
        $client8->Password="12345";
        $client8->save();

        $client9=new Clients();
        $client9->Name = "Mark Zuckerberg";
        $client9->Email= "MarkZuckerberg@gmail.com";
        $client9->Password="12345";
        $client9->save();

        $client10=new Clients();
        $client10->Name = "Rasmus Lerdorf";
        $client10->Email= "RasmusLerdorf@gmail.com";
        $client10->Password="12345";
        $client10->save();

        for($i=11;$i<=101;$i++)
        {
            $client=new Clients();
            $client->Name = "Client$i";
            $client->Email= "Email$i@gmail.com";
            $client->Password="12345$i";
            $client->save();
        }
    }
}
