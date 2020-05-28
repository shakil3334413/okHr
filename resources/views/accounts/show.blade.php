@extends('layouts.master')

@section('content')
<div class="content-i">
    <div class="content-box">
      <div class="row">
          <div class="col-md-10">

            <table class="table table-hover">
             
              <tbody>
                <tr>
                  <th scope="row">Employee Name</th>
                  <td>{{ $account->employee->name}}</td>
                </tr>
                <tr>
                  <th scope="row">Employee Email</th>
                  <td>{{ $account->employee->email}}</td>
                </tr>
                <tr>
                  <th scope="row">Employee Phone</th>
                  <td>{{ $account->employee->phone}}</td>
                </tr>

                <tr>
                  <th scope="row">Salary Type</th>
                  <td>{{ $account->gross_salary ? "Gross Salary" : "Salary System"}}</td>
                </tr>
                <tr>
                  <th scope="row">Basic Salary</th>
                  <td>{{ $account->basic_salary}}</td>
                </tr>
                <tr>
                  <th scope="row">House Rent</th>
                  <td> {{ $account->basic_salary * ($account->house_rent / 100) }} ||{{ $account->gross_salary ? "0" : $account->house_rent }} %</td>
                </tr>
                <tr>
                  <th scope="row">Medical</th>
                  <td> {{ $account->basic_salary * ($account->medical / 100) }} || {{ $account->gross_salary ? "0" : $account->medical }} %</td>
                </tr>

                <tr>
                  <th scope="row">Festival Bonus</th>
                  <td>{{ $account->festival_bonus}}</td>
                </tr>

                <tr>
                  <th scope="row">Overtime Scope</th>
                  <td>{{ $account->overtime_scope ? "Yes" : "No" }}</td>
                </tr>
                <tr>
                  <th scope="row">Overtime rate</th>
                  <td>{{ $account->overtime_scope ? $account->basic_salary * 2 / 208 : "0" }}</td>
                </tr>
                <tr>
                  <th scope="row">Performance Bonus</th>
                  <td>{{ $account->performance_bonus }}</td>
                </tr>
                <tr>
                  <th scope="row">Incriment type</th>
                  <td>{{ $account->incriment_type }}</td>
                </tr>

                <tr>
                  <th scope="row">Total</th>
                  <td>{{ $total }}</td>
                </tr>
              </tbody>
            </table>

          </div>
      </div>
    </div>
  </div>
@endsection