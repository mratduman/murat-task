@extends('layouts.master')

@section('content')

    @foreach ($calculation as $key => $devs)

      @foreach ($devs as $key => $value)
          <ul>
            <li>
                {{$key}}
                <br />
                <ul>
                  <li>
                      IT Task Saat Oranı: {{$value['it_task_hour']}}
                  </li>
                  <li>
                      IT Task Haftalık Oranı: {{$value['it_task_week']}}
                  </li>
                  <li>
                      Business Task Saat Oranı: {{$value['business_task_hour']}}
                  </li>
                  <li>
                      Business Task Haftalık Oranı: {{$value['business_task_week']}}
                  </li>
                </ul>
            </li>
          </ul>


      @endforeach

    @endforeach

@endsection
