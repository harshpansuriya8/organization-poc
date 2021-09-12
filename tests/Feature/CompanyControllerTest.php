<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Response;
use App\Models\Company;


class CompanyControllerTest extends TestCase
{

    public function test_store_company_details()
    {
        $payload = [
            'reg_no' => "001",
            'name' => "Demo Company",
            'address' => "USA"
        ];
        $response = Company::create($payload);
    }

    public function test_update_company_details()
    {
        $payload = [
            'reg_no' => "001",
            'name' => "Demo1 Company",
            'address' => "USA"
        ];

        $company = Company::find("001");

        $response = Company::where('id', $company->id)->update($payload);
    }

    public function test_destroy_company_details()
    {
        $company = Company::find("001");

        $response = Company::where('id', $company->id)->delete();
    }
}
