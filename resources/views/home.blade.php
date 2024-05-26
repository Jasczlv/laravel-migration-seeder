@extends('layouts.app')
@section('content')
    <section>
        <div>
            <h1>Home Page</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi consequuntur sunt labore aliquam dolorum ab.
                Omnis magni fugiat, doloribus adipisci eos harum odit ullam explicabo eaque, eligendi possimus alias
                aperiam! In, esse! Veniam totam magnam officia aspernatur. Quidem, a fugiat.
            </p>
            @php
                use Carbon\Carbon;
            @endphp

            @foreach ($trains as $train)
                @if (Carbon::parse($train->data_partenza)->isSameDay(Carbon::parse('2024-05-26')))
                    <p>{{ $train->azienda }}</p>
                    <p>{{ $train->data_partenza }}</p>
                    <p>{{ $train->orario_di_partenza }}</p>
                    <p>{{ $train->orario_di_arrivo }}</p>
                    <p>{{ $train->codice_treno }}</p>
                @endif
            @endforeach
        </div>
    </section>
