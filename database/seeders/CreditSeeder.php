<?php

namespace Database\Seeders;

use App\Models\Credits;
use Illuminate\Database\Seeder;

class CreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $credit= new Credits();
        $credit->Client_Id=1;
        $credit->Admin_Id=1;
        $credit->Date=date('d-m-y');
        $credit->Description="Credit Applice to Invoice #57817";
        $credit->Amount=-49000.00;
        $credit->Rel_Id=1;
        $credit->save();
        
        $credit2= new Credits();
        $credit2->Client_Id=2;
        $credit2->Admin_Id=1;
        $credit2->Date=date('d-m-y');
        $credit2->Description="Mass Invoice Payment Credit for Invoice #57817";
        $credit2->Amount=49000.00;
        $credit2->Rel_Id=2;
        $credit2->save();

        $credit3= new Credits();
        $credit3->Client_Id=3;
        $credit3->Admin_Id=1;
        $credit3->Date=date('d-m-y');
        $credit3->Description="Credit Applice to Invoice #57859";
        $credit3->Amount=-56049;
        $credit3->Rel_Id=3;
        $credit3->save();

        $credit4= new Credits();
        $credit4->Client_Id=4;
        $credit4->Admin_Id=1;
        $credit4->Date=date('d-m-y');
        $credit4->Description="Mass Invoice Payment Credit for Invoice #57859";
        $credit4->Amount=56049;
        $credit4->Rel_Id=4;
        $credit4->save();

        $credit5= new Credits();
        $credit5->Client_Id=5;
        $credit5->Admin_Id=1;
        $credit5->Date=date('d-m-y');
        $credit5->Description="Credit Applice to Invoice #58254";
        $credit5->Amount=-5709.00;
        $credit5->Rel_Id=5;
        $credit5->save();

        $credit6= new Credits();
        $credit6->Client_Id=6;
        $credit6->Admin_Id=1;
        $credit6->Date=date('d-m-y');
        $credit6->Description="Mass Invoice Payment Credit for Invoice #58254";
        $credit6->Amount=5709.00;
        $credit6->Rel_Id=6;
        $credit6->save();

        $credit7= new Credits();
        $credit7->Client_Id=7;
        $credit7->Admin_Id=1;
        $credit7->Date=date('d-m-y');
        $credit7->Description="Credit Applice to Invoice #57870";
        $credit7->Amount=-149000.00;
        $credit7->Rel_Id=7;
        $credit7->save();

        $credit8= new Credits();
        $credit8->Client_Id=8;
        $credit8->Admin_Id=1;
        $credit8->Date=date('d-m-y');
        $credit8->Description="Mass Invoice Payment Credit for Invoice #57870";
        $credit8->Amount=149000.00;
        $credit8->Rel_Id=8;
        $credit8->save();

        $credit9= new Credits();
        $credit9->Client_Id=9;
        $credit9->Admin_Id=1;
        $credit9->Date=date('d-m-y');
        $credit9->Description="Credit Applice to Invoice #57870";
        $credit9->Amount=-52003.00;
        $credit9->Rel_Id=9;
        $credit9->save();

        $credit10= new Credits();
        $credit10->Client_Id=10;
        $credit10->Admin_Id=1;
        $credit10->Date=date('d-m-y');
        $credit10->Description="Mass Invoice Payment Credit for Invoice #57870";
        $credit10->Amount=52003.00;
        $credit10->Rel_Id=10;
        $credit10->save();

        $credit11= new Credits();
        $credit11->Client_Id=1;
        $credit11->Admin_Id=1;
        $credit11->Date=date('d-m-y');
        $credit11->Description="Credit Applice to Invoice #57840";
        $credit11->Amount=-29000.00;
        $credit11->Rel_Id=1;
        $credit11->save();

        $credit12= new Credits();
        $credit12->Client_Id=1;
        $credit12->Admin_Id=1;
        $credit12->Date=date('d-m-y');
        $credit12->Description="Mass Invoice Payment Credit for Invoice #57840";
        $credit12->Amount=69000.00;
        $credit12->Rel_Id=1;
        $credit12->save();

        $credit13= new Credits();
        $credit13->Client_Id=5;
        $credit13->Admin_Id=1;
        $credit13->Date=date('d-m-y');
        $credit13->Description="Credit Applice to Invoice #58254";
        $credit13->Amount=-15709.00;
        $credit13->Rel_Id=5;
        $credit13->save();

        $credit14= new Credits();
        $credit14->Client_Id=5;
        $credit14->Admin_Id=1;
        $credit14->Date=date('d-m-y');
        $credit14->Description="Mass Invoice Payment Credit for Invoice #57840";
        $credit14->Amount=570900.00;
        $credit14->Rel_Id=5;
        $credit14->save();

        $credit15= new Credits();
        $credit15->Client_Id=8;
        $credit15->Admin_Id=1;
        $credit15->Date=date('d-m-y');
        $credit15->Description="Credit Applice to Invoice #58254";
        $credit15->Amount=-249000.00;
        $credit15->Rel_Id=8;
        $credit15->save();

        $credit16= new Credits();
        $credit16->Client_Id=8;
        $credit16->Admin_Id=1;
        $credit16->Date=date('d-m-y');
        $credit16->Description="Mass Invoice Payment Credit for Invoice #57870";
        $credit16->Amount=349000.00;
        $credit16->Rel_Id=8;
        $credit16->save();

        $credit17= new Credits();
        $credit17->Client_Id=8;
        $credit17->Admin_Id=1;
        $credit17->Date=date('d-m-y');
        $credit17->Description="Credit Applice to Invoice #58254";
        $credit17->Amount=-149000.00;
        $credit17->Rel_Id=8;
        $credit17->save();

        for($i=18;$i<=60;$i++)
        {
            $credit= new Credits();
            $credit->Client_Id=$i;
            $credit->Admin_Id=1;
            $credit->Date=date('d-m-y');
            $credit->Description="Credit Applice to Invoice #580$i";
            $credit->Amount=-45040.0.$i;
            $credit->Rel_Id=8;
            $credit->save();
        }

        for($i=61;$i<=101;$i++)
        {
            $credit= new Credits();
            $credit->Client_Id=$i;
            $credit->Admin_Id=1;
            $credit->Date=date('d-m-y');
            $credit->Description="Mass Invoice Payment Credit for Invoice #579$i";
            $credit->Amount=25040.0.$i;
            $credit->Rel_Id=9;
            $credit->save();
        }
    }
}
